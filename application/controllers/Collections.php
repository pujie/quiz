<?php
Class Collections extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function index(){
        echo "ehlo";
    }
    function reads(){
        echo json_encode($this->crud->reads('collections',array('subject','creator'),array("1"=>"1")));
    }
    function add(){

    }
    function create(){
        $params = $this->input->post();
        echo json_encode($this->crud->create(
            'collections',array(
                'subject'=>$params['subject'],
                'creator'=>$params['creator']
            )
        ));
    }
} 