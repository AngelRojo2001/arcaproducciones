<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('publicacion_model');
	}

	public function index()
	{
		echo date('Y-m-d H:i:s');
		$data['publicaciones'] = $this->publicacion_model->get();
		$this->load->view('welcome_index', $data);
	}
}
