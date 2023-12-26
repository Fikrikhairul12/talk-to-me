<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kalender extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
    }
    public function index($tahun = NULL, $bulan = NULL)
    {
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $id_user = $user_data['id_user'];
        $data['mood_entries'] = $this->User_model->get_entries_by_user($id_user);

        $kalender = array(
            'start_day' =>'monday',
            'show_next_prev' => true,
            'next_prev_url' => base_url(). "kalender/index"
        );

        $this->load->library('calendar', $kalender);

        $data['kalender'] = $this->calendar->generate($tahun, $bulan);
        
        $this->load->view('beranda/v-header');
        $this->load->view('view-kalender', $data);
    }
}