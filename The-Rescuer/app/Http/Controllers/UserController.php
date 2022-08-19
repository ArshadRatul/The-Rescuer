<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AppointmentT;
class UserController extends Controller
{
    public function MakeAppointmentFunction(Request $request)
    {
        $AppointmentT = new AppointmentT;
        $AppointmentT->PatientName = Auth::user()->username;
        $AppointmentT->Address = Auth::user()->adress;
        $AppointmentT->ContactNumber = Auth::user()->phone;
        $AppointmentT->Age = $request->Age;
        $AppointmentT->AppointmentType = $request->AppointmentType;
        $AppointmentT->status = 'Pending';
        $AppointmentT->gender = Auth::user()->gender;


        $AppointmentT->save();
        return redirect()->back()->with('confirmation', 'Appointment Sent Successfully Please wait for Doctor Response');
    }



    public function DoctorHelpFunction()
    {
        return view('user.GetDoctorHelp');
    }

    public function CHeckHelpStatusFunction()
    {
        if(Auth::id())
        {
            $username = Auth::user()->username;
            $AppointmentT =AppointmentT::where('PatientName',$username)->get();

            return view('user.ViewHelpStatus',compact('AppointmentT'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function CancelRequestFunction($id){
    // { if('AppointmentT=='){
    //     return view('user.ViewHelpStatus')->with('confirm', 'you hav no appointment');

    // }
        $AppointmentT =AppointmentT::find($id);
        $AppointmentT->delete();
        return redirect()->back();
    }
}
