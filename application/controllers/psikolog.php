<?php
// application/controllers/Psikolog.php

class Psikolog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('psikolog_model');
        $this->load->library('session');
    }

    public function order_psikolog($id_psikolog) {
        $user_data = $this->session->userdata('user_data');

        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('home');
        }

        // Ambil informasi psikolog berdasarkan ID
        $psikolog = $this->psikolog_model->get_psikolog_by_id($id_psikolog);

        // Jika psikolog ditemukan, lanjutkan proses pemesanan
        if ($psikolog) {
            $data['psikolog'] = $psikolog;
            $this->load->view('beranda/v-header');
            $this->load->view('order/order_form', $data);
        } else {
            // Tampilkan pesan atau redirect ke halaman lain jika psikolog tidak ditemukan
            echo 'Psikolog tidak ditemukan.';
        }
    }

    public function process_order() {
        $user_data = $this->session->userdata('user_data');

        $order_data = array(
            'id_user' => $user_data['id_user'],
            'id_psikolog' => $this->input->post('id_psikolog'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'tempat' => $this->input->post('tempat')
        );

        // Simpan pesanan ke dalam database
        $order_id = $this->psikolog_model->save_order($order_data);

        // Tampilkan informasi pesanan
        $data['order_id'] = $order_id;
        $this->load->view('beranda/v-header');
        $this->load->view('konsultasi/view-psikolog', $data);
    }
    public function riwayat_pesanan() {
        // Mendapatkan ID pengguna dari sesi
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            // Pengguna belum login, arahkan ke halaman login
            redirect('login');
        }
        $id_user = $user_data['id_user'];
        // Mendapatkan riwayat pesanan dari database
        $data['order'] = $this->psikolog_model->get_order_history($id_user);

        // Tampilkan view dengan data riwayat pesanan
        $this->load->view('beranda/v-header');
        $this->load->view('order/order_history', $data);
    }
}
