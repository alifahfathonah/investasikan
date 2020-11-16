
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
                                    <th>Kode Barang</th>
                                    <th>Gambar</th>
                                    <th>Nama Barang</th>
                                    <th>jumlah Barang</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                             <?php foreach($data->result() as $row):?>                            
                                      <tr>
			                                <td><?php echo $row->kode_barang ?></td>
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
			                                <td><?php echo $row->nama_barang ?></td>
			                                <td><?php echo $row->jumlah_barang ?></td>
			                                <td><?php echo $row->harga ?></td>
			                                <td><?php echo $row->total ?></td>
                                    </tr>
<?php endforeach; ?>
                                                                            

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->

 
