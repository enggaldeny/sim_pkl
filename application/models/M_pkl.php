<?php
class M_pkl extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getData($table, $where=null, $order_by=null, $order=null, $limit=null){
		$this->db->from($table);
		if ($where <> null && $where <> '') {
			$this->db->where($where);
		}
		if ($order_by <> null && $order_by <> '') {
			$this->db->order_by($order_by, $order);
		}
		if ($limit <> null && $limit <> '') {
			$this->db->limit($limit);
		}
        $query = $this->db->get();

        return $query;
	}

	public function getQuery($q){
    	$query = $this->db->query($q);
    	return $query;
    }

	public function saveData($table, $fields){
		$this->db->insert($table, $fields);
		return $this->db->insert_id(); // if return > 0 it means save successfull
	}

	public function saveDataNai($table, $fields){
		return 	$this->db->insert($table, $fields); // if return > 0 it means save successfull
	}

	public function updateData($table, $fields, $where){
		$this->db->set($fields);
		$this->db->where($where);
		return $this->db->update($table); // if return > 0 it means save successfull
	}

	public function deleteData($table, $where){
		$this->db->where($where);
		return $this->db->delete($table); // if return > 0 it means save successfull
	}
}
?>