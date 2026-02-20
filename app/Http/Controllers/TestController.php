<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
    return view('post.Test', ['name' => 'Дмитрий', 'age' => '19','salary'=> '1000$','coolclass'=>'color:red','input'=>'input1','input2'=>'input2','input3'=>'input3','href'=>'yandex.ru','date'=>'03.02.2026']);
}
public function Workers()
{
    $workers = [
		[
			'name' => 'worker1',
			'age' => 21,
            'salary' => '600$',

		],
		[
			'name' => 'worker2',
			'age' => 22,
            'salary' => '700$'
		],
		[
            'name' => 'worker3',
			'age' => 19,
            'salary' => '500$'
        ],

    ];

    return view('post.Test7',['workers'=>$workers]);

}
public function city($city='Москва')
{
return view('post.Test9',['city'=>$city]);
}
public function country()
{
   $location = [
    [
        'country' => 'Япония',
        'city' => 'Токио',
    ],
    [
        'country' => 'Беларусь',

    ],
    [

        'city' => 'Белград',
    ],
   ];
   return view('post.Test10',['location'=>$location]);
}
public function year($year,$month,$day)
{
    return view('post.Test11',['year'=>$year,'month'=>$month,'day'=>$day]);
}
public function tag()
{
    return view('post.Test12',['str'=>'<b>text</b>']);
}
public function ageControll($age)
{
    return view('post.Test13',['age'=>$age]);
}
public function UnlessTest($age)
{
    return view('post.Test14',['age'=>$age]);
}
public function massNumber()
{
    $numbers = [2,4,6,8
    ];
    return view('post.Test15',['numbers'=>$numbers]);
}
public function LimassNumber()
{
    $numbers = [2,4,6,8
    ];
    return view('post.Test16',['numbers'=>$numbers]);
}
public function strmass()
{
$string = ["один","два","три"
];
return view('post.Test17',['string'=>$string]);
}
public function  arrayNumber()
{
$numbers = [2,4,5,3
    ];
    return view('post.Test18',['numbers'=>$numbers]);
}
public function ArrayOrNumber ()
 {
$date = [2,3,4];
return view('post.Test19',['date'=>$date]);
}
public function HtmlTable()
{
      $numbers = [
		[
			2,3,7,10
		],
		[
		213,651,456,123
		],
		[
         671,621,712,9
        ],

    ];
    return view('post.Test20',['numbers'=>$numbers]);
}
public function Workers2()
{
    $employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];
 return view('post.Test21',['employees'=>$employees]);
}
public function UserArray()
{
 $array = ['Петя','Игорь','Олег','Савелий'];
  return view('post.Test22',['array'=>$array]);
}
public function UserArray2()
{
 $array = ['Петя','Игорь','Олег','Савелий'];
  return view('post.Test23',['array'=>$array]);
}
}


