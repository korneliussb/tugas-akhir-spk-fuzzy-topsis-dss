<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Alternatif_model");
		$this->load->model('Nilaibobotkriteria_model');
		$this->load->model('Nilai_model');
		// $this->load->model("User_model");
	}

	public function index()
	{
		$data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
		$data['cci'] = $this->Nilai_model->cci();
		$data['AllBobot'] = $this->Nilaibobotkriteria_model->getAllBobot();
		$this->load->view('welcome_message', $data);
	}
}
