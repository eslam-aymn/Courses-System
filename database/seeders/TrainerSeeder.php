<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            "name" => "Kareem Fouad",
            "speciality" => "Web Development",
            "img" => "1.png",
        ]);

        Trainer::create([
            "name" => "Mostafa Mahfouz",
            "speciality" => "Web Development",
            "img" => "2.png",
        ]);

        Trainer::create([
            "name" => "Ahmed Nader",
            "speciality" => "Dendist",
            "img" => "3.png",
        ]);

        Trainer::create([
            "name" => "Hazem Mohammed",
            "speciality" => "Doctor",
            "img" => "4.png",
        ]);

        Trainer::create([
            "name" => "Magdy Mahmoud",
            "speciality" => "English",
            "img" => "5.png",
        ]);
    }
}
