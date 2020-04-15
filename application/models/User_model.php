<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "users";


    // public function doLogin()
    // {
    //     $data2 = $this->input->post();

    //     // cari user berdasarkan email dan username
    //     $this->db->where('email', $data2["email"])->or_where('username', $data2["email"]);
    //     $user = $this->db->get($this->_table)->row();

    //     // jika user terdaftar
    //     if ($user) {
    //         // periksa password-nya
    //         $isPasswordTrue = password_verify($data2["password"], $user->password);
    //         // periksa role-nya
    //         // $isAdmin = $user->hak_akses == "1";

    //         // jika password benar dan dia telah terdaftar / admin
    //         // if ($isPasswordTrue && $isAdmin) {
    //         if ($isPasswordTrue) {
    //             // login sukses
    //             $this->session->set_userdata(['user_logged' => $user]);
    //             $this->_updateLastLogin($user->user_id);
    //             return true;
    //         }
    //     }

    //     // login gagal
    //     return false;
    // }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    public function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    public function getAllUser()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahDataUser($data) //data
    {
        $data2 = [
            "email" => $data['email'],
            "nama_user" => $data['nama_user'],
            "username" => $data['username'],
            "password" => $data['password'],
            "hak_akses" => $data['hak_akses'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "instansi" => $data['instansi'],
        ];

        $this->db->insert($this->_table, $data2);
    }

    public function hapusDataUser($user_id)
    {
        $this->db->delete($this->_table, ['user_id' => $user_id]);
    }

    public function getUserById($user_id)
    {
        return $this->db->get_where($this->_table, ['user_id' => $user_id])->row_array();
        // $where = array(
        //     'user_id' => $user_id
        // );

        // $query = $this->db->get_where('users', $where);
        // return $query->row();
    }

    public function ubahDataUser($data)
    {
        $data2 = [
            "email" => $data['email'],
            "nama_user" => $data['nama_user'],
            "username" => $data['username'],
            "password" => $data['password'],
            "hak_akses" => $data['hak_akses'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "instansi" => $data['instansi'],
        ];

        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->update($this->_table, $data2);
    }

    // public function getDetail($user_id)
    // {
    //     return $this->db->get_where($this->_table, ['user_id' => $user_id])->row_array(); 
    // }
    //row?
}
