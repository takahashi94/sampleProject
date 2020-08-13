<?php

use Illuminate\Database\Seeder;

class SmaplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('samples')->insert([
            [
                'name' => '山田　太郎',
                'title' => 'タイトル',
                'content' => '内容',
            ],
            [
                'name' => '山中　健二',
                'title' => 'タイトル２',
                'content' => '内容２',
            ],
            [
                'name' => '伊藤　大治',
                'title' => 'タイトル３',
                'content' => '内容３',
            ],
            [
                'name' => '佐藤　謙信',
                'title' => 'タイトル４',
                'content' => '内容４',
            ],
            [
                'name' => '今中　隆',
                'title' => 'タイトル５',
                'content' => '内容５',
            ],
            [
                'name' => '高柳　良二',
                'title' => 'タイトル６',
                'content' => '内容６',
            ],
        ]);
    }
}
