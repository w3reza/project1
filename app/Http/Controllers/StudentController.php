<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('student.list');
    }
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
           'name'=> 'required',
           'regno'=> 'required',
           'email'=> 'required',
           'phone'=> 'required',
           'photo'=> 'sometimes|image:gif,png,jpeg,jpg'
        ]
        );

        if ($validator->passes()){
           //Save Data
           $student = new Student();
           $student->name=$request->name;
           $student->regno=$request->regno;
           $student->email=$request->email;
           $student->phone=$request->phone;
           $student->fname=$request->fname;
           $student->mname=$request->mname;
           $student->save();
           $request->session()->flash('success','Student added sucessfully');
           return redirect()->route('students.index');
        }
        else {
           // Return Error
           return redirect()->route('students.create')->withErrors($validator)->withInput();
        }

       }
}
