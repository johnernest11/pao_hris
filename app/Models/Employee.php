<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $connection ="mysql";


    protected $table = 'user';



   public static function PDS($slug)
    {
       
    
        $result = DB::connection('mysql')->table('c1_personalinfo')
       ->join('c1_familybackground','c1_personalinfo.Id',"=",'c1_familybackground.AccountId')
       ->join('add_children1','c1_personalinfo.Id',"=",'add_children1.AccountId')
       ->join('c1_educbackground','c1_personalinfo.Id',"=",'c1_educbackground.AccountId')
       ->join('add_educbackground2','c1_personalinfo.Id',"=",'add_educbackground2.AccountId')
       ->join('c2_civileligibility','c1_personalinfo.Id',"=",'c2_civileligibility.AccountId')
       ->join('add_civileligibility3','c1_personalinfo.Id',"=",'add_civileligibility3.AccountId')
       ->join('c2_workexperience','c1_personalinfo.Id',"=",'c2_workexperience.AccountId')
       ->join('c2_workexperience1','c1_personalinfo.Id',"=",'c2_workexperience1.AccountId')
       ->join('c2_workexperience2','c1_personalinfo.Id',"=",'c2_workexperience2.AccountId')
       ->join('add_workexperience4','c1_personalinfo.Id',"=",'add_workexperience4.AccountId')
       ->join('c3_organization','c1_personalinfo.Id',"=",'c3_organization.AccountId')
       ->join('add_organization4','c1_personalinfo.Id',"=",'add_organization4.AccountId')
       ->join('c3_training','c1_personalinfo.Id',"=",'c3_training.AccountId')
       ->join('c3_training1','c1_personalinfo.Id',"=",'c3_training1.AccountId')
       ->join('add_training5','c1_personalinfo.Id',"=",'add_training5.AccountId')
       ->join('c3_info','c1_personalinfo.Id',"=",'c3_info.AccountId')
       ->join('add_info6','c1_personalinfo.Id',"=",'add_info6.AccountId')
       ->join('c4_question','c1_personalinfo.Id',"=",'c4_question.AccountId')
       ->join('c4_references','c1_personalinfo.Id',"=",'c4_references.AccountId')
       ->where('slug',$slug)
       ->first();

        // return view('Personal-Data-Sheet',
        // compact('result','result'),compact('data'));

    }

    public function family_background() {
        $this->belongsTo(FamilyBackground::class, 'id', 'accountId');
    }
}
