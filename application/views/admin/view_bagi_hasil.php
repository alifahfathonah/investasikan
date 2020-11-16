
  <base href="<?php echo base_url() ?>" />



<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#D0DFA5; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>
<div class="col-lg-12">
                    <!-- <h1 class="page-header">TABEL DATA GURU</h1> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Pemilik</th>
                                    <th>No Rekening</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                      <tr>
			                                <td><?php echo $row->id_bagi_hasil; ?></td>
			                                <td><?php       
										            $image = array(
										              'src' => 'application/views/photo/pemilik/'.($row->photo_url),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			                                </td>
			                                <td><?php echo $row->kode_barang; ?></td>
			                                <td><?php echo $row->nama_barang; ?></td>
			                               <td>
			                                	<?php $sql = "SELECT * FROM tbl_pemilik where id_pemilik='$row->id_pemilik'"; $rs=$this->db->query($sql)->row();
			                                		echo $rs->nama_pemilik;
			                                	 ?>
			                                </td>
			                                <td><?php echo $rs->rekening; ?></td>
			                                <td><?php echo $row->keterangan; ?></td>
			                                 <td>
											 <?php if($row->konfirmasi == "n"){ ?>
			                                 <a href="index.php/ci_admin/cek_konfirmasi_bagi_hasil/<?php echo $row->id_bagi_hasil; ?>" title="">
			                                    <li class="fa fa-pencil-square-o">
			                                    Konfirmasi
			                                    </li>
											 </a> <?php } ?> &nbsp; &nbsp; 
			                                <a href="index.php/ci_admin/hapus_konfirmasiid_bagi_hasil/<?php echo $row->id_bagi_hasil; ?>" title="">
			                                     <li class="fa fa-trash-o" onclick="hapus (1)">
			                                    HAPUS
			                                    </li>
			                                </a> 
			                                </td>
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->

 
