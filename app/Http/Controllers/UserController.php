<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function shows()
    {
          return view('post.shows', [
				'title' => 'page title',
				'name1' => 'Кирилл',
				'surname1' => 'Кейль',
			]);
			
    }
     public function Aktan()
    {
          return view('post.Aktan', [
				'title' => ' Arkasha page ',
				'name' => 'Аркаша',
				'surname' => 'Ардинов',
			]);
			
    }
    public function Dima()
    {
          return view('post.Dima', [
				'title' => ' Dima page ',
				'name' => 'Дима',
				'surname' => 'Максименко',
			]);
			
    }
    public function Nikita()
    {
          return view('post.Nikita', [
				'title' => ' Nikita page ',
				'name' => 'Никита',
				'surname' => 'Скрыпник',
			]);
			
    }
    
    public function all()
    {
        return 'alll';
    }
    public function user($name)
    {
        return 'Привет'.' '.$name;
    }

    public function surname($surname,$name)
    {
        return 'Здравствуйте'.' '.$surname.' '.$name;
    }
    public function city($user)
    {
        $users = [
		'Дима' => 'Омск',
		'Вася' => 'Томск',
		'Яромир' => 'Новокузнецк',
		'Кирилл' => 'Киров',
		'Евгений' => 'Саратов',
	];
    $city = $users[$user] ?? "Имени нету в списке";
   
        return $city;

    }
   
}
