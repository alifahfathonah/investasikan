<?php 

class Pemilik extends ci_controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('model_barang');                 
    }
	
	public function konfirmasi($kode_cart){

	if($this->session->userdata('user')){
		$data['kode_cart']		= $kode_cart;
		$data['content']		= 'v_konfirmasi';
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$this->load->view('v_home',$data);
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
	
	public function history_order(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

			$this->load->view('v_order_pemilik',$data);
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

	public function login(){
		if($this->session->userdata('user')){

			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
		$this->load->view('v_login_pemilik');
	}else{
		$data['nama_member'] = 'login';
			$this->load->view('v_login_pemilik',$data);
	}
	}
	
	public function produk(){
		if($this->session->userdata('user')){
			if($this->uri->segment('3') == "tambah")
			{
				if($this->input->post('tambah'))
				{
					$this->load->library('form_validation');

	$kode_barang 	= $this->input->post('kode_barang');
	$nama_barang 	= $this->input->post('nama_barang');
	$harga			= $this->input->post('harga');
	$id_pemilik		= $this->input->post('id_pemilik');
	$stok			= $this->input->post('stok');
	$gambar 		= $_FILES['userfile']['name'];
	$keterangan		= $this->input->post('keterangan');
	$persetujuan		= $this->input->post('persetujuan');

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
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'id_pemilik'  => $id_pemilik,
										'stok'        => $stok,
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar,
										'persetujuan'   => $persetujuan
						);
						$sukses = $this->db->insert('tbl_barang', $data);
						if($sukses == TRUE){
							redirect('pemilik/produk','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/produk','refresh');

						}
                }
				}
				else
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$data['kodeunik'] = $this->model_barang->getkodeunik('tbl_barang'); 
					$this->load->view('v_tambah_produk',$data);
				}
			}
			elseif($this->uri->segment('3') == "edit")
			{
				if($this->input->post('edit'))
				{
					if(!empty($_FILES['userfile']['name']))
					{
						$this->load->library('form_validation');
					
					$kode_barang 	= $this->input->post('kode_barang');
					$nama_barang 	= $this->input->post('nama_barang');
					$harga			= $this->input->post('harga');
					$keterangan		= $this->input->post('keterangan');
					$gambar 		= $_FILES['userfile']['name'];
					
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
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar
						);
							$this->db->where('kode_barang', $kode_barang);
							$sukses = $this->db->update('tbl_barang', $data);
						if($sukses == TRUE){
							redirect('pemilik/produk','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/produk','refresh');

						}
						}
					}
					else
					{
						$kode_barang 	= $this->input->post('kode_barang');
					$nama_barang 	= $this->input->post('nama_barang');
					$harga			= $this->input->post('harga');
					$keterangan		= $this->input->post('keterangan');
						$data = array(
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'keterangan'  => $keterangan
						);
							$this->db->where('kode_barang', $kode_barang);
							$sukses = $this->db->update('tbl_barang', $data);
						if($sukses == TRUE){
							redirect('pemilik/produk','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/produk','refresh');
						}
					}
				}
				else
				{
					$session=$this->session->userdata('user');
					$data['kode_barang']	= $this->uri->segment('4');
					$data['data']			=$this->db->get_where('tbl_barang',$data);
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_edit_produk',$data);
				}
			}
			elseif($this->uri->segment('3') == "hapus")
			{
				$kode_barang = $this->uri->segment('4');
			$data['kode_barang']	= $kode_barang;
			$sql			= $this->db->delete('tbl_barang',array('kode_barang'=>$kode_barang));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $kode_barang ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/produk";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_barang ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/produk";
			</script>
			<?php	
		}
			}
			else
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_daftar_produk',$data);
			}			
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function stok()
	{
		if($this->session->userdata('user')){
			if($this->input->post('stok'))
			{
				$kode_barang		= $this->input->post('kode_barang');
				$jumlah_stok		= $this->input->post('jumlah_stok');
				
				$sql = "UPDATE tbl_barang set stok='$jumlah_stok' where kode_barang='$kode_barang'";
				$sqls = "INSERT INTO tbl_stok (jumlah_stok,kode_barang) values ('$jumlah_stok','$kode_barang')";
				$this->db->query($sqls);
				$rs  = $this->db->query($sql);
				if($rs){
					redirect('pemilik/produk');
				}
			}
			else
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_stok_produk',$data);
			}					
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function perbaruan(){
		if($this->session->userdata('user')){
			if($this->uri->segment('3') == "tambah")
			{
				if($this->input->post('tambah'))
				{
					$date = date('Y-m-d');
					$data = array(
									'tanggal_perbaruan' => $date,
									'kode_barang' => $this->input->post('kode_barang'),
									'id_member' => $this->input->post('member'),
									'id_pemilik' => $this->input->post('pemilik'),
									'isi_perbaruan'       => $this->input->post('isi')
					);
					$sukses = $this->db->insert('tbl_perbaruan', $data);
					if($sukses == TRUE){
						redirect('pemilik/perbaruan/lihat/member/'.$this->input->post('member').'/'.$this->input->post('kode_barang').'','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('pemilik/perbaruan/lihat/member/'.$this->input->post('member').'/'.$this->input->post('kode_barang').'','refresh');
					}
				}
				else
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['id_member']=$session['id_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_tambah_perbaruan',$data);
				}
			}
			elseif($this->uri->segment('3') == "lihat")
			{
				if($this->uri->segment('3') == "lihat" && $this->uri->segment('4') == "member")
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$data['id_member']=$session['id_member'];
					$this->load->view('v_lihat_perbaruan',$data);
				}
				elseif($this->uri->segment('3') == "lihat" && $this->uri->segment('4') != "member")
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$data['id_member']=$session['id_member'];
					$this->load->view('v_lihat_perbaruan_member',$data);
				}				
			}
			elseif($this->uri->segment('3') == "baca")
			{
				$session=$this->session->userdata('user');
				$data['id_perbaruan']	= $this->uri->segment('4');
				$data['data']			= $this->db->get_where('tbl_balas_perbaruan',$data);
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$data['id_member']=$session['id_member'];
				$this->load->view('v_baca_perbaruan_member',$data);			
			}
			elseif($this->uri->segment('3') == "edit")
			{
				if($this->input->post('edit'))
				{
					$id = $this->input->post('id_perbaruan');
					$kode_barang = $this->input->post('kode');
					$member = $this->input->post('member');
					$data = array(
									'isi_perbaruan' => $this->input->post('isi')
					);
					$this->db->where('id_perbaruan', $id);
					$sukses = $this->db->update('tbl_perbaruan', $data);
					if($sukses == TRUE){
						redirect('pemilik/perbaruan/lihat/member/'.$member.'/'.$kode_barang.'','refresh');
						return $sukses;
					}else{
						return FALSE;
						exit();
						redirect('pemilik/perbaruan/lihat/member/'.$member.'/'.$kode_barang.'','refresh');
					}
				}
				else
				{
					$data['id_perbaruan']	= $this->uri->segment('4');
					$data['data']			= $this->db->get_where('tbl_perbaruan',$data);
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_edit_perbaruan',$data);
				}					
			}
			elseif($this->uri->segment('3') == "hapus")
			{
				$id = $this->uri->segment('4');
				$kode = $this->uri->segment('5');
				$data['id_perbaruan']	= $id;
				$sql			= $this->db->delete('tbl_perbaruan',array('id_perbaruan'=>$id));
				if($sql){
				?>	
				<script type="text/javascript">
				alert("sukses di hapus data <?php echo $id; ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/perbaruan/lihat/<?php echo $kode; ?>";
				</script>
				<?php	
				}else{
					?>	
					<script type="text/javascript">
					alert("GAGAL di hapus data <?php echo $id; ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/perbaruan/lihat/<?php echo $kode; ?>";
					</script>
					<?php	
				}
			}
			else
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_daftar_perbaruan',$data);
			}			
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
	
	public function bagi_hasil(){
		if($this->session->userdata('user')){
			if($this->uri->segment('3') == "tambah")
			{
				if($this->input->post('tambah'))
				{
					$date = date('Y-m-d');
					
					$kode_barang 	= $this->input->post('kode_barang');
					$cart 	= $this->input->post('cart');
					$member 	= $this->input->post('member');
					$pemilik 	= $this->input->post('pemilik');
					$nama_barang 	= $this->input->post('nama_barang');
					$harga			= $this->input->post('nominal');
					$keterangan		= $this->input->post('keterangan');
					$gambar 		= $_FILES['foto']['name'];
					
					$config['upload_path']          = './application/views/photo/pemilik/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        

						$data = array(
										'id_cart' => $cart,
										'kode_barang' => $kode_barang,
										'nama_barang' => $nama_barang,
										'harga'       => $harga,
										'tanggal'       => $date,
										'id_member'       => $member,
										'id_pemilik'       => $pemilik,
										'konfirmasi'       => 'n',
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar
						);
							$sukses = $this->db->insert('tbl_bagi_hasil', $data);
						if($sukses == TRUE){
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');

						}
					}
				}
				else
				{
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['id_member']=$session['id_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_tambah_bagi_hasil',$data);
				}
			}
			elseif($this->uri->segment('3') == "lihat")
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_lihat_bagi_hasil',$data);
			}
			elseif($this->uri->segment('3') == "edit")
			{
				if($this->input->post('edit'))
				{
					if(!empty($_FILES['foto']['name']))
					{
						$this->load->library('form_validation');
					
					$id 	= $this->input->post('id');
					$id 	= $this->input->post('id');
					$harga			= $this->input->post('nominal');
					$keterangan		= $this->input->post('keterangan');
					$gambar 		= $_FILES['foto']['name'];
					
					$config['upload_path']          = './application/views/photo/pemilik/';
					$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
					$config['max_size']				= '1024';
					$config['max_width']  			= '1600';
					$config['max_height']  			= '1200';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());        

						$data = array(
										'harga'       => $harga,
										'keterangan'  => $keterangan,
										'photo_url'   => $gambar
						);
							$this->db->where('id_bagi_hasil', $id);
							$sukses = $this->db->update('tbl_bagi_hasil', $data);
						if($sukses == TRUE){
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');

						}
						}
					}
					else
					{
						$id 	= $this->input->post('id');
						$cart 	= $this->input->post('cart');
					$harga			= $this->input->post('nominal');
					$keterangan		= $this->input->post('keterangan');
						$data = array(
										'harga'       => $harga,
										'keterangan'  => $keterangan
						);
							$this->db->where('id_bagi_hasil', $id);
							$sukses = $this->db->update('tbl_bagi_hasil', $data);
						if($sukses == TRUE){
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');
							return $sukses;
						}else{
							return FALSE;
							exit();
							redirect('pemilik/bagi_hasil/lihat/'.$cart.'','refresh');
						}
					}
				}
				else
				{
					$data['id_perbaruan']	= $this->uri->segment('4');
					$data['data']			= $this->db->get_where('tbl_perbaruan',$data);
					$session=$this->session->userdata('user');
					$data['nama_member']=$session['nama_member'];
					$data['akses']=$session['akses'];
					$this->load->view('v_edit_bagi_hasil',$data);
				}					
			}
			elseif($this->uri->segment('3') == "hapus")
			{
				$id = $this->uri->segment('4');
				$cart = $this->uri->segment('5');
				$data['id_bagi_hasil']	= $id;
				$sql			= $this->db->delete('tbl_bagi_hasil',array('id_bagi_hasil'=>$id));
				if($sql){
				?>	
				<script type="text/javascript">
				alert("sukses di hapus data <?php echo $id; ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/bagi_hasil/lihat/<?php echo $cart; ?>";
				</script>
				<?php	
				}else{
					?>	
					<script type="text/javascript">
					alert("GAGAL di hapus data <?php echo $id; ?>");window.location="<?php echo base_url(); ?>index.php/pemilik/bagi_hasil/lihat/<?php echo $cart; ?>";
					</script>
					<?php	
				}
			}
			else
			{
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_bagi_hasil_pemilik',$data);
			}			
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}
}



 ?>