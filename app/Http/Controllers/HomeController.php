<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::where('status',1)->orderBy('order_no','ASC')->get();

        return view('site.home.index',compact('sliders'));
    }
    public function about()
    {
        return view('site.about-us');
    }
    public function services()
    {
        return view('site.services');
    }
    public function projects()
    {
        return view('site.projects');
    }
    
}
