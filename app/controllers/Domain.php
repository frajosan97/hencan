<?php

/**
 * Domain controller
 */

class Domain
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->view('Domain', $data, __FUNCTION__);
    }

    public function search()
    {
        $data = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data['reqDomain'] = $_POST['domain'];
        }
        $this->view('Domain', $data, __FUNCTION__);
    }

    public function searchDomain()
    {
        if (!empty($_POST['domain'])) {
            $searchDomain = $_POST['domain'];
            if (checkdnsrr($searchDomain, 'ANY')) {
                echo "<div class='text-danger'>The domain you entered is already registered with us - you will need to cancel it prior to placing a new order</div>";
            } else {
                $domVal = smartDomain($searchDomain);
                if ($domVal) {
                    $domVal = domainStatus($domVal);
                    if ($domVal) {
                        $rep = "<div class='table-responsive'>";
                        $rep .= "<table class='table table-striped table-hover table-sm table-borderless text-start align-middle'>";
                        $rep .= "<tr>";
                        $rep .= "<td class='pw-5 h6'><i class='fas fa-heart'></i></td>";
                        $rep .= "<td class='h6'>" . $searchDomain . "</td>";
                        $rep .= "<td class='text-end'><h5 class='m-0'>Ksh. " . number_format($domVal[0], 2) . "</h5><small>Comes with free SSL certificate</small></td>";
                        $rep .= "<td class='pw-10'><button value='" . $searchDomain . "' class='btn btn-custom text-nowrap' onclick='addDomainToCart(this)'><i class='fas fa-shopping-cart'></i> Add to cart</button></td>";
                        $rep .= "</tr>";
                        $rep .= "</table>";
                        $rep .= "</div>";
                        echo $rep;
                    } else {
                        echo "<div class='text-danger'><b>" . $searchDomain . "</b> is unavailable</div>";
                    }
                } else {
                    echo "<div class='text-danger'><b>" . $searchDomain . "</b> is unavailable</div>";
                }
            }
        } else {
            echo "<div class='text-danger'>Domain name cannot be empty!</div>";
        }
    }
}
