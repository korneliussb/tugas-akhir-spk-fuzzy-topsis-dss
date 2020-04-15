<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terbobot extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function __construct()
    {
        parent::__construct();
        // $this->load->model("product_model");
        // $this->load->library('form_validation');
        // $this->load->model("user_model");
        $this->load->model('User_model');
        $this->load->model('Alternatif_model');
        $this->load->model('Nilai_model');
        $this->load->model('NilaiBobotKriteria_model');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // if ($this->user_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Terbobot';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        // $data['nilai'] = $this->Nilai_model->getNilai();
        $data['nilaifuzzy'] = $this->Nilai_model->getNilaiFuzzy();
        $data['nilaifuzzy2'] = $this->Nilai_model->getNilaiFuzzy2();
        $data['nilaifuzzy3'] = $this->Nilai_model->getNilaiFuzzy3();
        $data['kriteria'] = $this->Nilai_model->getKriteria();
        $data['intervals'] = $this->Alternatif_model->getIntervals();

        $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/terbobot.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function Ternormalisasi()
    {
        $data['title'] = 'Ternormalisasi';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        // $data['nilai'] = $this->Nilai_model->getNilai();
        $data['nilaifuzzy'] = $this->Nilai_model->getNilaiFuzzy();
        $data['nilaifuzzy2'] = $this->Nilai_model->getNilaiFuzzy2();
        $data['nilaifuzzy3'] = $this->Nilai_model->getNilaiFuzzy3();
        $data['kriteria'] = $this->Nilai_model->getKriteria();
        $data['intervals'] = $this->Alternatif_model->getIntervals();

        $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/ternormalisasi.php', $data);
        $this->load->view('templates/footer.php');
    }
}
