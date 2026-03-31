<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vasia',function() {
return 'petya';
});
//Задание 1
Route::get('/test',function() {
return 'test';
});
//Задание 2
Route::get('/dir/test',function() {
return 'dir+test';
});
//Задание 7
Route::get('/user7/{id}/{name}',function($id,$name) {
return 'user7'.' '.$id.' '.$name;
})->where('id','[0-9]+')->where('name', '[a-z0-9_-]{2,}');
//Задание 6
Route::get('/user6/{id}',function($id) {
return 'user6'.' '.$id;
})->where('id','[0-9]+');
//Задание 3
Route::get('/user3/{name}',function($name) {
return 'user'.$name;
});
//Задание 4
Route::get('/user4/{surname}/{name}',function($surname,$name) {
return 'user'.' '.$surname.' '.$name;
});
//Задание 5
Route::get('/city/{city?}',function($city='omsk') {
return 'city'.' '.$city;
});
//Задание 8
Route::get('/post/{date}',function($date) {
return 'post'.' '.$date;
})->where('date','[0-9]{4}-[0-9]{2}-[0-9]{2}');
//Задание 9
Route::get('/user9/{year}/{mounth}/{day}',function($year,$mounth,$day) {
return 'user9'. ' '. $year.'-'.$mounth.'-'.$day;
})->where('year','[0-9]{4}')->where('mounth','[0-9]{2}')->where('day','[0-9]{2}');
//Задание 10
Route::get('/user10/{orders}',function($orders) {
return 'user10'.' '.$orders;
})->where('orders','name|surname|age');
//Задание 11
Route::get('/city11/{name}',function($name) {
return 'city11'.' '.$name;
})->where('name','[a-z]+');
//Задание 12
Route::get('/user12/{name}',function($name) {
return 'user12'.' '.$name;
})->where('name','[a-z0-9_-]+');
//Задание 13
	Route::get('/user13/all', function () {
		return 'all';
	});

	Route::get('/user13/{id}', function ($id) {
		return 'id';
});
//Задание 14
	Route::get('/user14/', function () {
		return 'user';
	});
	Route::get('/user14/all', function () {
		return 'all';
	});
Route::get('/user14/{id?}', function ($id = null) {
		return 'id';
	});
//Задание 15
    Route::get('/user15/{id}', function ($id) {
		return 'id';
	})->where('id', '[0-9]+');

 Route::get('/user15/{id}', function ($id) {
		return 'id';
	})->where('slug', '[a-z0-9_-]+');
//Задание 16
 Route::get('/admin/user/{id}', function ($id) {
		return $id;
	});

    Route::get('/admin/users/', function () {
		return 'all';
	});
// Задание 17
Route::get('/user17/{profile}', function ($profile) {
		return $profile;
	});




	// Практика 3 Задание 2
	Route::get('/user18', [UserController::class, 'show']);
    // Задание 3
	Route::get('/user19/all', [UserController::class, 'all']);
	//Задание 6
	Route::get('/user20/{name}', [UserController::class, 'user']);
	//Задание 7
	Route::get('/user21/{surname}/{name}', [UserController::class, 'surname']);
	//Задание 8а
	Route::get('/user22/{users}', [UserController::class, 'city']);
	//Практика 4 Задание 1-3
	Route::get('/user23/', [PostController::class, 'show']);
	//Задание 4-6
	Route::get('/user24/', [UserController::class, 'shows']);
    //Задание 7-11
	Route::get('/user25/', [UserController::class, 'Aktan']);
	Route::get('/user26/', [UserController::class, 'Dima']);
	Route::get('/user27/', [UserController::class, 'Nikita']);
	// Практика 5 задания 1-6
	Route::get('/user28/', [TestController::class, 'show']);
	// Задание 7
	Route::get('/user29/', [TestController::class, 'Workers']);
	Route::get('/user30/{city?}', [TestController::class, 'city']);
	Route::get('/user31/', [TestController::class, 'country']);
	Route::get('/user32/{year}/{mount}/{day}', [TestController::class, 'year'])->where('year','[0-9]{4}')->where('mounth','[0-9]{2}')->where('day','[0-9]{2}');
	Route::get('/user33/', [TestController::class, 'tag']);
	Route::get('/user34/{age}', [TestController::class, 'ageControll']);
	Route::get('/user35/', [TestController::class, 'massNumber']);
	Route::get('/user36/', [TestController::class, 'LimassNumber']);
    Route::get('/user37/', [TestController::class, 'strmass']);
    Route::get('/user38/', [TestController::class, 'arrayNumber']);
    Route::get('/user39/', [TestController::class, 'ArrayOrNumber']);
    Route::get('/user40/', [TestController::class, 'HtmlTable']);
    Route::get('/user41/', [TestController::class, 'Workers2']);
    Route::get('/user42/', [TestController::class, 'UserArray']);
	Route::get('/user43/', [TestController::class, 'UserArray2']);
	Route::get('/user44/', [TestController::class, 'arrayNumber2']);
	Route::get('/user45/', [TestController::class, 'arrayForeach']);
	Route::get('/user46/', [TestController::class, 'skipZero']);
	Route::get('/user47/', [TestController::class, 'foryou']);
	Route::get('/user48/', [TestController::class, 'testCollection']);
	Route::get('/user49/', [TestController::class, 'everyTest']);
	Route::get('/user50/', [PostController::class, 'show']);
		
	




