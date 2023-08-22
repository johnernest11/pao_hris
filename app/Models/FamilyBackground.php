<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class FamilyBackground extends Model
{
    use HasFactory;

    protected $table = 'c1_familybackground';

    protected $primaryKey = 'FamilyID';

    // protected $foreignKey ='AccountId';
   
    protected $fillable = [
        'SpouseSureName', 
        'SpouseFirstName',
        'SpouseExtendName',
        'SpouseMiddleName',
        'SpouseOccupation',
        'SpouseEmployer',
        'SpouseBussinesAdd',
        'SpouseTelNo', 
        'FatherSurname',
        'FatherFirstName', 
        'FatherExtendName',
        'FatherMiddleName', 
        'MotherSurname',
        'MotherFirstName',
        'MotherMiddleName', 
        'ChildName',
        'ChildBirth', 
        'ChildName1',
        'ChildBirth1', 
        'ChildName2',
        'ChildBirth2', 
        'ChildName3',
        'ChildBirth3', 
        'ChildName4',
        'ChildBirth4', 
        'ChildName5',
        'ChildBirth5', 
        'ChildName6',
        'ChildBirth6', 
        'ChildName7' ,
        'ChildBirth7', 
        'ChildName8' ,
        'ChildBirth8', 
        'ChildName9',
        'ChildBirth9', 
        'ChildName10',
        'ChildBirth10',
        'ChildName11',
        'ChildBirth11',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}