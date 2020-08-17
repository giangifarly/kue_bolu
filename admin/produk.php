<?php include "separator/header.php" ?>

<title>Produk | Admin IEU Bolu</title>

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Produk</h1>
		<a href="produk_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fa fa-plus"></i> Tambah Produk
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
							<th>Nama Produk</th>
							<th>Stok Produk</th>
							<th>Harga</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Nama Produk</th>
							<th>Stok Produk</th>
							<th>Harga</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Tiramisu</td>
							<td>18</td>
							<td>Rp. 299.000</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Cheesecake</td>
							<td>12</td>
							<td>Rp. 274.900</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Palova Cace</td>
							<td>22</td>
							<td>Rp. 229.900</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Black Forest</td>
							<td>21</td>
							<td>Rp. 249.900</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Victoria Sponge</td>
							<td>30</td>
							<td>Rp. 279.000</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Red Velvet</td>
							<td>7</td>
							<td>Rp. 221.000</td>
							<td>
								<a href="produk_ubah.php" class="btn btn-primary">Ubah</a>
								<a href="produk.php" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<tr>
							<td>Lamington Cake</td>
							<td>3</td>
							<td>Rp. 349.000</td>
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
