<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'mobile_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'program' => 'required|string|max:255',
            'year_level' => 'required',
            'address' => 'required|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profilePicturePath = $request->file('profile_picture')
            ->store('profile-pictures', 'public');

        $validated['profile_picture'] = $profilePicturePath;

        $student = Student::create($validated);

        return redirect()
    ->route('students.show', ['student' => $student->id])
    ->with('success', 'Student registered successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}
public function update(Request $request, Student $student)
{
    $validated = $request->validate([
        'student_id' => 'required|unique:students,student_id,' . $student->id,
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $student->id,
        'mobile_number' => 'required|numeric',
        'date_of_birth' => 'required|date',
        'gender' => 'required',
        'program' => 'required|string|max:255',
        'year_level' => 'required',
        'address' => 'required|string',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('profile_picture')) {

        $profilePicturePath = $request->file('profile_picture')
            ->store('profile-pictures', 'public');

        $validated['profile_picture'] = $profilePicturePath;
    }

    $student->update($validated);

    return redirect()
        ->route('students.show', ['student' => $student->id])
        ->with('success', 'Student updated successfully!');
}
}