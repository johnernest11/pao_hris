<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddEducationBackground extends Model
{
    use HasFactory;
    protected $table = 'add_educbackground2';

    protected $primaryKey= 'EducID';
    protected $foreignKey ='AccountId';
    protected $fillable = [
        'AddElemSchool', 'AddElemDegree'  
        ,'AddElemFrom' ,'AddElemTo' ,'AddElemEarned' 
        ,'AddElemYearGrad' ,'AddElemHonor' 
        ,'AddSecondSchool' , 'AddSecondDegree' 
        ,'AddSecondFrom' ,'AddSecondTo' ,'AddSecondEarned' 
        ,'AddSecondYearGrad' ,'AddSecondHonor'  
        ,'AddVocationSchool' , 'AddVocationDegree'  
        ,'AddVocationFrom' ,'AddVocationTo','AddVocationEarned' 
        ,'AddVocationYearGrad','AddVocationHonor' 
        ,'AddCollegeSchool', 'AddCollegeDegree'  
        ,'AddCollegeFrom' ,'AddCollegeTo','AddCollegeEarned' 
        ,'AddCollegeYearGrad','AddCollegeHonor' 
        ,'AddGraduateSchool', 'AddGraduateDegree'  
        ,'AddGraduateFrom','AddGraduateTo','AddGraduateEarned' 
        ,'AddGraduateYearGrad','AddGraduateHonor' ,
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'AccountId', 'Id');
     }
}
