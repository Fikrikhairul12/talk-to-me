<?php
// application/models/Psikolog_model.php

class Psikolog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_psikolog_by_id($id) {
        // Mendapatkan informasi psikolog berdasarkan ID
        $query = $this->db->get_where('psikolog', array('id_psikolog' => $id));
        return $query->row();
    }

    public function save_order($order_data) {
        // Menyimpan pesanan ke dalam tabel 'orders'
        $this->db->insert('order', $order_data);
        return $this->db->insert_id(); // Mengembalikan ID pesanan yang baru saja disimpan
    }
    public function get_order_history($id_user) {
        $this->db->where('id_user', $id_user);    
        $query = $this->db->get('order');
        return $query->result_array();
    }
}
