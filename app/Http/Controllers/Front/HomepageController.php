<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Trainer;
use App\Models\Test;

class HomepageController extends Controller
{
    public function index()
    {
        $data['banner'] = SiteContent::select('content')->where('name' , 'banner')->first();
        $data['courses'] = Course::select('id' , 'name' , 'category_id' , 'trainer_id' , 'small_description' , 'description' , 'price' , 'img')->orderBy('id' , 'desc')->take(3)->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['tests'] = Test::select('name' , 'speciality' , 'description' , 'img')->get();
        // dd($data['courses']);
        return view('front.index')->with($data);
    }
}
