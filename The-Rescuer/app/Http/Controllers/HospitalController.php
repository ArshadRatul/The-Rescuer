<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\doctorT;
use App\Models\AppointmentT;
class HospitalController extends Controller
{

    public function AddDoctor(Request $request)
    {
        $doctorT = new doctorT;
        $doctorT->first_name = $request->first_name;
        $doctorT->last_name = $request->last_name;
        $doctorT->username = $request->username;
        $doctorT->HospitalName = $request->HospitalName;
        $doctorT->email = $request->email;
        $doctorT->ContactNumber = $request->ContactNumber;
        $doctorT->Address = $request->Address;
        $doctorT->Department = $request->Department;
        $doctorT->Position = $request->Position;
        $doctorT->DoctorDOB = $request->DoctorDOB;
        $doctorT->gender = $request->gender;


        $doctorT->save();
        return redirect()->back()->with('success', 'Doctor Added Successfully');

    }
    public function AddDoctorFunction()
    {
        return view('hospital.AddDoctorView');
    }
    public function ViewAppointmentFunction()
    {

        $AppointmentT =AppointmentT::all();
        return view('hospital.ViewReceivedHelpRequest',compact('AppointmentT'));

    }

    public function AppointDoctorFunction($id)
    {
        $AppointmentT =AppointmentT::find($id);
        $AppointmentT->status = 'Accepted';
        $AppointmentT->save();
        return redirect()->back();

    }
}
