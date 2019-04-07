<?php
class Query extends CI_Model{

	public function get()	{
		$this->db->select('*');
		$this->db->from('pengalaman-proyek');
		return $this->db->get();
	}


	public function add($data,$table){
		return $this->db->insert($table,$data);
	}

	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
        $this->db->update($table,$data);
	}


	public function getwhere($id){       
		$this->db->select('*');
		$this->db->from('pengalaman-proyek');
        $this->db->where('id',$id);
        return $this->db->get();
	}

	public function getfile($id){
		$this->db->select('*');
		$this->db->from('file-proyek');
		$this->db->where('id',$id);
		return $this->db->get();
	}

	public function getfilewhere($where){
		return $this->db->get_where('file-proyek',$where);
	}

}
?>