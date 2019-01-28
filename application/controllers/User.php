<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //Do your magic here
        $this->load->model('User_model');
    }
    public function index()
    {
        // $data['konten']="home";
        // $this->load->view('template', $data);
        if($this->session->userdata('logged_in') == TRUE){
            redirect(base_url('index.php/User/Home'));
        }else{
            $this->load->view('Login');
        }
    }
    public function FormLogin(){
        if($this->session->userdata('logged_in') == TRUE){
            redirect(base_url('index.php/Pelanggan'));
        }else{
            $this->load->view('Login');
        }
    }
    public function Login(){
        $this->form_validation->set_rules('Username', 'Username', 'trim|required');
        $this->form_validation->set_rules('Password', 'Password', 'trim|required');

        if($this->form_validation->run() == TRUE){
            if($this->User_model->CekUser() == TRUE){
                redirect(base_url('index.php/Pelanggan'));
            }else{
                $thi->session->set_flashdata('notif', "Username atau Password Salah");
                redirect(base_url('index.php/User/FormLogin'));
            }
        }else{
            $this->session->set_flashdata('notif', validation_errors());
            redirect(base_url('index.php/User/FormLogin'));
        }
    }
    
    public function Profil()
    {
        $data['konten']="Profil";
        $this->load->view('template', $data);
    }
    public function Home()
    {
        $data['konten']="home";
        $this->load->view('template', $data);
    }
    // public function Barang()
    // {
    //     $data['konten']="v_barang";
    //     $this->load->view('template', $data);
    // }
    // public function Kategori()
    // {
    //     $data['konten']="v_kategori";
    //     $this->load->view('template', $data);
    // }
    public function gallery()
    {
        $data['konten']="gallery";
        $this->load->view('template', $data);
    }
    public function event()
    {
        $data['konten']="event";
        $this->load->view('template', $data);
    }
    

    public function Logout(){
        $this->session->sess_destroy();
        $this->load->view('Login');
    }

    

}


?>