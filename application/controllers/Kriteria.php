<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
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
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Data Nilai Kriteria';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // $data['bobot'] = $this->NilaiBobotKriteria_model->getBobotById(1);
        // $this->load->view('admin/admin_dashboard', $data);

        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['nilai'] = $this->Nilai_model->getNilai();
        $data['kriteria'] = $this->Nilai_model->getKriteria();
        $data['intervals'] = $this->Alternatif_model->getIntervals();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('kriteria/kriteria.php');
        $this->load->view('templates/footer.php');
    }

    public function ubahNilai($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Ubah Nilai';
        $data["form"] = $this->Nilai_model->getListForm($id);

        if ($this->input->post('updatenilai')) {
            foreach ($data["form"] as $item) {
                $this->Nilai_model->updateNilai($id, $item->id_kriteria, $this->input->post($item->id_kriteria));
            }
            $this->session->set_flashdata('flash', 'diubah');
            redirect('kriteria');
            // } elseif ($this->input->post('kembali')) {
            //     redirect('kriteria');
        } else {
            $data["selectAlt"] = $this->Nilai_model->getAlternatifById($id);
            // $data['view_name'] = "kriteria/updateNilai";
            $data['flash'] = $this->session->flashdata('flash');
            $data['intervals'] = $this->Alternatif_model->getIntervals();
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('kriteria/update_nilai', $data);
            $this->load->view('templates/footer.php');
        }
    }
}
