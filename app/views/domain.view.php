<?php
switch ($fileView) {
    case 'search':
?>

        <section class="domain-search">
            <div class="container py-5">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <?php require incFile("sideNav"); ?>
                    </div>
                    <div class="col-md-9">
                        <h1>Register Domain</h1>
                        <p>Find your new domain name. Enter your name or keywords below to check availability.</p>
                        <form class="searchDomainForm">
                            <div class="card pg-theme-2 py-5">
                                <div class="card-body py-5">
                                    <div class="col-md-8 mx-auto">
                                        <div class="input-group rounded p-2 bg-white">
                                            <input type="text" name="domain" class="form-control p-3" value="<?php if (isset($data['reqDomain'])) : ?><?= $data['reqDomain'] ?><?php endif; ?>" placeholder="Find your new domain name" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-custom p-3" id="button-addon2"><strong>Search</strong></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-3 domSerRes"></div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(function() {
                <?php if (isset($data['reqDomain'])) { ?>
                    $(".searchDomainForm").submit();
                <?php } ?>
            });
        </script>

    <?php
        break;
    default:
    ?>

        <section class="domains-back">
            <div class="container py-5 text-white">
                <h5>Domain name search</h5>
                <div class="col-md-8 my-4">
                    <form action="<?= ROOT ?>domain/search" method="post" autocomplete="off">
                        <h3>Search for your perfect domain name here</h3>
                        <div class="input-group">
                            <input type="text" name="domain" class="form-control rounded p-3" placeholder="Find a domain name" aria-label="Domain Name" aria-describedby="button-addon2" required />
                            <button class="btn btn-custom p-3 ms-3 rounded" id="button-addon2"><strong>Search Domain</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="domains-content">
            <div class="container py-5">
                <div class="row">
                    <?php foreach (DOMAINEXT as $key => $value) { ?>
                        <div class="col-sm-6 col-md-3 my-2">
                            <div class="card shadow-none h-100">
                                <div class="card-body p-1 text-center">
                                    <h2 class="pg-color"><?= $key ?></h2>
                                    <h4>Ksh. <?= number_format($value[0], 0) ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="colmd-12 pt-5">
                        <h2 class="text-center">Frequently asked questions</h2>
                        <div class="accordion" id="accordionExample">
                            <?php foreach (FAQ as $key => $value) {
                                if ($sno == 1) {
                                    $status1 = "";
                                    $status2 = "true";
                                    $status3 = "collapse show";
                                } else {
                                    $status1 = "collapsed";
                                    $status2 = "false";
                                    $status3 = "collapse";
                                }

                            ?>

                                <div class="accordion-item my-3 border">
                                    <h2 class="accordion-header" id="<?= "heading" . $sno ?>">
                                        <button class="accordion-button btn <?= $status1 ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= "collapse" . $sno ?>" aria-expanded="<?= $status2 ?>" aria-controls="<?= "collapse" . $sno ?>">
                                            <?= ucfirst($key) ?>
                                        </button>
                                    </h2>
                                    <div id="<?= "collapse" . $sno ?>" class="accordion-collapse <?= $status3 ?>" aria-labelledby="<?= "heading" . $sno ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?= $value ?>
                                        </div>
                                    </div>
                                </div>

                            <?php $sno++;
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
        break;
}
?>