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

   
}
