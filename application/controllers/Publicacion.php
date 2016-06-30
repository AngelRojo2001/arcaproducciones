<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		$config['upload_path'] = './public/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		$this->load->model('publicacion_model');
	}

	public function index()
	{
		$data['title'] = 'Publicación';
		$data['publicaciones'] = $this->publicacion_model->get();
		$this->load->view('admin/publicacion/index', $data);
	}

	public function agregar()
	{
		$data['title'] = 'Agregar Publicación';
		if($this->input->post())
		{
			$this->set_rules();
			if($this->form_validation->run() != FALSE)
			{
				if ( ! $this->upload->do_upload('imagen')) {
				    $data['error'] = array('error' => $this->upload->display_errors());
				    return $this->load->view('admin/publicacion/insert', $data);
				}
				else {
				    $file = $this->upload->data();
				    $this->publicacion_model->insert($file['file_name']);
				    redirect(site_url('publicacion'));
				}
			}
		}
		$this->load->view('admin/publicacion/insert', $data);
	}

	public function editar($id)
	{
		if (is_numeric($id) && $id > 0) {
			$data['title'] = 'Editar Publicación';
			$data['publicacion'] = $this->publicacion_model->find($id);
			if ($this->input->post()) {
				$this->set_rules();
				if($this->form_validation->run() != FALSE)
				{
					if ($data['publicacion']->imagen != NULL) {
						$this->publicacion_model->update($id);
					} else {
						if ( ! $this->upload->do_upload('imagen')) {
						    $data['error'] = array('error' => $this->upload->display_errors());
						    return $this->load->view('admin/publicacion/update', $data);
						}
						else {
						    $file = $this->upload->data();
						    $this->publicacion_model->update($id, $file['file_name']);
						}
					}
					redirect(site_url('publicacion'));
				}
			}
			return $this->load->view('admin/publicacion/update', $data);
		}
		redirect(site_url('publicacion'));
	}

	public function eliminar($id)
	{
		if (is_numeric($id) && $id > 0) {
			$data['title'] = 'Eliminar Publicación';
			$data['publicacion'] = $this->publicacion_model->find($id);
			if (!$this->input->post()) {
				return $this->load->view('admin/publicacion/delete', $data);
			}
			else {
				unlink('./public/img/'.$data['publicacion']->imagen);
				$this->publicacion_model->delete($id);
			}
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

	public function set_rules()
	{
		$this->form_validation->set_rules('titulo', 'Título', 'required|max_length[45]');
		$this->form_validation->set_rules('subtitulo', 'Subtítulo', 'max_length[45]');
	}
}