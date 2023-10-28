<!-- 
    Author : Francis Kioko - <?= date("Y", time()) ?>
    Author Email: frajosan97@gmail.com
    Author Phone: (254) 796-594-366
    License : Frajosan Technologies
    License Url : https://www.frajosantech.co.ke
    Address : 222 - 90200 Kitui
 -->
<!DOCTYPE html>
<html lang="en-KE">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucwords(APPINFO->appName) ?></title>
    <meta name="keywords" content="<?= ucwords(APPINFO->metakey) ?>">
    <meta name="description" content="<?= ucwords(APPINFO->metadesc) ?>">
    <link rel="shortcut icon" href="<?= ROOT ?>public/assets/images/others/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= ROOT ?>public/assets/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= ROOT ?>public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ROOT ?>public/assets/css/app.css">
    <link rel="stylesheet" href="<?= ROOT ?>public/assets/plugins/phoneInput/css/intlTelInput.css">
    <style>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo ".pw-" . $i . "{ width: " . $i . "%!important; }";
            echo ".ph-" . $i . "{ height: " . $i . "%!important; }";
            echo ".piw-" . $i . "{ width: " . $i . "px!important; }";
            echo ".pih-" . $i . "{ height: " . $i . "px!important; }";
        }
        ?>
    </style>
    <script src="<?= ROOT ?>public/assets/js/jquery.min.js"></script>
</head>

<body class="<?php if ($name == "Home") : ?> homeBg <?php endif; ?>">