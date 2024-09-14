<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    // Method to display the student form view
    public function std()
    {
        return view("student.student_form");
    }

    // Method to store the student data from the form to the database
    public function store(Request $request)
    {
        $data = $request->all();  // Get all input data from the request
        StudentModel::create($data);  // Create a new student record in the database
        return redirect('get_data');  // Redirect to the 'get_data' route
    }

    // Method to retrieve and display all student data
    public function get_data()
    {
        $data = StudentModel::all();  // Retrieve all student data from the database
        return view("student.student_data", compact('data'));  // Pass the data to the 'student_data' view
    }

    // Method to delete a student record by ID
    public function delete($id)
    {
        StudentModel::find($id)->delete();  // Find the student by ID and delete it
        return redirect('get_data');  // Redirect to the 'get_data' route
    }

    // Method to retrieve a specific student record for editing
    public function edit($id)
    {
        $data = StudentModel::find($id);  // Find the student by ID
        return view('student.edit_student_form', compact('data'));  // Pass the data to the 'edit_student_form' view
    }

    // Method to update a specific student record by ID
    public function update(Request $req, $id)
    {
        $data = $req->all();  // Get all updated input data from the request
        StudentModel::find($id)->update($data);  // Find the student by ID and update the record
        return redirect('get_data');  // Redirect to the 'get_data' route
    }
}
