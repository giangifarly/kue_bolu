<?php include "separator/header.php" ?>

<title>Konfirmasi Pembayaran | Admin IEU Bolu</title>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Konfirmasi Pembayaran</h1>
		<a href="order_konfirmasi_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fa fa-plus"></i> Tambah Pembayaran
		</a>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Produk</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Pemesan</th>
							<th>Nomor Pesanan</th>
							<th>Status Pengiriman</th>
							<th>Jumlah Bayar</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Nama Pemesan</th>
							<th>Nomor Pesanan</th>
							<th>Status Pengiriman</th>
							<th>Jumlah Bayar</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Gian Gifarly</td>
							<td>74894</td>
							<td>Sudah Sampai</td>
							<td>Rp. 470.900</td>
							<td>
								<a href="order_konfirmasi_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="order_konfirmasi.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<?php include "separator/footer.php" ?>