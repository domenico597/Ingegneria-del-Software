<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posto;

class Place_controller extends Controller
{
    public function getPlaces() {
        $places = Posto::get()->toJson(JSON_PRETTY_PRINT);
        return response($places, 200);
    }

    public function setPlace(Request $request) {
        $place = new Posto;
        $place->Numero_posto = $request->place;
        $place->ID_Aula = $request->aula;
        $place->save();
        return response()->json(["message" => 'Posto aggiunto'], 201);
    }

    public function editPlace(Request $request, $id) {
        if (Posto::where('ID_Posto', $id)->exists()) {
            $place = Posto::find($id);
            $place->Numero_posto = $request->place;
            $place->save();
            return response()->json(["message" => 'Posto aggiornato'], 200);
        }
        else {
            return response()->json(["message" => 'Posto non troato'], 404);
        }
    }

    public function deletePlace($id) {
        if (Posto::where('ID_Posto', $id)->exists()) {
            $place = Posto::find($id);
            $place->delete();
            return response()->json(["message" => 'Posto rimosso'], 200);
        }
        else {
            return response()->json(["message" => 'Posto non trovato'], 404);
        }
    }
}
