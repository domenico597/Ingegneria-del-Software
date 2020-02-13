<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dipartimento;

class Department_controller extends Controller
{
    public function getDepartments() {
        $departments = Dipartimento::get()->toJson(JSON_PRETTY_PRINT);
        return response($departments, 200);
    }

    public function setDepartment(Request $request) {
        $department = new Dipartimento;
        $department->Nome = $request->name;
        $department->Numero_aule = $request->rooms_number;
        $department->Universita = $request->university;
        $department->save();
        return response()->json(["message" => 'Dipartimento aggiunto'], 201);
    }

    public function editDepartment(Request $request, $id) {
        if (Dipartimento::where('Dipartimento', $id)->exists()) {
            $department = Dipartimento::find($id);                
            $department->Nome = $request->name;
            $department->Numero_aule = $request->rooms_number;
            $department->save();
            return response()->json(["message" => 'Dipartimento modificato correttamente'], 200);
        }
        else {
            return response()->json(["message" => 'Dipartimento non trovato'], 404);
        }
    }

    public function deleteDepartment($id) {
        if (Dipartimento::where('Dipartimento', $id)->exists()) {
            $department = Dipartimento::find($id);        
            $department->delete();
            return response()->json(["message" => 'Dipartimento rimosso'], 200);
        }
        else {
            return response()->json(["message" => 'Dipartimento non trovato'], 404); 
        }
    }
}
