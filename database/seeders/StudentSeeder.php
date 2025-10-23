<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            ['fname' => 'Jared', 'mname' => 'Borja', 'lname' => 'Santos', 'student_number' => '2021106798', 'email' => 'jared@example.com'],
            ['fname' => 'John', 'mname' => 'Michael', 'lname' => 'Doe', 'student_number' => '2021106799', 'email' => 'john@example.com'],
            ['fname' => 'Sarah', 'mname' => 'Anne', 'lname' => 'Cruz', 'student_number' => '2021106800', 'email' => 'sarah@example.com'],
            ['fname' => 'Miguel', 'mname' => 'Reyes', 'lname' => 'Tan', 'student_number' => '2021106801', 'email' => 'miguel@example.com'],
            ['fname' => 'Andrea', 'mname' => 'Marie', 'lname' => 'Lopez', 'student_number' => '2021106802', 'email' => 'andrea@example.com'],
            ['fname' => 'Carlos', 'mname' => 'Jose', 'lname' => 'Navarro', 'student_number' => '2021106803', 'email' => 'carlos@example.com'],
            ['fname' => 'Bea', 'mname' => 'Nicole', 'lname' => 'Garcia', 'student_number' => '2021106804', 'email' => 'bea@example.com'],
            ['fname' => 'David', 'mname' => 'Luis', 'lname' => 'Fernandez', 'student_number' => '2021106805', 'email' => 'david@example.com'],
            ['fname' => 'Ella', 'mname' => 'Mae', 'lname' => 'Torres', 'student_number' => '2021106806', 'email' => 'ella@example.com'],
            ['fname' => 'Rafael', 'mname' => 'Cruz', 'lname' => 'Mendoza', 'student_number' => '2021106807', 'email' => 'rafael@example.com'],
            ['fname' => 'Kim', 'mname' => 'Allan', 'lname' => 'Villanueva', 'student_number' => '2021106808', 'email' => 'kim@example.com'],
            ['fname' => 'Patricia', 'mname' => 'Joy', 'lname' => 'Ramirez', 'student_number' => '2021106809', 'email' => 'patricia@example.com'],
            ['fname' => 'Louis', 'mname' => 'Manuel', 'lname' => 'Chua', 'student_number' => '2021106810', 'email' => 'louis@example.com'],
            ['fname' => 'Hannah', 'mname' => 'Grace', 'lname' => 'Bautista', 'student_number' => '2021106811', 'email' => 'hannah@example.com'],
            ['fname' => 'Nathan', 'mname' => 'Paul', 'lname' => 'Ramos', 'student_number' => '2021106812', 'email' => 'nathan@example.com'],
            ['fname' => 'Julia', 'mname' => 'Rose', 'lname' => 'Santiago', 'student_number' => '2021106813', 'email' => 'julia@example.com'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}