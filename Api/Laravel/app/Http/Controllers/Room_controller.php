<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;

class Room_controller extends Controller
{
    public function getRooms() {
        $rooms = Aula::get()->toJson(JSON_PRETTY_PRINT);
        return response($rooms, 200);
    }

    public function getRoom($id){
        if (Aula::where('ID_Aula', $id)->exists()) {
            $room = Aula::where('ID_Aula', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($room, 200);
        }
        else {
            return response()->json(["message" => 'Aula non trovata'], 404);
        }
    }
    
    public function setRoom(Request $request) {
        $room = new Aula;
        $room->Codice_Aula = $request->code;
        $room->Descrizione = $request->description;
        $room->Indirizzo = $request->address;
        $room->Edificio = $request->building;
        $room->Piano = $request->floor;
        $room->Foto = $request->photo;
        $room->Numero_posti = $request->places;
        $room->Dipartimento = $request->department;
        $room->save();

        return response()->json(["message" => 'room created successfully'], 201);
    }

    public function editRoom() {

    }

    public function deleteRoom() {
        
    }
}
