<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users3')->insert([
      [
      'name'=>'gleb',
      'SecondName'=>'glebov',
      'birthday'=>'2004-07-11',
      'DateOfCreationUser'=>'2026-03-03',
      'CityId' => '2',
      'age'=>'21',
      'email'=>'glebassbarabass@mail.ru',
      'salary'=>'700',
      ],
      [
      'name'=>'ivan',
      'SecondName'=>'ivanov',
      'birthday'=>'2005-02-18',
      'DateOfCreationUser'=>'2026-05-23',
      'CityId' => '1',
      'age'=>'21',
      'email'=>'pro100vanya@mail.ru',
      'salary'=>'700',
      ],
      [
      'name'=>'Maxim',
      'SecondName'=>'white',
      'birthday'=>'2004-03-30',
      'DateOfCreationUser'=>'2026-04-28',
      'CityId' => '3',
      'age'=>'22',
      'email'=>'whitewhite@mail.ru',
      'salary'=>'700',
      ]
     ]);
     DB::table('cities')->insert([
      [
      'name'=>'Москва',
      ],
      [
      'name'=>'Омск',
      ],
      [
      'name'=>'Томск',
      ]
     ]);
    }
}
