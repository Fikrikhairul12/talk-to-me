<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class beranda extends CI_Controller
{
    Public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_model');
    }

    public function index(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        // Pengguna sudah login, tampilkan halaman dashboard
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-latihan');
        // $this->load->view('beranda/v-header');
        // $this->load->view('beranda/view-latihan');
    }
    
    public function konsul(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-latihan-konsul');
    }
    public function artikel(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-latihan-artikel');
    }
    public function terpadu(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-latihan-terpadu');
    }
    public function tes(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-latihan-tes');
    }
}