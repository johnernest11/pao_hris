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
use App\Models\CivilEligibility;
use Hash;
use Session;

class LawyerController extends Controller
{
    public function lawyer(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();    
        }
        $empdataa = PersonalInformation::with('work_experience','work_experience','work_experience1',
        'work_experience2','add_workexperience4')
        // ->orderBy('WorkPosition','desc')
        ->where('categories','LIKE','%Attorney%')
        ->get();

       

         return view('Lawyer',compact('empdataa'),compact('data'));

    }


    public function lawyer_profile(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();    
        }
        $Permanent = WorkExperience::where('WorkPosition','LIKE','%Attorney%')->where('WorkStatus','LIKE','%PERMANENT%')->count();
        $Temporary = WorkExperience::where('WorkPosition','LIKE','%Attorney%')->where('WorkStatus','LIKE','%TEMPORARY%')->count();

        $empdataa = PersonalInformation::with('work_experience','work_experience','work_experience1',
        'work_experience2','add_workexperience4','civil_eligibility')
        // ->orderBy('WorkPosition','desc')
        ->where('categories','LIKE','%Attorney%')
        ->get();

       

         return view('Lawyer-profile',compact('empdataa','Permanent','Temporary'),compact('data'));

    }
}
