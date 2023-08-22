<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class WorkExperience extends Model
{
    use HasFactory;
    protected $table ='c2_workexperience';
    
    protected $primaryKey='WorkExpId';

    protected $fillable=[
        'WorkFrom', 'WorkTo' 
        ,'WorkPosition','WorkAgency0'
        ,'WorkSalary','WorkGrade' 
        ,'WorkStatus' , 'WorkGov' 
        ,'WorkFrom1', 'WorkTo1'  
        ,'WorkPosition1','WorkAgency1' 
        ,'WorkSalary1' ,'WorkGrade1' 
        ,'WorkStatus1' , 'WorkGov1'
        ,'WorkFrom2' , 'WorkTo2' 
        ,'WorkPosition2' ,'WorkAgency2' 
        ,'WorkSalary2' ,'WorkGrade2' 
        ,'WorkStatus2', 'WorkGov2' 
        ,'WorkFrom3' , 'WorkTo3' 
        ,'WorkPosition3' ,'WorkAgency3' 
        ,'WorkSalary3' ,'WorkGrade3' 
        ,'WorkStatus3', 'WorkGov3' 
        ,'WorkFrom4' , 'WorkTo4' 
        ,'WorkPosition4' ,'WorkAgency4' 
        ,'WorkSalary4' ,'WorkGrade4' 
        ,'WorkStatus4', 'WorkGov4'
        ,'WorkFrom5', 'WorkTo5' 
        ,'WorkPosition5', 'WorkAgency5'
        ,'WorkSalary5', 'WorkGrade5' 
        ,'WorkStatus5',  'WorkGov5' 
        ,'WorkFrom6' , 'WorkTo6'  
        ,'WorkPosition6', 'WorkAgency6'
        ,'WorkSalary6', 'WorkGrade6'
        ,'WorkStatus6' , 'WorkGov6'
        ,'WorkFrom7', 'WorkTo7'
        ,'WorkPosition7', 'WorkAgency7'
        ,'WorkSalary7', 'WorkGrade7'
        ,'WorkStatus7' ,'WorkGov7' 
        ,'WorkFrom8' , 'WorkTo8' 
        ,'WorkPosition8','WorkAgency8'
        ,'WorkSalary8', 'WorkGrade8'
        ,'WorkStatus8' , 'WorkGov8',
         'AccountId'

    ];
    public function personal_information() {
       return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
    }
}
