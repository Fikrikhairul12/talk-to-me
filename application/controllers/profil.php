<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

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
        $this->load->view('profil/view-profil');
    }
    public function edit_profile() {
        // Pastikan pengguna sudah login
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
    
        // Ambil data pengguna dari sesi atau database
        $user_id = $user_data['id_user'];
        $user = $this->User_model->get_user_by_id($user_id);
    
        // Tampilkan formulir pengeditan dengan data saat ini
        $data['user'] = $user;
        $this->load->view('beranda/v-header');
        $this->load->view('profil/view-edit-profil', $data);
    }    
    public function edit_foto() {
        // Pastikan pengguna sudah login
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
    
        // Ambil data pengguna dari sesi atau database
        $user_id = $user_data['id_user'];
        $user = $this->User_model->get_user_by_id($user_id);
    
        // Tampilkan formulir pengeditan dengan data saat ini
        $data['user'] = $user;
        $this->load->view('beranda/v-header');
        $this->load->view('profil/view-edit-foto', $data);
    }    
    public function do_edit_profile() {
        // Pastikan pengguna sudah login
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
    
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan formulir pengeditan kembali dengan pesan kesalahan
            $this->load->view('profil/view-edit-profil');
        } else {
            // Validasi berhasil, perbarui data pengguna dalam database
            $user_id = $user_data['id_user'];
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            // $picture = $this->input->post('picture');
    
            $data = array(
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                // 'picture' => $picture
            );
    
            $this->User_model->update_user($user_id, $data);
    
            // Redirect ke halaman profil atau halaman lain yang sesuai
            // $this->session->unset_userdata('user_data');
            redirect('valid');
        }
    }
    public function do_edit_foto() {
        // Pastikan pengguna sudah login
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
    
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan formulir pengeditan kembali dengan pesan kesalahan
            $this->load->view('profil/view-edit-foto');
        } else {
            // Validasi berhasil, perbarui data pengguna dalam database
            $user_id = $user_data['id_user'];
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            $picture = $this->input->post('picture');
    
            $data = array(
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                'picture' => $picture
            );
    
            $this->User_model->update_user($user_id, $data);
    
            redirect('valid');
            // Redirect ke halaman profil atau halaman lain yang sesuai
            // $this->session->unset_userdata('user_data');
        }
    }
}