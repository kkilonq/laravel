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
public function arrayNumber2()
{
$number =[2,4,6,7,10];
return view('post.Test24',['number'=>$number]);
}
public function arrayForeach()
{
$number = [2,1,0,7,2];
return view('post.Test25',['number'=>$number]);
}
public function skipZero()
{
 $number = [2,1,0,7,2,0,6,1,2,98,0,2];
return view('post.Test26',['number'=>$number]);
}
public function foryou()
{
    return view('post.Test27');
}
public function testCollection()
{  
    $average = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->avg('foo');
$collection = collect([1, 2, 3, 4, 5, 6, 7]);

$chunks = $collection->chunk(4);

$chunks->all();


$collection1 = collect(str_split('AABBCCCD'));

$chunks1 = $collection1->chunkWhile(function ($value, $key, $chunk) {
    return $value === $chunk->last();
});

$chunks1->all();

$collection2 = collect([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);

$collapsed = $collection2->collapse();

$collapsed->all();


$collectionA = collect([1, 2, 3]);

$collectionB = $collectionA->collect();

$collectionB->all();


$collection3 = collect(['name', 'age']);

$combined = $collection3->combine(['George', 29]);

$combined->all();


$collection4 = collect(['John Doe']);

$concatenated = $collection4->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);

$concatenated->all();


$collection5 = collect(['name' => 'Desk', 'price' => 100]);

$collection5->contains('Desk');

$collection6 = collect(['1','2'])->containsOneItem();


$collection7 = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);

$counted = $collection7->countBy(function ($email) {
    return substr(strrchr($email, "@"), 1);
});

$counted->all();


$collection8 = collect([1, 2]);

$matrix = $collection8->crossJoin(['a', 'b']);

$matrix->all();



$collection8 = collect([1, 2]);

$matrix = $collection8->crossJoin(['a', 'b'], ['I', 'II']);

$matrix->all();

$collection9 = collect([1, 2, 3, 4, 5]);

$diff = $collection9->diff([2, 4, 6, 8]);
$diff->all();


$collection9 = collect([
    'color' => 'orange',
    'type' => 'fruit',
    'remain' => 6,
]);

$diff2 = $collection9->diffAssoc([
    'color' => 'yellow',
    'type' => 'fruit',
    'remain' => 3,
    'used' => 6,
]);

$diff->all();


$collection10 = collect([
    'one' => 10,
    'two' => 20,
    'three' => 30,
    'four' => 40,
    'five' => 50,
]);

$diff3 = $collection10->diffKeys([
    'two' => 2,
    'four' => 4,
    'six' => 6,
    'eight' => 8,
]);

$diff3->all();


$collection11 = collect(['name' => 'Desk', 'price' => 100]);

$collection11->doesntContain('Desk');


     return view('pr6.collectTest   ',['average'=>$average,'chunks'=>$chunks,'chunks1'=>$chunks1,'collapsed'=>$collapsed,'collectionB'=>$collectionB,'combined'=>$combined,'concatenated'=>$concatenated,'collection5'=>$collection5,'collection6'=>$collection6,'counted'=>$counted,'matrix'=>$matrix,'diff'=>$diff,'diff2'=>$diff2,'diff3'=>$diff3,'collection11'=>$collection11]);
}
}


