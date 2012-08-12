<?php

class Drinks_model extends CI_Model {

    public function __construct() {
        $this->load->library('ci_solarium');
        $config = array('adapteroptions'=>array('path'=>'/solr/articles/'));
        $this->client = new Solarium_Client($config);
    }

    public function get_drink_categories() {
        $query = $this->client->createSelect();
        $facetSet = $query->getFacetSet();
        $facetField = $facetSet->createFacetField('category')->setField('varugrupp_s');
        $facetField->setLimit(200);
        $result = $this->client->select($query);
        
        return $result->getFacetSet()->getFacet('category');
    }
    
    public function get_drinks() {
        

        $ping = $client->createPing();

        try {
            $client->ping($ping);
            return "ping ok";
        } catch (Solarium_Exception $e) {
            return 'Ping query failed';
        }
    }

}