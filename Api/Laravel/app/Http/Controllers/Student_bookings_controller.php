<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrenStud;

class Student_bookings_controller extends Controller
{
    public function getStudentBookings() {
        $pren = PrenStud::get()->toJson(JSON_PRETTY_PRINT);
        return response($pren, 200);
    }

    public function setStudentBooking(Request $request) {
        $pren = new PrenStud;
        $pren->Posto = $request->place;
        $pren->Studente = $request->student;
        $pren->Data_prenotata = $request->booked_date;
        $pren->Orario_prenotato = $request->booked_time;
        $pren->Data_ora = $request->date;
        $pren->save();
        //return "Prenotazione effettuata";
        return response()->json(["message" => 'Prenotazione Effettuata'], 201);
    }

    public function editStudentBooking(Request $request, $id) {
        if (PrenStud::where('ID_Prenotazione', $id)->exists()) {
            $pren = PrenStud::find($id);
            $pren->Posto = $request->place;
            $pren->Data_prenotata = $request->booked_date;
            $pren->Orario_prenotato = $request->booked_time;
            $pren->save();
            return response()->json(["message" => 'Prenotazione modificata correttamente'], 200);
        }
        else {
            return response()->json(["message" => 'Prenotazione non trovata'], 404);
        }
    }

    public function deleteStudentBooking($id) {
        if (PrenStud::where('Id_Prenotazione', $id)->exists()) {
            $pren = PrenStud::find($id);
            $pren->delete();
            return response()->json(["message" => 'Prenotazione rimossa']);
        }
        else {
            return resposne()->json(["message" => 'Prenotazione non trovata']);
        }
    }

}
