<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class Organization extends Model
{
    use HasFactory;
    
    protected $table = 'c3_organization';

    protected $primaryKey='OrganizationID';

    protected $fillable =[
        'OrganizationName', 'OrganizationFrom'
        ,'OrganizationTo' ,'OrganizationHours'
        ,'OrganizationPosition'
        ,'OrganizationName1', 'OrganizationFrom1' 
        ,'OrganizationTo1' ,'OrganizationHours1' 
        ,'OrganizationPosition1'
        ,'OrganizationName2' , 'OrganizationFrom2' 
        ,'OrganizationTo2' ,'OrganizationHours2'
        ,'OrganizationPosition2'
        ,'OrganizationName3', 'OrganizationFrom3' 
        ,'OrganizationTo3' ,'OrganizationHours3' 
        ,'OrganizationPosition3'
        ,'OrganizationName4' , 'OrganizationFrom4' 
        ,'OrganizationTo4','OrganizationHours4' 
        ,'OrganizationPosition4'
        ,'OrganizationName5', 'OrganizationFrom5' 
        ,'OrganizationTo5' ,'OrganizationHours5' 
        ,'OrganizationPosition5'
        ,'OrganizationName6', 'OrganizationFrom6' 
        ,'OrganizationTo6' ,'OrganizationHours6' 
        ,'OrganizationPosition6',
        'AccountId','updated_at'
    ];
    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
    
}
