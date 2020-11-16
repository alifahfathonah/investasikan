
<base href="<?php echo base_url() ?>" />
 <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="assets/ckeditor/contents.css">
        <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
    
        <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    
        <script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
        <script src="assets/plugins/toastr/toastr.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
        <script src="assets/plugins/truncate/jquery.truncate.js"></script>
        <script src="assets/plugins/summernote/dist/summernote.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<?php echo form_open_multipart('ci_admin/proces_TambahBarang') ?>

<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA PRODUK INVESTASI</th></tr>
        <tr>
          <td width="150">Kode Produk</td>
          <td>
            <div class='col-sm-2'>
              <input type='text' name='kode_barang' value="<?php echo $kodeunik ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_barang" value="<?php echo $kodeunik ?>">
            </div>             

        <tr>
          <td>Nama Produk</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama_barang' placeholder='Nama Produk' class='form-control'  value='' >
              </div>
            </td>
        </tr>

        <tr>
          <td>Harga</td>
          <td>
              <div class="col-md-3">
              <input type='number' name='harga' placeholder='Harga' class='form-control'  value='' >
              </div>
            </td>
        </tr>


        <tr>
          <td>Jenis Produk</td>
          <td>
               <div class='col-sm-4'>
               <select name='kode_jenis'  class='form-control' >

                  <?php $sql=$this->db->get('tbl_batik'); foreach ($sql->result() as $row) : ?>
                  <option value='<?php echo $row->kode_jenis ?>'><?php echo $row->jenis_batik ?>
                <?php  endforeach; ?>
                  </select>

              </div>
          </tr>

         <tr>
           <td>Gambar</td>
          <td>
              <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail"><img src="assets/images/bg.jpg" width="300" alt=""/>
        </div>
        <div class="fileupload-preview fileupload-exists thumbnail"></div>
        <div>
        <div class="col-sm-4 control-label">
            <span class="btn btn-light-grey btn-file"><span class="fileupload-new">
            <i class="fa fa-picture-o "></i> Select image</span><span class="fileupload-exists btn btn-danger">
            <i class="fa fa-picture-o btn btn-danger"></i> Change</span>
                <input type="file"name='userfile' id="file" value="">
        
            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                <i class="fa fa-times"></i> Remove
            </a>
  </span>
            </td>

        <tr>
        <td>Keterangan</td>
          <td><textarea name="keterangan" id="news"></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>

    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-success">
<input type="reset"  value="RESET" class="btn btn-danger">
            <a href="#" class="btn btn-primary">KEMBALI</a></form>

           </form>