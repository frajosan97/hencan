<?php show($_SERVER); ?>
<!-- carousel section -->
<section class="slides-section pg-theme pb-2">
    <div class="container d-flex justify-content-between py-2">
        <strong class="text-nowrap"><i class="fa fa-bullhorn" aria-hidden="true"></i> Announcements:</strong>
        <marquee behavior="" direction="" class="">Now you can check your domain if its available for registration. Simply go to <a href="<?= ROOT ?>domain">Hencan Domains</a> for lookup</marquee>
    </div>
    <div class="col-12 pg-theme-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner container py-5">
                <!-- carousel items -->
                <div class="carousel-item carouselback active">
                    <div class="row clearfix">
                        <div class="col-md-8 text-white">
                            <h4 class="pg-color">Need a responsive website for your company or institution?</h4>
                            <p>
                                We build responsive websites for either the company or institution you have, regardless of how the complex the management is. By hiring
                                <a href="" target="_blank">
                                    <font color="#397b21"><b><u>Hencan Group Technologies Web&nbsp;</u></b></font>
                                </a>
                                <font color="#397b21"><b><u>Development</u></b></font>&nbsp;experts to build your company website, you chose to move with the current technologies for we keep up to date with the innovative technology.
                            </p>
                            <p>We have qualified and accredited experts.</p>
                            <a href="">
                                <button class="btn btn-outline-custom text-capitalize p-3">get started <i class="fas fa-arrow-right"></i></button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <h5 class="pg-color">Responsive web development built with current web tools.</h5>
                            <img src="<?= ROOT ?>public/assets/images/slides/slide-1.png" alt="" srcset="" style="max-height: 200px; max-width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item carouselback ">
                    <div class="row clearfix">
                        <div class="col-md-8 text-white">
                            <h4 class="pg-color">Why is it necessary for you to buy domains from us?</h4>
                            <p>We are differentiating our selves from other domains resale&#39s by:</p>
                            <ul>
                                <li>Secure Socket Layer<font color="#ff0000"><span style="font-weight: bolder;">&nbsp;(SSL)</span></font>
                                </li>
                                <li>24/7 running servers</li>
                                <li>Trusted by big companies and institutions</li>
                            </ul>
                            <p>we assure customer satisfaction as one of our main competitive edge in market</p>
                            <a href="">
                                <button class="btn btn-outline-custom text-capitalize p-3">get started <i class="fas fa-arrow-right"></i></button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <h5 class="pg-color">Buy and Host a domain name from us at an affordable cost</h5>
                            <img src="<?= ROOT ?>public/assets/images/slides/slide-2.png" alt="" srcset="" style="max-height: 200px; max-width: 100%;">
                        </div>
                    </div>
                </div>
                <!-- / carousel items -->
            </div>
        </div>
        <div class="container pb-5">
            <form action="<?= ROOT ?>domain/search" method="post" autocomplete="off">
                <div class="row clearfix">
                    <div class="form-group col-md-4 my-2">
                        <h6 class="pg-color py-3">Search for your perfect domain name here</h6>
                    </div>
                    <div class="form-group col-md-6 my-2">
                        <input type="text" name="domain" class="form-control p-3" placeholder="Enter your prefered domain..." required />
                    </div>
                    <div class="form-group col-md-2 my-2">
                        <button type="submit" class="btn btn-outline-custom text-capitalize w-100 p-3">GO <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- / carousel section -->

<!-- services section -->
<section class="services">
    <div class="container py-5">
        <div class="row clearfix">
            <div class="col-sm-6 col-md-3 my-2" data-aos="fade-up" data-aos-duration="500">
                <a href="">
                    <div class="card text-center h-100 border-0 pg-theme-2 text-capitalize shadow-lg">
                        <div class="card-header border-0 rounded-top p-0">
                            <img src="<?= ROOT ?>public/assets/images/services/domain.jpg" alt="" srcset="" width="100%" class="rounded-top" style="min-height: 170px">
                        </div>
                        <div class="card-body">
                            <h3 class="text-white">domain hosting</h3>
                            <ul class="list-group border-0 bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-white">Unlimited disk bandwidth</li>
                                <li class="list-group-item bg-transparent border-0 text-white">unlimited small accounts</li>
                                <li class="list-group-item bg-transparent border-0 text-white">free SSL</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-1">
                            <h2 class="pg-color">Ksh <?= number_format(900, 2) ?></h2>
                            <button class="btn bg-white rounded-0 rounded-bottom w-100 text-primary text-capitalize">read more <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 my-2" data-aos="fade-up" data-aos-duration="500">
                <a href="">
                    <div class="card text-center h-100 border-0 pg-theme-2 text-capitalize shadow-lg">
                        <div class="card-header border-0 rounded-top p-0">
                            <img src="<?= ROOT ?>public/assets/images/services/vps.jpg" alt="" srcset="" width="100%" class="rounded-top" style="min-height: 170px">
                        </div>
                        <div class="card-body">
                            <h3 class="text-white">vps hosting</h3>
                            <ul class="list-group border-0 bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-white">free server management</li>
                                <li class="list-group-item bg-transparent border-0 text-white">reliable cloud infrastructure</li>
                                <li class="list-group-item bg-transparent border-0 text-white">unlocked CPU Cores</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-1">
                            <h2 class="pg-color">Ksh <?= number_format(2700, 2) ?></h2>
                            <button class="btn bg-white rounded-0 rounded-bottom w-100 text-primary text-capitalize">read more <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 my-2" data-aos="fade-up" data-aos-duration="500">
                <a href="">
                    <div class="card text-center h-100 border-0 pg-theme-2 text-capitalize shadow-lg">
                        <div class="card-header border-0 rounded-top p-0">
                            <img src="<?= ROOT ?>public/assets/images/services/ded.jpg" alt="" srcset="" width="100%" class="rounded-top" style="min-height: 170px">
                        </div>
                        <div class="card-body">
                            <h3 class="text-white">dedicated servers</h3>
                            <ul class="list-group border-0 bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-white">Server Hardware configuration</li>
                                <li class="list-group-item bg-transparent border-0 text-white">Free Server Managemant</li>
                                <li class="list-group-item bg-transparent border-0 text-white">99.9% Network Uptime</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-1">
                            <h2 class="pg-color">Ksh <?= number_format(11200, 2) ?></h2>
                            <button class="btn bg-white rounded-0 rounded-bottom w-100 text-primary text-capitalize">read more <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 my-2" data-aos="fade-up" data-aos-duration="500">
                <a href="">
                    <div class="card text-center h-100 border-0 pg-theme-2 text-capitalize shadow-lg">
                        <div class="card-header border-0 rounded-top p-0">
                            <img src="<?= ROOT ?>public/assets/images/services/reseller.png" alt="" srcset="" width="100%" class="rounded-top" style="min-height: 170px">
                        </div>
                        <div class="card-body">
                            <h3 class="text-white">reseller hosting</h3>
                            <ul class="list-group border-0 bg-transparent">
                                <li class="list-group-item bg-transparent border-0 text-white">Host your own clients</li>
                                <li class="list-group-item bg-transparent border-0 text-white">Resell Domains</li>
                                <li class="list-group-item bg-transparent border-0 text-white">Unlimited Websites</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-1">
                            <h2 class="pg-color">Ksh <?= number_format(3500, 2) ?></h2>
                            <button class="btn bg-white rounded-0 rounded-bottom w-100 text-primary text-capitalize">read more <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- / services section -->

<!-- how we work -->
<section class="how-section bg-light">
    <div class="container py-5 text-center">
        <h3 class="text-capitalize">Reliable website hosting you can trust</h3>
        <div class="row">
            <div class="col-md-4 py-3" data-aos="fade-up" data-aos-duration="500">
                <h4># In Transfers</h4>
                Chose a website hosting company that webmasters trust and move to every day
            </div>
            <div class="col-md-4 py-3" data-aos="fade-up" data-aos-duration="500">
                <h4># SSL Security</h4>
                Chose a website hosting company that will ensure 100% security of your content
            </div>
            <div class="col-md-4 py-3" data-aos="fade-up" data-aos-duration="500">
                <h4># 24/7 Reliability</h4>
                Hencan Group Technologies will ensure 24/7 access of your website by your customers
            </div>
        </div>
    </div>
</section>
<!-- / how we work -->