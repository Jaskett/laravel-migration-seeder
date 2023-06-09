<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();

        return view('welcome', compact('trains'));
    }
}
