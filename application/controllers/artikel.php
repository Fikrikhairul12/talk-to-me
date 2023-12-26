<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller
{
    public function keluarga(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-artikel-keluarga');
    }
    public function kesehatan(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-artikel-kesehatan');
    }
    public function keuangan(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-artikel-keuangan');
    }
    public function pekerjaan(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-artikel-pekerjaan');
    }
    public function pendidikan(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $this->load->view('beranda/v-header');
        $this->load->view('beranda/view-artikel-pendidikan');
    }
}