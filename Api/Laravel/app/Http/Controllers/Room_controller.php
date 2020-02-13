<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;
use App\Dipartimento;

class Room_controller extends Controller
{
    public function getRooms() {
        $rooms = Aula::get()->toJson(JSON_PRETTY_PRINT);
        return response($rooms, 200);
    }
    
    public function setRoom(Request $request) {
        $room = new Aula;
        $room->Codice_Aula = $request->code;
        $room->Descrizione = $request->description;
        $room->Indirizzo = $request->address;
        $room->Edificio = $request->building;
        $room->Piano = $request->floor;
        $room->Foto = $request->photo;
        $room->Riservato_stud = $request->students_reserved;
        $room->Numero_posti = $request->places;
        $room->Dipartimento = $request->department;
        $room->save();
        return response()->json(["message" => 'Aula aggiunta'], 201);
    }

    public function editRoom(Request $request, $id) {
        if (Aula::where('ID_Aula', $id)->exists()) {
            $room = Aula::find($id);
            $room->Codice_Aula = $request->code;
            $room->Descrizione = $request->description;
            $room->Indirizzo = $request->address;
            $room->Foto = $request->photo;
            $room->Riservato_stud = $request->students_reserved;
            $room->Numero_posti = $request->places;
            $room->save();
            return response()->json(["message" => 'Aula modificata correttamente'], 200);
        }
        else {
            return response()->json(["message" => 'Aula non trovata'], 404);
        }
    }

    public function deleteRoom($id) {
        if (Aula::where('ID_Aula', $id)->exists()) {
            $room = Aula::find($id);
            $room->delete();
            return response()->json(["message" => 'Aula rimossa'], 200);
        }
        else {
            return response()->json(["message" => 'Aula non trovata'], 404);
        }
    }

    public function getRoom($id) {
        if (Aula::where('ID_Aula', $id)->exists()) {
            $room = Aula::where('ID_Aula', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($room, 200);
        }
        else {
            return response()->json(["message" => 'Aula non trovata'], 404);
        }
    }
    
    public function getRoomsByDepartment($id) {
        if (Dipartimento::where('Dipartimento', $id)->exists()) {
            $room = Aula::where('Dipartimento', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($room, 200);
        }
        else {
            return response()->json(["message" => 'Aula non trovata'], 404);
        }
    }
}
