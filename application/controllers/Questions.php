<?php
Class Questions extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function index(){
        echo "ehlo";
    }
    function add(){

    }
    function create(){
        $params = $this->input->post();
        echo json_encode($this->crud->create(
            'questions',array(
                'subject'=>$params['subject'],
                'creator'=>$params['creator']
            )
        ));
    }
} 