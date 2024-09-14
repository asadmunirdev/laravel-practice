<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function tch()
    {
        return view("teacher.teacher_form");
    }

    public function store(Request $request)
    {
        $t_data = $request->all();
        TeacherModel::create(($t_data));
        return redirect('get_tch_data');
    }

    public function get_data(){
        $t_data = TeacherModel::all();  
        return view("teacher.teacher_data", compact('t_data'));  
    }

    public function delete($id)
    {
        TeacherModel::find($id)->delete();  
        return redirect('get_tch_data');  
    }
    public function edit($id)
    {
        $t_data = TeacherModel::find($id);  // Find the student by ID
        return view('teacher.edit_teacher_form', compact('t_data'));  // Pass the data to the 'edit_student_form' view
    }

    // Method to update a specific student record by ID
    public function update(Request $req, $id)
    {
        $t_data = $req->all();  // Get all updated input data from the request
        TeacherModel::find($id)->update($t_data);  // Find the student by ID and update the record
        return redirect('get_tch_data');  // Redirect to the 'get_data' route
    }
}
