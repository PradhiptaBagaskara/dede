<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_ukm extends CI_Model {

	 const TABLE_USER = 'user';
	 const TABLE_UKM = 'ukm';
	 const TABLE_KATEGORI = 'kategori';


    /**
     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
     */
    const PRI_INDEX = 'field';

    /**
     * Retrieves record(s) from the database
     *
     * @param mixed $where Optional. Retrieves only the records matching given criteria, or all records if not given.
     *                      If associative array is given, it should fit field_name=>value pattern.
     *                      If string, value will be used to match against PRI_INDEX
     * @return mixed Single record if ID is given, or array of results
     */
    public function get($tableName, $where = NULL) {
        $this->db->select('*');
        $this->db->from($tableName);
        if ($where !== NULL) {
            if (is_array($where)) {
                foreach ($where as $field=>$value) {
                    $this->db->where($field, $value);
                }
            } else {
                $this->db->where(self::PRI_INDEX, $where);
            }
        }
        $result = $this->db->get()->result();
        if ($result) {
            if ($where !== NULL) {
                return array_shift($result);
            } else {
                return $result;
            }
        } else {
            return false;
        }
    }

    function getKate(){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('nama_kategori != ', 'administrator');
        $data = $this->db->get();
        return $data->result();
    }

    function getUsr(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_admin', '0');
        $data = $this->db->get();
        return $data->result();
    }

    /**
     * Inserts new data into database
     *
     * @param Array $data Associative array with field_name=>value pattern to be inserted into database
     * @return mixed Inserted row ID, or false if error occured
     */
    public function insert($tableName, Array $data) {
        if ($this->db->insert($tableName, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /**
     * Updates selected record in the database
     *
     * @param Array $data Associative array field_name=>value to be updated
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of affected rows by the update query
     */
    public function update($tableName, Array $data, $where = array()) {
            if (!is_array($where)) {
                $where = array(self::PRI_INDEX => $where);
            }
        $this->db->update($tableName, $data, $where);
        return $this->db->affected_rows();
    }

    /**
     * Deletes specified record from the database
     *
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of rows affected by the delete query
     */
    public function delete($tableName, $where = array()) {
        // if (!is_array()) {
        //     $where = array(self::PRI_INDEX => $where);
        // }
        $this->db->delete($tableName, $where);
        return $this->db->affected_rows();
    }


public function getAdminUkm()
{

	$ukm = $this->db->get('ukm')->result();


	$this->db->select('ukm.id, user.*, kategori.nama_kategori');
	$this->db->from('ukm');
	$this->db->join('user', 'user.id_user = ukm.id_user', 'left');
	$this->db->join('kategori', 'kategori.id_kategori = ukm.id_kategori', 'left');
	$this->db->where('kategori.nama_kategori != ', 'administrator');
	// $this->db->where('kategori.id_kategori', '5');

	return $this->db->get()->result();
}

}

/* End of file M_user_ukm.php */
/* Location: ./application/models/M_user_ukm.php */


 ?>