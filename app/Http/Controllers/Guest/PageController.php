<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('giorno_partenza', '>=', Carbon::today())
    ->where('orario_partenza', '>', Carbon::now()->format('H:i:s'))
    ->get();
        return view('welcome', ['trains' => $trains]);
    }
}
