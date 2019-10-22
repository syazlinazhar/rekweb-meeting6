<?php 

class Mahasiswa extends CI_Controller
{
    public function index()
    {
       $this->load->model('Mahasiswa_model'); 
       $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
       $this->load->view('mahasiswa/index', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->load->model('Mahasiswa_model');

        $this->form_validation->set_rules();
        
        $this->load->view('mahasiswa/index');
    }
}