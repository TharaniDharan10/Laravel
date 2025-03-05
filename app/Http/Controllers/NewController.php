<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class NewController extends Controller
{
    public function returnString(){
        return "This is text from controller";
    }

    public function returnWithParameters($name){
        return "The entered name is $name";
    }

    public function index(){
        $data = [
            'success' => true,
            'message' => 'Data retrieved successfully!',
            'data' => [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'role' => 'Admin'
            ]
            ];
            return response()->json($data);
            //or
            //return response()->json($data,200);

    }

    public function registrationForm(){
        return view('regForm');
    }

    //form validation
    public function submitForm(Request $request){
        // echo "Form is submitted successfully";
        
        $validatedEntries = $request->validate([
            "myname" => "required|string|max:20",
            "email" => "required|email",
            "mobno" => "required|min:10"
        ]);
        // echo "After form validation in submitForm method of NewController<br><br>";
        // echo " My name is: $request->myname<br>";
        // echo " My email is: $request->email<br>";
        // echo " My Mobile number is: $request->mobno"; 
        return response()->json($validatedEntries);
    }
}
