<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AppointmentT;
use App\Models\doctorT;
class AppController extends Controller
{
    public function LoginFunction()
    {
            $usertype= Auth::user()->usertype;

            if ($usertype=='1') {
            return view('admin.admin');
                }

            if ($usertype=='Police') {
            return view('police.police');
                }

            if ($usertype=='User') {
                $doctorT =doctorT::all();
            return view('user.user', compact('doctorT'));

                }

            // if ($usertype=='Doctor') {
            // return view('doctor.doctor');
            // }
            if ($usertype=='Hospital') {
                $AppointmentT =AppointmentT::all();
                return view('hospital.HospitalDashboard',compact('AppointmentT'));
                }

            if ($usertype=='FireStation') {
            return view('FireStation.FireStationHome');
            }
            else{
                return view('Dashboard.home');
            }
    }
  }

