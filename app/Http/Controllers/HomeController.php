<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Content;

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
        return view('dashboard');
    }
    public function info()
    {
        return view('info');
    }

    public function read($id)
    {
        $content = Content::find($id);
        return view('read', ["content" => $content]);
    }
    public function category($id)
    {
        $category = Category::find($id);
        $contents = Content::where('cat_id', $id)->get();
        return view('category', ["contents" => $contents, "category" => $category]);
    }
}