<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class WorkExperience2 extends Model
{
    use HasFactory;
    protected $table = 'c2_workexperience2';
    protected $primaryKey='WorkID';

    protected $fillable =[
        'WorkFrom18' , 'WorkTo18' 
        ,'WorkPosition18' ,'WorkAgency18'
        ,'WorkSalary18' ,'WorkGrade18'
        ,'WorkStatus18' , 'WorkGov18'
        ,'WorkFrom19' , 'WorkTo19'
        ,'WorkPosition19' ,'WorkAgency19' 
        ,'WorkSalary19' ,'WorkGrade19'
        ,'WorkStatus19' , 'WorkGov19' 
        ,'WorkFrom20', 'WorkTo20'
        ,'WorkPosition20' ,'WorkAgency20' 
        ,'WorkSalary20' ,'WorkGrade20'
        ,'WorkStatus20', 'WorkGov20' 
        ,'WorkFrom21', 'WorkTo21' 
        ,'WorkPosition21' ,'WorkAgency21' 
        ,'WorkSalary21','WorkGrade21' 
        ,'WorkStatus21' , 'WorkGov21' 
        ,'WorkFrom22' , 'WorkTo22'
        ,'WorkPosition22' ,'WorkAgency22' 
        ,'WorkSalary22' ,'WorkGrade22' 
        ,'WorkStatus22', 'WorkGov22' 
        ,'WorkFrom23' , 'WorkTo23'
        ,'WorkPosition23' ,'WorkAgency23'
        ,'WorkSalary23' ,'WorkGrade23' 
        ,'WorkStatus23' , 'WorkGov23' 
        ,'WorkFrom24' , 'WorkTo24' 
        ,'WorkPosition24','WorkAgency24'
        ,'WorkSalary24' ,'WorkGrade24' 
        ,'WorkStatus24' , 'WorkGov24'
        ,'WorkFrom25' , 'WorkTo25' 
        ,'WorkPosition25' ,'WorkAgency25' 
        ,'WorkSalary25','WorkGrade25' 
        ,'WorkStatus25' , 'WorkGov25'
        ,'WorkFrom26' , 'WorkTo26' 
        ,'WorkPosition26' ,'WorkAgency26'
        ,'WorkSalary26' ,'WorkGrade26' 
        ,'WorkStatus26' , 'WorkGov26' 
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
