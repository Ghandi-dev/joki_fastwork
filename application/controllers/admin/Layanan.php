<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->db->select('layanan.*, kategori.nama_kategori as kategori');
        $this->db->from('layanan');
        $this->db->join('kategori', 'kategori.id = layanan.kategori_id');
        $this->db->order_by('kategori.nama_kategori', 'DESC');
        $data['layanan'] = $this->db->get()->result();
        $this->load->view('admin/layanan/index', $data);
    }

    public function tambah()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('admin/layanan/tambah', $data);
    }

    public function proses_tambah()
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/layanan/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', strip_tags($error));
            redirect('admin/layanan');
        } else {
            $upload_data['foto'] = $this->upload->data();
        }

        $hargaFromPost = $this->input->post("harga");
        $harga = (int)str_replace('.', '', $hargaFromPost);

        $data = [
            'kategori_id' => htmlspecialchars($this->input->post('kategori')),
            'nama_layanan' => htmlspecialchars($this->input->post('nama_layanan')),
            'harga' => $harga,
            'foto' => $upload_data['foto']['file_name'],
        ];

        $this->db->insert('layanan', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/layanan');
    }

    public function edit($id)
    {
        $data['layanan'] = $this->db->get_where('layanan', ['id' => $id])->row();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('admin/layanan/edit', $data);
    }

    public function proses_edit($id)
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/layanan/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $old_foto = $this->input->post('old_foto');

        if (empty($_FILES['foto']['name'])) {
            $foto = $old_foto;
        } else {
            $old_photo_path = 'assets/uploads/layanan/' . $old_foto;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('foto')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/layanan'); // Handle the error, you may want to redirect to the previous page or show an error message
            } else {
                $upload_data['foto'] = $this->upload->data();
                $foto = $upload_data['foto']['file_name'];
            }
        }

        $hargaFromPost = $this->input->post("harga");
        $harga = (int)str_replace('.', '', $hargaFromPost);

        $data = array(
            'kategori_id' => htmlspecialchars($this->input->post('kategori')),
            'nama_layanan' => htmlspecialchars($this->input->post('nama_layanan')),
            'harga' => $harga,
            'foto' => $foto,
        );

        // var_dump($data);
        // die();

        $this->db->update('layanan', $data, ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil diupdate!');
        redirect('admin/layanan');
    }

    public function hapus($id)
    {
        $foto = $this->db->get_where('layanan', ['id' => $id])->row_array()['foto'];

        // Hapus file foto dari folder uploads
        $path = 'assets/uploads/layanan/' . $foto;
        if (file_exists($path)) {
            unlink($path);
        }

        $this->db->delete('layanan', ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/layanan');
    }
}
