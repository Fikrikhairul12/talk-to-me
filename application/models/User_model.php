<!-- // application/models/User_model.php -->
<?php
class User_model extends CI_Model {

    public function get_user_by_email($email) {
        return $this->db->get_where('user', array('email' => $email))->row();
    }

    public function insert_user($data) {
        $this->db->insert('user', $data);
    }
    public function insert_entry($data) {
        $this->db->insert('mood_entries', $data);
        return $this->db->insert_id();
    }
    public function get_entries_by_user($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('mood_entries');
        return $query->result_array();
    }
    public function get_user_by_id($user_id) {
        // Ambil data pengguna dari database berdasarkan ID
        $query = $this->db->get_where('user', array('id_user' => $user_id));

        // Kembalikan hasil query sebagai objek
        return $query->row();
    }
    public function update_user($user_id, $data) {
        // Update data pengguna dalam database berdasarkan ID
        $this->db->where('id_user', $user_id);
        $this->db->update('user', $data);

        // Kembalikan TRUE jika berhasil, FALSE jika gagal
        return $this->db->affected_rows() > 0;
    }
    public function get_psikolog_by_id($id) {
        // Ambil satu baris data dari tabel
        $query = $this->db->get_where('psikolog', array('id_psikolog' => $id));
        return $query->row(); // Mengembalikan satu baris data
    }
    public function tampildata_psikolog()
    {
        return $this->db->get('psikolog');
    }
    public function tampildata_konselor()
    {
        return $this->db->get('konselor');
    }
    public function tampildata_karir()
    {
        return $this->db->get('pelatih_karir');
    }
    public function tampildata_family()
    {
        return $this->db->get('pelatih_family');
    }
    public function tampildata_dewasa()
    {
        return $this->db->get('pelatih_dewasa');
    }
    // Fungsi lainnya sesuai kebutuhan
}
