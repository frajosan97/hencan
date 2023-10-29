<section class="auth-section">
    <div class="container py-5">

        <?php

        switch ($fileView) {
            case 'register':
        ?>

                <div class="row clearfix">
                    <div class="col-md-3">
                        <?php require incFile("sideNav"); ?>
                    </div>
                    <div class="col-md-9">
                        <form class="regClientForm">
                            <div class="card pg-theme border-0 pt-1 shadow-sm">
                                <div class="card-header border-0 bg-white h4 text-muted text-uppercase  pb-0">create hencan account</div>
                                <div class="card-body bg-white">
                                    <?php if (isset($_GET['checkout'])) : ?>
                                        <input type="hidden" name="checkout" value="<?= $_GET['checkout'] ?>">
                                    <?php endif; ?>
                                    <h6>Personal information</h6>
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                                <input type="email" name="email" id="email" placeholder="Email" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <input type="tel" id="phone" placeholder="Phone Number" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                <input type="text" name="username" id="username" placeholder="Prefered Username" class="form-control border-0" required />
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Billing information</h6>
                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-building"></i></span>
                                                <input type="text" name="company" id="company" placeholder="Comapny Name (Optional)" class="form-control border-0" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                                <input type="text" name="address" id="address" placeholder="Address" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="far fa-building"></i></span>
                                                <input type="text" name="city" id="city" placeholder="City" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                                <input type="text" name="state" id="state" placeholder="State" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-certificate"></i></span>
                                                <input type="text" name="postcode" id="postcode" placeholder="Postalcode" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-globe"></i></span>
                                                <select name="country" id="country" class="form-control border-0" required>
                                                    <?php foreach (COUNTRIES as $key => $value) { ?>
                                                        <option value="<?= $key ?>" <?php if ($key == "KE") : ?> selected <?php endif; ?>><?= $value ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Account Security</h6>
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                                <input type="password" name="password-1" id="password" placeholder="Password" class="form-control border-0" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                                <input type="password" name="password-2" id="confirm-password" placeholder="Confirm Password" class="form-control border-0" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-custom">
                                        <div class="card-header bg-danger text-white border-0">Terms of service</div>
                                        <div class="card-body">
                                            <label for="terms">
                                                <input type="checkbox" name="terms" value="1" id="terms" required /> I have read and agreed to company <a href="">terms of service</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 bg-white d-flex justify-content-between">
                                    <button type="reset" class="btn bg-danger text-white"><i class="fas fa-history"></i> Reset</button>
                                    <button class="btn pg-theme"><i class="fas fa-user-plus"></i> Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        countryCodes();
                    });
                </script>

            <?php
                break;
            case 'forgot_password':

                break;
            default:
            ?>

                <div class="col-sm-6 col-md-4 my-5 mx-auto py-5">
                    <form class="clientLoginForm">
                        <div class="card pg-theme border-0 pt-1 shadow-sm">
                            <div class="card-header border-0 bg-white h4 text-muted text-uppercase text-center pb-0">Client Login</div>
                            <div class="card-body bg-white">
                                <?php if (isset($_GET['checkout'])) : ?>
                                    <input type="hidden" name="checkout" value="<?= $_GET['checkout'] ?>">
                                <?php endif; ?>
                                <ul class="list-group">
                                    <li class="list-group-item border-0 bg-transparent px-0">
                                        <div class="form-group">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                                <input type="text" name="email" class="form-control border-0" id="email" placeholder="Email Address" autofocus required />
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 bg-transparent px-0">
                                        <div class="form-group">
                                            <div class="input-group border-custom rounded">
                                                <span class="input-group-text border-0 bg-transparent text-muted" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                                <input type="password" name="password" class="form-control border-0" id="password" placeholder="Password" autofocus required />
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 bg-transparent px-0">
                                        <table class="table table-borderless m-0 align-middle">
                                            <tr>
                                                <td class="p-0"><a href="<?= ROOT ?>auth/register<?php if (isset($_GET['checkout'])) : ?>?checkout=yes<?php endif; ?>">Dont have an account?</a></td>
                                                <td class="p-0 text-end"><a href="<?= ROOT ?>auth/forgot_password">Forgot Password?</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer border-0 bg-white d-flex justify-content-between">
                                <button type="reset" class="btn bg-danger text-white"><i class="fas fa-history"></i> Reset</button>
                                <button class="btn pg-theme"><i class="fas fa-sign-in"></i> Login</button>
                            </div>
                        </div>
                    </form>
                </div>

        <?php
                break;
        }

        ?>

    </div>
</section>