<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrenDoc;

class Teacher_bookings_controller extends Controller
{
    public function getTeacherBookings() {
        $pren = PrenDoc::get()->toJson(JSON_PRETTY_PRINT);
        return response($pren, 200);
    }

    public function setTeacherBooking(Request $request) {
        $pren = new PrenDoc;
        $pren->Aula = $request->room;
        $pren->Docente = $request->teacher;
        $pren->Data_prenotazione = $request->booking_date;
        $pren->Orario_prenotato = $request->booking_time;
        $pren->Materia = $request->subject;
        $pren->save();

        return response()->json(["message" => 'Prenotazione Effettuata'], 201);
    }

    public function editTeacherBooking(Request $request, $id) {
        if (PrenDoc::where('ID_Prenotazione_Lezione', $id)->exists()) {
            $pren = PrenDoc::find($id);
            $pren->Aula = $request->room;
            $pren->Data_prenotazione = $request->booking_date;
            $pren->Orario_prenotato = $request->booking_time;
            $pren->save();
            return response()->json(["message" => 'Prenotazione modificata correttamente'], 200);
        }
        else {
            return response()->json(["message" => 'Prenotazione non trovata'], 404);
        }
    }

    public function deleteTeacherBooking($id) {
        if (PrenDoc::where('ID_Prenotazione_Lezione', $id)->exists()) {
            $pren = PrenDoc::find($id);
            $pren->delete();
            return response()->json(["message" => 'Prenotazione rimossa']);
        }
        else {
            return resposne()->json(["message" => 'Prenotazione non trovata']);
        }
    }
}
