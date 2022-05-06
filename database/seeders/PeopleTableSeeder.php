<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => '23',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower.com',
            'age' => '23',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@two.jp',
            'age' => '23',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => '23',
        ];
        DB::table('people')->insert($param);
    }
}
