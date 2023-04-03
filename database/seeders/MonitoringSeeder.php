<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('monitoring')->insert([
            'project_name' => 'monitoring',
            'client' => 'Nanang Aditya Sutahar',
            'project_leader' => 'jokondo kondo',
            'start_date' => '2023-06-12 23:59:59',
            'end_date' => '2023-12-23 23:59:59',
            'progress' => 50,
            'email' => 'joko@gmail.com'
        ]);
        DB::table('monitoring')->insert([
            'project_name' => 'monitoring',
            'client' => 'Nanang Aditya Sutahar',
            'project_leader' => 'jokondo kondo',
            'start_date' => '2023-06-12 23:59:59',
            'end_date' => '2023-12-23 23:59:59',
            'progress' => 20,
            'email' => 'joko@gmail.com'
        ]);
        DB::table('monitoring')->insert([
            'project_name' => 'monitoring',
            'client' => 'Nanang Aditya Sutahar',
            'project_leader' => 'jokondo kondo',
            'start_date' => '2023-06-12 23:59:59',
            'end_date' => '2023-12-23 23:59:59',
            'progress' => 30,
            'email' => 'joko@gmail.com'
        ]);
     
    }
}
