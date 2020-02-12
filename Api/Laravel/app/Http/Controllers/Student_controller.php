<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studente;

class Student_controller extends Controller
{
    public function getStudents() {
        $student = Studente::get()->toJson(JSON_PRETTY_PRINT);
        return response($student, 200);
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

        return response()->json(["message" => "Studente inserito correttamente"], 201);
    }

    public function editStudent(Request $request, $id) {
        if (Studente::where('ID_Studente', $id)->exists()) {
            $student = Studente::find($id);
            $student->Email = $request->email;
            $student->Corso = $request->course;
            $student->Password = $request->password;
            $student->save();

            return response()->json(["message" => "Studente aggiornato"], 200);
        }
        else {
            return response()->json(["message" => "Studente non trovato"], 404);
        }
    }

    public function deleteStudent() {
        if (Studente::where('ID_Studente', $id)->exists()) {
            $student = Studente::find($id);
            $student->delete();

            return response()->json(["message" => "Studente eliminato"], 200);
        }
        else {
            return respone()->json(["message" => "Studente non trovato"], 404);
        }
    }

    public function myBookings() {
        
    }
}
