<?php

/**
 * Cart controller
 */

class Cart
{
    use Controller;

    public function index()
    {
        $data = [];
        if (isset($_COOKIE["cart_data"])) {
            $savedData = objectToArray(json_decode($_COOKIE["cart_data"]));
            $data['cartData'] = $savedData;
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data['promotion'] = "Invalid promotion code!";
        }

        $this->view('Cart', $data, __FUNCTION__);
    }

    public function add()
    {
        $domain = $_POST['domain'];
        $savedArray = [];
        $addCartArray = [];
        // check for saved cart array
        if (isset($_COOKIE["cart_data"]))
            $savedArray = objectToArray(json_decode($_COOKIE["cart_data"]));
        // check if new domain exists in saved array
        if (in_array($domain, array_keys($savedArray))) {
            $addCartArray = $savedArray;
        } else { // get new domain info
            $domVal = smartDomain($domain);
            if ($domVal)
                $newDomain[$domain] = domainStatus($domVal);
            $addCartArray = array_merge($savedArray, $newDomain); // if does not exists, add it to existing array
        }
        // save the cookie
        if (setcookie("cart_data", json_encode($addCartArray), time() + (86400 * 30), "/")) {
            echo "Domain added to cart successfully!";
        } else {
            echo "Error encountered adding your domain to cart!";
        }
    }

    public function remove()
    {
        $domain = $_POST['domain']; // domain to remove
        $savedArray = [];
        $addCartArray = [];
        // check for saved cart array
        if (isset($_COOKIE["cart_data"]))
            $savedArray = objectToArray(json_decode($_COOKIE["cart_data"]));
        // check if new domain exists in saved array
        if (!(in_array($domain, array_keys($savedArray)))) {
            $addCartArray = $savedArray;
        } else {
            foreach ($savedArray as $key => $value) {
                if (!($domain == $key)) {
                    $addCartArray[$key] = $value;
                }
            }
        }
        // save the cookie
        if (setcookie("cart_data", json_encode($addCartArray), time() + (86400 * 30), "/")) {
            echo "Domain removed from the cart successfully!";
        } else {
            echo "Error encountered removing your domain from cart!";
        }
    }

    public function checkCart()
    {
        $status = 0;
        if (isset($_COOKIE["cart_data"])) {
            $savedArray = objectToArray(json_decode($_COOKIE["cart_data"]));
            $status = count($savedArray);
        }
        echo $status;
    }
}
