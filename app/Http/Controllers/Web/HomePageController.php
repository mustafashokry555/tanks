<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('displayed', 1)->orderBy('created_at', 'desc')->get();
        return view('web.index', compact( 'sliders'));
    }
}
