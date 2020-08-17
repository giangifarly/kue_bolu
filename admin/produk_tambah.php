<?php include "separator/header.php" ?>

<title>Tambah Produk | Admin IEU Bolu</title>
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Produk</h1>
	<div class="card shadow">
		<div class="card-body">
			<form method="post" action="produk.php">
				<div class="row">
					<div class="col-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Nama Produk</label>
							<input type="text" class="form-control col-9" name="name" aria-describedby="helpId"
								placeholder="Masukkan Nama Produk">
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
							<label class="col-3 col-form-label">Stok Produk</label>
							<input type="text" class="form-control col-9" name="username" aria-describedby="helpId"
								placeholder="Masukkan Stok Produk">
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Deskripsi Produk</label>
                            <textarea class="form-control col-9" name="alamat" rows="3"></textarea>
                        </div>

                        <div class="form-group row">
							<label class="col-3 col-form-label">Harga</label>
							<input type="text" class="form-control col-9" name="telepon" aria-describedby="helpId"
								placeholder="Masukkan Harga">
							<small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Tambahkan Produk">
                        </div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include "separator/footer.php" ?>