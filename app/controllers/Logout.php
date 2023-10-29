<?php

/**
 * Logout controller
 */

class Logout
{
    use Controller;

    public function index($account = "")
    {
        if (!empty($account)) {
            if (isset($_SESSION[$account])) {
                unset($_SESSION[$account]);
            }
            redirect($account);
        }
    }
}
