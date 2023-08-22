<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class Question extends Model
{
    use HasFactory;
    protected $table = 'c4_question';

    protected $primaryKey ='QuestionID'; 
    protected $fillable =[
        'a34Yes' , 'a34No' 
        ,'b34Yes' ,'b34No' , 'b34Details'  
        ,'a35Yes' ,'a35No' , 'a35Details' 
        ,'b35Yes','b35No' , 'b35Date' ,'b35Status' 
        ,'a36Yes','a36No' , 'a36Details' 
        ,'a37Yes' ,'a37No' , 'a37Details'
        ,'a38Yes','a38No' , 'a38Details' 
        ,'b38Yes' ,'b38No' , 'b38Details' 
        ,'a39Yes' ,'a39No' , 'a39Details' 
        ,'a40Yes' ,'a40No' , 'a40Details' 
        ,'b40Yes' ,'b40No' , 'b40Details'
        ,'c40Yes' ,'c40No' , 'c40Details',
        'AccountId' ,'updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
