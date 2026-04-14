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

    public function q22 ()
    {
     $users = DB::table('users1')->pluck('name');
      dump($users);
    }

      public function q23 ()
    {
     $users = DB::table('users1')->pluck('name');
       return view('pr9.q23',['users'=>$users]);
    }

     public function q24 ()
    {
     $users = DB::table('users1')->whereBetween('age',[30,40])->get();
      dump($users);
    }

    public function q25 ()
    {
     $users = DB::table('users1')->whereNotBetween('age',[30,40])->get();
      dump($users);
    }

     public function q26 ()
    {
     $users = DB::table('users1')->whereIn('id',[6,8,3,9])->get();
      dump($users);
    }

    public function q27 ()
    {
     $users = DB::table('users1')->whereNotIn('id',[6,8,3,9])->get();
      dump($users);
    }

    public function q28 ()
    {
     $users = DB::table('users1')->where('name','=','grisha')->get();
      dump($users);
    }

    public function q29 ()
    {
     $users = DB::table('users1')->where('email','=','nikitabelka@mail.ru')->get();
      dump($users);
    }
    public function q30 ()
    {
     $users = DB::table('users1')->where('name','=','alex')->where('age','=',19)->get();
      dump($users);
    }
    public function q31 ()
    {
     $users = DB::table('users1')->where('id','=','3')->Orwhere('age','=',19)->get();
      dump($users);
    }
    public function q32 ()
    {
     $users = DB::table('users1')->orderby('age','desc')->get();
      dump($users);
    }

    public function q33 ()
    {
     $users = DB::table('users1')->orderby('salary','asc')->get();
      dump($users);
    }
    public function q34 ()
    {
     $users = DB::table('users1')->orderby('DateOfCreationUser','desc')->get();
      dump($users);
    }

    public function q35 ()
    {
     $users = DB::table('users1')->orderby('DateOfCreationUser','asc')->get();
      dump($users);
    }

    
}
