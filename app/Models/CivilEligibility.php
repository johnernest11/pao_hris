<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class CivilEligibility extends Model
{
    use HasFactory;

    protected $table = 'c2_civileligibility';

    protected $primaryKey = 'EligibilityID';

    protected $fillable =[
        'EligibilityName' , 'EligibilityRating' 
        ,'EligibilityDate','EligibilityPlace' 
        ,'EligibilityNo' ,'EligibilityValid' 
        ,'EligibilityName1' , 'EligibilityRating1' 
        ,'EligibilityDate1' ,'EligibilityPlace1' 
        ,'EligibilityNo1','EligibilityValid1' 
        ,'EligibilityName2', 'EligibilityRating2' 
        ,'EligibilityDate2','EligibilityPlace2'
        ,'EligibilityNo2','EligibilityValid2' 
        ,'EligibilityName3', 'EligibilityRating3' 
        ,'EligibilityDate3' ,'EligibilityPlace3' 
        ,'EligibilityNo3','EligibilityValid3'
        ,'EligibilityName4', 'EligibilityRating4' 
        ,'EligibilityDate4','EligibilityPlace4' 
        ,'EligibilityNo4','EligibilityValid4'
        ,'EligibilityName5' , 'EligibilityRating5' 
        ,'EligibilityDate5' ,'EligibilityPlace5' 
        ,'EligibilityNo5' ,'EligibilityValid5'
        ,'EligibilityName6' , 'EligibilityRating6' 
        ,'EligibilityDate6','EligibilityPlace6' 
        ,'EligibilityNo6' ,'EligibilityValid6',
        'AccountId' ,'updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
