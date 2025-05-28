<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ujiCoba extends Controller
{
    public function dashUser() {
        return view('gudang');
    }

    public function dashKasir() {
        return view('welcome');
    }
}
