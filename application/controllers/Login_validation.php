<?php 

class Login_validation extends ci_controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('model_login');                 
    }

	public function index(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama_member', 'nama_member', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password_member', 'password_member', 'trim|required|xss_clean|callback_check_database');// disini terdapat callback : callback_check_database. digunakan untuk memanggil function check_database() dibawah.

        		if($this->form_validation->run() == FALSE){
        			//redirect('login?gagal=1','refresh');
        			redirect('member/login?gagal=1','refresh');

        		}else{
        			redirect('site','refresh');
        		}
	}

	public function check_database(){
		$akses				= $this->input->post('akses');
		$nama_member		= $this->input->post('nama_member');
		$password_member	= $this->input->post('password_member');
		
		if($akses == "member")
		{
			$this->load->model('model_login');                 
			$result=$this->model_login->admin($nama_member,$password_member);

			if($result){
				foreach($result as $row){
					$sess_array = array (
						'nama_member'=>$row->nama_member,
						'password_member'=>$row->password_member,
						'akses'=>'member'
						);
					$this->session->set_userdata('user',$sess_array);
				}
				return TRUE;
			}else{
				return FALSE;
			}
		}
		elseif($akses == "pemilik")
		{
			$this->load->model('model_login');                 
			$result=$this->model_login->pemilik($nama_member,$password_member);

			if($result){
				foreach($result as $row){
					$sess_array = array (
						'nama_member'=>$row->nama_pemilik,
						'id_member'=>$row->id_pemilik,
						'password_member'=>$row->password_pemilik,
						'akses'=>'pemilik'
						);
					$this->session->set_userdata('user',$sess_array);
				}
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function sigup(){
		$akses = $this->input->post('akses');
		if($akses == "member")
		{
			$nama_member		= $this->input->post('nama_member');
			$email_member		= $this->input->post('email_member');
			$password_member	= $this->input->post('password_member');
			$no_hp				= $this->input->post('no_hp');
			$alamat				= $this->input->post('alamat');
			$bank				= $this->input->post('bank');
			$rek				= $this->input->post('no_rek');
			$an				= $this->input->post('an');
			$persetujuan				= $this->input->post('persetujuan');
			$gambar_ktp			= $_FILES['ktp']['name'];
			
			$config['upload_path']          = './application/views/photo/member/';
			$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
			$config['max_size']				= '1024';
			$config['max_width']  			= '1600';
			$config['max_height']  			= '1200';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('ktp'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$data = array(
								'nama_member' 		=> $nama_member,
								'email_member' 		=> $email_member,
								'password_member' 	=> $password_member,
								'no_hp'			 	=> $no_hp,
								'alamat'			=> $alamat,
								'bank'			=> $bank,
								'rekening'			=> $rek,
								'nama_rekening'			=> $an,
								'foto_ktp'			=> $gambar_ktp,
								'persetujuan'			=> $persetujuan,
				);
				$sukses  = $this->db->insert('tbl_member',$data);
				if($sukses){
					$sql = "SELECT id_member from tbl_member order by id_member desc limit 1";
					$rs=$this->db->query($sql);

					foreach ($rs->result() as $key) {
						$s="INSERT INTO tbl_cart set id_member='$key->id_member'";
						$this->db->query($s);
					}
					echo "<script>alert('Anda berhasil terdaftar. Silahkan login dengan username dan password Anda');window.location='../../index.php/member/login/'</script>";
				}else{
					$this->load->view('v_login');
				}
			}
		}
		elseif($akses == "pemilik")
		{
			$nama_member		= $this->input->post('nama_member');
			$email_member		= $this->input->post('email_member');
			$password_member	= $this->input->post('password_member');
			$no_hp				= $this->input->post('no_hp');
			$alamat				= $this->input->post('alamat');
			$tahun				= $this->input->post('tahun');
			$bulan				= $this->input->post('bulan');
			$bank				= $this->input->post('bank');
			$rek				= $this->input->post('no_rek');
			$an				= $this->input->post('an');
			$persetujuan				= $this->input->post('persetujuan');
			$gambar_ktp			= $_FILES['file1']['name'];
			$gambar_siup			= $_FILES['file2']['name'];
			$gambar_lainnya			= $_FILES['file3']['name'];
			
			$config['upload_path']          = './application/views/photo/pemilik/';
			$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
			$config['max_size']				= '1024';
			$config['max_width']  			= '1600';
			$config['max_height']  			= '1200';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('file1') AND !$this->upload->do_upload('file2') AND !$this->upload->do_upload('file3'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload', $error);
			}
			else
			{
				$this->upload->do_upload('file1');
				$this->upload->do_upload('file2');
				$this->upload->do_upload('file3');
				$data = array(
								'nama_pemilik' 		=> $nama_member,
								'email_pemilik' 	=> $email_member,
								'password_pemilik' 	=> $password_member,
								'no_hp'			 	=> $no_hp,
								'bulan'			 	=> $bulan,
								'tahun'			 	=> $tahun,
								'alamat'			=> $alamat,
								'bank'			=> $bank,
								'rekening'			=> $rek,
								'nama_rekening'			=> $an,
								'status'			=> 'N',
								'photo_ktp'			=> $gambar_ktp,
								'photo_siup'		=> $gambar_siup,
								'photo_lainnya'		=> $gambar_lainnya,
								'persetujuan'		=> $persetujuan
				);
				$sukses  = $this->db->insert('tbl_pemilik',$data);
				if($sukses){
					echo "<script>alert('Anda berhasil terdaftar. Silahkan login dengan username dan password Anda');window.location='../../index.php/pemilik/login/'</script>";
				}else{
					$this->load->view('v_login_pemilik');
				}
			}
		}
	}
}


 ?>