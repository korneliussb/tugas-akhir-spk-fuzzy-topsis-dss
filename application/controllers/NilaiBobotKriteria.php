<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiBobotKriteria extends CI_Controller
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
        // $this->load->model("User_model");
        $this->load->model("NilaiBobotKriteria_model");
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Nilai Bobot Kriteria';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/nilaibobotkriteria.php');
        $this->load->view('templates/footer.php');
    }

    public function ubahBobot($id_kriteria)
    {
        $data['title'] = 'Nilai Bobot Kriteria';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['bobot'] = $this->NilaiBobotKriteria_model->getBobotById($id_kriteria);

        // $this->load->view('templates/header.php', $data);
        // $this->load->view('templates/sidebar.php');
        // $this->load->view('templates/topbar.php');
        // $this->load->view('admin/nilaibobotkriteria_ubah.php'); // base nilaibobotkriteria/ubahBobot
        // $this->load->view('templates/footer.php');
        // ------------------------------------------------------------------------------

        // $this->form_validation->set_rules('nilai_bobot1', 'nilai bobot 1', 'trim|required|greater_than_equal_to[0]|less_than_equal_to[1]|callback_nilai_bobot1'); //decimal , numeric
        // $this->form_validation->set_rules('nilai_bobot2', 'nilai bobot 2', 'trim|required|greater_than_equal_to[0]|less_than_equal_to[1]|callback_nilai_bobot2');
        // $this->form_validation->set_rules('nilai_bobot3', 'nilai bobot 3', 'trim|required|greater_than_equal_to[0]|less_than_equal_to[1]|callback_nilai_bobot3');

        $this->form_validation->set_rules('nilai_bobot1', 'nilai bobot 1', 'numeric'); //decimal
        $this->form_validation->set_rules('nilai_bobot2', 'nilai bobot 2', 'numeric');
        $this->form_validation->set_rules('nilai_bobot3', 'nilai bobot 3', 'numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('admin/nilaibobotkriteria_ubah.php'); // base nilaibobotkriteria/ubahBobot
            $this->load->view('templates/footer.php');
        } else {
            // $id_kr = $this->input->post('id_kriteria');
            $nama_kriteria = $this->input->post('nama_kriteria', true);
            $data1 = [
                'id_kriteria' => $this->input->post('id_kriteria'),
                'nama_kriteria' => htmlspecialchars($nama_kriteria),
                'nilai_bobot1' => floatval($this->input->post('nilai_bobot1')),
                'nilai_bobot2' => floatval($this->input->post('nilai_bobot2')),
                'nilai_bobot3' => floatval($this->input->post('nilai_bobot3'))
            ];
            // $data1 = [
            //     'nilai_bobot1' => floatval($this->input->post('nilai_bobot1')),
            //     'nilai_bobot2' => floatval($this->input->post('nilai_bobot2')),
            //     'nilai_bobot3' => floatval($this->input->post('nilai_bobot3'))
            // ];
            // echo '<pre>';
            // var_dump($data1);
            // echo '</pre>';

            $this->NilaiBobotKriteria_model->ubahBobot($data1); //$data
            $this->session->set_flashdata('flash', 'diubah');
            redirect('nilaibobotkriteria');
        }


        // -------------------------------------------

        // $data1 = [
        //     'nilai_bobot1' => $this->input->post('nilai_bobot1'),
        //     'nilai_bobot2' => $this->input->post('nilai_bobot2'),
        //     'nilai_bobot3' => $this->input->post('nilai_bobot3')
        // ];

        // if ($this->NilaiBobotKriteria_model->ubahBobot($data1)) {
        //     $this->session->set_flashdata('flash', 'diubah');
        //     redirect('nilaibobotkriteria');
        // }; //$data

        // $this->load->view('templates/header.php', $data);
        // $this->load->view('templates/sidebar.php');
        // $this->load->view('templates/topbar.php');
        // $this->load->view('admin/nilaibobotkriteria_ubah.php');
        // $this->load->view('templates/footer.php');
    }


    // ------------------------------BELUM BISA UPDATE
    // public function simpanBobot()
    // {
    //     $id_kriteria = $this->input->post('id_kriteria');
    //     $nilai_bobot1 = $this->input->post('nilai_bobot1');
    //     $nilai_bobot2 = $this->input->post('nilai_bobot2');
    //     $nilai_bobot3 = $this->input->post('nilai_bobot3');

    //     $data1 = [
    //         'nilai_bobot1' => $nilai_bobot1,
    //         'nilai_bobot2' => $nilai_bobot2,
    //         'nilai_bobot3' => $nilai_bobot3
    //     ];

    //     $where = array(
    //         'id_kriteria' => $id_kriteria
    //     );

    //     $this->NilaiBobotKriteria_model->update_bobot($where, $data1, 'kriteria');
    //     redirect('nilaibobotkriteria');
    // }
}
