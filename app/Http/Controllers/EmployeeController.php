<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\FamilyBackground;
use App\Models\AddChildren;
use App\Models\EducationBackground;
use App\Models\EducationBackground2;
use App\Models\CivilEligibility;
use App\Models\AddCivilEligibility;
use App\Models\WorkExperience;
use App\Models\WorkExperience1;
use App\Models\WorkExperience2;
use App\Models\AddWorkExperience4;
use App\Models\Organization;
use App\Models\AddOrganization;
use App\Models\Training;
use App\Models\Training1;
use App\Models\AddTraining;
use App\Models\Information;
use App\Models\AddInformation;
use App\Models\Question;
use App\Models\References;
use Hash;
use Session;



class EmployeeController extends Controller
{
   

    public function employee()
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();
        }
        
        $employeerec = PersonalInformation::with('work_experience')->get();
       
        return view('employee',compact('data','employeerec'));
    }



    public function employeeRecord(Request $request)
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();
        }
        $employeerecord = PersonalInformation::with('work_experience')->get();
       
        return view('employee-record',compact('data','employeerecord'));
    }



    public function IndividualRecord()
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();
        }
        
        $individualRecord =  PersonalInformation::with('education_background','civil_eligibility','work_experience')->get();
        return view('Individual-Record',compact('data','individualRecord'));
    }


    

    
    public function PDS_view($slug)
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();
        }

        $result =   PersonalInformation::with('family_background','add_children',
                    'education_background','add_education_background','civil_eligibility',
                    'add_civileligibility','work_experience','work_experience1',
                    'work_experience2','add_workexperience4','organization',
                    'add_organization','training','training1','add_training',
                    'information','add_information','question','references')
                    ->where('slug',$slug)
                    ->first();

        // foreach($result->family_background as $family_background) {
        //     dd($family_background->FatherSurname);
        // }

        // dd($result->add_children[0]);
  
        return view('/Personal-Data-Sheet',
        compact('result','data'));  
    }

    public function Softdeleteee($Id)    
    {
        
        $SDelete = PersonalInformation::find($Id);
        $SDelete->delete(); 
       
        return redirect('/employee')->with('success',"Data is deleted");
    }


}
