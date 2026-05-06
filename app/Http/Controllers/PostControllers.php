<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class PostControllers extends Controller
{
    public function getAll($order = 'date',$dir = 'desc')
    {
        $posts = post::orderBy($order,$dir)->get();
        return view('pr11.qwe', ['posts' => $posts]);
    }
    public function getOne($id)
    {
        $posts = post::findOrFail($id);
        return view('pr11.q4', ['posts' => $posts]);
    }
}
