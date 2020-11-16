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
	LAPORAN DATA KESELURUHAN MEMBER <br/>
	<hr/>
	</h4>
</center>
<table width="100%" align="center">
                    <!-- <h1 class="page-header">TABEL DATA GURU</h1> -->
             <thead>
                                      <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                            <td><?php echo $row->id_member ?></td>
			                                <td><?php echo $row->nama_member ?></td>
			                                <td><?php echo $row->email_member ?></td>
			                                <td>*****</td>
			                                <td><?php echo $row->no_hp ?></td>
			                                <td><?php echo $row->alamat ?></td>
			                               
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                                                                </tbody>
                                        <tr>
                                        	<td>Jumlah</td>
                                        	<td></td>
                                        	<td></td>
                                        	<td></td>
                                        	<td></td>
                                        	<td>
                                        		<?php 

                                        			echo $data->num_rows()

                                        		 ?>
                                        	</td>
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