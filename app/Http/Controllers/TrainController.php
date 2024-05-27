<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        // prendere i dati dei treni di oggi
        $trains = Train::whereDate('departure_time', today())->get();

        // restituire la view cpassando i dati dei treni

        return view('welcome', compact('trains'));
    }
}
