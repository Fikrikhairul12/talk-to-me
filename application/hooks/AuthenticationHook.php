<!-- // application/hooks/AuthenticationHook.php -->
<?php
class AuthenticationHook {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
    }

    public function check_login() {
        $user_data = $this->CI->session->userdata('user_data');

        // Cek apakah pengguna belum login dan berada di halaman dashboard
        if (!$user_data && $this->CI->uri->segment(1) == 'dashboard') {
            // Redirect ke halaman login
            redirect('login');
        }
    }
}
