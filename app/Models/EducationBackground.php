<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class EducationBackground extends Model
{
    use HasFactory;
    protected $table = 'c1_educbackground';

    protected $primaryKey = 'EducID';

    protected $fillable = [
        'ElemSchool', 
        'ElemDegree', 
        'ElemFrom',
        'ElemTo' ,
        'ElemEarned', 
        'ElemYearGrad',
         'ElemHonor',
        'SecondSchool', 
         'SecondDegree', 
        'SecondFrom',
        'SecondTo',
        'SecondEarned', 
        'SecondYearGrad',
        'SecondHonor',
        'VocationSchool' ,
         'VocationDegree' ,
        'VocationFrom',
        'VocationTo',
        'VocationEarned',
        'VocationYearGrad',
        'VocationHonor',
        'CollegeSchool',
         'CollegeDegree', 
        'CollegeFrom' ,
        'CollegeTo',
        'CollegeEarned' ,
        'CollegeYearGrad' ,
        'CollegeHonor' ,
        'GraduateSchool' , 
        'GraduateDegree',  
        'GraduateFrom' ,
        'GraduateTo' ,
        'GraduateEarned', 
        'GraduateYearGrad',
        'GraduateHonor',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'AccountId', 'Id');
     }
}
