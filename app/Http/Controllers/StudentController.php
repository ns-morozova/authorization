<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
        ]);

        $group->students()->create($request->all());

        return redirect()->route('groups.show', $group);
    }

    public function show(Group $group, Student $student)
    {
        return view('students.show', compact('group', 'student'));
    }
}