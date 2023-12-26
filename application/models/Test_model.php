<?php
// application/models/Test_model.php

class Test_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function calculate_score($answers) {
        $total_score = 0;

        // Hitung total skor berdasarkan jawaban
        foreach ($answers as $answer) {
            $total_score += $this->get_score_for_answer($answer);
        }

        return $total_score;
    }

    private function get_score_for_answer($answer) {
        // Tentukan skor untuk setiap jawaban
        switch ($answer) {
            case 'A':
                return 1;
            case 'B':
                return 2;
            case 'C':
                return 3;
            // Tambahkan lebih banyak opsi jawaban dan nilai skor jika diperlukan
            default:
                return 0;
        }
    }

    public function get_diagnosis_kelelahan($total_score) {
        // Berikan diagnosa berdasarkan total skor
        if ($total_score <= 4) {
            return "Anda memiliki tingkat kelelahan yang rendah. Tetap menjaga keseimbangan antara pekerjaan dan istirahat.";
        } elseif ($total_score <= 7) {
            return "Anda mengalami kelelahan sedang. Perhatikan keseimbangan hidup dan cari cara untuk mengurangi beban stres.";
        } else {
            return " Anda mengalami kelelahan yang tinggi. Segera cari dukungan dan pertimbangkan untuk mengubah pola hidup agar lebih seimbang.";
        }
    }
    public function get_diagnosis_menyendiri($total_score) {
        // Berikan diagnosa berdasarkan total skor
        if ($total_score <= 4) {
            return "Keseimbangan emosional dan kesejahteraan Anda sangat baik. Lanjutkan menjaga gaya hidup sehat Anda.";
        } elseif ($total_score <= 7) {
            return "Keseimbangan emosional Anda perlu perhatian lebih. Identifikasi sumber stres dan pertimbangkan untuk mencari dukungan.";
        } else {
            return "Keseimbangan emosional dan kesejahteraan Anda mungkin sedang mengalami tekanan. Pertimbangkan untuk mencari bantuan profesional dan lakukan perubahan signifikan dalam pola hidup Anda.";
        }
    }
    public function get_diagnosis_stres($total_score) {
        // Berikan diagnosa berdasarkan total skor
        if ($total_score <= 4) {
            return "Tingkat stres Anda rendah. Anda memiliki strategi yang baik dalam mengatasi tekanan hidup.";
        } elseif ($total_score <= 7) {
            return "Tingkat stres Anda sedang. Evaluasi sumber stres dan pertimbangkan untuk mengembangkan lebih banyak strategi mengatasi.";
        } else {
            return "Tingkat stres Anda sangat tinggi. Pertimbangkan untuk mencari bantuan profesional segera dan lakukan perubahan dalam pola hidup Anda untuk mengurangi stres.";
        }
    }
    public function get_diagnosis_kecemasan($total_score) {
        // Berikan diagnosa berdasarkan total skor
        if ($total_score <= 4) {
            return "Tingkat kecemasan Anda rendah. Anda mampu mengelola stres dan keprihatinan dengan baik.";
        } elseif ($total_score <= 7) {
            return "Tingkat kecemasan Anda sedang. Pertimbangkan untuk meningkatkan strategi mengatasi dan merespon kecemasan.";
        } else {
            return "Tingkat kecemasan Anda sangat tinggi. Segera hubungi profesional kesehatan mental untuk evaluasi dan bantuan lebih lanjut.";
        }
    }
    public function get_diagnosis_kemarahan($total_score) {
        // Berikan diagnosa berdasarkan total skor
        if ($total_score <= 4) {
            return "Tingkat kemarahan Anda rendah. Anda memiliki kontrol yang baik atas emosi marah Anda.";
        } elseif ($total_score <= 7) {
            return "Tingkat kemarahan Anda sedang. Evaluasi cara mengelola kemarahan Anda untuk menghindari eskalasi.";
        } else {
            return "Tingkat kemarahan Anda sangat tinggi. Segera hubungi profesional kesehatan mental untuk mendapatkan bantuan dan mendiskusikan cara mengelola kemarahan dengan efektif.";
        }
    }
}
