<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index(){
        return view('email.verify');
        /* return 'verificar'; */
    }
}
