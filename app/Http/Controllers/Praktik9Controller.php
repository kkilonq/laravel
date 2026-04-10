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
  $users = DB::table('users1')->select('name', 'email as user_email' )->get();
  dump($users);
    }
    public function q8 ()
    {
     $users = DB::table('users1')->where('age', '=', 30)->get();
    dump($users);
    }

    public function q9 ()
    {
     $users = DB::table('users1')->where('age', '!=', 30)->get();
    dump($users);
    }

      public function q10 ()
    {
     $users = DB::table('users1')->where('age', '>', 30)->get();
    dump($users);
    }
  
    public function q11 ()
    {
     $users = DB::table('users1')->where('age', '<', 30)->get();
    dump($users);
    }

     public function q12 ()
    {
     $users = DB::table('users1')->where('age', '<', 30)->orWhere('age','=',30)->get();
    dump($users);
    }
  
     public function q13 ()
    {
     $users = DB::table('users1')->where('age', '>', 19)->where('age','<',31)->get();
    dump($users);
    }

     public function q14 ()
    {
     $users = DB::table('users1')->where('age', '=', 30)->orWhere('id','<',4)->get();
    dump($users);
    }

    public function q15 ()
    {
     $users = DB::table('users1')->where('age', '=', 30)->orWhere('id','<',4)->orWhere('salary','=',500)->get();
    dump($users);
    }

     public function q16 ()
    {
     $users = DB::table('users1')->where('age', '>', 19)->where('age','<',31)->orWhere('salary','=',500)->get();
    dump($users);
    }

    public function q17 ()
    {
     $users = DB::table('users1')->where('age', '>', 19)->where('age','<',31)->orWhere(function ($salary){$salary->where('salary','>',399)->where('salary','<',801);})->get();
    dump($users);
    }
  
    public function q18 ()
    {
     $users = DB::table('users1')->where('id', '=', 3)->get();
     return view('pr9.q19',['users'=>$users]);
    }

     public function q20 ()
    {
     $users = DB::table('users1')->where('id', '=', 3)->pluck('email');
     dump($users);
    }

    public function q21 ()
    {
     $users = DB::table('users1')->where('id', '=', 3)->pluck('email');
      return view('pr9.q21',['users'=>$users]);
    }
}
