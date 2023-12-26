<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konsul extends CI_Controller
{
    public function index(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
    }

    //belum terpakai
    public function konsul_psikolog(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
    
        $data['psikolog'] = $this->User_model->tampildata_psikolog()->result();
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-psikolog',$data);
    }
    //
    public function konsul_konselor(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $data['konselor'] = $this->User_model->tampildata_konselor()->result();
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-konselor',$data);
    }
    public function konsul_karir(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $data['pelatih_karir'] = $this->User_model->tampildata_karir()->result();
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-karir',$data);
    }
    public function konsul_family(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $data['pelatih_family'] = $this->User_model->tampildata_family()->result();
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-family',$data);
    }
    public function konsul_dewasa(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
        $data['pelatih_cinta'] = $this->User_model->tampildata_dewasa()->result();
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-dewasa',$data);
    }
}