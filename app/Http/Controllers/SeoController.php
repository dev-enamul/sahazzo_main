<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    public function index(){
        $seos = Seo::get()->keyBy('key');
        return view('seo.index',compact('seos'));
    }
}
