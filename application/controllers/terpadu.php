<?php
class terpadu extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function motivasi(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('terpadu/motivasi');
    }
    public function bersyukur(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('terpadu/bersyukur');
    }
    public function kekhawatiran(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('terpadu/kekhawatiran');
    }
    public function percaya_diri(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('terpadu/percaya-diri');
    }
    public function hubungan(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('terpadu/hubungan');
    }
}