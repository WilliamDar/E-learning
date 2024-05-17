<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCourses;
use App\Models\Cours;

class Index extends Controller
{
    public function store(PostCourses $request)
    {
        Cours::create([$request->validated(), 'user_id'=>auth()->user()->id]);
    }

    public function update(PostCourses $request, Cours $cours)
    {
        $cours->update($request->validated());
    }
    public function delete(Cours $cours)
    {
        $cours->delete();
    }

    public function index()
    {
        $courses = Cours::where('user_id', auth()->user()->id);
        return view('', ['courses'=>$courses]);
    }
}
