<?php

use App\Http\Controllers\NewController; //used by us
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Controller;

//route with parameter return string with controller
Route::get("/returnStringFromNewController", [NewController::class,"returnString"]);

//route with parameters with controller
Route::get("/hello/{name}", [NewController::class,"returnWithParameters"]);

//return json from controller
Route::get("/json", [NewController::class,"index"]);

//returning view from the controller, here the view was a registration form
Route::get("/regForm", [NewController::class,"registrationForm"]);

//action taken while submitting form
Route::post("/submitMyForm", [NewController::class,"submitForm"]);




Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});


//passing parameter to the route.In case if parameter name is not passed, it throws error
Route::get('/urname/{name?}', function ($name) {
    return ("$name is studying in LPU");
});

//passing parameter to the route.In case if parameter name is not passed, it takes User as its default parameter
Route::get('/lpu/{name?}', function ($name = "User") {
    return ("$name is studying in LPU");
});


//Route passing data to a view.In case if parameter name is not passed, it takes User as its default parameter, similarly for age
Route::get('/profile/{name?}/{age?}', function ($name = "User", $age = "21") {
    //passing it as an associative array
    return view("profile", ['name' => $name, 'age' => $age]);  //method 1 to return value to view
});

//passing array into views
Route::get('/fruits', function () {
    $fruits = ['Apple', 'Orange', 'Banana'];
    // return view("fruits", ['fruits' => $fruits]);   //passing it as an  array
    //or

    //compact Automatically creates ['fruit' => $fruit]
    return view('fruits', compact('fruits')); //method 2 to return value to view
});

route::group(['prefix'=> 'lpu'], function () {  //group is a function,which stores api's with common prefix together
    //or   route::prefix('lpu')->group(function(){
    //passing string to the route
    Route::get('/add/{num1?}/{num2?}', function ($num1 = 0, $num2 = 0) {
        return ("The sum is : " .$num1 + $num2);
    });
    
    
    Route::get('/add/nums/{num1?}/{num2?}', function ($num1 = 0, $num2 = 0) {
        return view('addtwosum')->with("num1", $num1)->with("num2", $num2); //method 3 to return value to view
    });
});


//passing associative array into as string
Route::get('/details', function () {
    $details = ['name' => 'Amit', 'age' => 23 , 'profile' => 'Developer'];
    return ("The details of ".$details['name']." are " .$details['age']. " years old and profile is a ".$details['profile']);
});


//passing associative array into view
Route::get('/detailsbyview', function () {
    $details = ['name' => 'Amit', 'age' => 23 , 'profile' => 'Developer'];
    return view('details' , compact('details'));
})->name('userDetail'); //when we use name ,then to access that route through anchor tag,use route()

//example for page redirection,when i hit /home, it redirects to /aboutUs
Route::get('aboutUs', function () {
    return view('aboutus');
})->name('abt');    //name is just to recognise this route as abt
Route::redirect('/home','aboutUs');

//returning json response from the route
Route::get('/returnjson', function () {
    $mydetails = ['name'=> 'Danny','age'=> 21,'gender'=> 'male'];
    return response()->json($mydetails);
});

//to set a cookie.In laravel cookie is encrypted by default
Route::get('/setmycookie', function () {
    return response("My cookie value is set")->cookie("username","abc",1);
});

//to get a cookie
Route::get("getmycookie", function () {
    return request()->cookie("username");
});

//to delete a cookie
Route::get("deletemycookie", function () {
    return response("Cookie is deleted")->cookie("username","",-1);
});


Route::get('/test', function (Request $request) {
    return "Welcome to the site!";
});

