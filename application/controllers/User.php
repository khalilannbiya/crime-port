<?php
defined('BASEPATH') or exit('no direct script access allowed');
date_default_timezone_set("Asia/Jakarta");


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('template/header', $data);
        $this->load->view('user/home');
        $this->load->view('template/footer');
    }
    public function laporan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('time', 'Waktu Kejadian', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Tempat Kejadian', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kasus', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('nopti', 'Nama Terlapor', 'trim');
        $this->form_validation->set_rules('nkor', 'Nama Korban', 'trim');
        $this->form_validation->set_rules('kronologi', 'Kronologi', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Lapor';
            $this->load->view('template/header', $data);
            $this->load->view('user/lapor', $data);
            $this->load->view('template/footer-blue.php');
            $this->session->set_flashdata('message', '<div class="alert pesan alert-danger" role="alert">Maaf Laporan Anda Belum Terkirim</div>');
        } else {
            $email = $this->session->userdata('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            $data = [
                'nama' => $user['nama'],
                'ttl' => $user['ttl'],
                'agama' => $user['agama'],
                'kerja' => $user['kerja'],
                'negara' => $user['negara'],
                'address' => $user['address'],
                'email' => $user['email'],
                'noHp' => $user['noHp'],
                'nik' => $user['nik'],
                'time' => strtotime($this->input->post('time', true)),
                'alamat' => $this->input->post('alamat', true),
                'jk' => $this->input->post('jk', true),
                'nopti' => $this->input->post('nopti', true),
                'nkor' => $this->input->post('nkor', true),
                'kronologi' => $this->input->post('kronologi', true),
                'date_created' => time()
            ];
            // masukkan ke database laporan
            $this->db->insert('laporan', $data);
            $this->session->set_flashdata('message', '<div class="alert pesan alert-success" role="alert">Selamat Laporan Anda Sudah Dikirim!</div>');
            redirect('user/laporan');
        }
    }
    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('template/footer-blue');
    }
}
