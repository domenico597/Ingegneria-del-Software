<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
use App\PrenDoc;

class Teacher_controller extends Controller
{
    public function getTeachers() {
        $teachers = Docente::get()->toJson(JSON_PRETTY_PRINT);
        return response($teachers, 200);
    }

    public function setTeacher(Request $request) {
        $teacher = new Docente;
        $teacher->Nome = $request->name;
        $teacher->Cognome = $request->surname;
        $teacher->Email = $request->email;
        $teacher->Telefono = $request->phone;
        $teacher->Password = $request->password;
        $teacher->save();
        return response()->json(["message" => 'Docente aggiunto'], 201);
    }

    public function editTeacher(Request $request, $id) {
        if (Docente::where('ID_Docente', $id)->exists()) {
            $teacher = Docente::find($id);
            $teacher->Email = $request->email;
            $teacher->Telefono = $request->phone;
            $teacher->Password = $request->password;
            $teacher->save();
            return response()->json(["message" => 'Docente aggiornato'], 200);
        }
        else {
            return response()->json(["message" => 'Docente non trovato'], 404);
        }
    }

    public function myBookings($id) {
        if (Docente::where('ID_Docente', $id)->exists()) {
            $teacher = PrenDoc::where('Docente', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($teacher, 200);
        }
        else {
            return response()->json(['message' => 'Docente non trovato'], 404);
        }
    }
}
