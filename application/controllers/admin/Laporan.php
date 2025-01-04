<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $this->load->view('admin/laporan/index', $data);
    }

    public function data()
    {
        $report_type = $this->input->post('report_type');
        $date_range = $this->input->post('date_range');

        // Mulai query dasar
        $this->db->select('pesanan.created_at, pesanan.nama, pesanan.no_wa, pesanan.jumlah_star,pesanan.id_layanan,layanan.harga');
        $this->db->from('pesanan'); // Ganti 'laporan' dengan nama tabel Anda
        $this->db->join('layanan', 'pesanan.id_layanan = layanan.id');

        // Filter jenis laporan
        if ($report_type) {
            switch ($report_type) {
                case '1': // Harian
                    $this->db->where('DATE(pesanan.created_at)', date('Y-m-d'));
                    break;
                case '2': // Mingguan
                    $this->db->where('YEARWEEK(pesanan.created_at, 1) =', date('oW'));
                    break;
                case '3': // Bulanan
                    $this->db->where('MONTH(pesanan.created_at)', date('m'));
                    $this->db->where('YEAR(pesanan.created_at)', date('Y'));
                    break;
                case '4': // Custom
                    if (!empty($date_range)) {
                        [$start_date, $end_date] = explode(' - ', $date_range);
                        $this->db->where('DATE(pesanan.created_at) >=', $start_date);
                        $this->db->where('DATE(pesanan.created_at) <=', $end_date);
                    }
                    break;
            }
        }

        // Pencarian global
        if ($this->input->post('search')['value']) {
            $this->db->group_start();
            $this->db->like('nama', $this->input->post('search')['value']);
            $this->db->or_like('no_wa', $this->input->post('search')['value']);
            $this->db->group_end();
        }

        // Hitung total data yang difilter
        $recordsFiltered = $this->db->count_all_results('', false);

        // Pengurutan
        if ($this->input->post('order')) {
            $order_column = $this->input->post('order')[0]['column'];
            $order_dir = $this->input->post('order')[0]['dir'];
            $this->db->order_by($order_column, $order_dir);
        }

        // Pagination
        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        }

        // Eksekusi query
        $query = $this->db->get();

        // Hitung total data
        $recordsTotal = $this->db->count_all('pesanan');

        $result = $query->result();

        $no = 0;
        foreach ($result as $key => $value) {
            $no++;
            $result[$key]->no = $no;
            $result[$key]->jumlah_harga = $value->harga * $value->jumlah_star;
        }

        // Format data untuk DataTables
        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "data" => $result,
        ];
        log_message('debug', 'Report Type: ' . $report_type);
        log_message('debug', 'Date Range: ' . $date_range);

        // Output JSON
        echo json_encode($output);
    }

    public function print()
    {
        $data['title'] = 'Print Laporan | ';
        $report_type = $this->input->get('report_type');
        $date_range = $this->input->get('date_range');

        $start_date = null;
        $end_date = null;

        $this->db->select('pesanan.created_at, pesanan.nama, pesanan.no_wa, pesanan.jumlah_star,pesanan.id_layanan,layanan.harga');
        $this->db->from('pesanan'); // Ganti 'laporan' dengan nama tabel Anda
        $this->db->join('layanan', 'pesanan.id_layanan = layanan.id');
        if ($report_type) {
            switch ($report_type) {
                case '1': // Harian
                    $this->db->where('DATE(pesanan.created_at)', date('Y-m-d'));
                    $data['title'] = 'Print Laporan | ' . date('Y-m-d');
                    break;
                case '2': // Mingguan
                    $this->db->where('YEARWEEK(pesanan.created_at, 1) =', date('oW'));
                    $data['title'] = 'Print Laporan | ' . date('oW');

                    break;
                case '3': // Bulanan
                    $this->db->where('MONTH(pesanan.created_at)', date('m'));
                    $this->db->where('YEAR(pesanan.created_at)', date('Y'));
                    $data['title'] = 'Print Laporan | ' . date('m');

                    break;
                case '4': // Custom
                    if (!empty($date_range)) {
                        [$start_date, $end_date] = explode(' - ', $date_range);
                        $this->db->where('DATE(pesanan.created_at) >=', $start_date);
                        $this->db->where('DATE(pesanan.created_at) <=', $end_date);
                        $data['title'] = 'Print Laporan | ' . $start_date . ' / ' . $end_date;

                    }
                    break;
            }
        }
        $this->db->order_by('pesanan.created_at', 'ASC');

        $query = $this->db->get();

        $data['pesanan'] = $query->result();

        foreach ($data['pesanan'] as $key => $value) {
            $data['pesanan'][$key]->jumlah_harga = $value->harga * $value->jumlah_star;
        }

        // var_dump($result);
        $this->load->view('admin/laporan/print', $data);
    }

}
