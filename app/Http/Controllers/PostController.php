<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 

use Illuminate\Http\Request;

class PostController extends Controller
{
		public function show()
		{
		
    DB::table('users1')->insertGetId([
		'name' => 'alex',
		'SecondName' => 'utrghfg',
		'birthday' => '2006-02-02',
		'DateOfCreationUser' =>'03.04.2026',
		'age' => '19',
		'email' =>'email.ru',
		'salary' => '2000',
	]);
		}
}	
