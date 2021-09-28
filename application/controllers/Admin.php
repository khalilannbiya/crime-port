<?php
defined('BASEPATH') or exit('no direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = "Dashboard Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->db->get_where('user', ['role_id' => 2])->num_rows();
        $data['laporan'] = $this->db->get('laporan')->num_rows();
        $data['laporanBaru'] = $this->ModelLaporan->laporanBaru()->result_array();
        $data['userBaru'] = $this->ModelUser->userBaru()->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/main', $data);
        $this->load->view('admin/footer');
    }
    public function profile()
    {
        $data['title'] = 'Profile Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }
    public function laporan()
    {
        $data['title'] = "Data Laporan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataLaporan'] = $this->ModelLaporan->dataLaporan()->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('admin/footer');
    }
    public function hapusLaporan()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelLaporan->hapusLaporan($where);
        redirect('admin/laporan');
    }
    public function hapusUser()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelUser->hapusUser($where);
        redirect('admin/dataUser');
    }
    public function detailLaporan()
    {
        $id = $this->uri->segment(3);
        $laporan = $this->db->get_where('laporan', ['id' => $id])->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Detail Laporan";
        foreach ($laporan as $fields) {
            $data['nama'] = $fields->nama;
            $data['ttl'] = $fields->ttl;
            $data['agama'] = $fields->agama;
            $data['kerja'] = $fields->kerja;
            $data['negara'] = $fields->negara;
            $data['address'] = $fields->address;
            $data['email'] = $fields->email;
            $data['noHp'] = $fields->noHp;
            $data['nik'] = $fields->nik;
            $data['time'] = $fields->time;
            $data['alamat'] = $fields->alamat;
            $data['jk'] = $fields->jk;
            $data['nopti'] = $fields->nopti;
            $data['nkor'] = $fields->nkor;
            $data['kronologi'] = $fields->kronologi;
            $data['date_created'] = $fields->date_created;
            $data['id'] = $id;
        }
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/detail-laporan', $data);
        $this->load->view('admin/footer');
    }
    public function dataUser()
    {
        $data['title'] = "Data User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->db->get_where('user', ['role_id' => 2])->num_rows();
        $data['dataUser'] = $this->ModelUser->dataUser()->result_array();
        $data['userBaru'] = $this->ModelUser->userBaru()->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/data-user', $data);
        $this->load->view('admin/footer');
    }
    public function exportToPdf()
    {
        $id = $this->uri->segment(3);
        $laporan = $this->db->get_where('laporan', ['id' => $id])->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Detail Laporan";
        foreach ($laporan as $fields) {
            $data['nama'] = $fields->nama;
            $data['ttl'] = $fields->ttl;
            $data['agama'] = $fields->agama;
            $data['kerja'] = $fields->kerja;
            $data['negara'] = $fields->negara;
            $data['address'] = $fields->address;
            $data['email'] = $fields->email;
            $data['noHp'] = $fields->noHp;
            $data['nik'] = $fields->nik;
            $data['time'] = $fields->time;
            $data['alamat'] = $fields->alamat;
            $data['jk'] = $fields->jk;
            $data['nopti'] = $fields->nopti;
            $data['nkor'] = $fields->nkor;
            $data['kronologi'] = $fields->kronologi;
            $data['date_created'] = $fields->date_created;
            $data['id'] = $id;
        }
        $this->load->view('admin/bukti', $data);

        $this->load->library('pdf');

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'potrait'; //tipe format kertas potrait atau landscape
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->filename = "bukti-laporan.pdf";
        $this->pdf->load_view('admin/bukti', $data);
    }
}
