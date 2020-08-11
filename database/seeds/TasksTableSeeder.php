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
                'task' => 'user1のタスク'
            ],
            [
                'user_id' => 2,
                'task' => 'user2のタスク'
            ],
            [
                'user_id' => 3,
                'task' => 'user3のタスク'
            ],
            [
                'user_id' => 4,
                'task' => 'user4のタスク'
            ],
        ]);
    }
}
