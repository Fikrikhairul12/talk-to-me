<?php
// application/models/Admin_model.php

class admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_admin_by_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('admin');
        return $query->row(); // Mengembalikan satu baris hasil query
    }
    public function insert_admin($data) {
        // Simpan data admin ke dalam database
        $this->db->insert('admin', $data);
    }
    public function tampildatauser()
    {
        return $this->db->get('user');
    }
    public function tampildatakonsul()
    {
        return $this->db->get('konsultasi');
    }
    public function tampildatapsikolog()
    {
        return $this->db->get('psikolog');
    }
    public function tampildatakonselor()
    {
        return $this->db->get('konselor');
    }
    public function tampildatakarir()
    {
        return $this->db->get('pelatih_karir');
    }
    public function tampildatafamily()
    {
        return $this->db->get('pelatih_family');
    }
    public function tampildatadewasa()
    {
        return $this->db->get('pelatih_dewasa');
    }
    public function tampildataorder()
    {
        return $this->db->get('order');
    }
}
