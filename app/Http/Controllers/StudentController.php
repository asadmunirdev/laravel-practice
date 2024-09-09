<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function std(){
        return view ("student");
    }
    public function store(Request $request){
        $data= $request ->all();
        StudentModel::create($data);
        return redirect()->back();
    }

}
