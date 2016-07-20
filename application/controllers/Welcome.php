<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('publicacion_model');
		$data['title'] = 'Arca Producciones';
		$data['publicaciones'] = $this->publicacion_model->get();
		$this->load->view('public/index', $data);
	}

	public function videos()
	{
		$this->load->model('video_model');
		$data['title'] = 'Videos';
		$data['videos'] = $this->video_model->get();
		$this->load->view('public/videos', $data);
	}
}
