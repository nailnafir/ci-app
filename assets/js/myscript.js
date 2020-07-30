const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Data Barang ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault(); // matiin link

	const linkHapus = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Kamu Yakin?',
		text: "Data Ini Akan Dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = linkHapus;
		} else {
			Swal.fire(
				'Tidak Dihapus',
				'Data Kamu Aman :)',
				'error'
			);
		}
	});
}); 
