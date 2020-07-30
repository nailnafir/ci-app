<?php

class Barang_model extends CI_Model {
	public function getAllBarang() {
		return $this->db->get('barang')->result_array();
	}

	public function tambahDataBarang() {
		$data = [
			"nama_brg" => $this->input->post('nama_brg', true),
			"harga_brg" => $this->input->post('harga_brg', true),
			"kategori" => $this->input->post('kategori', true),
			"stok_brg" => $this->input->post('stok_brg', true)
		];
		$this->db->insert('barang', $data);
	}

	public function hapusDataBarang($id) {
		// $this->db->where('id', $id);
		$this->db->delete('barang', ['id' => $id]);
	}

	public function getBarangById($id) {
		return $this->db->get_where('barang', ['id' => $id])->row_array();
	}

	public function ubahDataBarang() {
		$data = [
			"nama_brg" => $this->input->post('nama_brg', true),
			"harga_brg" => $this->input->post('harga_brg', true),
			"kategori" => $this->input->post('kategori', true),
			"stok_brg" => $this->input->post('stok_brg', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('barang', $data);
	}

	public function cariDataBarang() {
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama_brg', $keyword);
		$this->db->or_like('harga_brg', $keyword);
		$this->db->or_like('kategori', $keyword);
		$this->db->or_like('stok_brg', $keyword);
		return $this->db->get('barang')->result_array();
	}
}
