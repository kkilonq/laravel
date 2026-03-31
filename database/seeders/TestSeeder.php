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
            'name'=>'nikita',
            'SecondName'=>'lz',
            'birthday'=>'2007-01-04',
            'DateOfCreationUser'=>'27.03.2026',
            'age'=>'19',
            'email'=>'coolemail@ww.ru',
            'salary'=>'10000',
        ]);
    }
}
