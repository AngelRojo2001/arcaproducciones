<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    /*public $email;
    public $password;
    public $nombres;
    public $apellidos;
    public $categoria;
    public $active;*/
    
    public function verificar() {
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));
        
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('usuario');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        }
        else {
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect('login');
        }
    }
}   