<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller
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

    public function ternormalisasi()
    {
        $data['title'] = 'Ternormalisasi';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['kriteria'] = $this->Nilai_model->getKriteria();
        $data['intervals'] = $this->Alternatif_model->getIntervals();

        // $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();
        $data['bobot1'] = $this->Nilai_model->getTernormalisasi1();
        $data['bobot2'] = $this->Nilai_model->getTernormalisasi2();
        $data['bobot3'] = $this->Nilai_model->getTernormalisasi3();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/ternormalisasi.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function fpisfnis()
    {
        $data['title'] = 'FPIS dan FNIS';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['kriteria'] = $this->Nilai_model->getKriteria();
        $data['intervals'] = $this->Alternatif_model->getIntervals();

        // $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();
        // $data['bobot1'] = $this->Nilai_model->getTernormalisasi1();
        // $data['bobot2'] = $this->Nilai_model->getTernormalisasi2();
        // $data['bobot3'] = $this->Nilai_model->getTernormalisasi3();

        $data['k1fpis'] = $this->Nilai_model->getFPISk1();
        $data['k2fpis'] = $this->Nilai_model->getFPISk2();
        $data['k3fpis'] = $this->Nilai_model->getFPISk3();
        $data['k4fpis'] = $this->Nilai_model->getFPISk4();
        $data['k5fpis'] = $this->Nilai_model->getFPISk5();
        $data['k6fpis'] = $this->Nilai_model->getFPISk6();
        $data['k7fpis'] = $this->Nilai_model->getFPISk7();

        $data['k1fnis'] = $this->Nilai_model->getFNISk1();
        $data['k2fnis'] = $this->Nilai_model->getFNISk2();
        $data['k3fnis'] = $this->Nilai_model->getFNISk3();
        $data['k4fnis'] = $this->Nilai_model->getFNISk4();
        $data['k5fnis'] = $this->Nilai_model->getFNISk5();
        $data['k6fnis'] = $this->Nilai_model->getFNISk6();
        $data['k7fnis'] = $this->Nilai_model->getFNISk7();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/fpisfnis.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function distance()
    {
        $data['title'] = 'Distance';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        // $data['dis1fpis'] = $this->Nilai_model->getDisFPISk1;
        $data['dplus'] = $this->Nilai_model->getDplus();
        $data['dneg'] = $this->Nilai_model->getDneg();
        $data['dAll'] = $this->Nilai_model->dAll();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/distance.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function cci()
    {
        $data['title'] = 'Koefisiensi Terdekat';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        // $data['dis1fpis'] = $this->Nilai_model->getDisFPISk1;
        // $data['dplus'] = $this->Nilai_model->getDplus();
        // $data['dneg'] = $this->Nilai_model->getDneg();
        // $data['dAll'] = $this->Nilai_model->dAll();

        $data['cci'] = $this->Nilai_model->cci();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/cci.php', $data);
        $this->load->view('templates/footer.php');
    }
}
