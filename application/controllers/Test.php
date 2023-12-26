<?php
// application/controllers/Test.php

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function kelelahan() {
        $this->load->view('beranda/v-header');
        $this->load->view('tes-psikologi/test_kelelahan');
    }

    public function process_kelelahan() {
        // Validasi form
        $this->form_validation->set_rules('question1', 'Pertanyaan 1', 'required');
        $this->form_validation->set_rules('question2', 'Pertanyaan 2', 'required');
        $this->form_validation->set_rules('question3', 'Pertanyaan 3', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tes
            $this->kelelahan();
        } else {
            // Ambil jawaban dari form
            $answers = array(
                $this->input->post('question1'),
                $this->input->post('question2'),
                $this->input->post('question3')
            );

            // Hitung total skor
            $total_score = $this->Test_model->calculate_score($answers);

            // Dapatkan diagnosa
            $diagnosis = $this->Test_model->get_diagnosis_kelelahan($total_score);

            // Tampilkan halaman hasil tes
            $data['total_score'] = $total_score;
            $data['diagnosis'] = $diagnosis;
            $this->load->view('beranda/v-header');
            $this->load->view('tes-psikologi/test_result', $data);
        }
    }
    public function menyendiri() {
        $this->load->view('beranda/v-header');
        $this->load->view('tes-psikologi/test_menyendiri');
    }

    public function process_menyendiri() {
        // Validasi form
        $this->form_validation->set_rules('question1', 'Pertanyaan 1', 'required');
        $this->form_validation->set_rules('question2', 'Pertanyaan 2', 'required');
        $this->form_validation->set_rules('question3', 'Pertanyaan 3', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tes
            $this->menyendiri();
        } else {
            // Ambil jawaban dari form
            $answers = array(
                $this->input->post('question1'),
                $this->input->post('question2'),
                $this->input->post('question3')
            );

            // Hitung total skor
            $total_score = $this->Test_model->calculate_score($answers);

            // Dapatkan diagnosa
            $diagnosis = $this->Test_model->get_diagnosis_menyendiri($total_score);

            // Tampilkan halaman hasil tes
            $data['total_score'] = $total_score;
            $data['diagnosis'] = $diagnosis;
            $this->load->view('beranda/v-header');
            $this->load->view('tes-psikologi/test_result', $data);
        }
    }
    public function stres() {
        $this->load->view('beranda/v-header');
        $this->load->view('tes-psikologi/test_stres');
    }

    public function process_stres() {
        // Validasi form
        $this->form_validation->set_rules('question1', 'Pertanyaan 1', 'required');
        $this->form_validation->set_rules('question2', 'Pertanyaan 2', 'required');
        $this->form_validation->set_rules('question3', 'Pertanyaan 3', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tes
            $this->stres();
        } else {
            // Ambil jawaban dari form
            $answers = array(
                $this->input->post('question1'),
                $this->input->post('question2'),
                $this->input->post('question3')
            );

            // Hitung total skor
            $total_score = $this->Test_model->calculate_score($answers);

            // Dapatkan diagnosa
            $diagnosis = $this->Test_model->get_diagnosis_stres($total_score);

            // Tampilkan halaman hasil tes
            $data['total_score'] = $total_score;
            $data['diagnosis'] = $diagnosis;
            $this->load->view('beranda/v-header');
            $this->load->view('tes-psikologi/test_result', $data);
        }
    }
    public function kecemasan() {
        $this->load->view('beranda/v-header');
        $this->load->view('tes-psikologi/test_kecemasan');
    }

    public function process_kecemasan() {
        // Validasi form
        $this->form_validation->set_rules('question1', 'Pertanyaan 1', 'required');
        $this->form_validation->set_rules('question2', 'Pertanyaan 2', 'required');
        $this->form_validation->set_rules('question3', 'Pertanyaan 3', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tes
            $this->kecemasan();
        } else {
            // Ambil jawaban dari form
            $answers = array(
                $this->input->post('question1'),
                $this->input->post('question2'),
                $this->input->post('question3')
            );

            // Hitung total skor
            $total_score = $this->Test_model->calculate_score($answers);

            // Dapatkan diagnosa
            $diagnosis = $this->Test_model->get_diagnosis_kecemasan($total_score);

            // Tampilkan halaman hasil tes
            $data['total_score'] = $total_score;
            $data['diagnosis'] = $diagnosis;
            $this->load->view('beranda/v-header');
            $this->load->view('tes-psikologi/test_result', $data);
        }
    }
    public function kemarahan() {
        $this->load->view('beranda/v-header');
        $this->load->view('tes-psikologi/test_kemarahan');
    }

    public function process_kemarahan() {
        // Validasi form
        $this->form_validation->set_rules('question1', 'Pertanyaan 1', 'required');
        $this->form_validation->set_rules('question2', 'Pertanyaan 2', 'required');
        $this->form_validation->set_rules('question3', 'Pertanyaan 3', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tes
            $this->kemarahan();
        } else {
            // Ambil jawaban dari form
            $answers = array(
                $this->input->post('question1'),
                $this->input->post('question2'),
                $this->input->post('question3')
            );

            // Hitung total skor
            $total_score = $this->Test_model->calculate_score($answers);

            // Dapatkan diagnosa
            $diagnosis = $this->Test_model->get_diagnosis_kemarahan($total_score);

            // Tampilkan halaman hasil tes
            $data['total_score'] = $total_score;
            $data['diagnosis'] = $diagnosis;
            $this->load->view('beranda/v-header');
            $this->load->view('tes-psikologi/test_result', $data);
        }
    }
}
