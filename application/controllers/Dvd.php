<?php

class Dvd extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dvd_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['title'] = 'DEEVEADEE';
        $this->load->view('templates/header', $data);
        $this->load->view('dvd/index', $data);
        $this->load->view('templates/footer');
    }

    public function getDvd() {
        $dvd = $this->Dvd_model->get_Dvd();
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($dvd));
    }

    public function add() {

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $data['title'] = 'Ajoute un nouveau film';

        $this->form_validation->set_rules('titre', 'Titre', 'required');
        $this->form_validation->set_rules('auteur', 'Réalisteur', 'required');
        $this->form_validation->set_rules('societe_edition', 'Société de Distribution', 'required');
        $this->form_validation->set_rules('annee_sortie', 'Année de Sortie', 'required');
        $this->form_validation->set_rules('fk_categorie', 'Genre', 'required');
        $this->form_validation->set_rules('nbr_exemplaire', "Nombre d'exemplaire", 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dvd/add');
            $this->load->view('templates/footer');
        } else {
            $this->Dvd_model->set_Dvd();
            $this->load->view('dvd/success');
        }
    }
    public function test(){
        $this->load->helper('url');
        $this->output->set_output("hello");
    }

}
