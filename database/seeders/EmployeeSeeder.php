<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
//        Employee::factory(1000)->create();
        for($i = 1; $i <= 100; $i++){
            DB::table('employees')->insert([
                'name' => $faker->name(),
                'address' => $faker->address(),
                'position' => $faker->jobTitle(),
            ]);
        }
    }
}
