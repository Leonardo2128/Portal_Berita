<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function datauser(Request $request)
    {
        $category = Category::all();
        $datauser = User::get();
        return view('datauser', ['datauser' => $datauser , 'category' => $category]);
    }

    public function deleteuser($id)
    {
        $user = user::find($id);
        $user -> delete();
        return redirect('/datauser');
    }
}