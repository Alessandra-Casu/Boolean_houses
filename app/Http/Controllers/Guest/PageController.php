<?php

namespace App\Http\Controllers\Guest;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        $houses = House::all();

        return view('index', [
            'houses' => $houses,
        ]);
    }
}
