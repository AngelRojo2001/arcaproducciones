<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('publicacion_model');
	}

	public function index()
	{
		$data['title'] = 'Arca Producciones';
		$data['publicaciones'] = $this->publicacion_model->get();
		$this->load->view('public/index', $data);
	}
}
