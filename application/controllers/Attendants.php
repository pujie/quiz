<?php
Class Attendants extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function dosaveanswer(){
        $params = $this->input->post();
        echo json_encode($this->crud->upsert('user_answers',array('user_id'=>$params['user_id'],'question_id'=>$params['question_id'],'option_id'=>$params['option_id'])));
    }
    function handler(){
        $data['params'] = $this->input->post();
        $data['attendant_id'] = 'abc';
        $data['questions'] = $this->crud->reads('questions',array("id","subject","qweight","answer"),array("collection_id"=>1))['res'];
        $this->load->view('attendants/exam',$data);
    }
    function index(){
        $this->load->view('attendants/login');
    }
}