<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\WorkExperience;
use App\Models\Dashboard;
use Carbon\Carbon;
use Hash;
use Session;



class DashboardController extends Controller
{

    public  function dashboard()
    {
        $data =array();
        if(Session::has('loginId')){
            $data =User::where('id', '=', Session::get('loginId'))->first();    
        }
        
        // $Staff = PersonalInformation::where(function ($query) {
        //     $query->where('categories','LIKE','Administrative%')
        //           ->orWhere('categories','LIKE','Legal%');
        //           $query->count();
        // });
        $Staff = PersonalInformation::where('categories','LIKE','%Admin%')->count();
        $Legal = PersonalInformation::where('categories','LIKE','%Legal%')->count();
        $Lawyer = PersonalInformation::where('categories','LIKE','%Public%')->count();
        $TotalEmployee = WorkExperience::count();

        $Male = PersonalInformation::where('Sex','LIKE','MALE%')->count();
        $MaleMarried = PersonalInformation::where('Sex','LIKE','MALE%')->where('CivilStatus','LIKE','%MARRIED%')->count();
        $MaleSingle = PersonalInformation::where('Sex','LIKE','MALE%')->where('CivilStatus','LIKE','%SINGLE%')->count();
        $MaleWidow = PersonalInformation::where('Sex','LIKE','MALE%')->where('CivilStatus','LIKE','%widow%')->count();
        $MaleAnulled = PersonalInformation::where('Sex','LIKE','MALE%')->where('CivilStatus','LIKE','%AnNull%')->count();
       
        $Female = PersonalInformation::where('Sex','LIKE','FEMALE')->count();
        $FemaleMarried = PersonalInformation::where('Sex','LIKE','FEMALE')->where('CivilStatus','LIKE','%MARRIED%')->count();
        $FemaleSingle = PersonalInformation::where('Sex','LIKE','FEMALE')->where('CivilStatus','LIKE','%SINGLE%')->count(); 
        $FemaleWidow = PersonalInformation::where('Sex','LIKE','FEMALE')->where('CivilStatus','LIKE','%widow%')->count(); 
        $FemaleAnulled = PersonalInformation::where('Sex','LIKE','FEMALE')->where('CivilStatus','LIKE','%AnNull%')->count();

        $Lgbtq = PersonalInformation::where('Sex','LIKE','%MALE*')->count();
        $LgbtqMarried = PersonalInformation::where('Sex','LIKE','%MALE*')->where('CivilStatus','LIKE','%MARRIED%')->count();
        $LgbtqSingle = PersonalInformation::where('Sex','LIKE','%MALE*')->where('CivilStatus','LIKE','%SINGLE%')->count(); 
        $LgbtqWidow = PersonalInformation::where('Sex','LIKE','%MALE*')->where('CivilStatus','LIKE','%widow%')->count(); 
        $LgbtqAnulled = PersonalInformation::where('Sex','LIKE','%MALE*')->where('CivilStatus','LIKE','%AnNull%')->count();

        $currentMonth = date('m');
        $EmployeeBirthday = PersonalInformation::with('work_experience')->whereRaw('MONTH(DateBirthFormat) = ?',[$currentMonth])
        ->orderBy('DateBirthFormat', 'asc')
        ->get();
        

        // $today = date("Y-m-d");
        // $dateOfBirth = PersonalInformation::All();

       

        // $years = Carbon::parse($dateOfBirth)->age;


        // dd($years);
        // $age =  Carbon::parse($this->attributes['DateBirthFormat'])->age;


        return  view('dashboard',
                compact('data','Staff','Legal','Lawyer','TotalEmployee',
                        'EmployeeBirthday','Male','MaleMarried','MaleSingle','MaleWidow','MaleAnulled',
                        'Female','FemaleMarried','FemaleSingle','FemaleWidow','FemaleAnulled',
                        'Lgbtq','LgbtqMarried','LgbtqSingle','LgbtqWidow','LgbtqAnulled'));

      
    
                        // public function age()
                        // {
                        //     return Carbon::parse($this->attributes['DateBirthFormat'])->age;
                        // }



        
    }
}
