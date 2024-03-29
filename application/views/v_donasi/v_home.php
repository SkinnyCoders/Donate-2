<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h2 class="heading mb-3">Our Foundations</h2>
                <div class="sub-heading">
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tenetur quis laboriosam qui earum atque quae consequatur perspiciatis, eaque cupiditate quibusdam blanditiis ut modi perferendis iure sapiente ex aliquam corrupti.</p>
                    <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Donate Now</span></a></p>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- <section class="pb_section pb_slant-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <img src="assets/images/phone_3.png" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-lg-8 pl-md-5 pl-sm-0">
                <div class="row">
                    <div class="col">
                        <h2>Application Features</h2>
                        <p class="pb_font-20">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">

                        <div class="media pb_feature-v2 text-left mb-1 mt-5">
                            <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h3 class="mt-2 mb-2 heading">Minimal Design</h3>
                                <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                        </div>

                        <div class="media pb_feature-v2 text-left mb-1 mt-5">
                            <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h3 class="mt-2 mb-2 heading">Unlimited Posibilities</h3>
                                <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg">

                        <div class="media pb_feature-v2 text-left mb-1 mt-5">
                            <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h3 class="mt-2 mb-2 heading">Fast Loading</h3>
                                <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                        </div>

                        <div class="media pb_feature-v2 text-left mb-1 mt-5">
                            <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h3 class="mt-2 mb-2 heading">Component Based Design</h3>
                                <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
END section -->

<section class="pb_section bg-light" id="section-pricing">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Campaign</strong></h5>
                <h2>Our Campaign</h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($donate as $d) { ?>
                <div class="col-md-4">
                    <div class="border rounded-lg border-primary text-center">
                        <img class="img_header" src="<?= base_url() ?>assets/images/<?= $d['img'] ?>" alt="">
                        <div class="pb_pricing_v1 p-3 bg-white">
                            <h3><?= $d['nama'] ?></h3>
                            <span class="price mt-2"><sup>Rp</sup><?= number_format($d['mencapai'], '0', '.', '.')  ?></span> target <span class="price"><sup>Rp</sup><?= number_format($d['target'], '0', '.', '.') ?></span>
                            <p class="pb_font-15 mt-2"><?= $d['deskripsi'] ?></p>

                            <p class="mt-0"><a href="<?= base_url() ?>donasi/donate/<?= $d['id'] ?>" role="button" class="btn btn-primary btn-shadow-blue">Donate</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- ENDs ection -->


<!-- END section -->