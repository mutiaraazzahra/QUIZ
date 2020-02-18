<?php
class Barang extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbarang');
        $this->load->helper('url_helper'); 
    }
    public function index()
    {
        $data['barang']=$this->Mbarang->get_barang();
        $data['title'] = 'TAMPIL DATA'; 

        $this->load->view('templates/header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer'); 
    }
    public function view($slug = NULL)
    {
        $data['barang_item'] = $this->Mbarang->get_barang($slug);
        
        if (empty($data['barang_item']))
        {
            show_404();
        }  
        $data['title'] = $data['barang_item']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('barang/view', $data);         
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');         
        $this->load->library('form_validation');
        
        $data['title']='TAMBAH BARANG';

        $this->form_validation->set_rules('kode', 'kode', 'required');         
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('templates/header', $data);             
            $this->load->view('barang/create');             
            $this->load->view('templates/footer');   
        }
        else{
            $this->Mbarang->set_barang();             
            $this->load->view('templates/header', $data);             
            $this->load->view('barang/success');             
            $this->load->view('templates/footer');   
            redirect(base_url('index.php/barang'));
        }
    }
    public function tambah(){
        $data['barang']=$this->Mbarang->get_barang();
        $data['title'] = 'TAMBAH'; 

        $this->load->view('templates/header', $data);
        $this->load->view('barang/create', $data);
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
        
        $data['title'] = 'Update item';                 
        $data['barang_item'] = $this->Mbarang->get_barang_by_id($id); 

        $this->form_validation->set_rules('kode', 'kode', 'required');        
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
          $this->load->view('templates/header', $data);
          $this->load->view('barang/edit', $data);             
          $this->load->view('templates/footer');
        } else {
            $this->Mbarang->set_barang($id);
            redirect(base_url() . 'index.php/barang');
        }
        
    }
    public function delete()
    {
        $id = $this->uri->segment(3);                  
        
        if (empty($id))   
        {
            show_404();
        }
        $barang_item = $this->Mbarang->get_barang_by_id($id);                  
        $this->Mbarang->delete_barang($id);                 
        redirect( base_url() . 'index.php/barang');
    }

    public function checkout()
    {
        $this->load->helper('form');         
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode', 'kode', 'required');         
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('templates/header', $data);                 
            $this->load->view('barang/create');             
            $this->load->view('templates/footer');   
        }
        else{
            // $this->Mbarang->set_barang();  
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $data = array(
                'data' => $_POST, 
                'title' => "Checkout",
                'total' => $harga * $jumlah
            );           
            $this->load->view('templates/header', $data);             
            $this->load->view('barang/checkout', $data);             
            $this->load->view('templates/footer');   
            // redirect(base_url('index.php/barang'));
        }
    }

}