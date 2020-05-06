<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Data Nilai tiap Kriteria per Alternatif

    public function getNilai()
    {
        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        // $this->db->join('interval', 'interval.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai_kriteria;
        }
        return $data;

        // $query = $this->db->query("SELECT a.id_alternatif, k.id_kriteria, asp.nilai_kriteria 
        // FROM aspek_teknik asp 
        //     INNER JOIN alternatif a 
        //         ON asp.id_alternatif=a.id_alternatif 
        //     INNER JOIN kriteria k 
        //         ON k.id_kriteria=asp.id_kriteria
        //     ORDER BY a.id_alternatif, k.id_kriteria");
    }

    public function getListForm($id)
    {
        return $this->db->query(
            'SELECT aspek_teknik.id_aspek_teknik, aspek_teknik.id_kriteria, aspek_teknik.nilai_kriteria , intervals.nilai_interval,kriteria.nama_kriteria 
            FROM aspek_teknik 
            INNER JOIN intervals
            ON (aspek_teknik.id_kriteria = intervals.id_kriteria 
            AND aspek_teknik.nilai_kriteria= intervals.nilai_kriteria)
            , kriteria
            WHERE id_alternatif= "' . $id . '" 
            and kriteria.id_kriteria = aspek_teknik.id_kriteria 
            ORDER BY id_kriteria'
        )->result();
    }

    public function updateNilai($id, $kriteria, $value)
    {
        $where = ['id_alternatif' => $id, 'id_kriteria' => $kriteria];
        $data = ['nilai_kriteria' => $value];

        $this->db->where($where);
        $this->db->update('aspek_teknik', $data);
    }

    public function getAlternatifById($id)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();
    }

    public function getKriteria()
    {
        $this->db->select('kriteria.*');
        $this->db->from('kriteria');
        $this->db->order_by('id_kriteria');
        $query = $this->db->get();
        return $query->result();

        // $query = $this->db->query("SELECT * FROM tbl_kriteria ORDER BY kode_kriteria");
        // return $query->result();
    }

    public function getNilaiFuzzy()
    {

        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number1;
        }

        return $data;
        // return $rows;
    }

    public function getNilaiFuzzy2()
    {

        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number2;
        }

        return $data;
    }

    public function getNilaiFuzzy3()
    {

        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number3;
        }
        return $data;

        // $data = [
        //     $rows->id_alternatif, $rows->id_kriteria
        // ];

        // foreach ($data as $row) {
        //     $row->fuzzy_number3;
        // }
    }
    //     SELECT alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, 
    // intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3 
    // FROM aspek_teknik 
    // JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
    // JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
    // JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
    // AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria


    public function getTernormalisasi1()
    {
        $this->db->select('(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot1, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot1;
        }

        return $data;

        // SELECT (intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_hasil, 
        // alternatif.id_alternatif, kriteria.id_kriteria 
        // FROM aspek_teknik 
        // JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
        // JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
        // JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
        // AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria 
    }

    public function getTernormalisasi2()
    {
        $this->db->select('(intervals.fuzzy_number2 * kriteria.nilai_bobot2) as field_bobot2, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot2;
        }

        return $data;
    }

    public function getTernormalisasi3()
    {
        // $query = $this->db->query("SELECT * from v_normalisasi, alternatif where v_normalisasi.id_alternatif = alternatif.id_alternatif");
        // $rows = $query->result();

        // $data = array();
        // foreach ($rows as $row) {
        //     $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot1;
        // }

        // return $data;

        // return $query->result();

        $this->db->select('(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot3;
        }

        return $data;
    }

    public function getFPISk1()
    {
        // B
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot1, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "1"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;


        // $query = $this->db->query("SELECT MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, 
        // alternatif.id_alternatif, kriteria.id_kriteria 
        // FROM aspek_teknik 
        // JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
        // JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
        // JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
        // AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria 
        // WHERE kriteria.id_kriteria = '1'");

        // $rows = $query->result();

        // return $rows;
        // $query = $this->db->get();
        // $data = array();
        // foreach ($rows as $row) {
        //     $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot3;
        // }

        // return $data;
    }

    public function getFPISk2()
    {
        // C
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot2, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "2"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFPISk3()
    {
        // C
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot3, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "3"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFPISk4()
    {
        // B
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot4, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "4"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFPISk5()
    {
        // B
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot5, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "5"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFPISk6()
    {
        // C
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot6, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "6"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFPISk7()
    {
        // B
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot7, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "7"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    // FNIS
    public function getFNISk1()
    {
        // B
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot1, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "1"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk2()
    {
        // C
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot2, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "2"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk3()
    {
        // C
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "3"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk4()
    {
        // B
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot4, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "4"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk5()
    {
        // B
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot5, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "5"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk6()
    {
        // C
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot6, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "6"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function getFNISk7()
    {
        // B
        $this->db->select('MIN(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot7, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "7"');

        $query =  $this->db->get();
        $rows = $query->result();
        return $rows;
    }


    public function getDisFPISk1()
    {
        // gk jadi yg ini, tidak dipakai ya

        // $query = $this->db->query("SELECT nama_alternatif, v_aplusk1.id_alternatif, dplus
        // from v_aplusk1, alternatif 
        // where v_aplusk1.id_alternatif = alternatif.id_alternatif");

        $query = $this->db->query("SELECT * FROM v_aplusk1 ORDER BY `v_aplusk1`.`id_alternatif` ASC");

        return $query->result();
        // $this->db->select('alternatif.nama_alternatif, v_aplusk1.id_alternatif, v_aplusk1.dplus');
        // $this->db->from('v_aplusk1, alternatif');
        // $this->db->where('v_aplusk1.id_alternatif = alternatif.id_alternatif');
        // $this->db->join('alternatif', 'v_aplusk1.id_alternatif = alternatif.id_alternatif'); 

        // $query = $this->db->get();
        // $rows = $query->result();
        // return $rows;
    }

    // public function v_normalisasi()
    // {
    //     $query =  $this->db->query(
    //         "SELECT (intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot1, 
    //         (intervals.fuzzy_number2 * kriteria.nilai_bobot2) as field_bobot2, 
    //         (intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, 
    //         alternatif.id_alternatif, kriteria.id_kriteria 
    //         FROM aspek_teknik 
    //         JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
    //         JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
    //         JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
    //         AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria");

    //     return $query->result();
    // }

    //     public function v_aplusk1()
    //     {
    //         $query = $this->db->query(
    //             "SELECT id_alternatif, id_kriteria, sqrt((1/3)*((pow(v_fpisk1.field_bobot1 - v_normalisasi.field_bobot1 ,2) 
    //             + pow( v_fpisk1.field_bobot1 - v_normalisasi.field_bobot2 ,2) 
    //             + pow( v_fpisk1.field_bobot1 - v_normalisasi.field_bobot3 ,2)))) 
    //             AS dplus1"
    //             );

    //         SELECT v_normalisasi.id_alternatif, v_normalisasi.id_kriteria, 
    // sqrt((1/3)*((pow(v_fpisk1.field_bobot1 - v_normalisasi.field_bobot1 ,2) 
    // + pow( v_fpisk1.field_bobot1 - v_normalisasi.field_bobot2 ,2) 
    // + pow( v_fpisk1.field_bobot1 - v_normalisasi.field_bobot3 ,2)))) 
    // AS dplus1
    // FROM v_normalisasi, v_fpisk1 
    // WHERE v_normalisasi.id_kriteria = v_fpisk1.id_kriteria 
    //     }

    public function getDplus()
    {
        $this->db->select('*');
        $this->db->from('v_dplus');
        $this->db->join('alternatif', 'alternatif.id_alternatif = v_dplus.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = v_dplus.id_kriteria');


        // SELECT v_aplusk1.id_alternatif, v_aplusk1.id_kriteria, v_aplusk1.dplus1 AS dplus 
        // FROM v_aplusk1 UNION
        // SELECT * FROM v_aplusk2 UNION
        // SELECT * FROM v_aplusk3 UNION
        // SELECT * FROM v_aplusk4 UNION
        // SELECT * FROM v_aplusk5 UNION
        // SELECT * FROM v_aplusk6 UNION
        // SELECT * FROM v_aplusk7 

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->dplus;
        }
        return $data;
    }

    public function getDneg()
    {
        $this->db->select('*');
        $this->db->from('v_dneg');
        $this->db->join('alternatif', 'alternatif.id_alternatif = v_dneg.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = v_dneg.id_kriteria');

        // SELECT v_anegk1.id_alternatif, v_anegk1.id_kriteria, v_anegk1.dneg1 AS dneg 
        // FROM v_anegk1 UNION
        // SELECT * FROM v_anegk2 UNION
        // SELECT * FROM v_anegk3 UNION
        // SELECT * FROM v_anegk4 UNION
        // SELECT * FROM v_anegk5 UNION
        // SELECT * FROM v_anegk6 UNION
        // SELECT * FROM v_anegk7 

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->dneg;
        }
        return $data;
    }

    public function dAll()
    {
        $this->db->select('*');
        $this->db->from('v_sum');
        $this->db->join('alternatif', 'alternatif.id_alternatif = v_sum.id_alternatif');

        // v_sum
        // SELECT v_sumneg.id_alternatif, v_sumneg.dneg, v_sumplus.dplus 
        // FROM `v_sumneg` JOIN v_sumplus 
        // WHERE v_sumplus.id_alternatif = v_sumneg.id_alternatif 

        $query = $this->db->get();
        $rows = $query->result();
        return $rows;
    }

    public function cci()
    {
        $this->db->select('v_sum.id_alternatif, dneg/(dneg+dplus) AS cci, alternatif.nama_alternatif');
        $this->db->from('v_sum');
        $this->db->join('alternatif', 'alternatif.id_alternatif = v_sum.id_alternatif');
        $this->db->order_by('cci', 'DESC');

        $query = $this->db->get();
        $rows = $query->result();
        return $rows;

        // SELECT v_sum.id_alternatif , dneg/(dneg+dplus) AS cci 
        // FROM v_sum JOIN alternatif 
        // WHERE alternatif.id_alternatif = v_sum.id_alternatif 
        // ORDER BY `cci` DESC
    }
}
