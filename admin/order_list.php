<?php include "separator/header.php" ?>

<title>Daftar Orderan | Admin IEU Bolu</title>

<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Daftar Orderan</h1>

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
							<th>Pesanan</th>
							<th>Alamat</th>
							<th>Status Pembayaran</th>
							<th>Total Harga</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Nama Pemesan</th>
							<th>Nomor Pesanan</th>
							<th>Pesanan</th>
							<th>Alamat</th>
							<th>Status Pembayaran</th>
							<th>Total Harga</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Gian Gifarly</td>
							<td>74894</td>
							<td>Red Velvet 1, Black Forest 1</td>
							<td>Griya Sukarame Asri 006/016, Ciptaharja, Cipatat, Kab. Bandung Barat, Jawa Barat. 40554</td>
							<td>Dibayar</td>
							<td>Rp. 470.900</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<?php include "separator/footer.php" ?>