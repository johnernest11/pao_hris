<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class Training extends Model
{
    use HasFactory;
    
    protected $table = 'c3_training';

    protected $primaryKey ='TrainingId';


    protected $fillable =[
        'TrainingTitle' , 'TrainingFrom' 
        ,'TrainingTo' ,'TrainingHours' 
        ,'TrainingType','TrainingConduct'
        ,'TrainingTitle1' , 'TrainingFrom1' 
        ,'TrainingTo1' ,'TrainingHours1' 
        ,'TrainingType1' ,'TrainingConduct1' 
        ,'TrainingTitle2' , 'TrainingFrom2' 
        ,'TrainingTo2' ,'TrainingHours2' 
        ,'TrainingType2','TrainingConduct2' 
        ,'TrainingTitle3', 'TrainingFrom3' 
        ,'TrainingTo3' ,'TrainingHours3'
        ,'TrainingType3' ,'TrainingConduct3' 
        ,'TrainingTitle4' , 'TrainingFrom4' 
        ,'TrainingTo4' ,'TrainingHours4' 
        ,'TrainingType4','TrainingConduct4' 
        ,'TrainingTitle5' , 'TrainingFrom5' 
        ,'TrainingTo5' ,'TrainingHours5' 
        ,'TrainingType5' ,'TrainingConduct5' 
        ,'TrainingTitle6', 'TrainingFrom6' 
        ,'TrainingTo6' ,'TrainingHours6' 
        ,'TrainingType6','TrainingConduct6'
        ,'TrainingTitle7', 'TrainingFrom7'  
        ,'TrainingTo7' ,'TrainingHours7'
        ,'TrainingType7' ,'TrainingConduct7' 
        ,'TrainingTitle9' , 'TrainingFrom9' 
        ,'TrainingTo9' ,'TrainingHours9'
        ,'TrainingType9' ,'TrainingConduct9' 
        ,'TrainingTitle10' , 'TrainingFrom10' 
        ,'TrainingTo10','TrainingHours10' 
        ,'TrainingType10' ,'TrainingConduct10' ,
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
