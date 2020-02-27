<?php

use Illuminate\Database\Seeder;

// use Carbon\Carbon;
// use Illuminate\Support\Facades\DB;

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
            'tel' => 123,
            'created_at' => Carbon\Carbon::now(),
        ]);
    }
}
