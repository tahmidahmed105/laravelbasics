<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    Public function insert()
    {

    $student = new Student();
    $student -> std_id = 'S005';
    $student -> std_name = 'Bhuraj Shrestha';
    $student -> std_campus = 'Campus';
    $student ->save();

return "Student added successfully!";   }



public function fetch()
{
$student=Student::all();
return $student;
}

public function Studentinsert100()
{

   // count(100) = generate 100 records
   // create() = Insert them into database
Student::factory()->count(100)->create();
}
}