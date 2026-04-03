<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class Praktik9Controller extends Controller
{
    public function  q1()
    {
$users = DB::table('users1')->get();
			dd($users);

    }
    public function  q2()
    {
$users = DB::table('users1')->get();
			 foreach ($users as $user) 
				dump($user);

    }
    public function  q3()
    {

$users = DB::table('users1')->get();
            return view('pr9.q3',['users'=>$users]);

    }
    public function  q4()
    {
    DB::enableQueryLog();
	$users = DB::table('users1')->where('id', '!=', 6)->get();
    dump($users);
    dump(DB::getQueryLog());
    }
    public function  q6()
    {
  $users = DB::table('users1')->select('name', 'email')->get();
  dump($users);
    }
  

}
