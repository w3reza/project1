<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::orderBy('id','DESC')->paginate(2);

       return view('employee.list',['employees'=>$employees]);
    }

    public function create(){
        return view('employee.create');
     }

     public function store(Request $request){
      $validator = Validator::make($request->all(),[
         'name'=> 'required',
         'email'=> 'required',
         'photo'=> 'sometimes|image:gif,png,jpeg,jpg'
      ]
      );

      if ($validator->passes()){
         //Save Data
         $employee = new Employee();
         $employee->name=$request->name;
         $employee->email=$request->email;
         $employee->address=$request->address;
         $employee->save();

         if($request->photo){ //Image save here
            $ext = $request->photo->getClientOriginalExtension();
            $newFileName= time().'.'. $ext;
            $request->photo->move(public_path().'/uploads/employees/', $newFileName); //Save file here
            $employee->photo = $newFileName;
            $employee->save();

         }
         $request->session()->flash('success','Employee added sucessfully');
         return redirect()->route('employees.index');
      }
      else {
         // Return Error
         return redirect()->route('employees.create')->withErrors($validator)->withInput();
      }

     }

     public function edit(){

     }
}
