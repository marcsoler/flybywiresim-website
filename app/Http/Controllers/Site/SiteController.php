<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
class SiteController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }

    public function index() {
        $time = Carbon::now();

        $release = Http::get('https://api.github.com/repos/flybywiresim/a32nx/releases/latest?access_token=2763dc739fd475100f7968836f29cee440027439')->json();
      
        $contributors = Http::get('https://api.github.com/repos/flybywiresim/a32nx/contributors?per_page=100&?access_token=2763dc739fd475100f7968836f29cee440027439;rel=next')->json();

        $live_flights = Http::get('https://api.flybywiresim.com/txcxn/_count')->json();
        return view('site.index', [
            'time'=>$time, 
            'release'=>$release,
            'contributors'=>count($contributors),
            'live_flights'=>$live_flights,
            ]);
    }
}
