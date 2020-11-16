
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
                                    <th>Nama Member</th>
                                    <th>Gambar</th>
                                    <th>Kode Cart</th>
                                    <th>Kode barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Tanggal Belanja</th>
                                    <th>Action</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                      <tr>
			                                <td>
			                                	<?php $sql = "SELECT * FROM tbl_member where id_member='$row->id_member'"; $rs=$this->db->query($sql);
			                                		foreach ($rs->result() as $key) {
			                                			echo $key->nama_member;
			                                		}
			                                	 ?>
			                                </td>
			                                <td><?php       
										            $image = array(
										              'src' => 'application/views/photo/'.($row->photo_url),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			                                </td>
			                                <td><?php echo $row->kode_cart ?></td>
			                                <td><?php echo $row->kode_barang ?></td>
			                                <td><?php echo $row->jumlah_barang ?></td>
			                                <td>Rp. <?php echo number_format($row->harga ,2) ?></td>
			                                <td>Rp. <?php echo number_format($row->total ,2) ?></td>
			                                <td><?php echo $row->tanggal_belanja ?></td>
			                                
			                                 <td>
			                                
			                                 <a href="index.php/ci_admin/detail_order/<?php echo $row->kode_cart ?>" title="">
			                                    <li class="fa fa-pencil-square-o">
			                                    Detail
			                                    </li>
			                                </a> &nbsp; &nbsp; 
			                                <a href="index.php/ci_admin/hapus_cart/<?php echo $row->kode_cart ?>" title="">
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

 
