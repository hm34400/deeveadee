<?php

class Dvd_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_Dvd() {
        $sql = "SELECT * FROM dvd";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function set_DVD() {
        $data = [
          'titre' => $this->input->post('titre'),  
          'auteur' => $this->input->post('auteur'),  
          'societe_edition' => $this->input->post('societe_edition'),  
          'annee_sortie' => $this->input->post('annee_sortie'),  
          'fk_categorie' => $this->input->post('fk_categorie'),  
          'nbr_exemplaire' => $this->input->post('nbr_exemplaire'),  
        ];
        
        return $this->db->insert('dvd',$data);
    }
}
