<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->phone)
        {
            $warranty = Warranty::where('phone', $request->phone)->first();
            return view('home.index', ['warranty' => $warranty]);
        }
        return view('home.index');
    }
    public function view(Request $request)
    {
        $warranty = Warranty::where('phone')->first();
        return view('home.index', ['warrant' => $warranty]);
    }
}
