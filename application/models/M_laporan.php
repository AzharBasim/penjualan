<?php
class M_laporan extends CI_Model{
	function get_stok_produk(){
		$hsl=$this->db->query("SELECT kategori_id,kategori_nama,produk_nama,produk_stok FROM tbl_kategori JOIN tbl_produk ON kategori_id=produk_kategori_id GROUP BY kategori_id,produk_nama");
		return $hsl;
	}
	function get_data_produk(){
		$hsl=$this->db->query("SELECT kategori_id,produk_id,kategori_nama,produk_nama,produk_satuan,produk_harjul,produk_stok FROM tbl_kategori JOIN tbl_produk ON kategori_id=produk_kategori_id GROUP BY kategori_id,produk_nama");
		return $hsl;
	}
	function get_data_penjualan(){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,d_jual_produk_id,d_jual_produk_nama,jual_pembeli,jual_user_id,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_penjualan(){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,d_jual_produk_id,d_jual_produk_nama,jual_pembeli,jual_user_id,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,sum(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_data_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_produk_id,d_jual_produk_nama,jual_pembeli,jual_user_id,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE(jual_tanggal)='$tanggal' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_data__total_jual_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_produk_id,d_jual_produk_nama,d_jual_produk_satuan,jual_pembeli,jual_user_id,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE(jual_tanggal)='$tanggal' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_bulan_jual(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan FROM tbl_jual");
		return $hsl;
	}
	function get_tahun_jual(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(jual_tanggal) AS tahun FROM tbl_jual");
		return $hsl;
	}
	function get_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_pembeli,jual_user_id,d_jual_produk_id,d_jual_produk_nama,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_jual_perbulan($bulan){
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_pembeli,jual_user_id,d_jual_produk_id,d_jual_produk_nama,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT jual_nofak,YEAR(jual_tanggal) AS tahun,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_produk_id,d_jual_produk_nama,jual_pembeli,jual_user_id,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE YEAR(jual_tanggal)='$tahun' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	function get_total_jual_pertahun($tahun){
		$hsl=$this->db->query("SELECT jual_nofak,YEAR(jual_tanggal) AS tahun,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_produk_id,d_jual_produk_nama,jual_pembeli,jual_user_id,d_jual_produk_satuan,d_jual_produk_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE YEAR(jual_tanggal)='$tahun' ORDER BY jual_nofak DESC");
		return $hsl;
	}
	//=========Laporan Laba rugi============
	// function get_lap_laba_rugi($bulan){
	// 	$hsl=$this->db->query("SELECT DATE_FORMAT(jual_tanggal,'%d %M %Y %H:%i:%s') as jual_tanggal,d_jual_produk_nama,d_jual_produk_satuan,d_jual_produk_harjul,(d_jual_produk_harjul-d_jual_produk_harpok) AS keunt,d_jual_qty,d_jual_diskon,((d_jual_produk_harjul-d_jual_produk_harpok)*d_jual_qty)-(d_jual_qty*d_jual_diskon) AS untung_bersih FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
	// 	return $hsl;
	// }
	// function get_total_lap_laba_rugi($bulan){
	// 	$hsl=$this->db->query("SELECT DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,d_jual_produk_nama,d_jual_produk_satuan,d_jual_produk_harjul,(d_jual_produk_harjul-d_jual_produk_harpok) AS keunt,d_jual_qty,d_jual_diskon,SUM(((d_jual_produk_harjul-d_jual_produk_harpok)*d_jual_qty)-(d_jual_qty*d_jual_diskon)) AS total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
	// 	return $hsl;
	// }
}