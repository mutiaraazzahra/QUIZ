<?php
class FormValid extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        
    }
    public function index(){
     
        $this->load->view('Valid/myform');
    }

    public function insert(){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirmpw', 'Konfirmasi Password ', 'required');
            $this->form_validation->set_rules('email', 'Email ', 'required');
    
    
        if($this->form_validation->run() == FALSE){
            $this->load->view('Valid/myform');
        }
        else{
            $this->load->view('Valid/formsuccess');
        }
    }
}