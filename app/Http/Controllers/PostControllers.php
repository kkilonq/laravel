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
    public function newPost(Request $request) 
     {
        if($request->isMethod('post'))
            {

            
         DB::table('posts')->insert(
            [
                'title'=>$request->title,
                'desc'=>$request->desc,
                'text'=>$request->text,
                'date'=>now()
            ]);
            return redirect(('/post/new'));
           
    }
    return view('pr12.q1');
     } 
     public function change()
     {
    $posts = post::find(1);
	$posts->title = 'Новый заголовок записи с id 1';
    $posts->desc = 'Новое описание записи с id 1 ';
	$posts->save();

     }
     
}
