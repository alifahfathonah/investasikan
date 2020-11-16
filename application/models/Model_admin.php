<?php
	
	class Model_admin extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function admin($nama_admin, $password_admin)
		{
            $this->load->database();
			$this -> db -> select('nama_admin, password_admin');
			$this -> db -> from('tbl_admin');
			$this -> db -> where('nama_admin', $nama_admin);
			$this -> db -> where('password_admin', $password_admin);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		
	}
?>