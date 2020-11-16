<?php

class Finder extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Finder_model');
	}



	public function index(){

		$data['judul'] = "Find Place";
		$this->load->view('templates/header', $data);
		$this->load->view('finder/index');
		$this->load->view('templates/footer');
		$this->Finder_model->Bobot();
	}

	public function hasil(){
		$data['bobot'] = $this->Finder_model->Bobot($bobot);
		$data['judul'] = "Hasil Perhitungan";
		$this->load->view('templates/header', $data);
		$this->load->view('finder/hasil', $data);
		$this->load->view('templates/footer');

	}
}