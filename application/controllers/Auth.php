<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("User_model"); coba
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya sukses
            $this->_login(); //private
        }

        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['title'] = 'Halaman Login';

        // //jika form login sudah di submit
        // if ($this->input->post()) {
        //     if ($this->User_model->doLogin()) redirect(site_url('admin'));
        // }

        // //tampilkan halaman login
        // $this->load->view('templates/auth_header', $data);
        // $this->load->view('auth/login');
        // $this->load->view('templates/auth_footer');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        # jika usernya ada
        if ($user) {
            # cek password
            if (password_verify($password, $user['password'])) {
                # kalo sama
                $data = [
                    // 'login' => true,
                    'email' => $user['email'],
                    'hak_akses' => $user['hak_akses']
                ];
                # simpan ke session
                $this->session->set_userdata($data);
                // $this->User_model->_updateLastLogin($data);
                # cek hak akses
                if ($user['hak_akses'] == 1) {

                    redirect('admin');
                } elseif ($user['hak_akses'] == 2) {
                    redirect('user');
                } else {
                    # arahkan ke view login
                    redirect('auth');
                }
            } else {
                # kalo gagal
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password salah</div>');
                redirect('auth');
            }
        } else {
            # jika tidak ada, gagalkan loginnya
            $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('auth');
        }

        // var_dump($user);
        // die;
    }

    public function logout()
    {
        // hancurkan semua sesi
        //$this->session->sess_destroy();
        // redirect(site_url('auth'));
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // hancurkan sesi
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('hak_akses');

        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Anda telah keluar!</div>');
        redirect('auth');
    }
}
