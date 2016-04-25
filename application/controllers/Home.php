<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Datadate';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function signup()
    {
        $data['title'] = 'Datadate';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('register');
        $this->load->view('templates/footer', $data);
    }
    
    public function relogin()
    {
        $data ['title'] = 'Datadate';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('relog', $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('/home');
        
    }
        
}




