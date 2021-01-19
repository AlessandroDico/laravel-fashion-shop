<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class HomeController extends Controller {

    public function getHome() {
        $allDresses = Dress::all();

        dd($allDresses); 
        return view('homePage');
    }

    public function getContacts() {
        return view('contacts');
    }

}
