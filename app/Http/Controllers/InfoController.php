<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request) {
        return User::get();
    }
}
