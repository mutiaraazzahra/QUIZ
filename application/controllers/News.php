<?php
class News extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MNews');
        $this->load->helper('url_helper'); 
    }
    public function index()
    {
        $data['news']=$this->MNews->get_news();
        $data['title'] = 'News archive'; 

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer'); 
    }
    public function view($slug = NULL)
    {
        $data['news_item'] = $this->MNews->get_news($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }  
        $data['title'] = $data['news_item']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);         
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');         
        $this->load->library('form_validation');
        
        $data['title']='Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');         
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('templates/header', $data);             
            $this->load->view('news/create');             
            $this->load->view('templates/footer');   
        }
        else{
            $this->MNews->set_news();             
            $this->load->view('templates/header', $data);             
            $this->load->view('news/success');             
            $this->load->view('templates/footer');   
            redirect(base_url());
        }
    }
    public function tambah(){
        $data['news']=$this->MNews->get_news();
        $data['title'] = 'News archive'; 

        $this->load->view('templates/header', $data);
        $this->load->view('news/create', $data);
        $this->load->view('templates/footer'); 
    }
    public function edit()
    {
        $id = $this->uri->segment(3);                  
        
        if (empty($id))  
        {
            show_404();
        }   
        $this->load->helper('form');         
        $this->load->library('form_validation');                 
        
        $data['title'] = 'Edit a news item';                 
        $data['news_item'] = $this->MNews->get_news_by_id($id); 

        $this->form_validation->set_rules('title', 'Title', 'required');        
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
          $this->load->view('templates/header', $data);
          $this->load->view('news/edit', $data);             
          $this->load->view('templates/footer');
        } else {
            $this->MNews->set_news($id);
            redirect(base_url());
        }
        
    }
    public function delete()
    {
        $id = $this->uri->segment(3);                  
        
        if (empty($id))   
        {
            show_404();
        }
        $news_item = $this->MNews->get_news_by_id($id);                  
        $this->MNews->delete_news($id);                 
        redirect( base_url() . 'index.php/news');
    }
}


   