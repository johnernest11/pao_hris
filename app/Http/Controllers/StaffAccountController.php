<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\WorkExperience;
use App\Models\WorkExperience1;
use App\Models\WorkExperience2;
use App\Models\AddWorkExperience4;
use Hash;
use Session;



class StaffAccountController extends Controller
{

    public function staff(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();    
        }
        $empdataa = PersonalInformation::with('work_experience','work_experience','work_experience1',
        'work_experience2','add_workexperience4')
        // ->orderBy('WorkPosition','desc')
        ->where('categories','LIKE','%Administrative%')
        ->get();

       

         return view('Staff',compact('empdataa'),compact('data'));

    }


   
}
