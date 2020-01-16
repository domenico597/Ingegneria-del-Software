<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Università
Route::get('api.fred.it/università/view', 'Università@getUniversità');
Route::post('api.fred.it/università/insert', 'Università@setUniversità');
Route::put('api.fred.it/università/edit', 'Università@editUniversità');

// Dipartimenti
Route::get('api.fred.it/dipartimenti/view', 'Dipartimento@getDipartimenti');
Route::post('api.fred.it/dipartimenti/insert', 'Dipartimento@setDipartimento');
Route::put('api.fred.it/dipartimenti/edit', 'Dipartimento@editDipartimento');
Route::delete('api.fred.it/dipartimenti/delete', 'Dipartimento@deleteDipartimento');

// Docenti
Route::get('api.fred.it/docenti/view', 'Docente@getDocenti');
Route::post('api.fred.it/docenti/inset', 'Docente@setDocente');
Route::put('api.fred.it/docenti/edit', 'Docente@editDocente');
Route::get('api.fred.it/docenti/:id/prenotazioni', 'Docente@getMyPrenotazioni');

// Studenti
Route::get('api.fred.it/studenti/view', 'Studente@getStudenti');
Route::post('api.fred.it/studenti/insert', 'Studente@setStudente');
Route::put('api.fred.it/studenti/edit', 'Studente@editStudente');
Route::delete('api.fred.it/studenti/delete', 'Studente@deleteStudente');
Route::get('api.fred.it/studenti/:id/prenotazioni', 'Studente@getMyPrenotazioni');

// Materie
Route::get('api.fred.it/materie/view', 'Materia@getMaterie');
Route::post('api.fred.it/materie/insert', 'Materia@setMateria');
Route::put('api.fred.it/materie/edit', 'Materia@editMateria');

// Presenze
Route::get('api.fred.it/presenze/view', 'Presenza@getPresenze');
Route::post('api.fred.it/presenze/insert', 'Presenza@setPresenza');

// Insegnare
Route::get('api.fred.it/insegnamenti/view', 'Insegnare@getInsegnamenti');
Route::post('api.fred.it/insegnamenti/insert', 'Insegnare@setInsegnamento');
Route::put('api.fred.it/insegnamenti/edit', 'Insegnare@editInsegnamento');

// Prenotazioni Docenti
Route::get('api.fred.it/prenotazioni_docenti/view', 'Prenotazione_docente@getPrenDocenti');
Route::post('api.fred.it/prenotazioni_docenti/insert', 'Prenotazione_docente@setPrenDocente');
Route::put('api.fred.it/prenotazioni_docenti/edit', 'Prenotazione_docente@editPrenDocente');
Route::delete('api.fred.it/prenotazioni_docenti/delete', 'Prenotazione_docente@deletePrenDocente');

// Prenotazioni Studenti
Route::get('api.fred.it/prenotazioni_studenti/view', 'Prenotazioni_studente@getPrenStudenti');
Route::post('api.fred.it/prenotazioni_studenti/insert', 'Prenotazioni_studente@getPrenStudente');
Route::put('api.fred.it/prenotazioni_studenti/edit', 'Prenotazioni_studente@getPrenStudente');
Route::delete('api.fred.it/prenotazioni_studenti/delete', 'Prenotazioni_studente@getPrenStudente');

// Aule
Route::get('api.fred.it/aule/view', 'Aula@getAule');
Route::post('api.fred.it/aule/insert', 'Aula@setAula');
Route::put('api.fred.it/aule/edit', 'Aula@editAula');
Route::delete('api.fred.it/aule/delete', 'Aula@deleteAula');
