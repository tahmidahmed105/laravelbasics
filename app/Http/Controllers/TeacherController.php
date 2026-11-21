<?php
namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function insert()
    {
        $teacher = new Teacher();

        $teacher->teacher_id = 'TA2848';
        $teacher->teacher_name = 'Tahmid';
        $teacher->teacher_department = 'Computer';

        $teacher->save();

        return "Teacher added successfully!";
    }

    public function fetch()
    {
        $teacher = Teacher::all();

        return $teacher;
    }
    public function Teacherinsert100()
{

   // count(100) = generate 100 records
   // create() = Insert them into database
Teacher::factory()->count(100)->create();
}
}