<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostControllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Praktik9Controller;
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
	Route::get('/db/', [Praktik9Controller::class, 'q1']);
	Route::get('/db1/', [Praktik9Controller::class, 'q2']);
	Route::get('/db2/', [Praktik9Controller::class, 'q3']);
	Route::get('/db3/', [Praktik9Controller::class, 'q4']);
	Route::get('/db4/', [Praktik9Controller::class, 'q6']);
	Route::get('/db5/', [Praktik9Controller::class, 'q8']);
	Route::get('/db6/', [Praktik9Controller::class, 'q9']);
	Route::get('/db7/', [Praktik9Controller::class, 'q10']);
	Route::get('/db8/', [Praktik9Controller::class, 'q11']);
	Route::get('/db9/', [Praktik9Controller::class, 'q12']);
	Route::get('/db10/', [Praktik9Controller::class, 'q13']);
	Route::get('/db11/', [Praktik9Controller::class, 'q14']);
	Route::get('/db12/', [Praktik9Controller::class, 'q15']);
	Route::get('/db13/', [Praktik9Controller::class, 'q16']);
	Route::get('/db14/', [Praktik9Controller::class, 'q17']);
	Route::get('/db15/', [Praktik9Controller::class, 'q18']);
	Route::get('/db16/', [Praktik9Controller::class, 'q20']);
	Route::get('/db17/', [Praktik9Controller::class, 'q21']);
	Route::get('/db18/', [Praktik9Controller::class, 'q22']);
	Route::get('/db19/', [Praktik9Controller::class, 'q23']);
	Route::get('/db20/', [Praktik9Controller::class, 'q24']);
	Route::get('/db21/', [Praktik9Controller::class, 'q25']);
	Route::get('/db22/', [Praktik9Controller::class, 'q26']);
	Route::get('/db23/', [Praktik9Controller::class, 'q27']);
	Route::get('/db24/', [Praktik9Controller::class, 'q28']);
	Route::get('/db25/', [Praktik9Controller::class, 'q29']);
	Route::get('/db26/', [Praktik9Controller::class, 'q30']);
	Route::get('/db27/', [Praktik9Controller::class, 'q31']);
	Route::get('/db28/', [Praktik9Controller::class, 'q32']);
	Route::get('/db29/', [Praktik9Controller::class, 'q33']);
	Route::get('/db30/', [Praktik9Controller::class, 'q34']);
	Route::get('/db31/', [Praktik9Controller::class, 'q35']);
	Route::get('/db32/', [Praktik9Controller::class, 'q36']);
	Route::get('/db33/', [Praktik9Controller::class, 'q40']);
    Route::get('/db34/', [Praktik9Controller::class, 'q41']);
	Route::get('/db35/', [Praktik9Controller::class, 'q42']);
	Route::get('/db36/', [Praktik9Controller::class, 'q43']);
	Route::get('/db37/', [Praktik9Controller::class, 'q44']);
	Route::get('/db38/', [Praktik9Controller::class, 'q45']);
	Route::get('/db39/', [Praktik9Controller::class, 'q46']);
	Route::get('/db40/', [Praktik9Controller::class, 'q47']);
	Route::get('/db41/', [Praktik9Controller::class, 'q48']);
	Route::get('/db42/', [Praktik9Controller::class, 'q49']);
	Route::get('/db43/', [Praktik9Controller::class, 'q50']);
	Route::get('/db44/', [Praktik9Controller::class, 'q51']);
	Route::get('/db45/', [Praktik9Controller::class, 'q52']);
	Route::get('/db46/', [Praktik9Controller::class, 'q53']);
	Route::get('/db47/', [Praktik9Controller::class, 'q54']);
	Route::get('/db48/', [Praktik9Controller::class, 'q57']);
	Route::get('/post/all/{order?}/{dir?}', [PostControllers::class, 'getAll'])->where('order','id|title|date')->where('dir','asc|desc');
	Route::get('/post/{id}/', [PostControllers::class, 'getOne'])->where('id', '[0-9]+');
	Route::get('/post/new', [PostControllers::class, 'newPost']);
	Route::post('/post/new', [PostControllers::class, 'newPost']);
	Route::get('/post/change', [PostControllers::class, 'change']);
	Route::match(['get', 'post'], 'post/edit/{id}', [PostControllers::class, 'editPost']);
	Route::get('/post/del/{id}', [PostControllers::class, 'delPost']);
	




