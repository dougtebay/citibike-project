<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App;

class StationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $citi_bike = new App\Adapters\CitiBikeApi;
      $stations = $citi_bike->get_stations();
      $bikes = $citi_bike->get_bikes();
      $favorite = new App\Favorite;
      return view('stations.index')->with('stations', $stations)->with('bikes', $bikes)->with('favorite', $favorite);
    }
}
