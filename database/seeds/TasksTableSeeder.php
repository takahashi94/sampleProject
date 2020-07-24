<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'user_id' => 1,
                'todo' => 'user1の投稿だよ'
            ],
            [
                'user_id' => 2,
                'todo' => 'user2の投稿だよ'
            ],
            [
                'user_id' => 3,
                'todo' => 'user3の投稿だよ'
            ],
            [
                'user_id' => 4,
                'todo' => 'user4の投稿だよ'
            ],
        ]);
    }
}
