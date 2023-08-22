<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\FamilyBackground;
use App\Models\AddChildren;
use App\Models\EducationBackground;
use App\Models\AddEducationBackground;
use App\Models\CivilEligibility;
use App\Models\AddCivilEligibility;
use App\Models\WorkExperience;
use App\Models\WorkExperience1;
use App\Models\WorkExperience2;
use App\Models\AddWorkExperience4;
use App\Models\Organization;
use App\Models\AddOrganization;
use App\Models\Training;
use App\Models\Training1;
use App\Models\AddTraining;
use App\Models\Information;
use App\Models\AddInformation;
use App\Models\Question;
use App\Models\References;
use Carbon\Carbon;

class PersonalInformation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'c1_personalinfo';

    // public function personal_information() {
    //     return $this->hasMany(PersonalInformation::class, 'Id', 'Id');
    // }

    protected $primaryKey = 'Id';
    
    protected $fillable = [
        'CsId' , 
        'SureName' 
        ,'FirstName','ExtensionName' 
        ,'MiddleName' ,'DateBirth'  
        ,'PlaceBirth' ,'Sex' 
        ,'CivilStatus' 
        ,'Height','Weight' 
        ,'BloodType' ,'GsisNo'
        ,'PagibigNo','PhilhealthNo' 
        ,'SssNo' ,'TinNo' 
        ,'AgencyEmpNo','Citizenship' 
        ,'CitizenshipDual' ,'CitizenshipByBirth' 
        ,'CitizenshipByNaturalization' ,'CitizenshipCountry' 
        ,'ResAddressLot','ResAddressStreet'
        ,'ResAddressVillage','ResAddressBarangay' 
        ,'ResAddressCity' ,'ResAddressProvince' 
        ,'ResAddressZipCode' ,'PerAddressLot' 
        ,'PerAddressStreet','PerAddressVillage' 
        ,'PerAddressBarangay' ,'PerAddressCity' 
        ,'PerAddressProvince' ,'PerAddressZipCode' 
        ,'TelephoneNo' ,'MobileNo' 
        ,'EmailAddress',
        'slug','categories',
        'updated_at'

    ];

    public $timestamps = false;
    
  

    public function age()
    {
        return Carbon::parse($this->attributes['DateBirthFormat'])->age;
    }

    
    public function family_background() {
        return $this->hasMany(FamilyBackground::class, 'AccountId', 'Id');
    }

    public function add_children() {
        return $this->hasMany(AddChildren::class, 'AccountId', 'Id');
    }

    public function education_background() {
        return $this->hasMany(EducationBackground::class, 'AccountId', 'Id');
    }

    public function add_education_background() {
        return $this->hasMany(AddEducationBackground::class, 'AccountId', 'Id');
    }

    public function civil_eligibility() {
        return $this->hasMany(CivilEligibility::class, 'AccountId', 'Id');
    }

    public function add_civileligibility() {
        return $this->hasMany(AddCivilEligibility::class, 'AccountId', 'Id');
    }

    public function work_experience() {
        return $this->hasMany(WorkExperience::class, 'AccountId', 'Id');
    }

    public function work_experience1() {
        return $this->hasMany(WorkExperience1::class, 'AccountId', 'Id');
    }

    public function work_experience2() {
        return $this->hasMany(WorkExperience2::class, 'AccountId', 'Id');
    }

    public function add_workexperience4() {
        return $this->hasMany(AddWorkExperience4::class, 'AccountId', 'Id');
    }

    public function organization() {
        return $this->hasMany(Organization::class, 'AccountId', 'Id');
    }

    public function add_organization() {
        return $this->hasMany(AddOrganization::class, 'AccountId', 'Id');
    }
    
    public function training() {
        return $this->hasMany(Training::class, 'AccountId', 'Id');
    }

    public function training1() {
        return $this->hasMany(Training1::class, 'AccountId', 'Id');
    }

    public function add_training() {
        return $this->hasMany(AddTraining::class, 'AccountId', 'Id');
    }

    public function information() {
        return $this->hasMany(Information::class, 'AccountId', 'Id');
    }

    public function add_information() {
        return $this->hasMany(AddInformation::class, 'AccountId', 'Id');
    }

    public function question() {
        return $this->hasMany(Question::class, 'AccountId', 'Id');
    }

    public function references() {
        return $this->hasMany(References::class, 'AccountId', 'Id');
    }
}



