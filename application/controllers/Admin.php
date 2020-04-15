<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model('Alternatif_model');
        $this->load->model('Nilai_model');
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        // ini belum bawah
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data['user']);

        // $this->load->view('admin/admin_dashboard', $data);

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['cci'] = $this->Nilai_model->cci();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
}
