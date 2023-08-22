<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddTraining extends Model
{
    use HasFactory;
    protected $table = 'add_training5';

    protected $primaryKey ='AddTrainingId';


    protected $fillable =[
        'AddTrainingTitle' , 'AddTrainingFrom' 
        ,'AddTrainingTo' ,'AddTrainingHours' 
        ,'AddTrainingType','AddTrainingConduct'
        ,'AddTrainingTitle1' , 'AddTrainingFrom1' 
        ,'AddTrainingTo1' ,'AddTrainingHours1' 
        ,'AddTrainingType1' ,'AddTrainingConduct1' 
        ,'AddTrainingTitle2' , 'AddTrainingFrom2' 
        ,'AddTrainingTo2' ,'AddTrainingHours2' 
        ,'AddTrainingType2','AddTrainingConduct2' 
        ,'AddTrainingTitle3', 'AddTrainingFrom3' 
        ,'AddTrainingTo3' ,'AddTrainingHours3'
        ,'AddTrainingType3' ,'AddTrainingConduct3' 
        ,'AddTrainingTitle4' , 'AddTrainingFrom4' 
        ,'AddTrainingTo4' ,'AddTrainingHours4' 
        ,'AddTrainingType4','AddTrainingConduct4' 
        ,'AddTrainingTitle5' , 'AddTrainingFrom5' 
        ,'AddTrainingTo5' ,'AddTrainingHours5' 
        ,'AddTrainingType5' ,'AddTrainingConduct5' 
        ,'AddTrainingTitle6', 'AddTrainingFrom6' 
        ,'AddTrainingTo6' ,'AddTrainingHours6' 
        ,'AddTrainingType6','AddTrainingConduct6'
        ,'AddTrainingTitle7', 'AddTrainingFrom7'  
        ,'AddTrainingTo7' ,'AddTrainingHours7'
        ,'AddTrainingType7' ,'AddTrainingConduct7' 
        ,'AddTrainingTitle9' , 'AddTrainingFrom9' 
        ,'AddTrainingTo9' ,'AddTrainingHours9'
        ,'AddTrainingType9' ,'AddTrainingConduct9' 
        ,'AddTrainingTitle10' , 'AddTrainingFrom10' 
        ,'AddTrainingTo10','AddTrainingHours10' 
        ,'AddTrainingType10' ,'AddTrainingConduct10',
        'AccountId' ,'updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
