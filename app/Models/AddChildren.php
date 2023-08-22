<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddChildren extends Model
{
    use HasFactory;

    protected $table = 'add_children1';

    protected $primaryKey = 'FamilyID';
    protected $fillable=[
        'AddChildName',
        'AddChildBirth', 
        'AddChildName1' ,
        'AddChildBirth1', 
        'AddChildName2' ,
        'AddChildBirth2', 
        'AddChildName3' ,
        'AddChildBirth3', 
        'AddChildName4',
        'AddChildBirth4', 
        'AddChildName5',
        'AddChildBirth5', 
        'AddChildName6',
        'AddChildBirth6', 
        'AddChildName7' ,
        'AddChildBirth7', 
        'AddChildName8' ,
        'AddChildBirth8', 
        'AddChildName9',
        'AddChildBirth9', 
        'AddChildName10',
        'AddChildBirth10',
        'AddChildName11',
        'AddChildBirth11',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
}
