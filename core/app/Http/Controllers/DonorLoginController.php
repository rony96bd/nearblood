<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorLoginController extends Controller
{
    public function donorLogin()
    {
        return view('donor.login');
    }
}
