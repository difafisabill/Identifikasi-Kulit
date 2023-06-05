<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function DoctorDashboard(){
        return view('doctor.index');
    }

    public function DoctorEmail(){
        return view('doctor.doctor_email');
    }

    public function DoctorMessages(){
        return view('doctor.doctor_messages');
    }

    public function DoctorSchedule(){
        return view('doctor.doctor_schedule');
    }

    public function DoctorPasientList(){
        return view('doctor.doctor_pasient_list');
    }


}
