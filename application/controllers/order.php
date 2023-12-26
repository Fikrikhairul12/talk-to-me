<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        // $this->load->model('Psikolog-model');
    }
    public function index(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }
    }
    public function psikolog1(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        $data['data_psikolog'] = $this->User_model->get_psikolog_by_id(1);
        $this->load->view('beranda/v-header');
        $this->load->view('order/view-keandra', $data);

    }
    public function psikolog2(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        $data['data_psikolog'] = $this->User_model->get_psikolog_by_id(2);
        $this->load->view('beranda/v-header');
        $this->load->view('order/view-dian', $data);

    }
    public function psikolog3(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        $data['data_psikolog'] = $this->User_model->get_psikolog_by_id(3);
        $this->load->view('beranda/v-header');
        $this->load->view('order/view-rizki', $data);

    }
    // public function show_single_data() {
    //     $data['single_data'] = $this->example_model->get_single_data();
    //     $this->load->view('example_view', $data);
    // }
    // public function do_psikolog(){
    //     $user_data = $this->session->userdata('user_data');
    //     $id_user = $user_data['id_user'];

    //     $id_psikolog = $this->input->post('id_psikolog');
    //     $tanggal = $this->input->post('tanggal');
    //     $waktu = $this->input->post('waktu');
    //     $tempat = $this->input->post('tempat');

    //     $data = array(
    //         'id_user' => $id_user,
    //         'id_psikolog' => $id_psikolog,
    //         'tanggal' => $tanggal,
    //         'waktu' => $waktu,
    //         'tempat' => $tempat
    //     );

    //     $this->User_model->insert_order($data);
    //     redirect('konsul/konsul_psikolog');
    // }
}