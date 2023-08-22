<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class Training1 extends Model
{
    use HasFactory;
    protected $table = 'c3_training1';

    protected $primaryKey ='TrainingId';    
    protected $fillable =[
        'TrainingTitle11', 'TrainingFrom11'
        ,'TrainingTo11','TrainingHours11'
        ,'TrainingType11' ,'TrainingConduct11'
        ,'TrainingTitle12' , 'TrainingFrom12'
        ,'TrainingTo12' ,'TrainingHours12' 
        ,'TrainingType12','TrainingConduct12' 
        ,'TrainingTitle13' , 'TrainingFrom13'
        ,'TrainingTo13','TrainingHours13' 
        ,'TrainingType13','TrainingConduct13' 
        ,'TrainingTitle14', 'TrainingFrom14' 
        ,'TrainingTo14' ,'TrainingHours14' 
        ,'TrainingType14' ,'TrainingConduct14' 
        ,'TrainingTitle15' , 'TrainingFrom15'
        ,'TrainingTo15','TrainingHours15' 
        ,'TrainingType15','TrainingConduct15' 
        ,'TrainingTitle16' , 'TrainingFrom16' 
        ,'TrainingTo16','TrainingHours16' 
        ,'TrainingType16','TrainingConduct16' 
        ,'TrainingTitle17' , 'TrainingFrom17' 
        ,'TrainingTo17' ,'TrainingHours17' 
        ,'TrainingType17','TrainingConduct17' 
        ,'TrainingTitle18' , 'TrainingFrom18' 
        ,'TrainingTo18' ,'TrainingHours18' 
        ,'TrainingType18' ,'TrainingConduct18' 
        ,'TrainingTitle19' , 'TrainingFrom19' 
        ,'TrainingTo19' ,'TrainingHours19' 
        ,'TrainingType19' ,'TrainingConduct19' 
        ,'TrainingTitle20' , 'TrainingFrom20' 
        ,'TrainingTo20' ,'TrainingHours20' 
        ,'TrainingType20' ,'TrainingConduct20' 
        ,'TrainingTitle21' , 'TrainingFrom21' 
        ,'TrainingTo21','TrainingHours21'
        ,'TrainingType21' ,'TrainingConduct21' ,
        'AccountId','updated_at'
    ];
    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
