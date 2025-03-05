<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function submitForm(){
        echo "Form is submitted successfully";
    }
}
