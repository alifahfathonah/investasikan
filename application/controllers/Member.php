<?php 

class Member extends ci_controller{


	public function konfirmasi($kode_cart){

	if($this->session->userdata('user')){
		$data['kode_cart']		= $kode_cart;
		$data['content']		= 'v_konfirmasi';
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_konfirmasi',$data);
		}else{
			$this->load->view('v_login');
		}

	}

	public function insert_konfirmasi(){
	if($this->session->userdata('user')){

		$kode_cart		= $this->input->post('kode_cart');
		$id_member		= $this->input->post('id_member');
		$no_rekening	= $this->input->post('no_rekening');
		$keterangan		= $this->input->post('keterangan');
		$persetujuan		= $this->input->post('persetujuan');
		$gambar 		= $_FILES['userfile']['name'];
		$konfirmasi 	= 'n';
		

		// Konfigurasi Upload Gambar
				$config['upload_path']          = './application/views/photo';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']				= '1024';
				$config['max_width']  			= '1600';
				$config['max_height']  			= '1200';

				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        
						$data = array(
										'kode_cart' 	=> $kode_cart,
										'id_member' 	=> $id_member,
										'no_rekening'   => $no_rekening,
										'keterangan'    => $keterangan,
										'konfirmasi'    => $konfirmasi,
										'photo_url'      => $gambar
						);
						$sukses = $this->db->insert('tbl_konfirmasi', $data);
						if($sukses == TRUE){
							$session=$this->session->userdata('user');
							$data['nama_member']=$session['nama_member'];
							$data['info']	= '1';
							$this->load->view('v_biling',$data);
						}else{
							return FALSE;
							exit();
							redirect('ci_admin/view_barang','refresh');

						}
						}
                }else{
				$this->load->view('v_login');
		}

	}

	public function cart(){
	
			$kode_barang 		= $this->input->post('kode_barang');
			$id_member	 		= $this->input->post('id_member');
			$jumlah_barang		= $this->input->post('jumlah_barang');
			$nama_barang		= $this->input->post('nama_barang');
			$harga				= $this->input->post('harga');
			$photo_url			= $this->input->post('photo_url');
			$total 				= $harga * $jumlah_barang;

	if($this->session->userdata('user')){

		if(isset($_POST['chart'])){

				$sql = "SELECT * FROM tbl_cart where id_member='$id_member'";
				$rs = $this->db->query($sql);
				foreach ($rs->result() as $key) {
								$d=date('d');
                                $m=date('m');
                                $y=date('y');
                                $date =$d.$m.$y;
						if($key->date == $date){
							//$data['info']="SILAHKAN BELANJA LAGI BESOK";
							?>
							<script type="text/javascript">
								alert('ANDA BERBELANJA HARI INI SILAHKAN BERBELANJA BESOK TERIMA KASIH');window.location='<?php echo base_url(); ?>index.php/site/biling';
							</script>
							<?php
							
						}else{

							$data = array('kode_barang' 		=>$kode_barang  ,
											'id_member' 		=>$id_member ,
											'jumlah_barang' 	=>$jumlah_barang ,
											'nama_barang' 		=>$nama_barang ,
											'harga' 			=>$harga,
											'total' 			=>$total,
											'tgl'				=> $d=date('d'),
											'photo_url' 		=>$photo_url 

							 );
							$ql="DELETE FROM tbl_cart where harga='0' ";
							$this->db->query($ql); //menghapus  id yang masuk ke tabel cart pertama saat daftar
							$sukses=$this->db->insert('tbl_cart',$data);
									if($sukses){
										redirect('site/v_chart');	
									}else{
											$this->load->view('site');
									}

						}/*end if date*/
				}/*end foreach*/ 
		}/*if isset post cart*/ 
		else{
			$data['nama_member'] = 'login'; //jika tidak login


                $this->load->view('v_biling',$data);

		}/*end session*/
		}/*if isset post cart*/ 
		else{
			$data['nama_member'] = 'login'; //jika tidak login


                $this->load->view('v_login',$data);

		}/*end session*/
		}/*end session*/


	public function biling(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];

			$this->load->view('v_biling',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function history_order(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

			$this->load->view('v_history_order',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function history_investasi(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

			$this->load->view('v_history_investasi',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function bagi_hasil(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

			$this->load->view('v_bagi_hasil',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function perbaruan_investasi(){
		if($this->session->userdata('user')){
			if($this->uri->segment('3') == "lihat")
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_lihat_perbaruan_investasi',$data);
			}
			elseif($this->uri->segment('3') == "balas")
			{
				if($this->input->post('tambah'))
				{
					$data = array(
									'id_perbaruan' => $this->input->post('perbaruan'),
									'kode_barang' => $this->input->post('kode_barang'),
									'id_member' => $this->input->post('member'),
									'id_pemilik' => $this->input->post('pemilik'),
									'tanggal_balas_perbaruan' => date('Y-m-d'),
									'isi_balas_perbaruan' => $this->input->post('isi')
					);
					$sukses = $this->db->insert('tbl_balas_perbaruan', $data);
					if($sukses == TRUE){
						redirect('member/perbaruan_investasi/lihat/'.$this->input->post('kode_barang').'','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('member/perbaruan_investasi/lihat/'.$this->input->post('kode_barang').'','refresh');
					}
				}
				else
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_balas_perbaruan_investasi',$data);
				}				
			}
			else
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];

				$this->load->view('v_perbaruan_investasi',$data);
			}
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}

	public function account(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];
			$this->load->view('v_account',$data);
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function edit_akun()
	{
		if($this->input->post('edit_akun'))
		{
			if($this->input->post('akses') == "member")
			{
				$id = $this->input->post('id');
				$akses = $this->input->post('akses');
				$password = $this->input->post('password');
				if(!empty($password))
				{
					$data = array(
									'email_member' => $this->input->post('email'),
									'password_member' => $this->input->post('password'),
									'alamat' => $this->input->post('alamat'),
									'bank' => $this->input->post('bank'),
									'rekening' => $this->input->post('rekening'),
									'nama_rekening' => $this->input->post('nama_rekening'),
									'no_hp' => $this->input->post('hp')
					);
					$this->db->where('id_member', $id);
					$sukses = $this->db->update('tbl_member', $data);
					if($sukses == TRUE){
						redirect('member/account/','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('member/account','refresh');
					}
				}
				else
				{
					$data = array(
									'email_member' => $this->input->post('email'),
									'alamat' => $this->input->post('alamat'),
									'bank' => $this->input->post('bank'),
									'rekening' => $this->input->post('rekening'),
									'nama_rekening' => $this->input->post('nama_rekening'),
									'no_hp' => $this->input->post('hp')
					);
					$this->db->where('id_member', $id);
					$sukses = $this->db->update('tbl_member', $data);
					if($sukses == TRUE){
						redirect('member/account/','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('member/account','refresh');
					}
				}
			}
			elseif($this->input->post('akses') == "pemilik")
			{
				$id = $this->input->post('id');
				$akses = $this->input->post('akses');
				$password = $this->input->post('password');
				if(!empty($password))
				{
					$data = array(
									'email_pemilik' => $this->input->post('email'),
									'password_pemilik' => $this->input->post('password'),
									'alamat' => $this->input->post('alamat'),
									'bank' => $this->input->post('bank'),
									'rekening' => $this->input->post('rekening'),
									'nama_rekening' => $this->input->post('nama_rekening'),
									'no_hp' => $this->input->post('hp')
					);
					$this->db->where('id_pemilik', $id);
					$sukses = $this->db->update('tbl_pemilik', $data);
					if($sukses == TRUE){
						redirect('member/account/','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('member/account','refresh');
					}
				}
				else
				{
					$data = array(
									'email_pemilik' => $this->input->post('email'),
									'alamat' => $this->input->post('alamat'),
									'bank' => $this->input->post('bank'),
									'rekening' => $this->input->post('rekening'),
									'nama_rekening' => $this->input->post('nama_rekening'),
									'no_hp' => $this->input->post('hp')
					);
					$this->db->where('id_pemilik', $id);
					$sukses = $this->db->update('tbl_pemilik', $data);
					if($sukses == TRUE){
						redirect('member/account/','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('member/account','refresh');
					}
				}
			}
		}
		else
		{
			$akses = $this->uri->segment('4');
			$akun = $this->uri->segment('3');
			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];
			$this->load->view('v_edit_account',$data);
		}
	}
	
	public function edit_foto()
	{
		if($this->input->post('edit_foto'))
		{
			if($this->input->post('akses') == "member")
			{
				if($this->input->post('jenis') == "ktp")
				{
					$id = $this->input->post('member');
					$gambar_ktp			= $_FILES['foto']['name'];
				
					$config['upload_path']          = './application/views/photo/member/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';
					
					$this->load->library('upload', $config);
					
					if (!$this->upload->do_upload('foto'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('upload', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						$data = array(
										'foto_ktp'			=> $gambar_ktp
						);
						$this->db->where('id_member', $id);
						$sukses = $this->db->update('tbl_member', $data);
						if($sukses == TRUE){
							redirect('member/account/','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('member/account','refresh');
						}
					}
				}
				
			}
			elseif($this->input->post('akses') == "pemilik")
			{
				if($this->input->post('jenis') == "ktp")
				{
					$id = $this->input->post('member');
					$gambar_ktp			= $_FILES['foto']['name'];
				
					$config['upload_path']          = './application/views/photo/pemilik/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';
					
					$this->load->library('upload', $config);
					
					if (!$this->upload->do_upload('foto'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('upload', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						$data = array(
										'photo_ktp'			=> $gambar_ktp
						);
						$this->db->where('id_pemilik', $id);
						$sukses = $this->db->update('tbl_pemilik', $data);
						if($sukses == TRUE){
							redirect('member/account/','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('member/account','refresh');
						}
					}
				}
				elseif($this->input->post('jenis') == "siup")
				{
					$id = $this->input->post('member');
					$gambar_ktp			= $_FILES['foto']['name'];
				
					$config['upload_path']          = './application/views/photo/pemilik/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';
					
					$this->load->library('upload', $config);
					
					if (!$this->upload->do_upload('foto'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('upload', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						$data = array(
										'photo_siup'			=> $gambar_ktp
						);
						$this->db->where('id_pemilik', $id);
						$sukses = $this->db->update('tbl_pemilik', $data);
						if($sukses == TRUE){
							redirect('member/account/','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('member/account','refresh');
						}
					}
				}
				elseif($this->input->post('jenis') == "lainnya")
				{
					$id = $this->input->post('member');
					$gambar_ktp			= $_FILES['foto']['name'];
				
					$config['upload_path']          = './application/views/photo/pemilik/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';
					
					$this->load->library('upload', $config);
					
					if (!$this->upload->do_upload('foto'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('upload', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						$data = array(
										'photo_lainnya'			=> $gambar_ktp
						);
						$this->db->where('id_pemilik', $id);
						$sukses = $this->db->update('tbl_pemilik', $data);
						if($sukses == TRUE){
							redirect('member/account/','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('member/account','refresh');
						}
					}
				}
				
			}
		}
		else
		{
			$akses = $this->uri->segment('4');
			$akun = $this->uri->segment('3');
			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];
			$this->load->view('v_edit_foto',$data);
		}
	}

	public function login(){
		if($this->session->userdata('user')){

			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
		$this->load->view('v_login');
	}else{
		$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
	}
	}

	public function checkout(){
		redirect('site/biling');
	}
}



 ?>