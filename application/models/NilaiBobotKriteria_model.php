<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilaibobotkriteria_model extends CI_Model
{
    #....
    // public function getTable()
    // {
    //     $this->db->select('users.*', 'kriteria.nama_kriteria');
    //     $this->db->from('users');
    //     $this->db->join();
    // }

    private $_table = "kriteria";

    public function getAllBobot()
    {
        return $this->db->get('kriteria')->result_array();
    }
    public function getBobotById($id_kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id_kriteria])->row_array();
    }

    public function ubahDataBobot($data1)
    {
        $data2 = [
            "id_kriteria" => $data1['id_kriteria'],
            // "nama_kriteria" => $data1['nama_kriteria'],
            "nilai_bobot1" => $data1['nilai_bobot1'],
            "nilai_bobot2" => $data1['nilai_bobot2'],
            "nilai_bobot3" => $data1['nilai_bobot3']
        ];

        // $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update($this->_table, $data2);

        // echo $this->db->last_query($data2);
        // exit;
    }

    public function countKriteria()
    {
        $this->db->select('COUNT(id_kriteria) AS jumlah_kriteria');
        $this->db->from('kriteria');
        $query = $this->db->get();

        $data = $query->row();
        return $data;

        // SELECT COUNT(id_alternatif) as jumlah_alternatif FROM alternatif
    }

    // public function update_bobot($where, $data1, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table, $data1);
    // }
}
