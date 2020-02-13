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

//Route::middleware('auth:api')->group (function() {

// Università
Route::get('universities', 'University_controller@getUniversity');
Route::post('universities', 'University_controller@setUniversity');
Route::put('universities/{id}', 'University_controller@editUniversity');

// Dipartimenti
Route::get('departments', 'Department_controller@getDepartments');
Route::post('departments', 'Department_controller@setDepartment');
Route::put('departments/{id}', 'Department_controller@editDepartment');
Route::delete('departments/{id}', 'Department_controller@deleteDepartment');

// Docenti
Route::get('teachers', 'Teacher_controller@getTeachers');
Route::post('teachers', 'Teacher_controller@setTeacher');
Route::put('teachers/{id}', 'Teacher_controller@editTeacher');
Route::get('teachers/{id}/bookings', 'Teacher_controller@myBookings');

// Studenti
Route::get('students', 'Student_controller@getStudents');
Route::post('students', 'Student_controller@setStudent');
Route::put('students/{id}', 'Student_controller@editStudent');
Route::delete('students/{id}', 'Student_controller@deleteStudent');
Route::get('students/{id}/bookings', 'Student_controller@myBookings');

// Materie
Route::get('subjects', 'Subject_controller@getSubjects');
Route::post('subjects', 'Subject_controller@setSubject');
Route::put('subjects/{id}', 'Subject_controller@editSubject');

// Presenze
Route::get('attendances', 'Attendance_controller@getAttendances');
Route::post('attendances', 'Attendance_controller@setAttendance');

// Insegnare
Route::get('teachings', 'Teaching_controller@getTeachings');
Route::post('teachings', 'Teaching_controller@setTeaching');
Route::put('teachings/{id}', 'Teaching_controller@editTeaching');

// Prenotazioni Docenti
Route::get('teachers_bookings', 'Teacher_bookings_controller@getTeacherBookings');
Route::post('teachers_bookings', 'Teacher_bookings_controller@setTeacherBooking');
Route::put('teachers_bookings/{id}', 'Teacher_bookings_controller@editTeacherBooking');
Route::delete('teachers_bookings/{id}', 'Teacher_bookings_controller@deleteTeacherBooking');

// Prenotazioni Studenti
Route::get('students_bookings', 'Student_bookings_controller@getStudentBookings');
Route::post('students_bookings', 'Student_bookings_controller@setStudentBooking');
Route::put('students_bookings/{id}', 'Student_bookings_controller@editStudentBooking');
Route::delete('students_bookings/{id}', 'Student_bookings_controller@deleteStudentBooking');


// Aule
Route::get('rooms', 'Room_controller@getRooms');
Route::post('rooms', 'Room_controller@setRoom');
Route::put('rooms/{id}', 'Room_controller@editRoom');
Route::delete('rooms/{id}', 'Room_controller@deleteRoom');
Route::get('rooms/{id}', 'Room_controller@getRoom');
Route::get('rooms/{department}/departments', 'Room_controller@getRoomsByDepartment');

//Posto
Route::get('places', 'Place_controller@getPlaces');
Route::post('places', 'Place_controller@setPlace');
Route::put('places/{id}', 'Place_controller@editPlace');
Route::delete('places/{id}', 'Place_controller@deletePlace');

//Segnalazioni
Route::get('reports', 'Report_controller@getReports');
Route::post('reports', 'Report_controller@setReport');
Route::put('reports/{id}', 'Report_controller@editReport');
Route::delete('reports/{id}', 'Report_controller@deleteReport');

//});
