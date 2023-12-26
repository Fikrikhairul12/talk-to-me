<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class valid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('profil/view-valid');
    }

}