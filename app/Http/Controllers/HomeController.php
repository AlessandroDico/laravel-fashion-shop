<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class HomeController extends Controller {

    public function getHome() {
        $allDresses = Dress::all();

        // dd($allDresses);

        $data = [
            'dresses' => $allDresses,
        ];

        return view('homePage', $data);
    }

    public function getContacts() {
        return view('contacts');
    }

}
