<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('is_logued'))
		{
			redirect(base_url());
		}
		$this->load->helper('date');
		$this->load->model('video_model');
	}

	public function index()
	{
		$data['title'] = 'Video';
		$data['videos'] = $this->video_model->get();
		$this->load->view('admin/video/index', $data);
	}

	public function agregar()
	{
		$data['title'] = 'Agregar Video';
		if($this->input->post('agregar'))
		{
			$this->set_rules();
			if($this->form_validation->run() != FALSE)
			{
				$this->video_model->insert();
				redirect(site_url('video'));
			}
		}
		$this->load->view('admin/video/insert', $data);
	}

	public function editar() {
		echo sha1('reynaldo123456');
	}

	public function eliminar() {}

	public function set_rules()
	{
		$this->form_validation->set_rules('titulo', 'Título', 'required|max_length[45]');
		$this->form_validation->set_rules('autor', 'Autor', 'max_length[45]');
		$this->form_validation->set_rules('url_video', 'URL del Video', 'required|valid_url');
	}
}