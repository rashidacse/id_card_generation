<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of idCard
 *
 * @author User
 */
class id_card  extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    function index(){
        $this->data['test'] = "";
         $this->template->load(MAIN_TEMPLATE, 'id_card/id_card', $this->data);
    }
}
