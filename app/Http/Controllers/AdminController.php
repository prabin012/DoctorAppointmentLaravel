<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

class AdminController extends Controller
{
    //
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $doctor = new doctor;

        $image = $request->file;

        $imagename =time().'.'.$image->getClientoriginalExtension();

        $request ->file-> move('doctorimage', $imagename);

        $doctor -> image= $imagename;

        $doctor-> name =$request->name;
        $doctor-> phone =$request->phone;
        $doctor->Specialty =$request->Specialty;
        $doctor-> room =$request->room;
       
        $doctor->save();

        return redirect()-> back()-> with ('message','Doctor is Added Succesfully');
    }

    public function showappointment()
    {

        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';
        $data->save();

        return redirect()->back();
    }
    public function cancaled($id)
    {
        $data=appointment::find($id);

        $data->status='cancaled';
        $data->save();

        return redirect()->back();
    }
}
