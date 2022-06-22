<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use Carbon\Carbon;
class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->phone)
        {
            $warranty = Warranty::where('phone', $request->phone)->get();
            //dd($warranty);
            if (count($warranty) == 0)
            {
                $error = "<p> Không tìm thấy lịch sử mua hàng! </p>";
                return view('home.index', ['error' => $error]);
            }
            else{
                foreach ($warranty as $item)
                {
                $item->experied = Carbon::createFromFormat('d/m/Y H:i:s',$item->start)->addYear();
                }
            }
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
