<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddWorkExperience4 extends Model
{
    use HasFactory;
    protected $table = 'add_workexperience4';

    protected $primaryKey='AddWorkExpId';

    protected $fillable=[
        'AddWorkFrom', 'AddWorkTo' 
        ,'AddWorkPosition','AddWorkAgency0'
        ,'AddWorkSalary','AddWorkGrade' 
        ,'AddWorkStatus' , 'AddWorkGov' 
        ,'AddWorkFrom1', 'AddWorkTo1'  
        ,'AddWorkPosition1','AddWorkAgency1' 
        ,'AddWorkSalary1' ,'AddWorkGrade1' 
        ,'AddWorkStatus1' , 'AddWorkGov1'
        ,'AddWorkFrom2' , 'AddWorkTo2' 
        ,'AddWorkPosition2' ,'AddWorkAgency2' 
        ,'AddWorkSalary2' ,'AddWorkGrade2' 
        ,'AddWorkStatus2', 'AddWorkGov2' 
        ,'AddWorkFrom3' , 'AddWorkTo3' 
        ,'AddWorkPosition3' ,'AddWorkAgency3' 
        ,'AddWorkSalary3' ,'AddWorkGrade3' 
        ,'AddWorkStatus3', 'AddWorkGov3' 
        ,'AddWorkFrom4' , 'AddWorkTo4' 
        ,'AddWorkPosition4' ,'AddWorkAgency4' 
        ,'AddWorkSalary4' ,'AddWorkGrade4' 
        ,'AddWorkStatus4', 'AddWorkGov4'
        ,'AddWorkFrom5', 'AddWorkTo5' 
        ,'AddWorkPosition5', 'AddWorkAgency5'
        ,'AddWorkSalary5', 'AddWorkGrade5' 
        ,'AddWorkStatus5',  'AddWorkGov5' 
        ,'AddWorkFrom6' , 'AddWorkTo6'  
        ,'AddWorkPosition6', 'AddWorkAgency6'
        ,'AddWorkSalary6', 'AddWorkGrade6'
        ,'AddWorkStatus6' , 'AddWorkGov6'
        ,'AddWorkFrom7', 'AddWorkTo7'
        ,'AddWorkPosition7', 'AddWorkAgency7'
        ,'AddWorkSalary7', 'AddWorkGrade7'
        ,'AddWorkStatus7' ,'AddWorkGov7' 
        ,'AddWorkFrom8' , 'AddWorkTo8' 
        ,'AddWorkPosition8','AddWorkAgency8'
        ,'AddWorkSalary8', 'AddWorkGrade8'
        ,'AddWorkStatus8' , 'AddWorkGov8' ,
        'AccountId','updated_at'

    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
