<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory(100)->create();
//        $faker = Faker::create('id_ID');
//        for($i = 1; $i <= 100; $i++){
//            DB::table('employees')->insert([
//                'name' => $faker->name(),
//                'address' => $faker->cityPrefix(),
//                'position' => $faker->jobTitle(),
//            ]);
//        }
    }
}
