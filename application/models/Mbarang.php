<?php
class Mbarang extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_barang($id=FALSE)
    {
        if($id === FALSE)
        {
            $query=$this->db->get('tbarang');
            return $query->result_array();
        }
        $query = $this->db->get_where('tbarang', array('kode' => $id)); 
        return $query->row_array(); 
    }
    public function get_barang_by_id($id = 0) 
    {
        if ($id === 0){
        $query = $this->db->get('tbarang'); 
        return $query->result_array();
        }
    $query = $this->db->get_where('tbarang', array('kode'=> $id)); 
    return $query->row_array(); 
}
public function set_barang($id = 0) 
{
    $this->load->helper('url'); 
    $data = array( 
        'kode' => $this->input->post('kode'),
        'nama' =>  $this->input->post('nama'),
        'jumlah' => $this->input->post('jumlah'),
        'harga' => $this->input->post('harga'),
        'total' => $this->input->post('total'),

    );

    if($id==0){
    return $this->db->insert('tbarang', $data); 
}else {
    $this->db->where('kode', $id); 
    return $this->db->update('tbarang', $data); 
}
}
public function delete_barang($id)
{
    $this->db->where('kode', $id);
    return $this->db->delete('tbarang'); 
}
}