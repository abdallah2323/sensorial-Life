<?php

namespace App\Http\Controllers\Pages;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewCourseController extends Controller
{
    //
    static function show($id)
    {
        $course = Course::find($id);
        return view('sensorial.pages.view.section', ['course' => $course]);
    }

    public function showLecture($id)
    {
        $course = Course::find($id);
        $lecture = Lecture::find($id);
        return view('sensorial.pages.view.lecture', compact('course', 'lecture'));
    }
}
