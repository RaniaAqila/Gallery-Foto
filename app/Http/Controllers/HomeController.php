<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GallaryImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Pastikan ini tidak dieksekusi sebelum return
    $query = GallaryImage::where('user_id', auth()->id());
    $data['images'] = $query->paginate(1);
    return view('home', $data);
    }

    public function welcome()
    {
        // Pastikan ini tidak dieksekusi sebelum return
    $data = GallaryImage::all();
    return view('welcome', compact('data'));
    }
}
