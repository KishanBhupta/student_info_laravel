<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function storedata(Request $request){
        // dd("Hello");
       $value = $request->validate(
            [
                'name' =>'required',
                'email' =>'required',
                'contact' =>'required',
                'gender' =>'required',
                'hobbies' =>'array',
                'address' =>'required',
                'city' =>'required',
            ]
            
        );

        // $hobbieString = implode(', ', $value['hobbies']);
        
        $us = new Student();
        $us->name = $value['name'];
        $us->email = $value['email'];
        $us->phone = $value['contact'];
        $us->gender = $value['gender'];
        $us->hobbies =  json_encode($value['hobbies']);
        $us->city = $value['city'];
        $us->address = $value['address'];
        // dd($us);
        $us->save();
        return redirect('/');
    }

    function showdata(){
        $studentdata = Student::all();
        // dd($studentdata);
        
        return view('student.home', compact('studentdata'));
    }

    function deletedata($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();

    }
    function editdata($id){
        $student = Student::find($id);
        $stringdata = $student['hobbies'];
        // $array = preg_split('/,/', $stringdata);
        $array = json_decode($stringdata);
        // dd($array[0]);
        return view('student.editdata', compact('student','array'));
    }

    function register(){
        return view('student.register');
    }

    function updatedata($id , Request $request){
        $value =$request->validate(
            [
                'name' =>'required',
                'email' =>'required',
                'contact' =>'required',
                'gender' =>'required',
                'hobbies' =>'array',
                'address' =>'required',
                'city' =>'required',
            ]
        );
        
        // $hobbieString = implode(', ', $value['hobbies']);

        

        $us = Student::find($id);
        $us->name = $value['name'];
        $us->email = $value['email'];
        $us->phone = $value['contact'];
        $us->gender = $value['gender'];
        $us->hobbies =  json_encode($value['hobbies']);
        $us->city = $value['city'];
        $us->address = $value['address'];
        $us->save();
         dd($us);
        dd($us);
        return redirect('/');
    }

    function personaldata($id) { 
        $student = Student::find($id);
        return view('student.personaldata', compact('student'));
    }
}
