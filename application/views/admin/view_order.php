
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
                   
</div>
				<div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                    <th>Kode Cart</th>
                                    <th>Nama Member</th>
                                    <th>HP</th>
                                    <th>Jumlah Barang</th>
                                    <th>Total</th>
                                    <th>Tanggal Order</th>
                                    <th>Konfirmasi</th>
                                    <th>Action</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                      <tr>
			                                <td><?php echo $row->kode_cart ?></td>
			                                <td>
			                                	<?php $sql = "SELECT * FROM tbl_member where id_member='$row->id_member'"; $rs=$this->db->query($sql);
			                                		foreach ($rs->result() as $key) {
			                                			echo $key->nama_member;
			                                		}
			                                	 ?>
			                                </td>
			                                <td><?php echo $key->no_hp ?></td>
			                                <td><?php echo $row->jumlah_barang ?></td>
			                                <td>Rp. <?php echo number_format($row->total ,2) ?></td>
			                                <td><?php echo $row->tanggal_order ?></td>
			                                <td><?php 
			                                		if($row->konfirmasi == '0'){
			                                			echo "belum di bayar";
			                                			?>
			                                			<div class="alert alert-warning">
			                                				<b>BELUM DI BAYAR</b>
			                                				
			                                			</div>
			                                			<?php
			                                		}elseif($row->konfirmasi == '1'){
			                                			?>
			                                			<div class="alert alert-success">
			                                				<b>SUDAH DI BAYAR</b>
			                                			</div>
			                                			<?php
			                                		}
			                                 ?></td>
			                                 <td>
			                                <a href="index.php/ci_admin/cek_konfirmasi/<?php echo $row->kode_cart ?>" title="">
			                                    <li class="fa fa-pencil-square-o">
			                                    Konfirmasi
			                                    </li>
			                                </a> &nbsp; &nbsp; 
			                                 <a href="index.php/ci_admin/detail_order/<?php echo $row->kode_cart ?>" title="">
			                                    <li class="fa fa-pencil-square-o">
			                                    Detail
			                                    </li>
			                                </a> &nbsp; &nbsp; 
			                                
			                                </td>
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->

 
