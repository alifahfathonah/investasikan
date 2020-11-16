<?php 

class Report extends ci_controller{

	public function report_order(){
		$data['data'] 	= $this->db->get('tbl_order');
		$this->load->view('admin/report_order',$data);
	}

	public function report_barang(){
			$data['data'] 	= $this->db->get('tbl_barang');
			$this->load->view('admin/report_barang',$data);
		}

	public function report_member(){
			$data['data'] 	= $this->db->get('tbl_member');
			$this->load->view('admin/report_member',$data);
		}

}


 ?>