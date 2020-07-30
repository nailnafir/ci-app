<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<strong>Detail Data Barang</strong>
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $barang['nama_brg']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted">Rp <?= $barang['harga_brg']; ?>,-</h6>
					<p class="card-text"><?= $barang['kategori']; ?></p>
					<p class="card-text">Stok ada <?= $barang['stok_brg']; ?></p>
					<a href="<?= base_url(); ?>/barang" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
