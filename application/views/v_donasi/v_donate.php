<section class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8" style="background-image: url(assets/images/1900x1200_img_5.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- <div class="col-md-5 justify-content-center">
                <h2 class="heading mb-5 pb_font-40">Join over 1M+ people who uses Instant App</h2>
                <div class="sub-heading">
                    <p class="mb-4">New free template by <a href="http://uicookies.com" target="_blank">uicookies.com</a>. For more templates visit the <a href="http://uicookies.com" target="_blank">site</a>. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-md-1"></div> -->


            <div class="col-md-5">
                <form action=" " method="post" class="bg-white rounded pb_form_v1">
                    <h2 class="mb-4 mt-0 text-center"><?= $donate['nama'] ?></h2>
                    <small class="text-danger"><?= form_error('nominal') ?></small>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text reverse">Rp</span>
                        </div>
                        <input type="text" name="nominal" class="form-control py-3 reverse" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Nominal Donasi" value="<?= set_value('nominal') ?>">
                    </div>
                    <div class="form-group">
                        <small class="text-danger"><?= form_error('nama') ?></small>
                        <input type="text" name="nama" class="form-control py-3 reverse" placeholder="Nama" value="<?= set_value('nama') ?>">
                    </div>
                    <div class="form-group">
                        <small class="text-danger"><?= form_error('email') ?></small>
                        <input type="text" name="email" class="form-control py-3 reverse" placeholder="Email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="form-group">
                        <small class="text-danger"><?= form_error('no_hp') ?></small>
                        <input type="text" name="no_hp" class="form-control py-3 reverse" placeholder="No.Hp" value="<?= set_value('no_hp') ?>">
                    </div>
                    <div class="form-group">
                        <div class="pb_select-wrap">
                            <select name="bank" class="form-control pb_height-50 reverse">
                                <option value="" selected>Transfer Bank</option>
                                <?php foreach ($bank as $b) { ?>
                                    <option value="<?= $b['id'] ?>"><?= $b['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="is_anonim" value="1" type="checkbox"> <small>Donate as anonim</small>
                    </div>
                    <div class="form-group">
                        <input name="code" value="<?= $code ?>" type="hidden">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue">Donate Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END section -->