<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        
    }

    public function registrationForm(){
        return view('regForm');
    }

    //form validation
    public function submitForm(Request $request){   //form details coming in as Request
        // echo "Form is submitted successfully";
        
        //form validations with validate()
        $validatedEntries = $request->validate([
            "name" => "required|string|max:20|min:2|regex:/^[A-Za-z\s]+$/",
            "email" => "required|email",
            // digits_between says it should have at most 1to4 digits 
            "reg" => "required|integer|digits_between:1,4",
            "mobno" => "required|min:10",
            "age" => "required|integer",
            "gender" =>"required|in:male,female",
            "hobby" => "required|array|min:1" ,//here we shouldnot be adding array bracket[]
        ]);

        // echo "<div style='color: blue; font-weight: bold; font-size: 18px;'>After form validation in submitForm method of StudentController</div><br>";

        // //when we get values as array, use implode() to convert an array into a string.Joins the array elements into a single string, separated by commas.
        $hobbies = implode(", ", $request->hobby);

        // echo "<div style='color: green; font-size: 16px;'><b>My name is:</b> $request->name</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My email is:</b> $request->email</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My regno is:</b> $request->reg</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My Mobile number is:</b> $request->mobno</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My age is:</b> $request->age</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My gender is:</b> $request->gender</div><br>";
        // echo "<div style='color: green; font-size: 16px;'><b>My hobbies are:</b> $hobbies</div><br>";

        // Insert data into the database, these left hand side parameters should be same as table columns
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'reg_no' => $request->reg,
            'mob_no' => $request->mobno,
            'age' => $request->age,
            'gender' => $request->gender,
            'hobby' => $hobbies,
        ]);

        //returning inserted details of db
        return response()->json([
            'success' => true,
            'message' => "Student registered successfully!",
            'data' => $student
        ]);

        // echo "<pre>";
        // print_r($request);

        // return "Student Data";

    }

    public function getStudents(){
        // return "Student data from dat    abase";

        // to connect controller with database table
        //ensure that the table you created in mysql should be of same name as model class, but in plural with 's'  
        $students = \App\Models\Student::all();
        return $students;
    }
}
