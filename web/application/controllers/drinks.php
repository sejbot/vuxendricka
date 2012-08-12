<?php

class Drinks extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('drinks_model');
    }
    
    public function index() {
        $data['ping'] = $this->drinks_model->get_drinks();
        $this->load->view('drinks/index',$data);
    }
}
