<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $today = date('Y-m-d');
        $week = date('Y-m-d', strtotime('-7 days'));
        $month = date('Y-m-d', strtotime('-30 days'));

        // Query Join
        $this->db->select('COUNT(id) as jumlah');
        $this->db->from('pesanan');
        $this->db->where('DATE(created_at)', $today);
        $data['pesanan_today'] = $this->db->get()->row();

        // Query Join
        $this->db->select('COUNT(id) as jumlah');
        $this->db->from('pesanan');
        $this->db->where('DATE(created_at) >=', $week);
        $this->db->where('DATE(created_at) <=', $today);
        $data['pesanan_week'] = $this->db->get()->row();

        // Query Join
        $this->db->select('COUNT(id) as jumlah');
        $this->db->from('pesanan');
        $this->db->where('DATE(created_at) >=', $month);
        $this->db->where('DATE(created_at) <=', $today);
        $data['pesanan_month'] = $this->db->get()->row();

        $data['monthly_orders'] = $this->db->query("SELECT DATE(created_at) as day, COUNT(id) as total FROM pesanan GROUP BY day ORDER BY day")->result_array();


        // var_dump($data['pesanan_today']); die();

        $this->load->view('admin/dashboard/index', $data);
    }
}
