<?php include "separator/header.php" ?>

<title>Tambah Pembayaran | Admin IEU Bolu</title>
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Pembayaran</h1>
	<div class="card shadow">
		<div class="card-body">
			<form method="post" action="order_konfirmasi.php">
				<div class="row">
					<div class="col-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Nama Pemesan</label>
							<select name="nama_pemesan" class="form-control col-9">
								<option>-- Pilih Nama Pemesan --</option>
								<option value="Sedang Pengiriman">Fikri Juan 08123654897</option>
								<option value="Sudah Sampai">Gian Gifarly 089617222740</option>
							</select>
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
							<label class="col-3 col-form-label">Nomor Pesanan</label>
							<select name="no_pesanan" class="form-control col-9">
								<option>-- Pilih Nomor Pesanan --</option>
								<option value="74894">74894</option>
								<option value="74895">74895</option>
							</select>
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
							<label class="col-3 col-form-label">Status Pengiriman</label>
							<select name="status_pengiriman" class="form-control col-9">
								<option>-- Pilih Status Pengiriman --</option>
								<option value="Sedang Pengiriman">Sedang Pengiriman</option>
								<option value="Sudah Sampai">Sudah Sampai</option>
							</select>
                        </div>

                        <div class="form-group row">
							<label class="col-3 col-form-label">Jumlah Bayar</label>
							<input type="text" class="form-control col-9" name="telepon" aria-describedby="helpId"
								placeholder="Masukkan Jumlah Bayar">
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Tambahkan Pembayaran">
                        </div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include "separator/footer.php" ?>