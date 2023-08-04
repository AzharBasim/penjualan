<?php
class Produk extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_produk');
	}
	function index(){
	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
		$data['data']=$this->m_produk->tampil_produk();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('admin/v_produk',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_produk(){
	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
		$kobar=$this->m_produk->get_kobar();
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_produk->simpan_produk($kobar,$nabar,$kat,$satuan,$harjul,$stok,$min_stok);

		redirect('admin/produk');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_produk(){
	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$this->m_produk->update_produk($kobar,$nabar,$kat,$satuan,$harjul,$stok,$min_stok);
		redirect('admin/produk');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function cetak_barcode($id=''){
		$data['data']=$this->m_produk->cetak_barcode($id);
		$this->load->view('admin/laporan/v_barcode',$data);
		redirect('admin/produk');
	}
	function hapus_produk(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_produk->hapus_produk($kode);
		redirect('admin/produk');
	}else{
        redirect('admin/produk');
    }
	}
}