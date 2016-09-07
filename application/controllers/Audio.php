<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audio extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logued')) {
            redirect(base_url());
        }
        $this->load->helper(array('form', 'date'));
        $this->load->library('form_validation');
        $this->load->model('audio_model');
    }
    
    public function index() {
        $data['title'] = 'audio';
        $data['audios'] = $this->audio_model->get();
        $this->load->view('admin/audio/index', $data);
    }
    
    public function crear() {
        $data['title'] = 'Agregar audio';
        if($this->input->post('agregar')) {
            $this->set_rules();
            if($this->form_validation->run() != FALSE) {
                $this->audio_model->insert();
                redirect(site_url('audio'));
            }
        }
        $this->load->view('admin/audio/insert', $data);
    }
    
    public function editar($id) {
        if (is_numeric($id) && $id > 0) {
            $data['title'] = 'Editar audio';
            $data['audio'] = $this->audio_model->find($id);
            if ($this->input->post('editar')) {
                $this->set_rules();
                if($this->form_validation->run() != FALSE) {
                    $this->audio_model->update($id);
                    redirect(site_url('audio'));
                }
            }
            return $this->load->view('admin/audio/update', $data);
        }
        redirect(site_url('audio'));
    }
    
    public function eliminar($id) {
        if (is_numeric($id) && $id > 0) {
            $data['title'] = 'Eliminar audio';
            $data['audio'] = $this->audio_model->find($id);
            $this->audio_model->delete($id);
        }
        redirect(site_url('audio'));
    }
    
    public function set_rules() {
        $this->form_validation->set_rules('titulo', 'Título', 'required|max_length[45]');
        $this->form_validation->set_rules('ministerio', 'Ministerio', 'max_length[45]');
        $this->form_validation->set_rules('url_audio', 'URL del Audio', 'required');
    }
}