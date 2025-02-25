<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['pesanan'] = $this->db->get('pesanan')->result();
        $data['title'] = 'Pesanan';
        $this->load->view('admin/pesanan/index', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('pesanan', ['id' => $id]);
        redirect('admin/pesanan');
    }

}
