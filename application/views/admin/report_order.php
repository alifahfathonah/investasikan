<!DOCTYPE html>
<html>
<head>
	<title>REPORT ORDER</title>
</head>
<body>


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
	.head{
		border-radius: 5px;
		border:1px solid black;
		padding: 5px;
	}
	button{
		background: blue;
		color: white;
		border-radius: 5px;
		width: 100px;
		height: 30px;
	}
</style>

<center>
	<h2>
		<div class="">
		BATIK BERKAH JAMBI <br/>
	
	</h2>
	 Jl. Sumantri Brojonegoro No.50-54 Simpang Pulai, Kota Jambi. Jambi Telp (0741) 64398
		</div>
	<h4>
	LAPORAN DATA KESELURUHAN ORDER <br/>
	<hr/>
	</h4>
</center>
                    <!-- <h1 class="page-header">TABEL DATA GURU</h1> -->
           <table width="100%" align="center">
                                    <thead>
                                      <tr>
                                    <th>Kode Cart</th>
                                    <th>Nama Member</th>
                                    <th>HP</th>
                                    <th>Jumlah Barang</th>
                                    <th>Total</th>
                                    <th>Tanggal Order</th>
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
			                                
			                                
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                    
                                    	<tr>
                                    		<td>TOTAL</td>
                                    		<td></td>
                                    		<td></td>
                                    		<td></td>
                                   		<td>
                                    			<?php 
                                    				$total=0;
						                foreach ($data->result() as $tampil) {
						                  # code...
						                  $sub=$tampil->total;
						                 
						                  $total+=$sub;
						                }
						                   echo '<div style="color: red">'.'Rp. '.number_format($total,2).'</div>';
                                    			 ?>
                                    		</td>
                                    		<td></td>
                                    	</tr>
                                    </table>
                                    <button type="submit" onclick="proses()" name="catak">cetak</button>

<script type="text/javascript">
	function proses(){
		window.print();
		
	}
</script>
                            </div>
                            <!-- /.table-responsive -->

 


</body>
</html>