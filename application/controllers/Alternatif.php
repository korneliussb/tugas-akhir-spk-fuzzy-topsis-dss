<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
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
        $this->load->library('form_validation');
        $this->load->model("Alternatif_model");
        $this->load->model("User_model");
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // if (!$this->session->userdata['login']) {
        //     redirect('auth');
        // }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('admin/admin_dashboard', $data);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambahAlternatif()
    {
        $data['title'] = 'Tambah Alternatif';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('nambahAlternatif')) {

            $this->form_validation->set_rules('nama_alternatif', 'nama_alternatif', 'trim|required|is_unique[alternatif.nama_alternatif]', [
                'is_unique' => 'Nama alternatif tersebut sudah dipakai.'
            ]);

            if ($this->form_validation->run() == false) {
                $data["form"] = $this->Alternatif_model->getListForm();
                $data['flash'] = $this->session->flashdata('flash');
                $data['intervals'] = $this->Alternatif_model->getIntervals();
                $data['gen'] = $this->Alternatif_model->getKodeOto('id_alternatif', 'alternatif', '', 2);
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('admin/alternatif_tambah.php', $data);
                $this->load->view('templates/footer.php');
            } else {
                # code...
                foreach ($this->input->post() as $key => $value) {
                    if (strpos($key, "id_aspek_teknik-") !== false) {
                        $k = str_replace('id_aspek_teknik-', '', $key);
                        $this->Alternatif_model->tambahNilai($k);
                    }
                }
                $data = array(
                    'id_alternatif' => $this->input->post('id_alternatif'),
                    'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true))
                );

                $this->Alternatif_model->tambahAlternatif($data);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('alternatif');
            }


            // foreach ($this->input->post() as $key) {
            //     $this->Alternatif_model->tambahNilai($key);
            // }
            // $this->Alternatif_model->tambahAlternatif();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            // redirect('alternatif');
        } else {
            $data["form"] = $this->Alternatif_model->getListForm();
            $data['flash'] = $this->session->flashdata('flash');
            $data['intervals'] = $this->Alternatif_model->getIntervals();
            $data['gen'] = $this->Alternatif_model->getKodeOto('id_alternatif', 'alternatif', '', 2);
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('admin/alternatif_tambah.php', $data);
            $this->load->view('templates/footer.php');
        }

        // $this->load->view('templates/header.php', $data);
        // $this->load->view('templates/sidebar.php');
        // $this->load->view('templates/topbar.php');
        // $this->load->view('admin/alternatif_tambah.php');
        // $this->load->view('templates/footer.php');
    }

    public function ubahAlternatif($id_alternatif = null)
    {
        $data['title'] = 'Ubah Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id_alternatif);
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_alternatif', 'nama alternatif', 'trim|required|is_unique[alternatif.nama_alternatif]', [
            'is_unique' => 'Nama alternatif tersebut sudah dipakai.'
        ]);

        if ($this->form_validation->run() == false) {
            if ($id_alternatif == null) {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('templates/404.php');
                $this->load->view('templates/footer.php');
            } else {
                $this->load->view('templates/header.php', $data);
                $this->load->view('templates/sidebar.php');
                $this->load->view('templates/topbar.php');
                $this->load->view('admin/alternatif_ubah.php', $data);
                $this->load->view('templates/footer.php');
            }
        } else {

            $data = [
                'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true))
            ];
            //var_dump($data);
            $this->Alternatif_model->ubahDataAlternatif($data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('alternatif');
        }
    }

    public function hapusAlternatif($id_alternatif = null)
    {
        $data['title'] = '404';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        if ($id_alternatif == null) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('templates/404.php');
            $this->load->view('templates/footer.php');
        } else {
            $this->Alternatif_model->hapusDataAlternatif($id_alternatif);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('alternatif');
        }
    }
}
