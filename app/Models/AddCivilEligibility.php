<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddCivilEligibility extends Model
{
    use HasFactory;
    protected $table = 'add_civileligibility3';
    protected $primaryKey = 'AddEligibilityID';

    protected $fillable = [
        'AddEligibilityName', 
        'AddEligibilityRating',
        'AddEligibilityDate',
        'AddEligibilityPlace',
        'AddEligibilityNo',
        'AddEligibilityValid',
        'AddEligibilityName1', 
        'AddEligibilityRating1', 
        'AddEligibilityDate1',
        'AddEligibilityPlace1', 
        'AddEligibilityNo1',
        'AddEligibilityValid1', 
        'AddEligibilityName2',
         'AddEligibilityRating2', 
        'AddEligibilityDate2',
        'AddEligibilityPlace2',
        'AddEligibilityNo2',
        'AddEligibilityValid2',
        'AddEligibilityName3', 
        'AddEligibilityRating3',
        'AddEligibilityDate3',
        'AddEligibilityPlace3', 
        'AddEligibilityNo3',
        'AddEligibilityValid3',
        'AddEligibilityName4', 
        'AddEligibilityRating4', 
        'AddEligibilityDate4',
        'AddEligibilityPlace4', 
        'AddEligibilityNo4',
        'AddEligibilityValid4', 
        'AddEligibilityName5', 
        'AddEligibilityRating5', 
        'AddEligibilityDate5',
        'AddEligibilityPlace5', 
        'AddEligibilityNo5',
        'AddEligibilityValid5', 
        'AddEligibilityName6', 
        'AddEligibilityRating6', 
        'AddEligibilityDate6',
        'AddEligibilityPlace6',
        'AddEligibilityNo6',
        'AddEligibilityValid6',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
