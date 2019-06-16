<section class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8" style="background-image: url(assets/images/1900x1200_img_5.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="pb_pricing_v1 p-3 border rounded bg-white">
                    <div class="text-center ">
                        <h3>Konfirmasi Donasi</h3>
                        <p>Silahkan Transfer sesui nominal berikut</p>
                        <?php
                        $nominal = $result['nominal'] + $result['id_donatur'];
                        ?>
                        <span class="price"><sup>Rp</sup><?= number_format($nominal, '0', '.', '.') ?></span>
                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-info-circle"></i> Silahkan transfer tepat sampai 3 digit angka terakhir
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item float-left">Jumlah Donasi <span class="float-right">Rp<?= number_format($result['nominal'], '0', '.', '.')  ?></span></li>
                            <li class="list-group-item float-left">Kode Unik <span class="float-right"><?= $result['id_donatur'] ?></span></li>
                        </ul>
                    </div>
                    <small><span class="text-danger">*</span><i>Kode unik juga akan ikut didonasikan</i> </small>
                    <hr>
                    <div class="text-center">
                        <p>Transfer ke rekening a/n <?= $result['pemilik'] ?> berikut ini :</p>
                        <div class="card">
                            <div class="card-body">
                                <img width="100px" src="<?= base_url() ?>assets/images/bank/<?= $result['img'] ?>" alt="">
                                <p></p><span><b><?= $result['no_rek'] ?></b></span><br>
                                <span><small> <?= $result['pemilik'] ?></small></span>
                            </div>
                        </div>
                    </div>

                    <p class="mb-3 mt-3 text-center"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Donasi Sekarang</a></p>

                    <small><span class="text-danger">*</span>Donasi sebelum tanggal <b>03-04-2019</b> atau donasi otomasi dibatalkan oleh sistem</small>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->