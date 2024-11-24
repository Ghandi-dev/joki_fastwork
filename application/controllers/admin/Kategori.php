<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('admin/kategori/index', $data);
    }

    public function tambah()
    {
        $this->load->view('admin/kategori/tambah');
    }

    public function proses_tambah()
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'))
        ];

        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/kategori');
    }

    public function edit($id)
    {
        $data['kategori'] = $this->db->get_where('kategori', ['id' => $id])->row();
        $this->load->view('admin/kategori/edit', $data);
    }

    public function proses_edit($id)
    {
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'))
        ];

        $this->db->update('kategori', $data, ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil diubah!');
        redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/kategori');
    }
}
