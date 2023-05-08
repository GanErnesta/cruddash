<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama' => 'Rizky',
            'jenis_kelamin' => 'L',
            'notelp' => '08123456789',
        ]);
    }
}
