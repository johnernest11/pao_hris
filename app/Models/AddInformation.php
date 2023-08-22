<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddInformation extends Model
{
    use HasFactory;
    protected $table = 'add_info6';

    protected $primaryKey ='AddInfoId';    
    protected $fillable =[
        'AddInfoSkill' , 
        'AddInfoRecognition', 
        'AddInfoOrganization', 
        'AddInfoSkill1', 
        'AddInfoRecognition1', 
        'AddInfoOrganization1',
        'AddInfoSkill3', 
        'AddInfoRecognition3', 
        'AddInfoOrganization3', 
        'AddInfoSkill4',
         'AddInfoRecognition4', 
        'AddInfoOrganization4', 
        'AddInfoSkill5' , 
        'AddInfoRecognition5', 
        'AddInfoOrganization5', 
        'AddInfoSkill6' , 
        'AddInfoRecognition6', 
        'AddInfoOrganization6',
        'AddInfoSkill7', 
        'AddInfoRecognition7',
        'AddInfoOrganization7',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}