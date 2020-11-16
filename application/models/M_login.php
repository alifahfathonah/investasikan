<?php
	
	class M_login extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function pelapak($username, $password)
		{
            $this->load->database();
			$this -> db -> select('username, password,nama');
			$this -> db -> from('pelapak');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
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