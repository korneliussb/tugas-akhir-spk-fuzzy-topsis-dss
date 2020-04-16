<?php defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{
    private $_alternatif = "alternatif";

    public function getAllAlternatif()
    {
        return $this->db->get($this->_alternatif)->result_array();
    }

    public function getAlternatifById($id_alternatif)
    {
        return $this->db->get_where($this->_alternatif, ['id_alternatif' => $id_alternatif])->row_array();
    }

    public function getListForm()
    {
        $this->db->select('kriteria.id_kriteria, kriteria.nama_kriteria');
        $this->db->from('kriteria');
        $this->db->order_by('id_kriteria');
        $query = $this->db->get();

        $data = $query->result();
        return $data;

        // $data = array();
        // foreach ($rows as $row) {
        //     $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai_kriteria;
        // }
        // return $data;

        // $query = $this->db->query("SELECT  k.kode_kriteria, k.nama_kriteria 
        // FROM tbl_kriteria k  
        // ORDER BY kode_kriteria");
        // return $query->result();
    }

    public function tambahNilai($id)
    {
        $data = array(
            'id_kriteria' => $id,
            'id_alternatif' => $this->input->post('id_alternatif'),
            'nilai_kriteria' => $this->input->post('id_aspek_teknik-' . $id),
        );
        // var_dump($data);
        // die;
        $this->db->insert('aspek_teknik', $data);
        // $data2 = [
        //     "id_kriteria" => $data['id_kriteria'],
        //     "id_alternatif" => $this->input->post($data['id_alternatif']),
        //     "nilai_kriteria" => $this->input->post($data['nilai_kriteria'])
        // ];

        // $this->db->insert('aspek_teknik', $data2);


    }

    // public function tambahAlternatif()
    // {
    //     $data = [
    //         "id_alternatif" => $this->input->post('id_alternatif'),
    //         "nama_alternatif" => htmlspecialchars($this->input->post('nama_alternatif'))
    //     ];

    //     $this->db->insert($this->_alternatif, $data);
    // }

    public function tambahAlternatif()
    {
        $data = array(
            'id_alternatif' => $this->input->post('id_alternatif'),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true))
        );
        // var_dump($data);
        $this->db->insert($this->_alternatif, $data);
    }

    public function getKodeOto($field, $table, $prefix, $length)
    {
        global $db;
        $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");

        $var = $var->row_array()[$field];

        if ($var) {
            return $prefix . substr(str_repeat('0', $length) . (substr($var, -$length) + 1), -$length);
        } else {
            return $prefix . str_repeat('0', $length - 1) . 1;
        }
    }

    public function hapusDataAlternatif($id_alternatif)
    {
        $this->hapusAspekTeknik($id_alternatif);
        $this->db->delete($this->_alternatif, ['id_alternatif' => $id_alternatif]);
    }

    // public function hapusDataAlternatif($id_alternatif)
    // {
    //     $this->db->delete($this->_alternatif, ['id_alternatif' => $id_alternatif]);
    // }

    public function hapusAspekTeknik($id_alternatif)
    {
        $this->db->delete('aspek_teknik', ['id_alternatif' => $id_alternatif]);
    }

    public function ubahDataAlternatif($data)
    {
        $data2 = [
            "nama_alternatif" => $data['nama_alternatif']
        ];

        $this->db->where('id_alternatif', $this->input->post('id_alternatif'));
        $this->db->update($this->_alternatif, $data2);
    }

    public function getIntervals()
    {
        return $this->db->get('intervals')->result();
    }

    public function countAlternatif()
    {
        $this->db->select('COUNT(id_alternatif) AS jumlah_alternatif');
        $this->db->from('alternatif');
        $query = $this->db->get();

        $data = $query->row();
        return $data;

        // SELECT COUNT(id_alternatif) as jumlah_alternatif FROM alternatif
    }

    // belum, karena antar tabel
    // public function tambahDataAlternatif()
    // {
    //     # code
    // }
}
