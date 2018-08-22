<?php
class c_orang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_orang');
        $this->load->helper('url');    
    }
    public function index(){
        $this->load->view('header');
        $this->load->view('navbar');
        $this->read();
        $this->load->view('footer');
    }
    public function read(){
        $result['orang'] = $this->m_orang->read()->result();
        $this->load->view('home',$result);
    }
    public function pre_insert(){
        $this->index();
        $this->load->view('insert');
    }
    public function pre_edit($id){
        $where = array('id'=>$id);
        $data['orang'] = $this->m_orang->getdatawhere('orang',$where)->result();
        $this->index();
        $this->load->view('update',$data);
    }
    public function insert(){
        $data['id'] = $this->input->post('id');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['telepon'] = $this->input->post('telepon');
        $this->m_orang->insert('orang',$data);
        redirect('c_orang/index');
    }
    public function edit(){
        $where  = array('id'=> $this->input->post('id'));
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['telepon'] = $this->input->post('telepon');
        $this->m_orang->update('orang',$data,$where);
        redirect('c_orang/index');
    }
    public function delete($id){
        $where = array('id'=>$id);
        $this->m_orang->delete('orang',$where);
        redirect('c_orang/index');
    }

}