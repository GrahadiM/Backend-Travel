<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\TravelPackage;

class DashboardController extends Controller
{
    public function index(){
        $data['travelPackages'] = TravelPackage::with('galleries')->count();
        $data['posts']          = Post::count();
        return view('admin.dashboard.index', $data);
    }
}
