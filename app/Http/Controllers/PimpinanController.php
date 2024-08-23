<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\TravelPackage;

class PimpinanController extends Controller
{
    public function dashboard()
    {
        $data['travelPackages'] = TravelPackage::with('galleries')->count();
        $data['posts']          = Post::count();
        return view('pimpinan.dashboard.index', $data);
    }

    public function index()
    {
        $data['orders'] = Order::all();
        return view('pimpinan.history.index', $data);
    }
}
