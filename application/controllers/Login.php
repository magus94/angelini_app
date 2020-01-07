<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('pages/login');
    }

    public function logar(){

        $identity = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = TRUE; // remember the user

        if ($this->ion_auth->login($identity, $password, $remember)){
            redirect('Home');
        }else{
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect('Login');
        }
    }

    public function logout(){
        if($this->ion_auth->logout()){
            redirect('Login');
        }
    }

}