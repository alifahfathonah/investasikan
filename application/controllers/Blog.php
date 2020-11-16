<?php 
error_reporting(0);

	class Blog extends ci_controller {

		public function index(){

			if($this->session->userdata('user')){
				$data['data']			= $this->db->get('tbl_blog');
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$this->load->view('v_blog',$data);


		}else{
			$data['data']			= $this->db->get('tbl_blog');
				$data['nama_member'] = 'login'; //jika tidak login

				$this->load->view('v_login',$data);
			}
		}


	}

 ?>