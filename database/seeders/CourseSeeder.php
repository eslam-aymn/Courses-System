<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Provider\Lorem;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=3; $i++)
        {
            for($j=1; $j<=6; $j++)
            {
                Course::create([
                    "name" => "Course number $j Category number $i",
                    "category_id" => $i,
                    "trainer_id" => rand(1,5),
                    "small_description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                    "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => rand(100,5000),
                    "img" => "$i$j.png",
                ]);
            }
        }
    }
}
