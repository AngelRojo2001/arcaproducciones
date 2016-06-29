<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'date'));
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
				$config['upload_path']          = './public/img/';
				$config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('imagen'))
				{
				    $error = array('error' => $this->upload->display_errors());
				    $this->load->view('admin/publicacion/insert', $error);
				}
				else
				{
				    $data = $this->upload->data();
				    //var_dump($data['file_name']);
				    $this->publicacion_model->insert($data['file_name']);
				    redirect(site_url('publicacion'));
				}
			}
		}
		else
		{
			$this->load->view('admin/publicacion/insert');
		}
	}

	public function editar($id)
	{
		if (is_numeric($id) && $id > 0) {
			$data['publicacion'] = $this->publicacion_model->find($id);
			$this->load->view('admin/publicacion/update', $data);
		}
		else {
			redirect(site_url('publicacion'));
		}
	}

	public function eliminar($id)
	{
		if (is_numeric($id) && $id > 0) {
			$publicacion = $this->publicacion_model->find($id);
			unlink('./public/img/'.$publicacion->imagen);
			$this->publicacion_model->delete($id);
		}
		redirect(site_url('publicacion'));
	}

	public function eliminar_imagen($id)
	{
		if (is_numeric($id) && $id > 0) {
			$publicacion = $this->publicacion_model->find($id);
			unlink('./public/img/'.$publicacion->imagen);
			$this->publicacion_model->delete_image($id);
			redirect(site_url('publicacion/editar/'.$publicacion->id));
		}
		redirect(site_url('publicacion'));
	}

	public function prueba()
	{
		echo date('Y-m-d H:i:s');
		echo '<br>';
		$datestring = '%Y-%m-%d %H:%i %s';
		echo now('America/La_Paz');
		//echo mdate($datestring, $time);
	}
}