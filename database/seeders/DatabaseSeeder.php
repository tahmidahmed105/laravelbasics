<?php

namespace Database\Seeders;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User 1423',
            'email' => 'test1432@example.com',
        ]);



//$student= new StudentController();
//$student->Studentinsert100();

$teacher= new TeacherController();
$teacher->Teacherinsert100();
    }
}
