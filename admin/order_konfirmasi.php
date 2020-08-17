<?php include "separator/header.php" ?>

<title>Konfirmasi Pembayaran | Admin IEU Bolu</title>

<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Konfirmasi Pembayaran</h1>
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
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
</div>

<?php include "separator/footer.php" ?>