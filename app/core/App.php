<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function splitUrl()
    {
        $URL = $_GET['url'] ?? 'Home';
        $URL = explode("/", trim($URL, "/"));

        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitUrl();

        if (in_array($URL[0], PORTALS)) {
            // portal pages
            if (isset($_SESSION[$URL[0]])) {
                /**set default page to dashboard */
                if (!(isset($URL[1])))
                    $URL[1] = 'dashboard';
                $fileName = "../app/controllers/portals/" . ucfirst($URL[1]) . ".php";
                if (file_exists($fileName)) {
                    require $fileName;
                    $this->controller = ucfirst($URL[1]);
                    unset($URL[0]);
                    unset($URL[1]);
                } else {
                    $fileName = "../app/controllers/_404.php";
                    require $fileName;
                    $this->controller = "_404";
                }
                $controller = new $this->controller;
                /** select method */
                if (!empty($URL[2])) {
                    if (method_exists($controller, $URL[2])) {
                        $this->method = $URL[2];
                        unset($URL[2]);
                    }
                }
            } else {
                redirect('auth/' . $URL[0]);
            }
        } else {
            // normal pages
            /** select controller */
            $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";
            if (file_exists($fileName)) {
                require $fileName;
                $this->controller = ucfirst($URL[0]);
                unset($URL[0]);
            } else {
                $fileName = "../app/controllers/_404.php";
                require $fileName;
                $this->controller = "_404";
            }
            $controller = new $this->controller;
            /** select method */
            if (!empty($URL[1])) {
                if (method_exists($controller, $URL[1])) {
                    $this->method = $URL[1];
                    unset($URL[1]);
                }
            }
        }

        /**call user function */
        call_user_func_array([$controller, $this->method], $URL);
    }

    public function thisController()
    {
        $URL = $this->splitUrl();

        return $URL[0];
    }

    public function appInfo()
    {
        $appInfo = array(
            "appName" => "hencan web solutions",
            "tagline" => "",
            "metakey" => "",
            "metadesc" => ""
        );

        return (object) $appInfo;
    }

    public function clientInfo()
    {
        if (isset($_SESSION['client'])) {
            $clientModel = new ClientModel;
            $clientInfo = $clientModel->fetch(array("email" => $_SESSION['client']));
            if ($clientInfo) {
                $_SESSION['cli_info'] = $clientInfo;
                return $clientInfo;
            }
        }
    }

    public function cartCheckOut()
    {
        $invoiceModel = new InvoiceModel;
        $invItemModel = new InvItemModel;
        $clientInfo = $this->clientInfo();
        if ($clientInfo) {
            if (isset($_COOKIE["cart_data"])) {
                $userId = $clientInfo->id;
                $invoiceKey = time();
                $savedData = objectToArray(json_decode($_COOKIE["cart_data"]));
                // create customer invoice
                $invTotal = 0;
                foreach ($savedData as $key => $value) {
                    $invTotal += $value[0];
                    // invoice item post
                    $invItemData = array("inv_key" => $invoiceKey, "inv_cli" => $userId, "item_title" => $key, "item_amnt" => $value[0]);
                    $invItemModel->insert($invItemData);
                }
                // invoice post data
                $invData = array("inv_key" => $invoiceKey, "inv_cli" => $userId, "inv_ref" => "", "inv_title" => "domain registration invoice", "inv_amnt" => $invTotal);
                if (!($invoiceModel->insert($invData))) {
                    unset($_COOKIE['key']);
                    setcookie("cart_data", "", time() - (86400 * 30), "/");
                } else {
                    return "Error creating the invoice";
                }
            }
        }
    }
}

$app = new App;
