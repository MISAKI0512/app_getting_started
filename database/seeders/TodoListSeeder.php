<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert(
      [
        [
          'todo' => 'テスト1',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'todo' => 'テスト2',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'todo' => 'テスト3',
          'created_at' => now(),
          'updated_at' => now(),
        ],
      ]
    );
    }
}
