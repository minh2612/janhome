<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	$total = 0;
    return view('frontend/home/index', compact('total'));
}
