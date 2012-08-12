<?php

class Test_drinks_model extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('drinks_model');
    }
    
    public function index() {
        $this->test_get_drink_categories();
        echo $this->unit->report();
    }
    
    private function test_get_drink_categories() {
        $categories = $this->drinks_model->get_drink_categories();
        
        $this->unit->run($categories,'is_object');
        $this->unit->run($categories->count(),107,'Category counts','Found '.$categories->count());
    }
}
