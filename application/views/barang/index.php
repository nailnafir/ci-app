<div class="container">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php if ($this->session->flashdata('flash')) : ?>
		<!-- <div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Barang <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div> -->
	<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari data barang....">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Barang</h3>
			<?php if (empty($barang)) : ?>
				<div class="alert alert-danger" role="alert">
					<h4 class="alert-heading kosong">Tidak ada!</h4>
					<hr>
					<p class="mb-0 kosong">Yah, barang yang kamu cari gak ada nih :(</p>
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($barang as $brg) : ?>
					<li class="list-group-item">
						<?= $brg['nama_brg']; ?>
						<a href="<?= base_url(); ?>barang/hapus/<?= $brg['id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
						<a href="<?= base_url(); ?>barang/detail/<?= $brg['id']; ?>" class="badge badge-primary float-right">detail</a>
						<a href="<?= base_url(); ?>barang/ubah/<?= $brg['id']; ?>" class="badge badge-success float-right">ubah</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
