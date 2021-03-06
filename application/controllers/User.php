<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("User_model");
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // elseif (!$this->session->userdata['hak_akses'] != 1) {
        //     redirect('kriteria');
        // }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }


    public function index()
    {
        // if (!$this->session->userdata['hak_akses'] != 1) {
        //     redirect('kriteria');
        // }
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->User_model->getAllUser();
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('admin/user.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambahUser()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email tersebut sudah dipakai.', 'valid_email' => 'Masukkan email yang valid'
        ]);
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'trim|required|min_length[3]', [
            'min_length' => 'Nama Lengkap minimal 3 karakter.'
        ]);
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|is_unique[users.username]', [
            'min_length' => 'Username terlalu pendek! Minimal 3 karakter.',
            'is_unique' => 'Username tersebut sudah dipakai.'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
            'min_length' => 'Password terlalu pendek! Minimal 5 karakter.'
        ]);
        $this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
        // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
        //     'min_length' => 'Password terlalu pendek'
        // ]);
        // kurang Jenis kelamin dan hak akses
        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('hak_akses') != 1) {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('templates/404.php');
                $this->load->view('templates/footer.php');
            } else {
                # code...
                $data['title'] = 'Tambah Pengguna';
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('admin/user_tambah.php', $data);
                $this->load->view('templates/footer.php');
            }
        } else {
            if ($this->session->userdata('hak_akses') != 1) {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('templates/404.php');
                $this->load->view('templates/footer.php');
            } else {
                # code...
                $email = $this->input->post('email', true);
                $data = [
                    'email' => htmlspecialchars($email),
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'instansi' => htmlspecialchars($this->input->post('instansi', true)),
                    'hak_akses' => $this->input->post('hak_akses'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'last_login' => time()
                ];
                // var_dump($data);

                $this->User_model->tambahDataUser($data); //$data
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('user');
            }
        }
    }

    // public function simpanUser()
    // {
    //     $data['title'] = 'Tambah Pengguna';

    //     $this->load->view('templates/header.php', $data);
    //     $this->load->view('templates/sidebar.php');
    //     $this->load->view('templates/topbar.php');
    //     $this->load->view('admin/user.php', $data);
    //     $this->load->view('templates/footer.php');
    // }

    public function detailUser($user_id = null)
    {
        // if ($user_id == null) {
        //     show_404();
        //     return;
        // }
        // $user_id = $this->session->userdata['user_id'];
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Pengguna';
        $data['pengguna'] = $this->User_model->getUserById($user_id);

        if ($user_id == null || $this->session->userdata('hak_akses') != 1 && $this->session->userdata('user_id') != $user_id) {
            // dan user id nya tidak sama dengan user id user
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('templates/404.php');
            $this->load->view('templates/footer.php');
        } else {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('admin/user_detail.php', $data);
            $this->load->view('templates/footer.php');
        }
    }

    public function ubahUser($user_id = null)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Ubah Pengguna';
        $data['pengguna'] = $this->User_model->getUserById($user_id);
        $data['jenisKelamin'] = [1, 2];
        $data['hak'] = [1, 2];

        $this->form_validation->set_rules('email', 'email', 'required|valid_email', [
            'valid_email' => 'Masukkan email yang valid'
        ]);
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'trim|required|min_length[3]', [
            'min_length' => 'Nama Lengkap minimal 3 karakter.'
        ]);
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
            'min_length' => 'Password terlalu pendek! Minimal 5 karakter.'
        ]);
        $this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
        // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
        //     'min_length' => 'Password terlalu pendek'
        // ]);
        // kurang Jenis kelamin dan hak akses
        if ($this->form_validation->run() == false) {
            if ($user_id == null || $this->session->userdata('hak_akses') != 1) {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('templates/404.php');
                $this->load->view('templates/footer.php');
            } else {
                # code...
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('admin/user_ubah.php', $data);
                $this->load->view('templates/footer.php');
            }
        } else {
            if ($this->session->userdata('hak_akses') != 1) {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('templates/404.php');
                $this->load->view('templates/footer.php');
            } else {
                # code...
                $email = $this->input->post('email', true);
                $data = [
                    'email' => htmlspecialchars($email),
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'instansi' => htmlspecialchars($this->input->post('instansi', true)),
                    'hak_akses' => $this->input->post('hak_akses'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'last_login' => time()
                ];
                // echo '<pre>';
                // var_dump($data);
                // echo '</pre>';
                // echo "Berhasil";
                $this->User_model->ubahDataUser($data); //$data
                $this->session->set_flashdata('flash', 'diubah');
                redirect('user');
            }
        }
    }

    public function hapusUser($user_id = null)
    {
        $data['title'] = '404';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        if ($user_id == null || $this->session->userdata('hak_akses') != 1) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('templates/404.php');
            $this->load->view('templates/footer.php');
        } else {
            # code...
            $this->User_model->hapusDataUser($user_id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('user');
        }
    }
}
