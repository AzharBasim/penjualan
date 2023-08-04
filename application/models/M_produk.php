<?php
class M_produk extends CI_Model{

	function hapus_produk($kode){
		$hsl=$this->db->query("DELETE FROM tbl_produk where produk_id='$kode'");
		return $hsl;
	}

	function update_produk($kobar,$nabar,$kat,$satuan,$harjul,$stok,$min_stok){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("UPDATE tbl_produk SET produk_nama='$nabar',produk_satuan='$satuan',produk_harjul='$harjul',produk_stok='$stok',produk_min_stok='$min_stok',produk_tgl_last_update=NOW(),produk_kategori_id='$kat',produk_user_id='$user_id' WHERE produk_id='$kobar'");
		return $hsl;
	}

	function tampil_produk(){
		$hsl=$this->db->query("SELECT produk_id,produk_nama,produk_satuan,produk_harjul,produk_stok,produk_min_stok,produk_kategori_id,kategori_nama FROM tbl_produk JOIN tbl_kategori ON produk_kategori_id=kategori_id");
		return $hsl;
	}

	function simpan_produk($kobar,$nabar,$kat,$satuan,$harjul,$stok,$min_stok){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("INSERT INTO tbl_produk (produk_id,produk_nama,produk_satuan,produk_stok,produk_min_stok,produk_kategori_id,produk_user_id) VALUES ('$kobar','$nabar','$satuan','$harjul','$stok','$min_stok','$kat','$user_id')");
		return $hsl;
	}


	function get_produk($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_produk where produk_id='$kobar'");
		return $hsl;
	}

	function get_kobar(){
		$q = $this->db->query("SELECT MAX(RIGHT(produk_id,6)) AS kd_max FROM tbl_produk");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PJ".$kd;
	}

}