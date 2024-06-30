<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;

class HomeController extends BaseController {

    public function index() {
        return view('welcome_message');
    }
}