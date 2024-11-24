<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $data['layanan'] = $this->db->get('layanan')->result();
        $this->load->view('landing-page/index', $data);
    }

    public function formulir($id)
    {
        $data['kategori'] = $this->db->get('kategori')->result();

        // Query Join
        $this->db->select('layanan.*, kategori.nama_kategori as kategori');
        $this->db->from('layanan');
        $this->db->where('layanan.id', $id);
        $this->db->join('kategori', 'kategori.id = layanan.kategori_id');
        $data['layanan'] = $this->db->get()->row();
        $this->load->view('landing-page/formulir', $data);
    }
}
