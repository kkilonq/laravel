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

        DB::table('users1')->insert([
            'name'=>'vlad',
            'SecondName'=>'gfkoplhg',
            'birthday'=>'1986-04-10',
            'DateOfCreationUser'=>'27.03.2026',
            'age'=>'40',
            'email'=>'coolemail@ww.ru',
            'salary'=>'36000',
        ]);
    }
}
