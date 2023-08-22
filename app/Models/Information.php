<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class Information extends Model
{
    use HasFactory;
    protected $table = 'c3_info';

    protected $primaryKey ='InfoId';    
    protected $fillable =[
        'InfoSkill' , 'InfoRecognition' 
        ,'InfoOrganization' 
        ,'InfoSkill1', 'InfoRecognition1' 
        ,'InfoOrganization1'
        ,'InfoSkill3', 'InfoRecognition3' 
        ,'InfoOrganization3' 
        ,'InfoSkill4', 'InfoRecognition4' 
        ,'InfoOrganization4' 
        ,'InfoSkill5' , 'InfoRecognition5' 
        ,'InfoOrganization5' 
        ,'InfoSkill6' , 'InfoRecognition6' 
        ,'InfoOrganization6'
        ,'InfoSkill7', 'InfoRecognition7'
        ,'InfoOrganization7',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
