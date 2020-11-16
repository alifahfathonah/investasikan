<?php 
error_reporting(0);

class Kategori extends ci_controller{
public function __construct(){
        parent::__construct();
        $this->load->model('model_barang'); 
        $this->load->model('model_cart');                 
		$this->load->library('pagination');

    }
    
	public function ayam(){

		if($this->session->userdata('user')){
		$data['kode_jenis'] = 'ayam';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/ayam'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoayam($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_kategori_ayam';
		$this->load->view('v_home',$data);
	}else{

		$data['kode_jenis'] = 'ayam';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/ayam'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoayam($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_ayam';
		$this->load->view('v_home',$data);

	}

}
    
	public function lele(){

		if($this->session->userdata('user')){
		$data['kode_jenis'] = 'lele';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/lele'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photolele($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_kategori_lele';
		$this->load->view('v_home',$data);
	}else{

		$data['kode_jenis'] = 'lele';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/lele'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photolele($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_lele';
		$this->load->view('v_home',$data);

	}

}
    
	public function kambing(){

		if($this->session->userdata('user')){
		$data['kode_jenis'] = 'kambing';
		$getData = $this->db->get_where('tbl_barang',$data);
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/kambing'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photokambing($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['content']	= 'v_kategori_kambing';
		$this->load->view('v_home',$data);
	}else{

		$data['kode_jenis'] = 'kambing';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/kambing'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photokambing($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_kambing';
		$this->load->view('v_home',$data);

	}

}

public function galeri(){

	if($this->session->userdata('user')){
		
		$data['data'] = $this->db->get('tbl_galeri');
		//$a = $getData->num_rows();
		
		//------------------------------------------------------------------------------------	
		
		
		/*$data['photo'] = $this->model_barang->get_photogaleri($config['per_page'],$this->uri->segment(3));*/
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_galeri',$data);
	}else{

		$data['kategori'] = 'perempuan';
		$getData = $this->db->get_where('tbl_barang',$data);
		$data['photo'] = $this->db->get('tbl_barang',$data);
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/kategori/batik_wanita'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photoperempuan($config['per_page'],$this->uri->segment(3));
		$data['nama_member'] = 'login'; //jika tidak login
		$data['content']	= 'v_kategori_perempuan';
		$this->load->view('v_home',$data);

	}

}

public function kontak(){
	if($this->session->userdata('user')){
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_kontak',$data);


	}else{
		$data['nama_member'] = 'login'; //jika tidak login
	}
}

public function insert_kontak(){

	$nama 		= $this->input->post('nama');
	$email 		= $this->input->post('email');
	$pesan 		= $this->input->post('pesan');

	$data = array('nama' => $nama,'email' => $email, 'pesan' => $pesan );

	$sukses = $this->db->insert('tbl_kontak',$data);

	if($sukses){
		redirect('site');
	}else{
		redirect('site');
	}
}





}




 ?>