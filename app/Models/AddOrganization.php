<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalInformation;

class AddOrganization extends Model
{
    use HasFactory;

    protected $table = 'add_organization4';

protected $primaryKey='AddOrganizationID';

    protected $fillable =[
        'OrganizationName', 
        'AddOrganizationFrom',
        'AddOrganizationTo' ,
        'AddOrganizationHours',
        'AddOrganizationPosition',
        'AddOrganizationName1',
         'AddOrganizationFrom1', 
        'AddOrganizationTo1' ,
        'AddOrganizationHours1', 
        'AddOrganizationPosition1',
        'AddOrganizationName2' , 
        'AddOrganizationFrom2', 
        'AddOrganizationTo2' ,
        'AddOrganizationHours2',
        'AddOrganizationPosition2',
        'AddOrganizationName3', 
        'AddOrganizationFrom3', 
        'AddOrganizationTo3' ,
        'AddOrganizationHours3', 
        'AddOrganizationPosition3',
        'AddOrganizationName4' , 
        'AddOrganizationFrom4', 
        'AddOrganizationTo4',
        'AddOrganizationHours4', 
        'AddOrganizationPosition4',
        'AddOrganizationName5', 
        'AddOrganizationFrom5', 
        'AddOrganizationTo5' ,
        'AddOrganizationHours5', 
        'AddOrganizationPosition5',
        'AddOrganizationName6', 
        'AddOrganizationFrom6', 
        'AddOrganizationTo6' ,
        'AddOrganizationHours6', 
        'AddOrganizationPosition6',
        'AccountId','updated_at'
    ];

    public function personal_information() {
        return $this->belongsTo(PersonalInformation::class, 'Id', 'AccountId');
     }
    
}
