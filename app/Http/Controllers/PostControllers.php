<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class PostControllers extends Controller
{
    public function getAll()
    {
        $posts = post::get();
        return view('pr11.qwe', ['posts' => $posts]);
    }
}
