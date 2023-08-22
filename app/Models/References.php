<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class References extends Model
{
    use HasFactory;
    
    protected $table = 'c4_references';
    protected $primaryKey ='ReferenceId'; 
    protected $fillable= [
        'ReferenceName1', 'ReferenceAddress1'
        ,'ReferenceTel1' 
        ,'ReferenceName2' , 'ReferenceAddress2' 
        ,'ReferenceTel2'
        ,'ReferenceName3' , 'ReferenceAddress3' 
        ,'ReferenceTel3'
        ,'GovernmentId', 'GovernmentNo' 
        ,'GovernmentDate',
        'AccountId' ,'updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
