<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studente;

class Student_controller extends Controller
{
    public function getStudents() {

    }
    
    public function setStudent(Request $request) {
        $student = new Studente;
        $student->Nome = $request->name;
        $student->Cognome = $request->surname;
        $student->Matricola = $request->freshman;
        $student->Corso = $request->course;
        $student->Password = $request->password;
        $student->Email = $request->email;
        $student->save();

        return response()->json(["message" => "student record created"], 201);
    }

    public function editStudent() {

    }

    public function deleteStudent() {
        
    }

    public function myBookings() {
        
    }
}
