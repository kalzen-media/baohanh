<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Warranty;
class AdminController extends Controller
{
    //
    public function login()
    {
        if (Auth::check())
        {
            return route('admin.index');
        }
        return view('admin/login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.index');
        }
    }
    public function index()
    {
        $warranties = Warranty::All();
        return view('admin/dashboard', ['warranties' => $warranties]);
    }
}
