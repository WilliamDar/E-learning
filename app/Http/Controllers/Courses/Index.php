<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCourses;
use App\Models\Cours;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function store(PostCourses $request)
    {
        Cours::create([$request->validated(), 'user_id' => auth()->user()->id]);
    }

    public function update(PostCourses $request, Cours $cours)
    {
        $cours->update($request->validated());
    }
    public function delete(Cours $cours)
    {
        $cours->delete();
    }

    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $category = $request->input('category');

        $courses = Cours::search($searchTerm);

        if ($category) {
            $courses->where('category', $category);
        }

        $courses = $courses->get();

        return view('courses.index', compact('courses', 'category'));
    }
}
