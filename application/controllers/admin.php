<?php
// application/controllers/Admin.php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->load->view('admin/v-header-def');
        $this->load->view('home-log/v-home');
    }
    public function about(){
        $this->load->view('admin/v-header-def');
        $this->load->view('home-log/v-about');

    }
    public function faq(){
        $this->load->view('admin/v-header-def');
        $this->load->view('home-log/v-faq');
    }
    public function login() {
        
        // Tampilkan form login admin
        $this->load->view('admin/v-header-def');
        $this->load->view('admin/loginadmin');
    }

    public function do_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Ambil data admin berdasarkan email
        $admin = $this->admin_model->get_admin_by_email($email);

        if ($admin && password_verify($password, $admin->password)) {
            $admin_data = array(
                'id_admin' => $admin->id_admin,
                'nama' => $admin->nama,
                'email' => $admin->email,
                'no_telepon' => $admin->no_telepon
            );

            // Set data admin ke dalam sesi
            $this->session->set_userdata('admin_data', $admin_data);

            // Redirect ke halaman admin/dashboard
            redirect('admin/admin');
        } else {
            // Tampilkan pesan kesalahan jika login gagal
            $data['error_message'] = 'Email atau password salah';
            $this->load->view('admin/loginadmin', $data);
        }
    }
    public function admin() {
        $user_data = $this->session->userdata('admin_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('admin');
        }

        // Pengguna sudah login, tampilkan halaman dashboard
        $this->load->view('admin/v-header');
        $this->load->view('home-log/v-home');
    }
    public function data_user(){
        $user_data = $this->session->userdata('admin_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('admin');
        }
        $data['user'] = $this->admin_model->tampildatauser()->result();
        $this->load->view('admin/v-header');
        $this->load->view('admin/data_user',$data);
    }
    public function data_konsul(){
        $user_data = $this->session->userdata('admin_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('admin');
        }
        $data['konsultasi'] = $this->admin_model->tampildatakonsul()->result();
        $data['psikolog'] = $this->admin_model->tampildatapsikolog()->result();
        $data['konselor'] = $this->admin_model->tampildatakonselor()->result();
        $data['karir'] = $this->admin_model->tampildatakarir()->result();
        $data['family'] = $this->admin_model->tampildatafamily()->result();
        $data['dewasa'] = $this->admin_model->tampildatadewasa()->result();
        $this->load->view('admin/v-header');
        $this->load->view('admin/data_konsul',$data);
    }
    public function order(){
        $user_data = $this->session->userdata('admin_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('admin');
        }
        $data['order'] = $this->admin_model->tampildataorder()->result();
        $this->load->view('admin/v-header');
        $this->load->view('admin/data_order',$data);
    }
    public function profil(){
        $user_data = $this->session->userdata('admin_data');
        if (!$user_data) {
            redirect('admin');
        }
        $this->load->view('admin/v-header');
        $this->load->view('admin/view-profil');
    }
    public function logout() {
        // Hapus data sesi admin dan redirect ke halaman login
        $this->session->unset_userdata('admin_data');
        redirect('admin/index');
    }
}