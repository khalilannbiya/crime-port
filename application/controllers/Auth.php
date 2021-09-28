<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");


class Auth extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            // validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password benar atau tidak
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    // cek role_id
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum di registrasi!</div>');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('kerja', 'Pekerjaan', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('negara', 'Kewarganegaraan', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('address', 'Alamat', 'required|trim', [
            'required' => 'Silahkan di isi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Silahkan di isi!',
            'is_unique' => 'Email ini sudah ter-registrasi!'
        ]);
        $this->form_validation->set_rules('noHp', 'Nomor Handphone', 'required|trim|numeric', [
            'required' => 'Silahkan di isi!',
            'numeric' => 'yang anda masukkan bukan angka!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric', [
            'required' => 'Silahkan di isi!',
            'numeric' => 'yang anda masukkan bukan angka!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Silahkan di isi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu sedikit!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Silahkan di isi!',
            'matches' => 'Password tidak sama !'
        ]);


        // jika form validation nya masih false maka akan kembali ke tampilan registration
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('auth/regis', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'ttl' => strtotime($this->input->post('ttl', true)),
                'agama' => $this->input->post('agama', true),
                'kerja' => $this->input->post('kerja', true),
                'negara' => $this->input->post('negara', true),
                'address' => $this->input->post('address', true),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'noHp' => $this->input->post('noHp', true),
                'nik' => $this->input->post('nik', true),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            // masukkan '$data' ke database di table 'user' 
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda sudah di registrasi. Silahkan Login!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        // memebersihkan session email
        $this->session->unset_userdata('email');
        // membersihkan session role_id
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah Logout!</div>');
        redirect('auth');
    }
}
