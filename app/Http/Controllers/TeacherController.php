<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //! Method to display the teacher form view
    public function tch()
    {
        return view("teacher.teacher_form");
    }

    //! Method to store the teacher data from the form to the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'subject' => 'required',
            'department' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $t_data = $request->all();

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->store('uploads', 'public');
            $t_data['image'] = $filename;
        }

        TeacherModel::create($t_data);
        return redirect('get_tch_data')->with('success', 'Teacher created successfully.');
    }

    //! Method to retrieve and display all teacher data
    public function get_data()
    {
        $t_data = TeacherModel::all();
        return view("teacher.teacher_data", compact('t_data'));
    }

    //! Method to delete a teacher record by ID
    public function delete($id)
    {
        TeacherModel::find($id)->delete();
        return redirect('get_tch_data');
    }

    //! Method to retrieve a specific teacher record for editing
    public function edit($id)
    {
        $t_data = TeacherModel::find($id);
        return view('teacher.edit_teacher_form', compact('t_data'));
    }

    //! Method to update a specific teacher record by ID
    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'subject' => 'required',
            'department' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $t_data = $req->all();

        if ($req->hasFile('image')) {
            $filename = $req->file('image')->store('uploads', 'public');
            $t_data['image'] = $filename;
        }

        TeacherModel::find($id)->update($t_data);
        return redirect('get_tch_data')->with('success', 'Teacher updated successfully.');
    }
}
