<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class WorkExperience1 extends Model
{
    use HasFactory;

    protected $table = 'c2_workexperience1';
    protected $primaryKey='WorkID';

    protected $fillable =[
        'WorkFrom9' , 'WorkTo9'
        ,'WorkPosition9' ,'WorkAgency9'
        ,'WorkSalary9','WorkGrade9' 
        ,'WorkStatus9', 'WorkGov9'
        ,'WorkFrom10' , 'WorkTo10'
        ,'WorkPosition10' ,'WorkAgency10' 
        ,'WorkSalary10' ,'WorkGrade10' 
        ,'WorkStatus10' , 'WorkGov10' 
        ,'WorkFrom11', 'WorkTo11'
        ,'WorkPosition11' ,'WorkAgency11' 
        ,'WorkSalary11' ,'WorkGrade11'
        ,'WorkStatus11', 'WorkGov11' 
        ,'WorkFrom12' , 'WorkTo12'
        ,'WorkPosition12','WorkAgency12' 
        ,'WorkSalary12' ,'WorkGrade12' 
        ,'WorkStatus12' , 'WorkGov12'
        ,'WorkFrom13', 'WorkTo13' 
        ,'WorkPosition13' ,'WorkAgency13' 
        ,'WorkSalary13' ,'WorkGrade13' 
        ,'WorkStatus13' , 'WorkGov13'
        ,'WorkFrom14', 'WorkTo14' 
        ,'WorkPosition14' ,'WorkAgency14'
        ,'WorkSalary14' ,'WorkGrade14'
        ,'WorkStatus14' , 'WorkGov14' 
        ,'WorkFrom15' , 'WorkTo15' 
        ,'WorkPosition15' ,'WorkAgency15' 
        ,'WorkSalary15' ,'WorkGrade15' 
        ,'WorkStatus15' , 'WorkGov15' 
        ,'WorkFrom16' , 'WorkTo16' 
        ,'WorkPosition16' ,'WorkAgency16' 
        ,'WorkSalary16' ,'WorkGrade16' 
        ,'WorkStatus16' , 'WorkGov16' 
        ,'WorkFrom17' , 'WorkTo17' 
        ,'WorkPosition17' ,'WorkAgency17' 
        ,'WorkSalary17' ,'WorkGrade17'
        ,'WorkStatus17', 'WorkGov17'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
