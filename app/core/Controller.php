<?php

trait Controller
{
    public function view($name, $data = [], $fileView = "")
    {
        // initiate numbering
        $sno = 1;
        // extract data
        if (!empty($data))
            extract($data);

        // create our original view file
        if (in_array(VIEWFOLDER, PORTALS)) {
            $originalFileName = LIB_PATH . "app/views/portals/" . VIEWFOLDER . "/" . strtolower($name) . ".view.php";
        } else {
            $originalFileName = LIB_PATH . "app/views/" . strtolower($name) . ".view.php";
        }

        // check for page template
        $temp = tempLoad("template");
        // check if view file exists
        if (file_exists($temp)) {
            if (file_exists($originalFileName)) {
                $fileName = $originalFileName;
            } else {
                $fileName = LIB_PATH . "app/views/404.view.php";
            }
            require $temp;
        } else {
            // throw template error
            echo errorTemp(array("title" => "template loading error", "body" => "error loading the system template"));
        }
    }
}
