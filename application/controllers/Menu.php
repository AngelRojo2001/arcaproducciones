<?php

class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logued')) {
            redirect(base_url());
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('menu_model');
    }
    
    public function index() {
        $data['title'] = 'Menú';
        $data['menus'] = $this->menu_model->get();
        $this->load->view('admin/menu/index', $data);
    }
    
    public function crear() {
        $data['title'] = 'Agregar Menú';
        if($this->input->post('crear')) {
            $this->set_rules();
            if($this->form_validation->run() != FALSE) {
                /*if ( ! $this->upload->do_upload('imagen')) {
                    $data['error'] = array('error' => $this->upload->display_errors());
                    return $this->load->view('admin/publicacion/insert', $data);
                }
                else {
                    $file = $this->upload->data();
                    $this->publicacion_model->insert($file['file_name']);
                    redirect(site_url('publicacion'));
                }*/
                return 'aceptado';
            }
        }
        $this->load->view('admin/menu/insert', $data);
    }
    
    public function set_rules() {
        $this->form_validation->set_rules('posicion', 'Posición', 'required|integer');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[100]');
        $this->form_validation->set_rules('ruta', 'Ruta', 'required|max_length[100]');
        $this->form_validation->set_rules('icono', 'Icono', 'required|max_length[100]');
    }
}
