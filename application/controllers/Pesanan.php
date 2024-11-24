<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Pesanan extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $data['layanan'] = $this->db->get('layanan')->result();
        $this->load->view('landing-page/index', $data);
    }

    public function create(){
        $data = [
            'login_via' => $this->input->post('login_via'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'hero' => $this->input->post('hero'),
            'nick_name' => $this->input->post('nick_name'),
            'jumlah_star' => $this->input->post('jumlah_star'),
            'catatan' => $this->input->post('catatan'),
            'nama' => $this->input->post('nama'),
            'no_wa' => $this->input->post('no_wa'),
            'created_at' => date("Y-m-d H:i:s"),
        ];

        $inserted = $this->db->insert('pesanan', $data);
        // $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        if ($inserted) {
            $response = array('status' => 'success', 'message' => 'Data inserted successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to insert data.');
        }

        // Kirim respons kembali ke JavaScript
        echo json_encode($response);
        // redirect(site_url('home/'));
    }
}
