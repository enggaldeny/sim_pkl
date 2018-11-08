<?php
class M_Nilai extends CI_Model{
	function siswa_list($dudi){
		return $this->db->query("SELECT * FROM prk_siswa s, prk_dudi d where d.dudi_id = s.dudi_id and d.dudi_id='$dudi'");
	}
    function nilai_list(){
		return $this->db->query("SELECT * FROM prk_detail_kategori d, prk_kategori k where d.KTG_ID=k.KTG_ID");
	}
    function nilai_ed($sn){
		return $this->db->query("SELECT * FROM v_nilai_siswa where SW_NIS='$sn'");
	}
    function insertnilai($data,$table){
		$this->db->insert($table,$data);
	}
    function insertdetnilai($data,$table){
		$this->db->insert($table,$data);
	}
    function deletenilai($table,$where){
        $this->db->query("delete from $table where NL_ID='$where'"); 
    }
    function ceknomor(){
        $query = $this->db->query("SELECT COUNT(*) FROM prk_nilai");
        return $query->row_array();
		return $this->db->count_all("prk_nilai");
	}
    function updatesiswa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>