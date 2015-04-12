<?php
	
	class get_data extends CI_Model{
	
		function get_all(){
			$query=$this->db->query("SELECT * FROM test");

			return $query->result();		

		}

		function insert1($data){
			$this->db->insert("test",$data);
			echo "done";
		}

		function updating($data){
			$this->db->update("test",$data,"id = 3");
			echo "done";
		}

		function deleting($data){
			$this->db->delete("test",$data);
			echo "done";
		}

		function emptying($data){
			$this->db->empty_table($data);
			echo "done";
		}


} 
?>
