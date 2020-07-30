<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<strong>Form Tambah Data Barang</strong>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama_brg">Nama Barang</label>
							<input type="text" name="nama_brg" class="form-control" id="nama_brg">
							<small class="form-text text-danger"><?= form_error('nama_brg'); ?></small>
						</div>
						<div class="form-group">
							<label for="harga_brg">Harga Barang</label>
							<input type="text" name="harga_brg" class="form-control" id="harga_brg">
							<small class="form-text text-danger"><?= form_error('harga_brg'); ?></small>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori</label>
							<select class="form-control" name="kategori" id="kategori">
								<option value="Elektronik">Elektronik</option>
								<option value="Fashion">Fashion</option>
								<option value="Furniture">Furniture</option>
								<option value="Makanan & Minuman">Makanan & Minuman</option>
							</select>
						</div>
						<div class="form-group">
							<label for="stok_brg">Stok Barang</label>
							<input type="text" name="stok_brg" class="form-control" id="stok_brg">
							<small class="form-text text-danger"><?= form_error('stok_brg'); ?></small>
						</div>
						<button type="reset" name="reset" class="btn btn-danger float-right">Reset Data</button>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
