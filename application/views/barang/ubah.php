<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<strong>Form Ubah Data Barang</strong>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $barang['id']; ?>">
						<div class="form-group">
							<label for="nama_brg">Nama Barang</label>
							<input type="text" name="nama_brg" class="form-control" id="nama_brg" value="<?= $barang['nama_brg']; ?>">
							<small class="form-text text-danger"><?= form_error('nama_brg'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga_brg">Harga Barang</label>
							<input type="text" name="harga_brg" class="form-control" id="harga_brg" value="<?= $barang['harga_brg']; ?>">
							<small class="form-text text-danger"><?= form_error('harga_brg'); ?></small>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori</label>
							<select class="form-control" name="kategori" id="kategori">
								<?php foreach($kategori as $ktg) : ?>
								<?php if($ktg == $barang['kategori']) : ?>
								<option value="<?= $ktg; ?>" selected><?= $ktg; ?></option>
								<?php else : ?>
								<option value="<?= $ktg; ?>"><?= $ktg; ?></option>
								<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="stok_brg">Stok Barang</label>
							<input type="text" name="stok_brg" class="form-control" id="stok_brg" value="<?= $barang['stok_brg']; ?>">
							<small class="form-text text-danger"><?= form_error('stok_brg'); ?></small>
						</div>
						<button type="reset" name="reset" class="btn btn-danger float-right">Reset Data</button>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
