<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo "Test: Controller berhasil di-load!";
    die();
    }
}
