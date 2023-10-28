<section class="domain-search">
    <div class="container py-5">

        <div class="row">
            <aside class="col-lg-9">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive rounded">
                            <table class="table table-striped table-hover table-borderless m-0 align-middle">
                                <thead class="text-muted pg-theme">
                                    <tr class="small text-uppercase">
                                        <th>Product/Option</th>
                                        <th class="text-end">Price</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $subTotal = 0;
                                    if (isset($data['cartData'])) {
                                        foreach ($data['cartData'] as $key => $value) {
                                            $subTotal += $value[0]; ?>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0"><?= $key ?></h5>
                                                    <var><small class="text-muted">Domain registration</small></var>
                                                </td>
                                                <td class="text-end">
                                                    <h5 class="m-0">Ksh <?= number_format($value[0], 2) ?></h5>
                                                    <var><small class="text-muted">Renewal Ksh <?= number_format($value[1], 2) ?>/yr</small></var>
                                                </td>
                                                <td class="pw-10 text-end"><button value="<?= $key ?>" class="btn btn-sm btn-outline-danger" onclick="removeDomain(this)"><i class="fas fa-times-circle"></i></button></td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="3" class="text-center p-5 text-muted">
                                                <i class="fas fa-shopping-cart fa-3x border rounded-circle p-3"></i>
                                                <h6>Your cart is empty</h6>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if ($subTotal > 0) : ?>
                    <div class="card border-0 shadow-sm my-3">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <?php if (isset($data['promotion'])) : ?>
                                        <div class="alert alert-warning p-1">
                                            <?= $data['promotion'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <label for="">Have promotion code?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-0 rounded-start" name="promotionCode" placeholder="Promotion code" required />
                                        <span class="input-group-append">
                                            <button class="btn pg-theme rounded-0 rounded-end">Validate</button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </aside>

            <aside class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive rounded">
                            <table class="table table-borderless m-0 align-middle">
                                <thead class="text-muted pg-theme">
                                    <tr class="small text-uppercase">
                                        <th colspan="2">Order summary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="px-0">Subtotals:</th>
                                        <td class="px-0 text-end">Ksh. <?= number_format($subTotal, 2) ?></td>
                                    </tr>
                                    <tr>
                                        <th class="px-0">Relief:</th>
                                        <td class="px-0 text-end">Ksh. 0</td>
                                    </tr>
                                    <tr>
                                        <th class="px-0">Total:</th>
                                        <td class="px-0 text-end h4 text-nowrap">Ksh. <?= number_format(($subTotal), 2) ?></td>
                                    </tr>
                                    <?php if ($subTotal > 0) : ?>
                                        <tr>
                                            <th colspan="2" class="px-0 pt-3 text-end">
                                                <?php if (isset($_SESSION['client'])) { ?>
                                                    <button class="btn btn-lg pg-theme">Checkout <i class="fas fa-arrow-right"></i></button>
                                                <?php } else { ?>
                                                    <a href="<?= ROOT ?>auth/client?checkout=yes" class="btn btn-lg pg-theme">Checkout <i class="fas fa-arrow-right"></i></a>
                                                <?php } ?>
                                            </th>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </div>
</section>