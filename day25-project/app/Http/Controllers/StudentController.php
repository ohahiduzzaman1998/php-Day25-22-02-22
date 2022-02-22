<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    protected $city;
    protected $students;


    public function index()
    {
//        $this->name = 'BITM';
//        $this->city = 'Dhaka';
//        $data = 'bitm';
//        $shehon = 'dhaka';
//        return view('all' , ['data' => $this->name]);
//        return view('all')->with(['data' => $this->name,'shehon' => $this->city]);
//        return view('all', compact('data','shehon'));
//        return view('all',[
//            'data' => $this->name,
//            'shehon' => $this->city
//        ]);

//        $this->student  = Student::getAllStudent();
//        return view('all',['students' => $this->student]);
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';

    }
}
