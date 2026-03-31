<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 

use Illuminate\Http\Request;

class PostController extends Controller
{
		public function show()
		{
		
      $post = DB::table('users1')->where('id', 5)->first();
		dump($post);

		}

	

}	
