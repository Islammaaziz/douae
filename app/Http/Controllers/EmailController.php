<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(){

        Mail::to(Auth::user()->email)->send(emailMailable);
    }
}
