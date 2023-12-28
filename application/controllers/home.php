<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        // $this->load->model('');
    }
    
    public function index(){
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/v-home');
    }
    public function about(){
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/v-about');
    }
    public function faq(){
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/v-faq');
    }
    public function how_to_use(){
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/v-guide');
    }
}