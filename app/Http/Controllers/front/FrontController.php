<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $pizzas = Post::where('category_id', '=', '1')->get();
        $salads = Post::where('category_id', '=', '2')->get();
        $noodles = Post::where('category_id', '=', '3')->get();

        return view('front.home', compact('pizzas', 'salads', 'noodles'));
    }

    public function about() {
        return view('front.about');
    }

    public function contacts() {
        return view('front.contacts');
    }
}
