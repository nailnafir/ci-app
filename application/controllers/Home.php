<?php

class Home extends CI_Controller {
	public function index($barang = '') {
		$data['judul'] = 'Halaman Home';
		$data['barang'] = $barang;
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
