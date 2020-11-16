
<base href="<?php echo base_url() ?>" /><!-- 
 <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="assets/ckeditor/contents.css"> -->

<?php echo form_open('ci_admin/proces_TambahStok') ?>

<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA STOK</th></tr>
         
        <tr>
          <td>Kode Barang</td>
          <td>
              <div class='col-sm-4'>
              <select name='kode_barang'  class='form-control' > 
              <?php $sql=$this->db->get('tbl_barang');
                  foreach ($sql->result() as $key) {
                    ?>
              <option value='<?php echo $key->kode_barang ?>'><?php echo $key->kode_barang ?></option> 

                    <?php
                  }
               ?>
              </select></div>        
            </td>
        </tr>
        
         <tr>
          <td>Jumlah Stok</td>
          <td>
              <div class="col-md-3">
              <input type='number' name='jumlah_stok' placeholder='jumlah stok' class='form-control'  value='' >
              </div>
            </td>
        </tr>

    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-success">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="#" class="btn btn-primary">KEMBALI</a></form>

           </form>