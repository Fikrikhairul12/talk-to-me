<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mood extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
    }
    public function index(){
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        $id_user = $user_data['id_user'];

        // Ambil data mood berdasarkan id_user
        $data['mood_entries'] = $this->User_model->get_entries_by_user($id_user);
        
        $this->load->view('beranda/v-header');
        $this->load->view('view-mood', $data);
    }
    public function submit_mood() {
        // Ambil id_user dari sesi
        $user_data = $this->session->userdata('user_data');
        $id_user = $user_data['id_user'];

        $mood = $this->input->post('mood');
        $alasan = $this->input->post('alasan');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'id_user' => $id_user,
            'mood' => $mood,
            'alasan' => $alasan,
            'deskripsi' => $deskripsi
        );

        $this->User_model->insert_entry($data);

        // Redirect ke halaman dashboard setelah menyimpan mood
        redirect('mood');
    }
}