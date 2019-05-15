<?php

class Admin_model extends CI_Model {
    public function get_pengguna()
    {
        $query = "SELECT username, nama, aktif, status_akses FROM user u
                  INNER JOIN hak_akses h ON h.level_akses = u.level_akses 
                  WHERE u.level_akses = 2 OR u.level_akses = 3
                  ORDER BY h.status_akses";

        $result = $this->db->query($query);
        return $result;
    }

    public function nonaktif_user($username)
    {
        $query = "UPDATE user
                  SET aktif = 0
                  WHERE username = " . "'" . $username . "'";

        $this->db->query($query);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dinonaktifkan</div>');
    }

    public function aktifkan_user($username)
    {
        $query = "UPDATE user
                  SET aktif = 1
                  WHERE username = " . "'" . $username . "'";

        $this->db->query($query);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil diaktifkan</div>');
    }
}