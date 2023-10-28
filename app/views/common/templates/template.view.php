<?php include_once incFile("header"); ?>

<!-- top contacts -->
<section class="top-contacts pg-theme-2">
    <div class="container">
        <div class="row clearfix">
            <div class="col">
                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0 d-none d-md-block"><a href=""><i class="fas fa-envelope"></i> info@hencangroup.co.ke</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0 d-none d-md-block"><a href="<?= ROOT ?>support"><i class="fas fa-phone"></i> Support Center</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="<?= ROOT ?>client"><i class="fas fa-sign-in"></i> Client Login</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="list-group list-group-horizontal-md float-end">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0">
                        <a href="<?= ROOT ?>cart" button class="btn btn-sm text-white position-relative p-0">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle"><small class="bg-danger rounded-circle px-1 cartCount">0</small></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / top contacts -->

<!-- navbar -->
<section class="menu">
    <nav class="navbar navbar-expand-lg bg-white text-capitalize shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= ROOT ?>"><img src="<?= ROOT ?>public/assets/images/others/logo.png" alt="" srcset="" style="max-height: 50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php foreach (MAINMENU as $key => $value) { ?>
                        <li class="nav-item"><a class="nav-link <?php if ($value == strtolower($name)) : ?>active<?php endif; ?>" href="<?= ROOT ?><?php if (!($key == "home")) : ?><?= $value ?><?php endif; ?>"><strong><?php if ($key == "home") : ?> <i class="fas fa-home"></i> <?php endif; ?><?= $key ?></strong></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- / navbar -->

<?php if (in_array(VIEWFOLDER, PORTALS)) { ?>

    <nav class="navbar navbar-expand-lg py-0 pg-theme shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= ROOT . VIEWFOLDER ?>"><strong><i class="fas fa-dashboard"></i> Dashboard</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Domains
                        </a>
                        <ul class="dropdown-menu rounded-0">
                            <li><a class="dropdown-item" href="">My Domains</a></li>
                            <li><a class="dropdown-item" href="">Register Domains</a></li>
                            <li><a class="dropdown-item" href="">Renew Domains</a></li>
                            <li><a class="dropdown-item" href="">Transfer Domain to us</a></li>
                            <li><a class="dropdown-item" href="">Search Domains</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="btn-group m-0">
                    <button type="button" class="btn py-2 pg-theme-2 text-white rounded-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello, <?= ACTIVE_CLIENT->fname ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end rounded-0 shadow-sm text-capitalize">
                        <li><a href="" class="dropdown-item">account management</a></li>
                        <li><a href="" class="dropdown-item">logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <?php require $fileName; ?>
    </div>

<?php } else { ?>
    <?php require $fileName; ?>
<?php } ?>

<!-- footer -->
<section class="footer pg-theme-2 py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">web hosting</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Shared Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Website Creator</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Managed VPS Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Cloud VPS</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Reseller Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">WordPress Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Launch Assist<sup><small>TM</small></sup></a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Domain Names</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Web Design Services</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">hosting features</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">SSD Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">cPanel Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">eCommerce Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">SSH Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Ruby Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">PostgreSQL Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Cheap Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Transfer Websites</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">PHP Hosting</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">hosting tools</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">WordPress</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Joomla</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Drupal</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">cPanel</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">PrestaShop</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Moodle</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">OpenCart</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Magento</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">BoldGrid</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">stay in touch</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="mailto:info@hencangroup.co.ke">info@hencangroup.co.ke</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="https://wa.me/+254796594366">Whatsapp us</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="tel:+254796594366">Tel: +254796594366</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Web Hosting Company</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Hencan Technologies</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Westlands Rd</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Fourways Apartments</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">2020 © All Rights Reserved</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">community</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Premier Support ™</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Support Center</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Web Hosting Infographics</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">LNairobi Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">infotrack</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Student Web Hosting</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Partners</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">about us</h5>
                <ul class="bg-transparent list-group">
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Contact Us</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Terms of Service</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Legal Inquiries and CCK</a></li>
                    <li class="list-group-item bg-transparent border-0 rounded-0 p-0"><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">We are Licenced by CA</h5>
                <img src="<?= ROOT ?>public/assets/images/others/ca.png" class="rounded" style="max-width: 100%; max-height:100%">
            </div>
            <div class="col-sm-6 col-md-3 my-2">
                <h5 class="pg-color">Authorised partners of cPanel</h5>
                <img src="<?= ROOT ?>public/assets/images/others/cpanel.png" class="rounded" style="max-width: 100%; max-height:100%">
            </div>
            <hr class="dividerHr">
            <div class="col-12 my-2">
                <div class="row clearfix">
                    <div class="col-md-6 text-center text-md-start">
                        <a href="">© Copyright 2023 Hencan Group Ltd. All Rights Reserved</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="">Terms | Conditions of service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / footer -->

<?php include_once incFile("footer"); ?>