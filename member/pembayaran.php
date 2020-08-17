<?php include "nav/header.php" ?>
<section class="services1 cid-rW3zwaepjz" id="services1-5">

    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-7">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">
                    Pembayaran
                </h2>
                <form action="bayar_sukses.php">
                    <div class="form-group">
                        <label for="my-input">Alamat</label>
                        <select name="alamat" class="form-control">
                            <option>-- Pilih Alamat --</option>
                            <option value="1">Kubang Sari VII No.2 Sekeloa, Coblong, Kota Bandung, Jawa Barat</option>
                        </select>
                    </div>
                </form>
                <h4>Silahkan untuk melakukan pembayaran sesuai total tagihan ke nomor dibawah ini</h4>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Pembayaran Lewat OVO</th>
                            <th scope="col">089617222740</th>
                        </tr>
                        <tr>
                            <th scope="col">Pembayaran Lewat Dana</th>
                            <th scope="col">089617222740</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ringkasan Pembayaran<br>
                                Total tagihan <br>

                            </td>
                            <td></td>
                            <td><br>Rp.724.900.00<br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="mbr-section-btn align-right">
            <a href="bayar_sukses.php" class="btn btn-warning-outline display-4">Pesan</a>
        </div>
    </div>
</section>
<?php include "nav/footer.php" ?>