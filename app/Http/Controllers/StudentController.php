<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    //! Method to display the student form view
    public function std()
    {
        return view("student.student_form");
    }

    //! Method to store the student data from the form to the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads', 'public');
            $data['image'] = $filename;
        }

        StudentModel::create($data);
        return redirect('get_data')->with('success', 'Student created successfully.');
    }

    //! Method to retrieve and display all student data
    public function get_data()
    {
        $data = StudentModel::all();
        return view("student.student_data", compact('data'));
    }

    //! Method to delete a student record by ID
    public function delete($id)
    {
        StudentModel::find($id)->delete();
        return redirect('get_data');
    }

    //! Method to retrieve a specific student record for editing
    public function edit($id)
    {
        $data = StudentModel::find($id);
        return view('student.edit_student_form', compact('data'));
    }

    //! Method to update a specific student record by ID
    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $req->all();

        if ($req->hasFile('image')) {
            $filename = $req->file('image')->store('uploads', 'public');
            $data['image'] = $filename;
        }

        StudentModel::find($id)->update($data);
        return redirect('get_data')->with('success', 'Student updated successfully.');
    }
}
