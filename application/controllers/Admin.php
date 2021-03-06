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
        $this->load->model('Nilaibobotkriteria_model');
        $this->load->model('Nilai_model');
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        // ini belum bawah
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data['user']);

        // $this->load->view('admin/admin_dashboard', $data);

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['cci'] = $this->Nilai_model->cci();

        $data['jumlahAlternatif'] = $this->Alternatif_model->countAlternatif();
        $data['jumlahKriteria'] = $this->Nilaibobotkriteria_model->countKriteria();
        $data['jumlahAdmin'] = $this->User_model->countAdmin();
        $data['jumlahManajer'] = $this->User_model->countManajer();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
}
