<?php

use App\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $student_list = Student::all();
    return view('welcome',["list" => $student_list]);
});
Route::get('/add', function () {    
    return view('add_student');
});
Route::post('/add-student', function (Request $request) { 
    
    $request->validate([
        "name" => "required|string",
        "age" => "required|numeric",
        "address" => "required|string",
        "tel" => "required|string",
    ]);
    try {
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("tel"),
        ]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    return redirect()->to("/");
});
