<?php

/**
 * Dashboard controller
 */

class Dashboard
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->view('Dashboard', $data, __FUNCTION__);
    }
}
