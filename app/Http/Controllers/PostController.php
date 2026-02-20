<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
		public function show()
		{
			return view('post.show', [
				'title' => 'you ww page title',
				'text' => 'you page content ',
				'name' => 'Александр',
				'surname' => 'Савлучинский',
			]);

		}

	

}
