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

    public function q36 ()
    {
     $users = DB::table('users1')->where('age','>',30)->orderby('DateOfCreationUser','desc')->get();
      dump($users);
    }

    public function q40 ()
    {
     $users = DB::table('users1')->inRandomOrder()->get();
      dump($users);
    }

    public function q41 ()
    {
     $users = DB::table('users1')->inRandomOrder()->first();
      dump($users);
    }

public function q42 ()
    {
     $users = DB::table('users1')->whereBetween('age',[20,30])->inRandomOrder()->first();
      dump($users);
    }
    
    public function q43 ()
    {
     $users = DB::table('users1')->take(3)->get();
      dump($users);
    }

    public function q44 ()
    {
     $users = DB::table('users1')->take(3)->where('age','=',30)->get();
      dump($users);
    }

    public function q45 ()
    {
     $users = DB::table('users1')->skip(4)->take(10)->get();
      dump($users);
    }

     public function q46 ()
    {
     $users = DB::table('users1')->skip(2)->take(10)->where('age','=',30)->get();
      dump($users);
    }

    public function q47 ()
    {
     $users = DB::table('users1')->insert([
      'name'=>'anton',
      'SecondName'=>'antonov',
      'birthday'=>'2007-05-05',
      'DateOfCreationUser'=>'15.04.2026',
      'age'=>'18',
      'email'=>'antonov0505@mail.ru',
      'salary'=>'300',
     ]);
      
    }

    public function q48 ()
    {
     $users = DB::table('users1')->insertGetId([
      'name'=>'oleg',
      'SecondName'=>'olegov',
      'birthday'=>'2005-08-23',
      'DateOfCreationUser'=>'24.03.2026',
      'age'=>'20',
      'email'=>'olegov032026@mail.ru',
      'salary'=>'500',
     ]);
     echo $users;
      
    }
    public function q49 ()
    {
     $users = DB::table('users1')->insert([
      [
      'name'=>'gleb',
      'SecondName'=>'glebov',
      'birthday'=>'2004-07-11',
      'DateOfCreationUser'=>'03.03.2026',
      'age'=>'21',
      'email'=>'glebassbarabass@mail.ru',
      'salary'=>'700',
      ],
      [
      'name'=>'ivan',
      'SecondName'=>'ivanov',
      'birthday'=>'2005-02-18',
      'DateOfCreationUser'=>'23.05.2026',
      'age'=>'21',
      'email'=>'pro100vanya@mail.ru',
      'salary'=>'700',
      ],
      [
      'name'=>'Maxim',
      'SecondName'=>'white',
      'birthday'=>'2004-03-30',
      'DateOfCreationUser'=>'28.04.2026',
      'age'=>'22',
      'email'=>'whitewhite@mail.ru',
      'salary'=>'700',
      ]
     ]);
    }
      
    public function q50 ()
    {
     $users = DB::table('users1')->where('id','=',6)->update([
      'name'=>'gleb',
     ]);
      dump($users);
    }

    public function q51 ()
    {
     $users = DB::table('users1')->where('age','=',30)->update([
      'salary'=>'500',
     ]);
      dump($users);
    }

    public function q52 ()
    {
     $users = DB::table('users1')->where('id','=',6)->increment('age');
      dump($users);
    }

    public function q53 ()
    {
     $users = DB::table('users1')->where('age','=',30)->increment('salary',100);
      dump($users);
    }

    public function q54 ()
    {
     $users = DB::table('users1')->where('id','=',6)->delete();
      dump($users);
    }

    public function q57 ()
    {
     $users = DB::table('users3')->leftJoin('cities','users3.CityName','=','cities.name')->get();
      dump($users);
    }
    }

