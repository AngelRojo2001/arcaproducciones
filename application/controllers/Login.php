<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('usuario_model');
    }
    
    public function index() {
        $data['title'] = 'Iniciando sesión';
        switch ($this->session->categoria) {
            case 1:
                redirect(site_url('menu'));
                break;
            case 2:
                redirect(site_url('publicacion'));
                break;
            default:
                $this->load->view('public/login', $data);
                break;
        }
    }
    
    public function user_verificate() {
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('email','E-mail','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[6]|max_length[50]');
            if ($this->form_validation->run() == FALSE) {
                $this->index();
            }
            else {
                $check_user = $this->usuario_model->verificar();
                if ($check_user) {
                    $data = array(
                        'logued' => TRUE,
                        'id' => $check_user->id,
                        'categoria' => $check_user->categoria,
                        'nombres' => $check_user->nombres,
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        }
        else {
            redirect('login');
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}