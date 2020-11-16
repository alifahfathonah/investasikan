<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class Site extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->model('model_barang'); 
        $this->load->model('model_cart');                 
		$this->load->library('pagination');

    }
    
public function index(){
	if($this->session->userdata('user')){
		
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/site/site'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photo($config['per_page'],$this->uri->segment(3));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['akses']=$session['akses'];

		$this->load->view('site',$data);
	}else{
		$data['photo'] = $this->db->get('tbl_barang');
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/site/site'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '6'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photo($config['per_page'],$this->uri->segment(3));
		
		$data['nama_member'] = 'Masuk'; //jika tidak login
		$this->load->view('site',$data);

	}

}

	public function product(){
	if($this->session->userdata('user')){
		
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/site/product'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photo($config['per_page'],$this->uri->segment(4));
		
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['akses']=$session['akses'];

		$this->load->view('v_product',$data);
	}else{
		$data['photo'] = $this->db->get('tbl_barang');
		$getData = $this->db->get('tbl_barang');
		$a = $getData->num_rows();
		$config['base_url'] = site_url().'/site/product'; //set the base url for pagination
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 4; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p class=pagination>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		//------------------------------------------------------------------------------------	
		
		
		$data['photo'] = $this->model_barang->get_photo($config['per_page'],$this->uri->segment(4));
		
		$data['nama_member'] = 'login'; //jika tidak login
		$this->load->view('v_product',$data);

		}
	}


	public function detail($kode_barang){
		if($this->session->userdata('user')){
	

		$data['kode_barang'] = $kode_barang;
		$data['data'] = $this->db->get_where('tbl_barang',$data);
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['akses']=$session['akses'];
		$this->load->view('detail.php',$data);
		//$this->load->view('v',$data);
		}else{
			$data['kode_barang'] = $kode_barang;
			$data['data'] = $this->db->get_where('tbl_barang',$data);
			$data['nama_member'] = 'login'; //jika tidak login
			$this->load->view('detail.php',$data);
		}

	}
	

	public function cart(){
		$kode_barang 		= $this->input->post('kode_barang');
		$id_member	 		= $this->input->post('id_member');
		$jumlah_barang		= $this->input->post('jumlah_barang');
		$nama_barang		= $this->input->post('nama_barang');
		$harga				= $this->input->post('harga');
		$photo_url			= $this->input->post('photo_url');
		$total 				= ($harga * $jumlah_barang);
		
		if($this->session->userdata('user')){
			if(isset($_POST['chart'])){
				$data = array(
								'kode_barang'	=> $kode_barang,
								'id_member' 	=> $id_member,
								'jumlah_barang'	=> $jumlah_barang,
								'nama_barang'	=> $nama_barang,
								'harga'			=> $harga,
								'total'			=> $total,
								'tgl'			=> $d=date('d'),
								'photo_url'		=> $photo_url
				);
				$ql="DELETE FROM tbl_cart where harga='0' ";
				$sqlstok = "SELECT * from tbl_barang where kode_barang='$kode_barang'";
				$rsstok = $this->db->query($sqlstok);
				foreach ($rsstok->result() as $v)
				{
					
				}
				if($v->stok > $jumlah_barang)
				{
					$jumlah_stok = $v->stok - $jumlah_barang;
					$ql1="UPDATE tbl_stok set jumlah_stok='$jumlah_stok' where kode_barang='$kode_barang' ";
					$ql2="UPDATE tbl_barang set stok='$jumlah_stok' where kode_barang='$kode_barang' ";
					$this->db->query($ql1); //menghapus  id yang masuk ke tabel cart pertama saat daftar
					$this->db->query($ql2); //menghapus  id yang masuk ke tabel cart pertama saat daftar
					$this->db->query($ql); //menghapus  id yang masuk ke tabel cart pertama saat daftar
					$sukses=$this->db->insert('tbl_cart',$data);
					if($sukses)
					{
						redirect('site/v_chart');
					}
					else
					{
						$this->load->view('site');
					}
				}
				else
				{
					?>
					<script type="text/javascript">alert("Maaf jumlah pemesanan melebihi stok!");window.location="<?php echo base_url(); ?>index.php/site/detail/<?php echo $kode_barang ?>";</script>
					<?php
				}
			}/*if isset post cart*/
		}/*if isset post cart*/ 
		else
		{
			$data['nama_member'] = 'login'; //jika tidak login
			$this->load->view('v_login',$data);
		}/*end session*/
	}/*end session*/
	
	public function v_chart(){
		
			if($this->session->userdata('user')){

				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
			//$data['kode_barang']	= $kode_barang;
				/*$d['id_member']		= 1;
				$d['d'] 			= $this->db->get_where('tbl_cart',$data);//mengambil kode barang untuk di tampikan ke kerangjang */
				$table = 'tbl_order';
				$data['kodeunik'] = $this->model_cart->getkodeunik($table); 
				$this->load->view('v_cart',$data);

			}else{
				$data['nama_member'] = 'login'; //jika tidak login

				$this->load->view('v_login');
			}
		}

	public function finish(){
		if($this->session->userdata('user')){

			if(isset($_POST['finish'])){

				$kode_cart		= $this->input->post('kode_cart');
				$id_member		= $this->input->post('id_member');
				$total 			= $this->input->post('total');
				$jumlah_barang	= $this->input->post('jumlah_barang');

				$data = array('kode_cart' 		=> $kode_cart ,
							   'id_member' 		=> $id_member,
							   'total'		 	=> $total,
							   'jumlah_barang' 	=> $jumlah_barang,
				 );

                                $d=date('d');
                                $m=date('m');
                                $y=date('y');
                                $date =$d.$m.$y;
                               /*mengupdate tanggal agar tidak bisa belanja di hari yang sama*/

				$sql = "UPDATE tbl_cart set date ='$date',konfirmasi='1',kode_cart='$kode_cart' where id_member='$id_member' and tgl='$d' ";
				$this->db->query($sql);
				$sukses = $this->db->insert('tbl_order',$data);
				if($sukses){
					
		$session=$this->session->userdata('user');
		$data['nama_member']=$session['nama_member'];
		$data['akses']=$session['akses'];
					$this->load->view('v_finish',$data);
				}

			}

		}else{
			$data['nama_member'] = 'login'; //jika tidak login

				$this->load->view('v_login');
		}
	}	

	public function biling(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

			$this->load->view('v_biling',$data);
		}
	}

	public function panduan(){
		if($this->uri->segment('3') == "saran")
		{
			if($this->session->userdata('user')){
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				
				$this->load->view('v_saran',$data);
			}
			else
			{
				$data['nama_member'] = 'login'; //jika tidak login
				$this->load->view('v_saran',$data);
			}		
		}
		if($this->uri->segment('3') == "pemilik")
		{
			if($this->session->userdata('user')){
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				
				$this->load->view('v_panduan_pemilik',$data);
			}
			else
			{
				$data['nama_member'] = 'login'; //jika tidak login
				$this->load->view('v_panduan_pemilik',$data);
			}		
		}
		else
		{
			if($this->session->userdata('user')){
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				
				$this->load->view('v_panduan',$data);
			}
			else
			{
				$data['nama_member'] = 'login'; //jika tidak login
				$this->load->view('v_panduan',$data);
			}
		}		
	}

	public function syarat(){
		if($this->session->userdata('user')){
			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];
			
			$this->load->view('v_syarat',$data);
		}
		else
		{
			$data['nama_member'] = 'login'; //jika tidak login
			$this->load->view('v_syarat',$data);
		}		
	}

		public function cara(){
		if($this->session->userdata('user')){


			$session=$this->session->userdata('user');
			$data['nama_member']=$session['nama_member'];
			$data['akses']=$session['akses'];

		$this->load->view('v_cara',$data);
	}else{
				$data['nama_member'] = 'login'; //jika tidak login

				$this->load->view('v_login',$data);
	}
	}

	public function hapus_beli($id_cart){
		
			$data['id_cart']	= $id_cart;
			$sql			= $this->db->delete('tbl_cart',array('id_cart'=>$id_cart));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_cart ?>");window.location="<?php echo base_url(); ?>index.php/site/v_chart";
			</script>
			<?php	
		}else{
			?>	
			<script type="text/javascript">
			alert("GAGAL di hapus data <?php echo $kode_barang ?>");window.location="<?php echo base_url(); ?>index.php/view_barang";
			</script>
			<?php	
		}
		


	}
	
	public function edit_beli($id_cart){
		if($this->session->userdata('user')){
			if($this->input->post('edit_cart'))
			{
				$id = $this->input->post('id');
				$harga = $this->input->post('harga');
				$jumlah = $this->input->post('jumlah');
				$total = $jumlah * $harga;
				$data = array(
						'jumlah_barang' => $jumlah,
						'total' => $total
				);
				$this->db->where('id_cart', $id);
				$sukses = $this->db->update('tbl_cart', $data);
				if($sukses == TRUE){
					redirect('site/v_chart','refresh');
					return $sukses;
				}else{
					return FALSE;
					exit();
					redirect('site/v_chart','refresh');
				}
			}
			else
			{
				$data['cart'] = $this->model_cart->get_cart($id_cart)->row();
				$session=$this->session->userdata('user');
				$data['nama_member']=$session['nama_member'];
				$data['akses']=$session['akses'];
				$this->load->view('v_edit_cart',$data);
			}
		}else{
			$data['nama_member'] = 'login';
			$this->load->view('v_login',$data);
		}
	}

	public function logout(){
        $this->session->unset_userdata('user');
        redirect('site','refresh');
    }





}