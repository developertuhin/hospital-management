<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;

class AdminController extends Controller
{
   public function doctorView(){

   	return view('admin.add_doctor');
   }

   public function upload_doctor(Request $request){

   	  $doctors=new doctors;

   	  

   	  $imagename=time().'.'.$request->image->getClientOriginalExtension();
   	  $request->image->move('doctorimages',$imagename);

   	  $doctors->image =$imagename; 
   	  $doctors->name =$request->name;
   	  $doctors->phone =$request->phone;
   	  $doctors->speciality =$request->speciality;
   	  $doctors->room =$request->room;

   	  $doctors->save();

   	  return redirect()->back()->with('message','Doctor Added Successfully....!!');
   }
}
