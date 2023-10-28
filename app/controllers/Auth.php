<?php

/**
 * Auth controller
 */

class Auth
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->view('Auth', $data, __FUNCTION__);
    }

    public function register()
    {
        $appData = new App;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $clientModel = new ClientModel;
            if ($_POST['password-1'] == $_POST['password-2']) {
                if (!(str_contains(" ", $_POST['username']))) {
                    if (!($clientModel->fetch(array("username" => $_POST['username'])))) {
                        if (!($clientModel->fetch(array("email" => $_POST['email'])))) {
                            foreach ($_POST as $key => $value) {
                                $postData[$key] = $value;
                            }
                            $postData['password'] = md5($_POST['password-1']);
                            if (!($clientModel->insert($postData))) {
                                $_SESSION['client'] = $_POST['email'];
                                if (isset($_POST['checkout'])) { // checkout
                                    $appData->cartCheckOut();
                                }
                                echo "Account created successfully";
                            } else {
                                echo "Error encountered registering this account, kindly try again!";
                            }
                        } else {
                            echo "Email address you entered is already taken by another user!";
                        }
                    } else {
                        echo "Username address you entered is already taken by another user!";
                    }
                } else {
                    echo "Username MUST NOT contain a space!";
                }
            } else {
                echo "The two passwords MUST match!";
            }
        } else {
            $data = [];
            $this->view('Auth', $data, __FUNCTION__);
        }
    }
}
