<?php 
 class Model_cart extends CI_Model {     
     public function __construct() { 
     parent::__construct();     
   } 
 
  
   function getkodeunik($table) { 
        $q = $this->db->query("SELECT MAX(RIGHT(kode_cart,4)) AS idmax FROM ".$table);
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "0001";

        }
        $kar = "BBJ"; //karakter depan kodenya
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$kd;
   } 


   function get_photo($perPage, $uri) {

        
        $this->db->order_by('kode_barang','DESC');
        
        $query = $getData = $this->db->get('tbl_barang', $perPage, $uri);
        
        if($getData->num_rows() > 0)
        
        return $query;
        
        else
        
        return null;
    
  }


   function get_cart($id) {
	   $this->db->where('id_cart', $id);
	   $this->db->from('tbl_cart');
	   $query = $this->db->get('');
	   return $query;
	  }

  function link_photo($kode_barang){
    
      $this->db->where('kode_barang',$kode_barang);
        $query = $getData = $this->db->get('tbl_barang');

      if($getData->num_rows() > 0)
      return $query;
      else
      return null;
    
  }
 } 