<?php

Class Model_photo extends CI_Model {

public function __construct()
{
	
	$this->load->database();
	
}

function tambah_photo($nama_foto,$tanggal) {

	$data = array(
		'title' => $this->input->post('judul'),
		'anu' => $this->input->post('anu'),
		'photo_url' => $nama_foto,
		'created' => $tanggal
	);
		
	return $this->db->insert('photo', $data);

}

function get_photo($perPage, $uri) {

	
	$this->db->order_by('id_photo','DESC');
	
	$query = $getData = $this->db->get('photo', $perPage, $uri);
	
	if($getData->num_rows() > 0)
	
	return $query;
	
	else
	
	return null;
		
}

function link_photo($id_photo){
		
	$this->db->where('id_photo',$id_photo);
    $query = $getData = $this->db->get('photo');

	if($getData->num_rows() > 0)
	return $query;
	else
	return null;
		
}

function hapus_photo($id_photo) {

	$this->db->where('id_photo',$id_photo);
	$this->db->delete('photo');
		
}

}

?>