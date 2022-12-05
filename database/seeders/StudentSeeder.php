<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('students')->insert([
            'nrp' => "0521194000001",
            'name' => "Yoga Cahya Romadhon",
            'gender' => "M",
            'dob' => '2001-01-01',
            'address' => "Jl Raya Mastrip Kebraon 9, Jawa Timur",
            'phoneNumber' => "081236344686",
            'thesisDefenseDate' => "2023-05-05 08:00:00"
        ]);

        DB::table('students')->insert([
            'nrp' => "0521194000002",
            'name' => "Mufiddin Zulfa Ipna Saputra",
            'gender' => "M",
            'dob' => '2001-03-01',
            'address' => "Jl Raya Mantuls Kebraon 69, Jawa Timur",
            'phoneNumber' => "081546344686",
            'thesisDefenseDate' => "2023-05-06 08:00:00"
        ]);
    }
}
