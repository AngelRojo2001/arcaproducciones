<?php

class Menu_model extends CI_Model {
    public function get() {
        $this->db->order_by('posicion', 'DESC');
        $query = $this->db->get('menu');
        return $query->result();
    }
}
