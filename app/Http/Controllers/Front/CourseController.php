<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function category($id)
    {
        $data['category'] = Category::findOrFail($id);
        $data['courses'] = Course::where('category_id' , $id)->paginate(6);

        return view('front.courses.category')->with($data);
    }


    public function course($id , $courseid)
    {
        $data['course'] = Course::findOrFail($courseid);
        return view('front.courses.course')->with($data);
    }
}
