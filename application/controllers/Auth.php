<!-- // application/controllers/Auth.php -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function register() {
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/register');
    }

    public function do_register() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home-log/v-header-def');
            $this->load->view('home-log/register');
        } else {
            $email = $this->input->post('email');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            $picture = $this->input->post('picture');

            $data = array(
                'email' => $email,
                'password' => $password,
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                'picture' => $picture
            );

            $this->User_model->insert_user($data);

            $user_data = array(
                'id_user' => $this->db->insert_id(),
                'email' => $email,
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                'picture' => $picture
            );
            $this->session->set_userdata('user_data', $user_data);
    
            // Redirect langsung ke halaman dashboard setelah registrasi
            redirect('beranda');
        }
    }

    public function login() {
        $this->load->view('home-log/v-header-def');
        $this->load->view('home-log/login');
    }

    public function do_login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home-log/v-header-def');
            $this->load->view('home-log/login');
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->User_model->get_user_by_email($email);
    
            if ($user && password_verify($password, $user->password)) {
                $user_data = array(
                    'id_user' => $user->id_user,
                    'email' => $user->email,
                    'nama' => $user->nama,
                    'no_telepon' => $user->no_telepon,
                    'picture' => $user->picture
                );
                $this->session->set_userdata('user_data', $user_data);
    
                redirect('beranda');
            } else {
                $data['error_message'] = 'Email atau password salah';
                $this->load->view('home-log/v-header-def');
                $this->load->view('home-log/login', $data);
            }
        }
    }
    public function do_valid() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            $user_data = array(
                'id_user' => $user->id_user,
                'email' => $user->email,
                'nama' => $user->nama,
                'no_telepon' => $user->no_telepon,
                'picture' => $user->picture
            );
            $this->session->set_userdata('user_data', $user_data);

            redirect('profil');
        } else {
            $data['error_message'] = 'Password salah silahkan masukkan ulang';
            // $this->load->view('home-log/v-header-def');
            $this->load->view('profil/view-valid', $data);
        }
    }
    

    public function logout() {
        // Hapus data sesi dan redirect ke halaman login
        $this->session->unset_userdata('user_data');
        redirect('home');
    }
}
