<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('publicacion_model');
	}

	public function index()
	{
		$data['publicaciones'] = $this->publicacion_model->get();
		$this->load->view('admin/publicacion/index', $data);
	}
	
	public function agregar()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('titulo', 'Título', 'required|max_length[45]');
			$this->form_validation->set_rules('subtitulo', 'Subtítulo', 'max_length[45]');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/publicacion/insert');
			}
			else {
				$config['upload_path']          = base_url('public/img');
				$config['allowed_types']        = 'gif|jpg|png';
				/*$config['max_size']             = 100;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;*/
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('imagen'))
				{
				        $error = array('error' => $this->upload->display_errors());
				        $this->load->view('admin/publicacion/insert', $error);
				}
				else
				{
				        $data = array('upload_data' => $this->upload->data());
				        //$this->load->view('upload_success', $data);
				        var_dump($data);
				}
				echo 'Ingresado exitosamente';
			}
		}
		else
		{
			$this->load->view('admin/publicacion/insert');
		}
	}

	public function editar($id)
	{
		$data['publicacion'] = $this->publicacion_model->find($id);
		$this->load->view('admin/publicacion/insert', $data);
	}

	public function prueba()
	{
		echo BASEPATH;
	}
}