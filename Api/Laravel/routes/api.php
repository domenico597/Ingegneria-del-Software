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

Route::middleware('auth:api')->groups (function() {

// Università
Route::get('api.fred.it/universities', 'University_controller@getUniversity');
Route::post('api.fred.it/universities', 'University_controller@setUniversity');
Route::put('api.fred.it/universities', 'University_controller@editUniversity');

// Dipartimenti
Route::get('api.fred.it/departments', 'Department_controller@getDepartiments');
Route::post('api.fred.it/dpartments', 'Department_controller@setDepartment');
Route::put('api.fred.it/departments/:id', 'Department_controller@editDepartiment');
Route::delete('api.fred.it/departments/:id', 'Department_controller@deleteDepartment');

// Docenti
Route::get('api.fred.it/teachers', 'Teacher_controller@getTeachers');
Route::post('api.fred.it/teachers', 'Teacher_controller@setTeacher');
Route::put('api.fred.it/teachers/:id', 'Teacher_controller@editTeacher');
Route::get('api.fred.it/teachers/:id/bookings', 'Teacher_controller@myBookings');

// Studenti
Route::get('api.fred.it/students', 'Student_controller@getStudents');
Route::post('api.fred.it/students', 'Student_controller@setStudent');
Route::put('api.fred.it/students/:id', 'Student_controller@editStudent');
Route::delete('api.fred.it/students/:id', 'Student_controller@deleteStudent');
Route::get('api.fred.it/students/:id/bookings', 'Student_controller@myBookings');

// Materie
Route::get('api.fred.it/subjects', 'Subject_controller@getSubjects');
Route::post('api.fred.it/subjects', 'Subject_controller@setSubject');
Route::put('api.fred.it/subjects', 'Subject_controller@editSubject');

// Presenze
Route::get('api.fred.it/attendances', 'Attendance_controller@getAttendances');
Route::post('api.fred.it/attendances', 'Attendance_controller@setAttendance');

// Insegnare
Route::get('api.fred.it/teachings', 'Teaching_controller@getTeachings');
Route::post('api.fred.it/teachings', 'Teaching_controller@setTeaching');
Route::put('api.fred.it/teachings/:id', 'Teaching_controller@editTeaching');

// Prenotazioni Docenti
Route::get('api.fred.it/teachers_bookings', 'Teacher_bookings_controller@getTeacherBooking');
Route::post('api.fred.it/teachers_bookings', 'Teacher_bookings_controller@setTeacherBooking');
Route::put('api.fred.it/teachers_bookings/:id', 'Teacher_bookings_controller@editTeacherBooking');
Route::delete('api.fred.it/teachers_bookings/:id', 'Teacher_bookings_controller@deleteTeacherBooking');

// Prenotazioni Studenti
Route::get('api.fred.it/students_bookings', 'Student_bookings_controller@getStudentBookings');
Route::post('api.fred.it/students_bookings', 'Student_bookings_controller@getStudentBooking');
Route::put('api.fred.it/students_bookings/:id', 'Student_bookings_controller@getStudentBooking');
Route::delete('api.fred.it/students_bookings/:id', 'Student_bookings_controller@getStudentBooking');

// Aule
Route::get('api.fred.it/rooms', 'Room_controller@getRooms');
Route::post('api.fred.it/rooms', 'Room_controller@setRoom');
Route::put('api.fred.it/rooms/:id', 'Room_controller@editRoom');
Route::delete('api.fred.it/rooms/:id', 'Room_controller@deleteRoom');
});
