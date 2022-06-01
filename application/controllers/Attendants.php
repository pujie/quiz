<?php
Class Attendants extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
        $this->load->helper('answer');
        $this->load->model('answer');
    }
    function dosaveanswer(){
        $params = $this->input->post();
        echo json_encode($this->crud->upsert('user_answers',array('user_id'=>$params['user_id'],'question_id'=>$params['question_id'],'option_id'=>$params['option_id'])));
    }
    function answerserver($objs){
        $questions = array();
        foreach($objs['res'] as $question){
            array_push($questions,$question);
        }
    }
    function printanswer(){
        echo json_encode($this->crud->reads('options',array("id","question_id","optionid","subject"),array("1"=>"1"))['res']);
    }
    function handler(){
        $data['params'] = $this->input->post();
        $data['attendant_id'] = 'abc';
        $data['title'] = 'Soal Pretest Bimtek Juleha';
        $data['questions'] = $this->crud->reads('questions',array("id","subject","qweight","answer"),array("collection_id"=>1))['res'];
        $data['answers'] = $this->answerserver($this->crud->reads('options',array("id","question_id","optionid","subject"),array("1"=>"1")));
        $this->load->view('attendants/examv2',$data);
    }
    function index(){
        $data['title'] = "Login";
        $this->load->view('attendants/login',$data);
    }
    function viewskor(){
        $data['title'] = 'Skor';
        $data['attendant_id'] = 'abc';
        $data['questions'] = $this->crud->reads('questions',array("id","subject","qweight","answer"),array("collection_id"=>1))['res'];
        $this->load->view('attendants/examv2skor',$data);
    }
}
