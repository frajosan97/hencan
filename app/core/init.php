<?php

spl_autoload_register(function ($classname) {
    $pagesFilename = "../app/models/" . ucfirst($classname) . ".php";
    $portalsFilename = "../app/models/portals/" . ucfirst($classname) . ".php";
    if (file_exists($pagesFilename)) {
        $filename = $pagesFilename;
    } else {
        $filename = $portalsFilename;
    }
    if (file_exists($filename)) {
        require $filename;
    } else {
        die(errorTemp(array("title" => "Error loading the model class", "body" => "<b>" . ucfirst($classname) . "</b> - not found or error accessing the file")));
    }
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require SITE_ROOT . DS . 'public/assets/plugins/who-is/autoload.php';
require 'App.php';
require 'Main.php';
