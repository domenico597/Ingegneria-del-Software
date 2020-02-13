<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class Subject_controller extends Controller
{
    public function getSubjects() {
        $subject = Materia::get()->toJson(JSON_PRETTY_PRINT);
        return response($subject, 200);
    }

    public function setSubject(Request $request) {
        $subject = new Materia;
        $subject->Nome = $request->name;
        $subject->Semestre = $request->semester;
        $subject->Obbligatoria = $request->mandatory;
        $subject->save();
        return response()->json(["message" => 'Materia aggiunta'], 201);
    }

    public function editSubject(Request $request, $id) {
        if (Materia::where('ID_Materia', $id)->exists()) {
            $subject = Materia::find($id);
            $subject->Nome = $request->name;
            $subject->Semestre = $request->semester;
            $subject->Obbligatoria = $request->mandatory;
            $subject->save();
            return response()->json(["message" => 'Materia aggiornata'], 201);
        }
        else {
            return response()->json(["message" => 'Materia non trovata'], 404);
        }
    }
}
