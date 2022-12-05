<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification')->insert([
            'notification' => "0521194000001 has submitted thesis proposal",
            'status' => "unread",
        ]);

        DB::table('notification')->insert([
            'notification' => "0521194000002 has submitted thesis proposal",
            'status' => "unread",
        ]);
    }
}
