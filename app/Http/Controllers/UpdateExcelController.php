<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\FamilyBackground;
use App\Models\AddChildren;
use App\Models\EducationBackground;
use App\Models\AddEducationBackground;
use App\Models\CivilEligibility;
use App\Models\AddCivilEligibility;
use App\Models\WorkExperience;
use App\Models\WorkExperience1;
use App\Models\WorkExperience2;
use App\Models\AddWorkExperience4;
use App\Models\Organization;
use App\Models\AddOrganization;
use App\Models\Training;
use App\Models\Training1;
use App\Models\AddTraining;
use App\Models\Information;
use App\Models\AddInformation;
use App\Models\Question;
use App\Models\References;
use Carbon\Carbon;
use Hash;
use Session;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

@require('vendor/autoload.php');



class UpdateExcelController extends Controller
{
    public function UpdateExcel(Request $request)
    {
        $Id = $request['Id'];
        $Slug = $request->input('slug');
        $filename =$_FILES['import_file']['name'];
        $file_ext =pathinfo($filename,PATHINFO_EXTENSION);

        $allowed_ext =['xls','csv','xlsx'];

        if(in_array($file_ext, $allowed_ext))
        {
            $inputFileNamePath = $_FILES['import_file']['tmp_name'];

            /** Load $inputFileName to a Spreadsheet object **/
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
            /* EXCEL COLUMNS */
            $A =1;
            $B= 2;
            $C= 3;
            $D= 4;
            $E= 5;
            $F= 6;
            $G= 7;
            $H= 8;
            $I= 9;
            $J= 10;
            $K= 11;
            $L= 12;
            $M= 13;
            $N= 14;
            $O= 15;
            $P= 16;
            $Q= 17;
            $R= 18;
        /* EXCEL COLUMNS */
        
                        /*I. PERSONAL INFORMATION BACKGROUND */

                                    // $Id=$request->input('Id');
                                        // Get the value from cell A2
                                        $CsId = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($A, 2)->getCalculatedValue();
                                        // Get the value from cell D10
                                    $SureName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 10)->getCalculatedValue();
                                        // Get the value from cell D11
                                    $FirstName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 11)->getCalculatedValue();
                                        // Get the value from cell M11
                                    $ExtensionName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($M, 11)->getCalculatedValue();
                                        // Get the value from cell D12
                                    $MiddleName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 12)->getCalculatedValue();
                                        // Get the value from cell D13
                                    $DateBirth = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 13)->getFormattedValue();
                                        // Get the value from cell D15
                                    $PlaceBirth = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 15)->getCalculatedValue();
                                        // Get the value from cell D16
                                    $Sex = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 16)->getCalculatedValue();
                                        // Get the value from cell D17
                                    $CivilStatus = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 17)->getCalculatedValue();
                                        // Get the value from cell D22
                                    $Height = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 22)->getCalculatedValue();
                                        // Get the value from cell D24
                                    $Weight = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 24)->getCalculatedValue();
                                        // Get the value from cell D25
                                    $BloodType = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 25)->getCalculatedValue();
                                        // Get the value from cell D27
                                    $GsisNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 27)->getCalculatedValue();
                                        // Get the value from cell D29
                                    $PagibigNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 29)->getCalculatedValue();
                                        // Get the value from cell D31
                                    $PhilhealthNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 31)->getCalculatedValue();
                                        // Get the value from cell D32
                                    $SssNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 32)->getCalculatedValue();
                                        // Get the value from cell D33
                                    $TinNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 33)->getCalculatedValue();
                                        // Get the value from cell D34
                                    $AgencyEmpNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 34)->getCalculatedValue();
                                        //  if($Citizenship = 'TRUE') Get the value from cell O13
                                    $Citizenship = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($O, 13)->getCalculatedValue();
                                        // if($CitizenshipDual = 'TRUE') Get the value from cell R13
                                    $CitizenshipDual = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($R, 13)->getCalculatedValue();
                                        // if($CitizenshipByBirth = 'TRUE') Get the value from cell O15
                                    $CitizenshipByBirth = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($O, 15)->getCalculatedValue();
                                        // if($CitizenshipByNaturalization = 'TRUE') Get the value from cell R15
                                    $CitizenshipByNaturalization = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($R, 15)->getCalculatedValue();
                                        // Get the value from cell J16
                                    $CitizenshipCountry = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($J, 16)->getCalculatedValue();
                                        // Get the value from cell I17
                                    $ResAddressLot = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 17)->getCalculatedValue();
                                        // Get the value from cell M17
                                    $ResAddressStreet = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($L, 17)->getCalculatedValue();
                                        // Get the value from cell I19
                                    $ResAddressVillage = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 19)->getCalculatedValue();
                                        // Get the value from cell M19
                                    $ResAddressBarangay = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($M, 19)->getCalculatedValue();
                                        // Get the value from cell I22
                                    $ResAddressCity = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 22)->getCalculatedValue();
                                        // Get the value from cell M22
                                    $ResAddressProvince = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($L, 22)->getCalculatedValue();
                                        // Get the value from cell I24
                                    $ResAddressZipCode = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 24)->getCalculatedValue();
                                        // Get the value from cell I25
                                    $PerAddressLot = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 25)->getCalculatedValue();
                                        // Get the value from cell M25
                                    $PerAddressStreet = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($L, 25)->getCalculatedValue();
                                    // Get the value from cell I27
                                    $PerAddressVillage = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 27)->getCalculatedValue();
                                        // Get the value from cell L27
                                    $PerAddressBarangay = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($L, 27)->getCalculatedValue();
                                        // Get the value from cell I29
                                    $PerAddressCity= $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 29)->getCalculatedValue();
                                        // Get the value from cell L29
                                    $PerAddressProvince = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($L, 29)->getCalculatedValue();
                                        // Get the value from cell I31
                                    $PerAddressZipCode = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 31)->getCalculatedValue();
                                        // Get the value from cell I32
                                    $TelephoneNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 32)->getCalculatedValue();
                                        // Get the value from cell I33
                                    $MobileNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 33)->getCalculatedValue();
                                        // Get the value from cell I34
                                    $EmailAddress = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($I, 34)->getCalculatedValue();
                                
                                    $WorkPositionn = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow($D, 18)->getCalculatedValue();

                                    // dd($WorkPosition);
                                    // $DateBirth = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 13)->getFormattedValue();
                                    $current_timestamp = Carbon::now();
                                    $current_timestamp->setTimezone('PST');
                                    // dd($current_timestamp);

                                    // $slug = PersonalInformation::find($request->slug);
                                    $c1_infoId = PersonalInformation::where('Id', $Id)->first();
                                    // dd($)
                                    // dd($c1_info);
                                    $c1_infoId->update(['CsId' => $CsId, 'SureName' => $SureName 
                                    ,'FirstName' => $FirstName,'ExtensionName' => $ExtensionName
                                    ,'MiddleName' => $MiddleName,'DateBirth' => $DateBirth 
                                    ,'PlaceBirth' => $PlaceBirth,'Sex' => $Sex
                                    ,'CivilStatus' => $CivilStatus
                                    ,'Height' => $Height,'Weight' => $Weight
                                    ,'BloodType' => $BloodType,'GsisNo' => $GsisNo
                                    ,'PagibigNo' => $PagibigNo,'PhilhealthNo' => $PhilhealthNo
                                    ,'SssNo' => $SssNo,'TinNo' => $TinNo
                                    ,'AgencyEmpNo' => $AgencyEmpNo,'Citizenship' => $Citizenship
                                    ,'CitizenshipDual' => $CitizenshipDual,'CitizenshipByBirth' => $CitizenshipByBirth
                                    ,'CitizenshipByNaturalization' => $CitizenshipByNaturalization,'CitizenshipCountry' => $CitizenshipCountry
                                    ,'ResAddressLot' => $ResAddressLot,'ResAddressStreet' => $ResAddressStreet
                                    ,'ResAddressVillage' => $ResAddressVillage,'ResAddressBarangay' => $ResAddressBarangay
                                    ,'ResAddressCity' => $ResAddressCity,'ResAddressProvince' => $ResAddressProvince
                                    ,'ResAddressZipCode' => $ResAddressZipCode,'PerAddressLot' => $PerAddressLot
                                    ,'PerAddressStreet' => $PerAddressStreet,'PerAddressVillage' => $PerAddressVillage
                                    ,'PerAddressBarangay' => $PerAddressBarangay,'PerAddressCity' => $PerAddressCity
                                    ,'PerAddressProvince' => $PerAddressProvince,'PerAddressZipCode' => $PerAddressZipCode
                                    ,'TelephoneNo' => $TelephoneNo,'MobileNo' => $MobileNo
                                    ,'EmailAddress' => $EmailAddress,'slug' => Str::slug($SureName,"-")
                                    ,'categories'=>$WorkPositionn,'updated_at' => $current_timestamp
                                ]);

                                // $Idd = $c1_infoId->Id;
                                // dd($Idd);

                                              
                        /*I. PERSONAL INFORMATION BACKGROUND */    
                            
                        /*II. FAMILY BACKGROUND */     
                                        // Get the value from cell D36
                                        $SpouseSureName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 36)->getCalculatedValue();
                                        // Get the value from cell D37
                                    $SpouseFirstName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 37)->getCalculatedValue();
                                        // Get the value from cell H37===
                                    $SpouseExtendName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($H, 37)->getCalculatedValue();
                                        // Get the value from cell D38
                                    $SpouseMiddleName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 38)->getCalculatedValue();
                                        // Get the value from cell D39
                                    $SpouseOccupation = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 39)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $SpouseEmployer = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 40)->getCalculatedValue();
                                        // Get the value from cell N54
                                    $SpouseBussinesAdd = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 41)->getCalculatedValue();
                                        // Get the value from cell D55
                                    $SpouseTelNo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 42)->getCalculatedValue();
                                        // Get the value from cell I55
                                    $FatherSurname = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 43)->getCalculatedValue();
                                        // Get the value from cell J55
                                    $FatherFirstName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 44)->getCalculatedValue();
                                        // Get the value from cell K55
                                    $FatherExtendName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($H, 44)->getCalculatedValue();
                                        // Get the value from cell L55
                                    $FatherMiddleName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 45)->getCalculatedValue();
                                        // Get the value from cell M55
                                    $MotherSurname = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 47)->getCalculatedValue();
                                        // Get the value from cell N55
                                    $MotherFirstName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 48)->getCalculatedValue();
                                        // Get the value from cell D56
                                    $MotherMiddleName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow($D, 49)->getCalculatedValue();

                                        // Get the value from cell I56
                                    $ChildName = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 37)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 37)->getFormattedValue();
                                    // Get the value from cell I56
                                    $ChildName1 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 38)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth1 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 38)->getFormattedValue();
                                    // Get the value from cell I56
                                    $ChildName2 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 39)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth2 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 39)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName3 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 40)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth3 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 40)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName4 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 41)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth4 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 41)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName5 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 42)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth5 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 42)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName6 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 43)->getCalculatedValue();
                                        // Get the value from cell J56==
                                    $ChildBirth6 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 43)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName7 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 44)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth7 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 44)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName8 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 45)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth8 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 45)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName9 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 46)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth9 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 46)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName10 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 47)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth10 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 47)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $ChildName11 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(9, 48)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $ChildBirth11 = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 48)->getCalculatedValue();
                                    
                                    $C1_FamilyBackground = FamilyBackground::where('AccountId', $Id)->first();
                                    // dd($Id);
                                    // dd($C1_FamilyBackground);
                                    $C1_FamilyBackground->update([
                                            'SpouseSureName' => $SpouseSureName
                                            ,'SpouseFirstName' => $SpouseFirstName
                                            ,'SpouseExtendName' => $SpouseExtendName
                                            ,'SpouseMiddleName' => $SpouseMiddleName
                                            ,'SpouseOccupation' => $SpouseOccupation
                                            ,'SpouseEmployer' => $SpouseEmployer
                                            ,'SpouseBussinesAdd' => $SpouseBussinesAdd 
                                            ,'SpouseTelNo' => $SpouseTelNo
                                            ,'FatherSurname' => $FatherSurname
                                            ,'FatherFirstName' => $FatherFirstName
                                            ,'FatherExtendName' => $FatherExtendName
                                            ,'FatherMiddleName' => $FatherMiddleName
                                            ,'MotherSurname' => $MotherSurname
                                            ,'MotherFirstName' => $MotherFirstName
                                            ,'MotherMiddleName' => $MotherMiddleName
                                            ,'ChildName' => $ChildName,'ChildBirth' => $ChildBirth
                                            ,'ChildName1' => $ChildName1,'ChildBirth1' => $ChildBirth1
                                            ,'ChildName2' => $ChildName2,'ChildBirth2' => $ChildBirth2
                                            ,'ChildName3' => $ChildName3,'ChildBirth3' => $ChildBirth3
                                            ,'ChildName4' => $ChildName4,'ChildBirth4' => $ChildBirth4
                                            ,'ChildName5' => $ChildName5,'ChildBirth5' => $ChildBirth5
                                            ,'ChildName6' => $ChildName6,'ChildBirth6' => $ChildBirth6
                                            ,'ChildName7' => $ChildName7,'ChildBirth7' => $ChildBirth7
                                            ,'ChildName8' => $ChildName8,'ChildBirth8' => $ChildBirth8
                                            ,'ChildName9' => $ChildName9,'ChildBirth9' => $ChildBirth9
                                            ,'ChildName10' => $ChildName10,'ChildBirth10' => $ChildBirth10
                                            ,'ChildName11' => $ChildName11,'ChildBirth11' => $ChildBirth11
                                        ]);
                        /*II. FAMILY BACKGROUND */ 
                         /*II. ADD CHILDREN */     
                    // Get the value from cell I56
                                    $AddChildName = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 2)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 2)->getFormattedValue();
                                    // Get the value from cell I56
                                    $AddChildName1 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 3)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth1 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 3)->getFormattedValue();
                                    // Get the value from cell I56
                                    $AddChildName2 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 4)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth2 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 4)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName3 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 5)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth3 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 5)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName4 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 6)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth4 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 6)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName5 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 7)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth5 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 7)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName6 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 8)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth6 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 8)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName7 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 9)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth7 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 9)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName8 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 10)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth8 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 10)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName9 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 11)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth9 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 11)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName10 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 12)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth10 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 12)->getCalculatedValue();
                                    // Get the value from cell I56
                                    $AddChildName11 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($A, 13)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddChildBirth11 = $spreadsheet->getSheetByName('AddChildren')->getCellByColumnAndRow($E, 13)->getCalculatedValue();
                                    
                                    $Add_Children = AddChildren::where('AccountId', $Id)->first();
                                    // dd( $Add_Children);
                                    $Add_Children ->update([
                                        'AddChildName' => $AddChildName,'AddChildBirth' => $AddChildBirth
                                        ,'AddChildName1' => $AddChildName1,'AddChildBirth1' => $AddChildBirth1
                                        ,'AddChildName2' => $AddChildName2,'AddChildBirth2' => $AddChildBirth2
                                        ,'AddChildName3' => $AddChildName3,'AddChildBirth3' => $AddChildBirth3
                                        ,'AddChildName4' => $AddChildName4,'AddChildBirth4' => $AddChildBirth4
                                        ,'AddChildName5' => $AddChildName5,'AddChildBirth5' => $AddChildBirth5
                                        ,'AddChildName6' => $AddChildName6,'AddChildBirth6' => $AddChildBirth6
                                        ,'AddChildName7' => $AddChildName7,'AddChildBirth7' => $AddChildBirth7
                                        ,'AddChildName8' => $AddChildName8,'AddChildBirth8' => $AddChildBirth8
                                        ,'AddChildName9' => $AddChildName9,'AddChildBirth9' => $AddChildBirth9
                                        ,'AddChildName10' => $AddChildName10,'AddChildBirth10' => $AddChildBirth10
                                        ,'AddChildName11' => $AddChildName11,'AddChildBirth11' => $AddChildBirth11
                                    ]);
                        /*II. ADD CHILDREN */    

                        /*II. EDUCATION BACKGROUND */    
                                    // Get the value from cell D54
                                    $ElemSchool = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 54)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $ElemDegree = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(7, 54)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $ElemFrom = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(10, 54)->getCalculatedValue();
                                        // Get the value from cell K54
                                    $ElemTo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(11, 54)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $ElemEarned = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(12, 54)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $ElemYearGrad = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 54)->getCalculatedValue();
                                        // Get the value from cell N54
                                    $ElemHonor = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(14, 54)->getCalculatedValue();

                                        // Get the value from cell D55
                                    $SecondSchool = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 55)->getCalculatedValue();
                                        // Get the value from cell I55
                                    $SecondDegree = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(7, 55)->getCalculatedValue();
                                        // Get the value from cell J55
                                    $SecondFrom = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(10, 55)->getCalculatedValue();
                                        // Get the value from cell K55
                                    $SecondTo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(11, 55)->getCalculatedValue();
                                        // Get the value from cell L55
                                    $SecondEarned = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(12, 55)->getCalculatedValue();
                                        // Get the value from cell M55
                                    $SecondYearGrad = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 55)->getCalculatedValue();
                                        // Get the value from cell N55
                                    $SecondHonor = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(14, 55)->getCalculatedValue();

                                        // Get the value from cell D56
                                    $VocationSchool = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 56)->getCalculatedValue();
                                        // Get the value from cell I56
                                    $VocationDegree = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(7, 56)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $VocationFrom = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(10, 56)->getCalculatedValue();
                                        // Get the value from cell K56
                                    $VocationTo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(11, 56)->getCalculatedValue();
                                        // Get the value from cell L56
                                    $VocationEarned = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(12, 56)->getCalculatedValue();
                                        // Get the value from cell M56
                                    $VocationYearGrad = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 56)->getCalculatedValue();
                                        // Get the value from cell N56
                                    $VocationHonor = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(14, 56)->getCalculatedValue();

                                        // Get the value from cell D57
                                    $CollegeSchool = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 57)->getCalculatedValue();
                                    // Get the value from cell I57
                                    $CollegeDegree = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(7, 57)->getCalculatedValue();
                                        // Get the value from cell J57
                                    $CollegeFrom = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(10, 57)->getCalculatedValue();
                                        // Get the value from cell K57
                                    $CollegeTo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(11, 57)->getCalculatedValue();
                                        // Get the value from cell L57
                                    $CollegeEarned = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(12, 57)->getCalculatedValue();
                                        // Get the value from cell M57
                                    $CollegeYearGrad = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 57)->getCalculatedValue();
                                        // Get the value from cell N57
                                    $CollegeHonor = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(14, 57)->getCalculatedValue();

                                        // Get the value from cell D58
                                    $GraduateSchool = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(4, 58)->getCalculatedValue();
                                    // Get the value from cell I58
                                    $GraduateDegree = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(7, 58)->getCalculatedValue();
                                    // Get the value from cell J58
                                    $GraduateFrom = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(10, 58)->getCalculatedValue();
                                        // Get the value from cell K58
                                    $GraduateTo = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(11, 58)->getCalculatedValue();
                                        // Get the value from cell L58
                                    $GraduateEarned = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(12, 58)->getCalculatedValue();
                                        // Get the value from cell M58
                                    $GraduateYearGrad = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(13, 58)->getCalculatedValue();
                                        // Get the value from cell N58
                                    $GraduateHonor = $spreadsheet->getSheetByName('C1')->getCellByColumnAndRow(14, 58)->getCalculatedValue();


                                    $C1_EducBackground = EducationBackground::where('AccountId', $Id)->first();

                                    $C1_EducBackground->update([
                                            'ElemSchool' => $ElemSchool, 'ElemDegree' => $ElemDegree 
                                            ,'ElemFrom' => $ElemFrom,'ElemTo' => $ElemTo,'ElemEarned' => $ElemEarned
                                            ,'ElemYearGrad' => $ElemYearGrad,'ElemHonor' => $ElemHonor
                                            ,'SecondSchool' => $SecondSchool, 'SecondDegree' => $SecondDegree 
                                            ,'SecondFrom' => $SecondFrom,'SecondTo' => $SecondTo,'SecondEarned' => $SecondEarned
                                            ,'SecondYearGrad' => $SecondYearGrad,'SecondHonor' => $SecondHonor 
                                            ,'VocationSchool' => $VocationSchool, 'VocationDegree' => $VocationDegree 
                                            ,'VocationFrom' => $VocationFrom,'VocationTo' => $VocationTo,'VocationEarned' => $VocationEarned
                                            ,'VocationYearGrad' => $VocationYearGrad,'VocationHonor' => $VocationHonor
                                            ,'CollegeSchool' => $CollegeSchool, 'CollegeDegree' => $CollegeDegree 
                                            ,'CollegeFrom' => $CollegeFrom,'CollegeTo' => $CollegeTo,'CollegeEarned' => $CollegeEarned
                                            ,'CollegeYearGrad' => $CollegeYearGrad,'CollegeHonor' => $CollegeHonor
                                            ,'GraduateSchool' => $GraduateSchool, 'GraduateDegree' => $GraduateDegree 
                                            ,'GraduateFrom' => $GraduateFrom,'GraduateTo' => $GraduateTo,'GraduateEarned' => $GraduateEarned
                                            ,'GraduateYearGrad' => $GraduateYearGrad,'GraduateHonor' => $GraduateHonor
                                    ]);

                        /*II. EDUCATION BACKGROUND */  
                        
                        /*II. ADD EDUCATION BACKGROUND */  
                                    // III. ADD EDUCATION BACKGROUND
                                    // Get the value from cell D54
                                    $AddElemSchool = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($D, 5)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $AddElemDegree = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($G, 5)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddElemFrom = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($J, 5)->getCalculatedValue();
                                        // Get the value from cell K54
                                    $AddElemTo = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($K, 5)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddElemEarned = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($L, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddElemYearGrad = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($M, 5)->getCalculatedValue();
                                        // Get the value from cell N54
                                    $AddElemHonor = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($N, 5)->getCalculatedValue();

                                        // Get the value from cell D55
                                    $AddSecondSchool = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($D, 6)->getCalculatedValue();
                                        // Get the value from cell I55
                                    $AddSecondDegree = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($G, 6)->getCalculatedValue();
                                        // Get the value from cell J55
                                    $AddSecondFrom = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($J, 6)->getCalculatedValue();
                                        // Get the value from cell K55
                                    $AddSecondTo = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($K, 6)->getCalculatedValue();
                                        // Get the value from cell L55
                                    $AddSecondEarned = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($L, 6)->getCalculatedValue();
                                        // Get the value from cell M55
                                    $AddSecondYearGrad = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($M, 6)->getCalculatedValue();
                                        // Get the value from cell N55
                                    $AddSecondHonor = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($N, 6)->getCalculatedValue();

                                        // Get the value from cell D56
                                    $AddVocationSchool = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($D, 7)->getCalculatedValue();
                                        // Get the value from cell I56
                                    $AddVocationDegree = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($G, 7)->getCalculatedValue();
                                        // Get the value from cell J56
                                    $AddVocationFrom = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($J, 7)->getCalculatedValue();
                                        // Get the value from cell K567
                                    $AddVocationTo = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($K, 7)->getCalculatedValue();
                                        // Get the value from cell L56
                                    $AddVocationEarned = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($L, 7)->getCalculatedValue();
                                        // Get the value from cell M56
                                    $AddVocationYearGrad = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($M, 7)->getCalculatedValue();
                                        // Get the value from cell N56
                                    $AddVocationHonor = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($N, 7)->getCalculatedValue();

                                        // Get the value from cell D57
                                    $AddCollegeSchool = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($D, 8)->getCalculatedValue();
                                    // Get the value from cell I57
                                    $AddCollegeDegree = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($G, 8)->getCalculatedValue();
                                        // Get the value from cell J57
                                    $AddCollegeFrom = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($J, 8)->getCalculatedValue();
                                        // Get the value from cell K57
                                    $AddCollegeTo = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($K, 8)->getCalculatedValue();
                                        // Get the value from cell L57
                                    $AddCollegeEarned = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($L, 8)->getCalculatedValue();
                                        // Get the value from cell M57
                                    $AddCollegeYearGrad = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($M, 8)->getCalculatedValue();
                                        // Get the value from cell N57
                                    $AddCollegeHonor = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($N, 8)->getCalculatedValue();

                                        // Get the value from cell D58
                                    $AddGraduateSchool = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($D, 9)->getCalculatedValue();
                                    // Get the value from cell I58
                                    $AddGraduateDegree = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($G, 9)->getCalculatedValue();
                                    // Get the value from cell J58
                                    $AddGraduateFrom = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($J, 9)->getCalculatedValue();
                                        // Get the value from cell K58
                                    $AddGraduateTo = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($K, 9)->getCalculatedValue();
                                        // Get the value from cell L58
                                    $AddGraduateEarned = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($L, 9)->getCalculatedValue();
                                        // Get the value from cell M58
                                    $AddGraduateYearGrad = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($M, 9)->getCalculatedValue();
                                        // Get the value from cell N58
                                    $AddGraduateHonor = $spreadsheet->getSheetByName('AddEducation')->getCellByColumnAndRow($N, 9)->getCalculatedValue();

                                    $Add_EducBackground = AddEducationBackground::where('AccountId', $Id)->first();
                                    $Add_EducBackground ->update([
                                            'AddElemSchool' => $AddElemSchool, 'AddElemDegree' => $AddElemDegree 
                                            ,'AddElemFrom' => $AddElemFrom,'AddElemTo' => $AddElemTo,'AddElemEarned' => $AddElemEarned
                                            ,'AddElemYearGrad' => $AddElemYearGrad,'AddElemHonor' => $AddElemHonor
                                            ,'AddSecondSchool' => $AddSecondSchool, 'AddSecondDegree' => $AddSecondDegree 
                                            ,'AddSecondFrom' => $AddSecondFrom,'AddSecondTo' => $AddSecondTo,'AddSecondEarned' => $AddSecondEarned
                                            ,'AddSecondYearGrad' => $AddSecondYearGrad,'AddSecondHonor' => $AddSecondHonor 
                                            ,'AddVocationSchool' => $AddVocationSchool, 'AddVocationDegree' => $AddVocationDegree 
                                            ,'AddVocationFrom' => $AddVocationFrom,'AddVocationTo' => $AddVocationTo,'AddVocationEarned' => $AddVocationEarned
                                            ,'AddVocationYearGrad' => $AddVocationYearGrad,'AddVocationHonor' => $AddVocationHonor
                                            ,'AddCollegeSchool' => $AddCollegeSchool, 'AddCollegeDegree' => $AddCollegeDegree 
                                            ,'AddCollegeFrom' => $AddCollegeFrom,'AddCollegeTo' => $AddCollegeTo,'AddCollegeEarned' => $AddCollegeEarned
                                            ,'AddCollegeYearGrad' => $AddCollegeYearGrad,'AddCollegeHonor' => $AddCollegeHonor
                                            ,'AddGraduateSchool' => $AddGraduateSchool, 'AddGraduateDegree' => $AddGraduateDegree 
                                            ,'AddGraduateFrom' => $AddGraduateFrom,'AddGraduateTo' => $AddGraduateTo,'AddGraduateEarned' => $AddGraduateEarned
                                            ,'AddGraduateYearGrad' => $AddGraduateYearGrad,'AddGraduateHonor' => $AddGraduateHonor
                                    ]);

                        /*II. ADD EDUCATION BACKGROUND */ 


                        /*IV. CIVIL SERVICE ELIGIBILITY */ 
                                    // IV. CIVIL SERVICE ELIGIBILITY       
                                        // Get the value from cell D54
                                        $EligibilityName = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 5)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 5)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 5)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 5)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 5)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 6)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 6)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 6)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 6)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 6)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 7)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 7)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 7)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 7)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 7)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 8)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 8)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 8)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 8)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 8)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 9)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 9)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 9)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 9)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 9)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 10)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 10)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 10)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 10)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 10)->getFormattedValue();

                                        // Get the value from cell D54
                                    $EligibilityName6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 11)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $EligibilityRating6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(6, 11)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $EligibilityDate6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 11)->getFormattedValue();
                                        // Get the value from cell K54
                                    $EligibilityPlace6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(9, 11)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $EligibilityNo6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 11)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $EligibilityValid6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 11)->getFormattedValue();
                                
                                    $C2_CivilEligibility = CivilEligibility::where('AccountId', $Id)->first();
                                    $C2_CivilEligibility ->update([
                                            'EligibilityName' => $EligibilityName, 'EligibilityRating' => $EligibilityRating 
                                            ,'EligibilityDate' => $EligibilityDate,'EligibilityPlace' => $EligibilityPlace
                                            ,'EligibilityNo' => $EligibilityNo,'EligibilityValid' => $EligibilityValid
                                            ,'EligibilityName1' => $EligibilityName1, 'EligibilityRating1' => $EligibilityRating1 
                                            ,'EligibilityDate1' => $EligibilityDate1,'EligibilityPlace1' => $EligibilityPlace1
                                            ,'EligibilityNo1' => $EligibilityNo1,'EligibilityValid1' => $EligibilityValid1
                                            ,'EligibilityName2' => $EligibilityName2, 'EligibilityRating2' => $EligibilityRating2 
                                            ,'EligibilityDate2' => $EligibilityDate2,'EligibilityPlace2' => $EligibilityPlace2
                                            ,'EligibilityNo2' => $EligibilityNo2,'EligibilityValid2' => $EligibilityValid2
                                            ,'EligibilityName3' => $EligibilityName3, 'EligibilityRating3' => $EligibilityRating3 
                                            ,'EligibilityDate3' => $EligibilityDate3,'EligibilityPlace3' => $EligibilityPlace3
                                            ,'EligibilityNo3' => $EligibilityNo3,'EligibilityValid3' => $EligibilityValid3
                                            ,'EligibilityName4' => $EligibilityName4, 'EligibilityRating4' => $EligibilityRating4 
                                            ,'EligibilityDate4' => $EligibilityDate4,'EligibilityPlace4' => $EligibilityPlace4
                                            ,'EligibilityNo4' => $EligibilityNo4,'EligibilityValid4' => $EligibilityValid4
                                            ,'EligibilityName5' => $EligibilityName5, 'EligibilityRating5' => $EligibilityRating5 
                                            ,'EligibilityDate5' => $EligibilityDate5,'EligibilityPlace5' => $EligibilityPlace5
                                            ,'EligibilityNo5' => $EligibilityNo5,'EligibilityValid5' => $EligibilityValid5
                                            ,'EligibilityName6' => $EligibilityName6, 'EligibilityRating6' => $EligibilityRating6 
                                            ,'EligibilityDate6' => $EligibilityDate6,'EligibilityPlace6' => $EligibilityPlace6
                                            ,'EligibilityNo6' => $EligibilityNo6,'EligibilityValid6' => $EligibilityValid6
                                    ]);
                        /*IV. CIVIL SERVICE ELIGIBILITY */     

                        /*IV.ADD CIVIL SERVICE ELIGIBILITY */ 

                                    // IV.ADD CIVIL SERVICE ELIGIBILITY       
                                        // Get the value from cell D54
                                        $AddEligibilityName = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 4)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $AddEligibilityRating = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 4)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 4)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 4)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 4)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 4)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 5)->getCalculatedValue();
                                    // Get the value from cell I54
                                    $AddEligibilityRating1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 5)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 5)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 5)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid1 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 5)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 6)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $AddEligibilityRating2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 6)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 6)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 6)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid2 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 6)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 7)->getCalculatedValue();
                                    // Get the value from cell I54
                                    $AddEligibilityRating3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 7)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 7)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 7)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid3 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 7)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 8)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $AddEligibilityRating4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 8)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 8)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 8)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid4 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 8)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 9)->getCalculatedValue();
                                    // Get the value from cell I54
                                    $AddEligibilityRating5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 9)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 9)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 9)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid5 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 9)->getFormattedValue();

                                    // Get the value from cell D54
                                    $AddEligibilityName6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($A, 10)->getCalculatedValue();
                                        // Get the value from cell I54
                                    $AddEligibilityRating6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($F, 10)->getCalculatedValue();
                                        // Get the value from cell J54
                                    $AddEligibilityDate6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($G, 10)->getFormattedValue();
                                        // Get the value from cell K54
                                    $AddEligibilityPlace6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($I, 10)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $AddEligibilityNo6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($L, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddEligibilityValid6 = $spreadsheet->getSheetByName('AddEligibility')->getCellByColumnAndRow($M, 10)->getFormattedValue();

                                    
                                
                                    $Add_CivilEligibility = AddCivilEligibility::where('AccountId',$Id)->first();
                                    $Add_CivilEligibility->update([
                                            'AddEligibilityName' => $AddEligibilityName, 'AddEligibilityRating' => $AddEligibilityRating 
                                            ,'AddEligibilityDate' => $AddEligibilityDate,'AddEligibilityPlace' => $AddEligibilityPlace
                                            ,'AddEligibilityNo' => $AddEligibilityNo,'AddEligibilityValid' => $AddEligibilityValid
                                            ,'AddEligibilityName1' => $AddEligibilityName1, 'AddEligibilityRating1' => $AddEligibilityRating1 
                                            ,'AddEligibilityDate1' => $AddEligibilityDate1,'AddEligibilityPlace1' => $AddEligibilityPlace1
                                            ,'AddEligibilityNo1' => $AddEligibilityNo1,'AddEligibilityValid1' => $AddEligibilityValid1
                                            ,'AddEligibilityName2' => $AddEligibilityName2, 'AddEligibilityRating2' => $AddEligibilityRating2 
                                            ,'AddEligibilityDate2' => $AddEligibilityDate2,'AddEligibilityPlace2' => $AddEligibilityPlace2
                                            ,'AddEligibilityNo2' => $AddEligibilityNo2,'AddEligibilityValid2' => $AddEligibilityValid2
                                            ,'AddEligibilityName3' => $AddEligibilityName3, 'AddEligibilityRating3' => $AddEligibilityRating3 
                                            ,'AddEligibilityDate3' => $AddEligibilityDate3,'AddEligibilityPlace3' => $AddEligibilityPlace3
                                            ,'AddEligibilityNo3' => $AddEligibilityNo3,'AddEligibilityValid3' => $AddEligibilityValid3
                                            ,'AddEligibilityName4' => $AddEligibilityName4, 'AddEligibilityRating4' => $AddEligibilityRating4 
                                            ,'AddEligibilityDate4' => $AddEligibilityDate4,'AddEligibilityPlace4' => $AddEligibilityPlace4
                                            ,'AddEligibilityNo4' => $AddEligibilityNo4,'AddEligibilityValid4' => $AddEligibilityValid4
                                            ,'AddEligibilityName5' => $AddEligibilityName5, 'AddEligibilityRating5' => $AddEligibilityRating5 
                                            ,'AddEligibilityDate5' => $AddEligibilityDate5,'AddEligibilityPlace5' => $AddEligibilityPlace5
                                            ,'AddEligibilityNo5' => $AddEligibilityNo5,'AddEligibilityValid5' => $AddEligibilityValid5
                                            ,'AddEligibilityName6' => $AddEligibilityName6, 'AddEligibilityRating6' => $AddEligibilityRating6 
                                            ,'AddEligibilityDate6' => $AddEligibilityDate6,'AddEligibilityPlace6' => $AddEligibilityPlace6
                                            ,'AddEligibilityNo6' => $AddEligibilityNo6,'AddEligibilityValid6' => $AddEligibilityValid6
                                    ]);
                        /*IV.ADD CIVIL SERVICE ELIGIBILITY */  
                                
                        
                        /*IV. WORK EXPERCIENCE  */      
                                        // Get the value from cell D54
                                        $WorkFrom = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 18)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 18)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 18)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $WorkAgency0 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 18)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 18)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 18)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 18)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 18)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 19)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 19)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 19)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 19)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 19)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 19)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 19)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov1 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 19)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 20)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 20)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 20)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 20)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 20)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 20)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 20)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov2 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 20)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 21)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 21)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 21)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 21)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 21)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 21)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 21)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov3 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 21)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 22)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 22)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 22)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 22)->getCalculatedValue();;
                                    //     // Get the value from cell K54
                                    $WorkSalary4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 22)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 22)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 22)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov4 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 22)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 23)->getFormattedValue();;
                                        // Get the value from cell I54
                                    $WorkTo5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 23)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 23)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 23)->getCalculatedValue();;
                                    //     // Get the value from cell K54
                                    $WorkSalary5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 23)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 23)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 23)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov5 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 23)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 24)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 24)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 24)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 24)->getCalculatedValue();;
                                    //     // Get the value from cell K54
                                    $WorkSalary6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 24)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 24)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 24)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov6 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 24)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 25)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 25)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 25)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 25)->getCalculatedValue();;
                                    //     // Get the value from cell K54
                                    $WorkSalary7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 25)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 25)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 25)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov7 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 25)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 26)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 26)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 26)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 26)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 26)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 26)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 26)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov8 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 26)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 27)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 27)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 27)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 27)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 27)->getCalculatedValue();
                                        // Get the value from cell L54
                                    $WorkGrade9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 27)->getFormattedValue();
                                        // Get the value from cell M54
                                    $WorkStatus9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 27)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov9 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 27)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 28)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 28)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 28)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 28)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 28)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 28)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 28)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov10 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 28)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 29)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 29)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 29)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 29)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 29)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 29)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 29)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov11 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 29)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 30)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 30)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 30)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 30)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 30)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 30)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 30)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov12 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 30)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 31)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 31)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 31)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 31)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 31)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 31)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 31)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov13 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 31)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 32)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 32)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 32)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 32)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 32)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 32)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 32)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov14 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 32)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 33)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 33)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 33)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 33)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 33)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 33)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 33)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov15 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 33)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 34)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 34)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 34)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 34)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 34)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 34)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 34)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov16 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 34)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 35)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 35)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 35)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 35)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 35)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 35)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 35)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov17 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 35)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 36)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 36)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 36)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 36)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 36)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 36)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 36)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov18 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 36)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 37)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 37)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 37)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 37)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 37)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 37)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 37)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov19 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 37)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 38)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 38)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 38)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 38)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 38)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 38)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 38)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov20 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 38)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 39)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 39)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 39)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 39)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 39)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 39)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 39)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov21 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 39)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 40)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 40)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 40)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 40)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 40)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 40)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 40)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov22 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 40)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 41)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 41)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 41)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 41)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 41)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 41)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 41)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov23 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 41)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 42)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 42)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 42)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 42)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 42)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 42)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 42)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov24 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 42)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 43)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 43)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 43)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 43)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 43)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 43)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 43)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov25 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 43)->getCalculatedValue();
                                    // Get the value from cell D54
                                    $WorkFrom26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(1, 44)->getFormattedValue();
                                        // Get the value from cell I54
                                    $WorkTo26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(3, 44)->getFormattedValue();
                                    //     // Get the value from cell J54
                                    $WorkPosition26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(4, 44)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $WorkAgency26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(7, 44)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $WorkSalary26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(10, 44)->getFormattedValue();
                                        // Get the value from cell L54
                                    $WorkGrade26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(11, 44)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkStatus26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(12, 44)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $WorkGov26 = $spreadsheet->getSheetByName('C2')->getCellByColumnAndRow(13, 44)->getCalculatedValue();
                                    

                                    $C2_WorkExperience = WorkExperience::where('AccountId','=',$Id)->first();
                                    $C2_WorkExperience->update([
                                            'WorkFrom' => $WorkFrom, 'WorkTo' => $WorkTo 
                                            ,'WorkPosition' => $WorkPosition,'WorkAgency0' => $WorkAgency0
                                            ,'WorkSalary' => $WorkSalary,'WorkGrade' => $WorkGrade
                                            ,'WorkStatus' => $WorkStatus, 'WorkGov' => $WorkGov 
                                            ,'WorkFrom1' => $WorkFrom1, 'WorkTo1' => $WorkTo1 
                                            ,'WorkPosition1' => $WorkPosition1,'WorkAgency1' => $WorkAgency1
                                            ,'WorkSalary1' => $WorkSalary1,'WorkGrade1' => $WorkGrade1
                                            ,'WorkStatus1' => $WorkStatus1, 'WorkGov1' => $WorkGov1
                                            ,'WorkFrom2' => $WorkFrom2, 'WorkTo2' => $WorkTo2 
                                            ,'WorkPosition2' => $WorkPosition2,'WorkAgency2' => $WorkAgency2
                                            ,'WorkSalary2' => $WorkSalary2,'WorkGrade2' => $WorkGrade2
                                            ,'WorkStatus2' => $WorkStatus2, 'WorkGov2' => $WorkGov2
                                            ,'WorkFrom3' => $WorkFrom3, 'WorkTo3' => $WorkTo3 
                                            ,'WorkPosition3' => $WorkPosition3,'WorkAgency3' => $WorkAgency3
                                            ,'WorkSalary3' => $WorkSalary3,'WorkGrade3' => $WorkGrade3
                                            ,'WorkStatus3' => $WorkStatus3, 'WorkGov3' => $WorkGov3
                                            ,'WorkFrom4' => $WorkFrom4, 'WorkTo4' => $WorkTo4 
                                            ,'WorkPosition4' => $WorkPosition4,'WorkAgency4' => $WorkAgency4
                                            ,'WorkSalary4' => $WorkSalary4,'WorkGrade4' => $WorkGrade4
                                            ,'WorkStatus4' => $WorkStatus4, 'WorkGov4' => $WorkGov4
                                            ,'WorkFrom5' => $WorkFrom5, 'WorkTo5' => $WorkTo5 
                                            ,'WorkPosition5' => $WorkPosition5,'WorkAgency5' => $WorkAgency5
                                            ,'WorkSalary5' => $WorkSalary5,'WorkGrade5' => $WorkGrade5
                                            ,'WorkStatus5' => $WorkStatus5, 'WorkGov5' => $WorkGov5
                                            ,'WorkFrom6' => $WorkFrom6, 'WorkTo6' => $WorkTo6 
                                            ,'WorkPosition6' => $WorkPosition6,'WorkAgency6' => $WorkAgency6
                                            ,'WorkSalary6' => $WorkSalary6,'WorkGrade6' => $WorkGrade6
                                            ,'WorkStatus6' => $WorkStatus6, 'WorkGov6' => $WorkGov6
                                            ,'WorkFrom7' => $WorkFrom7, 'WorkTo7' => $WorkTo7 
                                            ,'WorkPosition7' => $WorkPosition7,'WorkAgency7' => $WorkAgency7
                                            ,'WorkSalary7' => $WorkSalary7,'WorkGrade7' => $WorkGrade7
                                            ,'WorkStatus7' => $WorkStatus7, 'WorkGov7' => $WorkGov7
                                            ,'WorkFrom8' => $WorkFrom8, 'WorkTo8' => $WorkTo8 
                                            ,'WorkPosition8' => $WorkPosition8,'WorkAgency8' => $WorkAgency8
                                            ,'WorkSalary8' => $WorkSalary8,'WorkGrade8' => $WorkGrade8
                                            ,'WorkStatus8' => $WorkStatus8, 'WorkGov8' => $WorkGov8
                                    ]);

                                    $C2_WorkExperience1 =WorkExperience1::where('AccountId','=',$Id)->first();
                                    $C2_WorkExperience1->update([
                                            'WorkFrom9' => $WorkFrom9, 'WorkTo9' => $WorkTo9 
                                            ,'WorkPosition9' => $WorkPosition9,'WorkAgency9' => $WorkAgency9
                                            ,'WorkSalary9' => $WorkSalary9,'WorkGrade9' => $WorkGrade9
                                            ,'WorkStatus9' => $WorkStatus9, 'WorkGov9' => $WorkGov9 
                                            ,'WorkFrom10' => $WorkFrom10, 'WorkTo10' => $WorkTo10 
                                            ,'WorkPosition10' => $WorkPosition10,'WorkAgency10' => $WorkAgency10
                                            ,'WorkSalary10' => $WorkSalary10,'WorkGrade10' => $WorkGrade10
                                            ,'WorkStatus10' => $WorkStatus10, 'WorkGov10' => $WorkGov10
                                            ,'WorkFrom11' => $WorkFrom11, 'WorkTo11' => $WorkTo11 
                                            ,'WorkPosition11' => $WorkPosition11,'WorkAgency11' => $WorkAgency11
                                            ,'WorkSalary11' => $WorkSalary11,'WorkGrade11' => $WorkGrade11
                                            ,'WorkStatus11' => $WorkStatus11, 'WorkGov11' => $WorkGov11
                                            ,'WorkFrom12' => $WorkFrom12, 'WorkTo12' => $WorkTo12 
                                            ,'WorkPosition12' => $WorkPosition12,'WorkAgency12' => $WorkAgency12
                                            ,'WorkSalary12' => $WorkSalary12,'WorkGrade12' => $WorkGrade12
                                            ,'WorkStatus12' => $WorkStatus12, 'WorkGov12' => $WorkGov12
                                            ,'WorkFrom13' => $WorkFrom13, 'WorkTo13' => $WorkTo13 
                                            ,'WorkPosition13' => $WorkPosition13,'WorkAgency13' => $WorkAgency13
                                            ,'WorkSalary13' => $WorkSalary13,'WorkGrade13' => $WorkGrade13
                                            ,'WorkStatus13' => $WorkStatus13, 'WorkGov13' => $WorkGov13
                                            ,'WorkFrom14' => $WorkFrom14, 'WorkTo14' => $WorkTo14 
                                            ,'WorkPosition14' => $WorkPosition14,'WorkAgency14' => $WorkAgency14
                                            ,'WorkSalary14' => $WorkSalary14,'WorkGrade14' => $WorkGrade14
                                            ,'WorkStatus14' => $WorkStatus14, 'WorkGov14' => $WorkGov14
                                            ,'WorkFrom15' => $WorkFrom15, 'WorkTo15' => $WorkTo15 
                                            ,'WorkPosition15' => $WorkPosition15,'WorkAgency15' => $WorkAgency15
                                            ,'WorkSalary15' => $WorkSalary15,'WorkGrade15' => $WorkGrade15
                                            ,'WorkStatus15' => $WorkStatus15, 'WorkGov15' => $WorkGov15
                                            ,'WorkFrom16' => $WorkFrom16, 'WorkTo16' => $WorkTo16 
                                            ,'WorkPosition16' => $WorkPosition16,'WorkAgency16' => $WorkAgency16
                                            ,'WorkSalary16' => $WorkSalary16,'WorkGrade16' => $WorkGrade16
                                            ,'WorkStatus16' => $WorkStatus16, 'WorkGov16' => $WorkGov16
                                            ,'WorkFrom17' => $WorkFrom17, 'WorkTo17' => $WorkTo17 
                                            ,'WorkPosition17' => $WorkPosition17,'WorkAgency17' => $WorkAgency17
                                            ,'WorkSalary17' => $WorkSalary17,'WorkGrade17' => $WorkGrade17
                                            ,'WorkStatus17' => $WorkStatus17, 'WorkGov17' => $WorkGov17
                                    ]);

                                    $C2_WorkExperience2 = WorkExperience2::where('AccountId',$Id)->first();
                                    $C2_WorkExperience2->update([
                                            'WorkFrom18' => $WorkFrom18, 'WorkTo18' => $WorkTo18 
                                            ,'WorkPosition18' => $WorkPosition18,'WorkAgency18' => $WorkAgency18
                                            ,'WorkSalary18' => $WorkSalary18,'WorkGrade18' => $WorkGrade18
                                            ,'WorkStatus18' => $WorkStatus18, 'WorkGov18' => $WorkGov18 
                                            ,'WorkFrom19' => $WorkFrom19, 'WorkTo19' => $WorkTo19 
                                            ,'WorkPosition19' => $WorkPosition19,'WorkAgency19' => $WorkAgency19
                                            ,'WorkSalary19' => $WorkSalary19,'WorkGrade19' => $WorkGrade19
                                            ,'WorkStatus19' => $WorkStatus19, 'WorkGov19' => $WorkGov19
                                            ,'WorkFrom20' => $WorkFrom20, 'WorkTo20' => $WorkTo20 
                                            ,'WorkPosition20' => $WorkPosition20,'WorkAgency20' => $WorkAgency20
                                            ,'WorkSalary20' => $WorkSalary20,'WorkGrade20' => $WorkGrade20
                                            ,'WorkStatus20' => $WorkStatus20, 'WorkGov20' => $WorkGov20
                                            ,'WorkFrom21' => $WorkFrom21, 'WorkTo21' => $WorkTo21 
                                            ,'WorkPosition21' => $WorkPosition21,'WorkAgency21' => $WorkAgency21
                                            ,'WorkSalary21' => $WorkSalary21,'WorkGrade21' => $WorkGrade21
                                            ,'WorkStatus21' => $WorkStatus21, 'WorkGov21' => $WorkGov21
                                            ,'WorkFrom22' => $WorkFrom22, 'WorkTo22' => $WorkTo22 
                                            ,'WorkPosition22' => $WorkPosition22,'WorkAgency22' => $WorkAgency22
                                            ,'WorkSalary22' => $WorkSalary22,'WorkGrade22' => $WorkGrade22
                                            ,'WorkStatus22' => $WorkStatus22, 'WorkGov22' => $WorkGov22
                                            ,'WorkFrom23' => $WorkFrom23, 'WorkTo23' => $WorkTo23 
                                            ,'WorkPosition23' => $WorkPosition23,'WorkAgency23' => $WorkAgency23
                                            ,'WorkSalary23' => $WorkSalary23,'WorkGrade23' => $WorkGrade23
                                            ,'WorkStatus23' => $WorkStatus23, 'WorkGov23' => $WorkGov23
                                            ,'WorkFrom24' => $WorkFrom24, 'WorkTo24' => $WorkTo24 
                                            ,'WorkPosition24' => $WorkPosition24,'WorkAgency24' => $WorkAgency24
                                            ,'WorkSalary24' => $WorkSalary24,'WorkGrade24' => $WorkGrade24
                                            ,'WorkStatus24' => $WorkStatus24, 'WorkGov24' => $WorkGov24
                                            ,'WorkFrom25' => $WorkFrom25, 'WorkTo25' => $WorkTo25 
                                            ,'WorkPosition25' => $WorkPosition25,'WorkAgency25' => $WorkAgency25
                                            ,'WorkSalary25' => $WorkSalary25,'WorkGrade25' => $WorkGrade25
                                            ,'WorkStatus25' => $WorkStatus25, 'WorkGov25' => $WorkGov25
                                            ,'WorkFrom26' => $WorkFrom26, 'WorkTo26' => $WorkTo26 
                                            ,'WorkPosition26' => $WorkPosition26,'WorkAgency26' => $WorkAgency26
                                            ,'WorkSalary26' => $WorkSalary26,'WorkGrade26' => $WorkGrade26
                                            ,'WorkStatus26' => $WorkStatus26, 'WorkGov26' => $WorkGov26
                                    ]);

                        /*IV. WORK EXPERCIENCE  */     
                        

                        /*IV.ADD WORK EXPERCIENCE  */    
                                    // IV. ADD WORK EXPERCIENCE       
                                        // Get the value from cell D54
                                        $AddWorkFrom = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 5)->getFormattedValue();
                                        // Get the value from cell I54
                                    $AddWorkTo = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 5)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 5)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency0 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 5)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 5)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 5)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 6)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 6)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 6)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 6)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 6)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov1 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 6)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 7)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 7)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 7)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 7)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 7)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov2 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 7)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 8)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 8)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 8)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 8)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 8)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov3 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 8)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 9)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 9)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 9)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 9)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 9)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov4 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 9)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 10)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 10)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 10)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 10)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 10)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov5 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 10)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 11)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 11)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 11)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 11)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 11)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 11)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 11)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov6 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 11)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 12)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 12)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 12)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 12)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 12)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 12)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 12)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov7 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 12)->getCalculatedValue();

                                    // Get the value from cell D54
                                    $AddWorkFrom8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($A, 13)->getFormattedValue();
                                    // Get the value from cell I54
                                    $AddWorkTo8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($C, 13)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $AddWorkPosition8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($D, 13)->getCalculatedValue();
                                    //     // Get the value from cell J54->getCell('D10',utf8_encode(''));
                                    $AddWorkAgency8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($G, 13)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddWorkSalary8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($J, 13)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddWorkGrade8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($K, 13)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkStatus8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($L, 13)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddWorkGov8 = $spreadsheet->getSheetByName('AddWorkExperience')->getCellByColumnAndRow($M, 13)->getCalculatedValue();
                                    

                                    $C2_AddWorkExperience = AddWorkExperience4::where('AccountId',$Id)->first();
                                    $C2_AddWorkExperience->update([
                                            'AddWorkFrom' => $AddWorkFrom, 'AddWorkTo' => $AddWorkTo 
                                            ,'AddWorkPosition' => $AddWorkPosition,'AddWorkAgency0' => $AddWorkAgency0
                                            ,'AddWorkSalary' => $AddWorkSalary,'AddWorkGrade' => $AddWorkGrade
                                            ,'AddWorkStatus' => $AddWorkStatus, 'AddWorkGov' => $AddWorkGov 
                                            ,'AddWorkFrom1' => $AddWorkFrom1, 'AddWorkTo1' => $AddWorkTo1 
                                            ,'AddWorkPosition1' => $AddWorkPosition1,'AddWorkAgency1' => $AddWorkAgency1
                                            ,'AddWorkSalary1' => $AddWorkSalary1,'AddWorkGrade1' => $AddWorkGrade1
                                            ,'AddWorkStatus1' => $AddWorkStatus1, 'AddWorkGov1' => $AddWorkGov1
                                            ,'AddWorkFrom2' => $AddWorkFrom2, 'AddWorkTo2' => $AddWorkTo2 
                                            ,'AddWorkPosition2' => $AddWorkPosition2,'AddWorkAgency2' => $AddWorkAgency2
                                            ,'AddWorkSalary2' => $AddWorkSalary2,'AddWorkGrade2' => $AddWorkGrade2
                                            ,'AddWorkStatus2' => $AddWorkStatus2, 'AddWorkGov2' => $AddWorkGov2
                                            ,'AddWorkFrom3' => $AddWorkFrom3, 'AddWorkTo3' => $AddWorkTo3 
                                            ,'AddWorkPosition3' => $AddWorkPosition3,'AddWorkAgency3' => $AddWorkAgency3
                                            ,'AddWorkSalary3' => $AddWorkSalary3,'AddWorkGrade3' => $AddWorkGrade3
                                            ,'AddWorkStatus3' => $AddWorkStatus3, 'AddWorkGov3' => $AddWorkGov3
                                            ,'AddWorkFrom4' => $AddWorkFrom4, 'AddWorkTo4' => $AddWorkTo4 
                                            ,'AddWorkPosition4' => $AddWorkPosition4,'AddWorkAgency4' => $AddWorkAgency4
                                            ,'AddWorkSalary4' => $AddWorkSalary4,'AddWorkGrade4' => $AddWorkGrade4
                                            ,'AddWorkStatus4' => $AddWorkStatus4, 'AddWorkGov4' => $AddWorkGov4
                                            ,'AddWorkFrom5' => $AddWorkFrom5, 'AddWorkTo5' => $AddWorkTo5 
                                            ,'AddWorkPosition5' => $AddWorkPosition5,'AddWorkAgency5' => $AddWorkAgency5
                                            ,'AddWorkSalary5' => $AddWorkSalary5,'AddWorkGrade5' => $AddWorkGrade5
                                            ,'AddWorkStatus5' => $AddWorkStatus5, 'AddWorkGov5' => $AddWorkGov5
                                            ,'AddWorkFrom6' => $AddWorkFrom6, 'AddWorkTo6' => $AddWorkTo6 
                                            ,'AddWorkPosition6' => $AddWorkPosition6,'AddWorkAgency6' => $AddWorkAgency6
                                            ,'AddWorkSalary6' => $AddWorkSalary6,'AddWorkGrade6' => $AddWorkGrade6
                                            ,'AddWorkStatus6' => $AddWorkStatus6, 'AddWorkGov6' => $AddWorkGov6
                                            ,'AddWorkFrom7' => $AddWorkFrom7, 'AddWorkTo7' => $AddWorkTo7 
                                            ,'AddWorkPosition7' => $AddWorkPosition7,'AddWorkAgency7' => $AddWorkAgency7
                                            ,'AddWorkSalary7' => $AddWorkSalary7,'AddWorkGrade7' => $AddWorkGrade7
                                            ,'AddWorkStatus7' => $AddWorkStatus7, 'AddWorkGov7' => $AddWorkGov7
                                            ,'AddWorkFrom8' => $AddWorkFrom8, 'AddWorkTo8' => $AddWorkTo8 
                                            ,'AddWorkPosition8' => $AddWorkPosition8,'AddWorkAgency8' => $AddWorkAgency8
                                            ,'AddWorkSalary8' => $AddWorkSalary8,'AddWorkGrade8' => $AddWorkGrade8
                                            ,'AddWorkStatus8' => $AddWorkStatus8, 'AddWorkGov8' => $AddWorkGov8
                                    ]);
                        /*IV.ADD WORK EXPERCIENCE  */ 


                        /*C3-PROGRAMS  */ 
                                    // C3-PROGRAMS
                                    //     // Get the value from cell J54
                                    $OrganizationName = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 6)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 6)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 6)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 6)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 7)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 7)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 7)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 7)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 8)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 8)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 8)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 8)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 9)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 9)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 9)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 9)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 10)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 10)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 10)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 10)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 11)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 11)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 11)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 11)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 11)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $OrganizationName6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 12)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $OrganizationFrom6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 12)->getFormattedValue();
                                        // Get the value from cell L54
                                    $OrganizationTo6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 12)->getFormattedValue();
                                        // Get the value from cell M54
                                    $OrganizationHours6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 12)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $OrganizationPosition6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 12)->getCalculatedValue();
                                    
                                    $C3_Organization = Organization::where('AccountId',$Id)->first();
                                    $C3_Organization->update([
                                            'OrganizationName' => $OrganizationName, 'OrganizationFrom' => $OrganizationFrom 
                                            ,'OrganizationTo' => $OrganizationTo,'OrganizationHours' => $OrganizationHours
                                            ,'OrganizationPosition' => $OrganizationPosition
                                            ,'OrganizationName1' => $OrganizationName1, 'OrganizationFrom1' => $OrganizationFrom1 
                                            ,'OrganizationTo1' => $OrganizationTo1,'OrganizationHours1' => $OrganizationHours1
                                            ,'OrganizationPosition1' => $OrganizationPosition1
                                            ,'OrganizationName2' => $OrganizationName2, 'OrganizationFrom2' => $OrganizationFrom2 
                                            ,'OrganizationTo2' => $OrganizationTo2,'OrganizationHours2' => $OrganizationHours2
                                            ,'OrganizationPosition2' => $OrganizationPosition2
                                            ,'OrganizationName3' => $OrganizationName3, 'OrganizationFrom3' => $OrganizationFrom3 
                                            ,'OrganizationTo3' => $OrganizationTo3,'OrganizationHours3' => $OrganizationHours3
                                            ,'OrganizationPosition3' => $OrganizationPosition3
                                            ,'OrganizationName4' => $OrganizationName4, 'OrganizationFrom4' => $OrganizationFrom4 
                                            ,'OrganizationTo4' => $OrganizationTo4,'OrganizationHours4' => $OrganizationHours4
                                            ,'OrganizationPosition4' => $OrganizationPosition4
                                            ,'OrganizationName5' => $OrganizationName5, 'OrganizationFrom5' => $OrganizationFrom5 
                                            ,'OrganizationTo5' => $OrganizationTo5,'OrganizationHours5' => $OrganizationHours5
                                            ,'OrganizationPosition5' => $OrganizationPosition5
                                            ,'OrganizationName6' => $OrganizationName6, 'OrganizationFrom6' => $OrganizationFrom6 
                                            ,'OrganizationTo6' => $OrganizationTo6,'OrganizationHours6' => $OrganizationHours6
                                            ,'OrganizationPosition6' => $OrganizationPosition6
                                    ]);
                        /*C3-PROGRAMS  */ 

                        /*C3-ADD PROGRAMS */ 
                                    // ADD PROGRAMS
                                    //     // Get the value from cell J54
                                    $AddOrganizationName = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 5)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 5)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 5)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 5)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 5)->getCalculatedValue();

                                    //     // Get the value from cell J54
                                    $AddOrganizationName1 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 6)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom1 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 6)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo1 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 6)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours1 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 6)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition1 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 6)->getCalculatedValue();
                                
                                    //     // Get the value from cell J54
                                    $AddOrganizationName2 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 7)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom2 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 7)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo2 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 7)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours2 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 7)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition2 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 7)->getCalculatedValue();
                                
                                    //     // Get the value from cell J54
                                    $AddOrganizationName3 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 8)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom3 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 8)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo3 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 8)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours3 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 8)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition3 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 8)->getCalculatedValue();

                                    //     // Get the value from cell J54
                                    $AddOrganizationName4 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 9)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom4 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 9)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo4 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 9)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours4 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 9)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition4 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 9)->getCalculatedValue();

                                    //     // Get the value from cell J54
                                    $AddOrganizationName5 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 10)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom5 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 10)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo5 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 10)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours5 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 10)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition5 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 10)->getCalculatedValue();

                                    //     // Get the value from cell J54
                                    $AddOrganizationName6 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($A, 11)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddOrganizationFrom6 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($E, 11)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddOrganizationTo6 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($F, 11)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationHours6 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($G, 11)->getCalculatedValue();
                                        // Get the value from cell M54
                                    $AddOrganizationPosition6 = $spreadsheet->getSheetByName('AddVoluntary')->getCellByColumnAndRow($H, 11)->getCalculatedValue();

                                    $Add_Organization = AddOrganization::where('AccountId',$Id)->first();
                                    $Add_Organization->update([
                                            'AddOrganizationName' => $AddOrganizationName, 'AddOrganizationFrom' => $AddOrganizationFrom 
                                            ,'AddOrganizationTo' => $AddOrganizationTo,'AddOrganizationHours' => $AddOrganizationHours
                                            ,'AddOrganizationPosition' => $AddOrganizationPosition
                                            ,'AddOrganizationName1' => $AddOrganizationName1, 'AddOrganizationFrom1' => $AddOrganizationFrom1 
                                            ,'AddOrganizationTo1' => $AddOrganizationTo1,'AddOrganizationHours1' => $AddOrganizationHours1
                                            ,'AddOrganizationPosition1' => $AddOrganizationPosition1
                                            ,'AddOrganizationName2' => $AddOrganizationName2, 'AddOrganizationFrom2' => $AddOrganizationFrom2 
                                            ,'AddOrganizationTo2' => $AddOrganizationTo2,'AddOrganizationHours2' => $AddOrganizationHours2
                                            ,'AddOrganizationPosition2' => $AddOrganizationPosition2
                                            ,'AddOrganizationName3' => $AddOrganizationName3, 'AddOrganizationFrom3' => $AddOrganizationFrom3 
                                            ,'AddOrganizationTo3' => $AddOrganizationTo3,'AddOrganizationHours3' => $AddOrganizationHours3
                                            ,'AddOrganizationPosition3' => $AddOrganizationPosition3
                                            ,'AddOrganizationName4' => $AddOrganizationName4, 'AddOrganizationFrom4' => $AddOrganizationFrom4 
                                            ,'AddOrganizationTo4' => $AddOrganizationTo4,'AddOrganizationHours4' => $AddOrganizationHours4
                                            ,'AddOrganizationPosition4' => $AddOrganizationPosition4
                                            ,'AddOrganizationName5' => $AddOrganizationName5, 'AddOrganizationFrom5' => $AddOrganizationFrom5 
                                            ,'AddOrganizationTo5' => $AddOrganizationTo5,'AddOrganizationHours5' => $AddOrganizationHours5
                                            ,'AddOrganizationPosition5' => $AddOrganizationPosition5
                                            ,'AddOrganizationName6' => $AddOrganizationName6, 'AddOrganizationFrom6' => $AddOrganizationFrom6 
                                            ,'AddOrganizationTo6' => $AddOrganizationTo6,'AddOrganizationHours6' => $AddOrganizationHours6
                                            ,'AddOrganizationPosition6' => $AddOrganizationPosition6
                                    ]);
                        /*C3-ADD PROGRAMS */  


                        /*C3-TRAININGS */ 
                                    //     // Get the value from cell J54
                                    $TrainingTitle = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 18)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 18)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 18)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 18)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 18)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 18)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 19)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 19)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 19)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 19)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 19)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 19)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 20)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 20)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 20)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 20)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 20)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct2 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 20)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 21)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 21)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 21)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 21)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 21)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 21)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 22)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 22)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 22)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 22)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 22)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 22)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 23)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 23)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 23)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 23)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 23)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 23)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 24)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 24)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 24)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 24)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 24)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 24)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 25)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 25)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 25)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 25)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 25)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 25)->getCalculatedValue();
                                    
                                    $TrainingTitle9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 26)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 26)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 26)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 26)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 26)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct9 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 26)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 27)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 27)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 27)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 27)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 27)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct10 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 27)->getCalculatedValue();
                                    
                                        // Get the value from cell J54
                                    $TrainingTitle11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 28)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 28)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 28)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 28)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 28)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct11 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 28)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 29)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 29)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 29)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 29)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 29)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct12 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 29)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 30)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 30)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 30)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 30)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 30)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct13 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 30)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 31)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 31)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 31)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 31)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 31)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct14 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 31)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 32)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 32)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 32)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 32)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 32)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct15 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 32)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 33)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 33)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 33)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 33)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 33)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct16 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 33)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 34)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 34)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 34)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 34)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 34)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct17 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 34)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 35)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 35)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 35)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 35)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 35)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct18 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 35)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 36)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 36)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 36)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 36)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 36)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct19 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 36)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 37)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 37)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 37)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 37)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 37)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct20 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 37)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingTitle21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 38)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $TrainingFrom21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(5, 38)->getFormattedValue();
                                        // Get the value from cell L54
                                    $TrainingTo21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(6, 38)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingHours21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(7, 38)->getFormattedValue();
                                        // Get the value from cell M54
                                    $TrainingType21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(8, 38)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $TrainingConduct21 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 38)->getCalculatedValue();

                                    $C3_Training = Training::where('AccountId',$Id)->first();
                                    $C3_Training->update([
                                            'TrainingTitle' => $TrainingTitle, 'TrainingFrom' => $TrainingFrom 
                                            ,'TrainingTo' => $TrainingTo,'TrainingHours' => $TrainingHours
                                            ,'TrainingType' => $TrainingType,'TrainingConduct' => $TrainingConduct
                                            ,'TrainingTitle1' => $TrainingTitle1, 'TrainingFrom1' => $TrainingFrom1 
                                            ,'TrainingTo1' => $TrainingTo1,'TrainingHours1' => $TrainingHours1
                                            ,'TrainingType1' => $TrainingType1,'TrainingConduct1' => $TrainingConduct1
                                            ,'TrainingTitle2' => $TrainingTitle2, 'TrainingFrom2' => $TrainingFrom2 
                                            ,'TrainingTo2' => $TrainingTo2,'TrainingHours2' => $TrainingHours2
                                            ,'TrainingType2' => $TrainingType2,'TrainingConduct2' => $TrainingConduct2
                                            ,'TrainingTitle3' => $TrainingTitle3, 'TrainingFrom3' => $TrainingFrom3 
                                            ,'TrainingTo3' => $TrainingTo3,'TrainingHours3' => $TrainingHours3
                                            ,'TrainingType3' => $TrainingType3,'TrainingConduct3' => $TrainingConduct3
                                            ,'TrainingTitle4' => $TrainingTitle4, 'TrainingFrom4' => $TrainingFrom4 
                                            ,'TrainingTo4' => $TrainingTo4,'TrainingHours4' => $TrainingHours4
                                            ,'TrainingType4' => $TrainingType4,'TrainingConduct4' => $TrainingConduct4
                                            ,'TrainingTitle5' => $TrainingTitle5, 'TrainingFrom5' => $TrainingFrom5 
                                            ,'TrainingTo5' => $TrainingTo5,'TrainingHours5' => $TrainingHours5
                                            ,'TrainingType5' => $TrainingType5,'TrainingConduct5' => $TrainingConduct5
                                            ,'TrainingTitle6' => $TrainingTitle6, 'TrainingFrom6' => $TrainingFrom6 
                                            ,'TrainingTo6' => $TrainingTo6,'TrainingHours6' => $TrainingHours6
                                            ,'TrainingType6' => $TrainingType6,'TrainingConduct6' => $TrainingConduct6
                                            ,'TrainingTitle7' => $TrainingTitle7, 'TrainingFrom7' => $TrainingFrom7 
                                            ,'TrainingTo7' => $TrainingTo7,'TrainingHours7' => $TrainingHours7
                                            ,'TrainingType7' => $TrainingType7,'TrainingConduct7' => $TrainingConduct7
                                            ,'TrainingTitle9' => $TrainingTitle9, 'TrainingFrom9' => $TrainingFrom9 
                                            ,'TrainingTo9' => $TrainingTo9,'TrainingHours9' => $TrainingHours9
                                            ,'TrainingType9' => $TrainingType9,'TrainingConduct9' => $TrainingConduct9
                                            ,'TrainingTitle10' => $TrainingTitle10, 'TrainingFrom10' => $TrainingFrom10 
                                            ,'TrainingTo10' => $TrainingTo10,'TrainingHours10' => $TrainingHours10
                                            ,'TrainingType10' => $TrainingType10,'TrainingConduct10' => $TrainingConduct10
                                    ]);
                                    $C3_Training1 = Training1::where('AccountId',$Id)->first();
                                    $C3_Training1->update([
                                            'TrainingTitle11' => $TrainingTitle11, 'TrainingFrom11' => $TrainingFrom11 
                                            ,'TrainingTo11' => $TrainingTo11,'TrainingHours11' => $TrainingHours11
                                            ,'TrainingType11' => $TrainingType11,'TrainingConduct11' => $TrainingConduct11
                                            ,'TrainingTitle12' => $TrainingTitle12, 'TrainingFrom12' => $TrainingFrom12 
                                            ,'TrainingTo12' => $TrainingTo12,'TrainingHours12' => $TrainingHours12
                                            ,'TrainingType12' => $TrainingType12,'TrainingConduct12' => $TrainingConduct12
                                            ,'TrainingTitle13' => $TrainingTitle13, 'TrainingFrom13' => $TrainingFrom13 
                                            ,'TrainingTo13' => $TrainingTo13,'TrainingHours13' => $TrainingHours13
                                            ,'TrainingType13' => $TrainingType13,'TrainingConduct13' => $TrainingConduct13
                                            ,'TrainingTitle14' => $TrainingTitle14, 'TrainingFrom14' => $TrainingFrom14 
                                            ,'TrainingTo14' => $TrainingTo14,'TrainingHours14' => $TrainingHours14
                                            ,'TrainingType14' => $TrainingType14,'TrainingConduct14' => $TrainingConduct14
                                            ,'TrainingTitle15' => $TrainingTitle15, 'TrainingFrom15' => $TrainingFrom15 
                                            ,'TrainingTo15' => $TrainingTo15,'TrainingHours15' => $TrainingHours15
                                            ,'TrainingType15' => $TrainingType15,'TrainingConduct15' => $TrainingConduct15
                                            ,'TrainingTitle16' => $TrainingTitle16, 'TrainingFrom16' => $TrainingFrom16 
                                            ,'TrainingTo16' => $TrainingTo16,'TrainingHours16' => $TrainingHours16
                                            ,'TrainingType16' => $TrainingType16,'TrainingConduct16' => $TrainingConduct16
                                            ,'TrainingTitle17' => $TrainingTitle17, 'TrainingFrom17' => $TrainingFrom17 
                                            ,'TrainingTo17' => $TrainingTo17,'TrainingHours17' => $TrainingHours17
                                            ,'TrainingType17' => $TrainingType17,'TrainingConduct17' => $TrainingConduct17
                                            ,'TrainingTitle18' => $TrainingTitle18, 'TrainingFrom18' => $TrainingFrom18 
                                            ,'TrainingTo18' => $TrainingTo18,'TrainingHours18' => $TrainingHours18
                                            ,'TrainingType18' => $TrainingType18,'TrainingConduct18' => $TrainingConduct18
                                            ,'TrainingTitle19' => $TrainingTitle19, 'TrainingFrom19' => $TrainingFrom19 
                                            ,'TrainingTo19' => $TrainingTo19,'TrainingHours19' => $TrainingHours19
                                            ,'TrainingType19' => $TrainingType19,'TrainingConduct19' => $TrainingConduct19
                                            ,'TrainingTitle20' => $TrainingTitle20, 'TrainingFrom20' => $TrainingFrom20 
                                            ,'TrainingTo20' => $TrainingTo20,'TrainingHours20' => $TrainingHours20
                                            ,'TrainingType20' => $TrainingType20,'TrainingConduct20' => $TrainingConduct20
                                            ,'TrainingTitle21' => $TrainingTitle21, 'TrainingFrom21' => $TrainingFrom21 
                                            ,'TrainingTo21' => $TrainingTo21,'TrainingHours21' => $TrainingHours21
                                            ,'TrainingType21' => $TrainingType21,'TrainingConduct21' => $TrainingConduct21
                                    ]);
                        /*C3-TRAININGS */ 


                        /*C3-ADD TRAININGS */ 
                                    //     // Get the value from cell J54
                                    $AddTrainingTitle = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 5)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 5)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 5)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 5)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 5)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 5)->getCalculatedValue();


                                    $AddTrainingTitle1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 6)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 6)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 6)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 6)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 6)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct1 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 6)->getCalculatedValue();


                                    $AddTrainingTitle2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 7)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 7)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 7)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 7)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 7)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct2 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 7)->getCalculatedValue();


                                    $AddTrainingTitle3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 8)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 8)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 8)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 8)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 8)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct3 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 8)->getCalculatedValue();


                                    $AddTrainingTitle4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 9)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 9)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 9)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 9)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 9)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct4 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 9)->getCalculatedValue();


                                    $AddTrainingTitle5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 10)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 10)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 10)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 10)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 10)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct5 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 10)->getCalculatedValue();
                                    

                                    $AddTrainingTitle6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 11)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 11)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 11)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 11)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 11)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct6 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 11)->getCalculatedValue();


                                    $AddTrainingTitle7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 12)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 12)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 12)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 12)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 12)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct7 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 12)->getCalculatedValue();


                                    $AddTrainingTitle9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 13)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 13)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 13)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 13)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 13)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct9 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 13)->getCalculatedValue();
                                    
                                    
                                    
                                    $AddTrainingTitle10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($A, 14)->getCalculatedValue();
                                    //     // Get the value from cell K54
                                    $AddTrainingFrom10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($E, 14)->getFormattedValue();
                                        // Get the value from cell L54
                                    $AddTrainingTo10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($F, 14)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingHours10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($G, 14)->getFormattedValue();
                                        // Get the value from cell M54
                                    $AddTrainingType10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($H, 14)->getCalculatedValue();
                                    //     // Get the value from cell J54   
                                    $AddTrainingConduct10 = $spreadsheet->getSheetByName('AddTrainings')->getCellByColumnAndRow($J, 14)->getCalculatedValue();
                                    
                                    

                                    $ADD_Training = AddTraining::where('AccountId',$Id)->first();
                                    $ADD_Training->update([
                                            'AddTrainingTitle' => $AddTrainingTitle, 'AddTrainingFrom' => $AddTrainingFrom 
                                            ,'AddTrainingTo' => $AddTrainingTo,'AddTrainingHours' => $AddTrainingHours
                                            ,'AddTrainingType' => $AddTrainingType,'AddTrainingConduct' => $AddTrainingConduct
                                            ,'AddTrainingTitle1' => $AddTrainingTitle1, 'AddTrainingFrom1' => $AddTrainingFrom1 
                                            ,'AddTrainingTo1' => $AddTrainingTo1,'AddTrainingHours1' => $AddTrainingHours1
                                            ,'AddTrainingType1' => $AddTrainingType1,'AddTrainingConduct1' => $AddTrainingConduct1
                                            ,'AddTrainingTitle2' => $AddTrainingTitle2, 'AddTrainingFrom2' => $AddTrainingFrom2 
                                            ,'AddTrainingTo2' => $AddTrainingTo2,'AddTrainingHours2' => $AddTrainingHours2
                                            ,'AddTrainingType2' => $AddTrainingType2,'AddTrainingConduct2' => $AddTrainingConduct2
                                            ,'AddTrainingTitle3' => $AddTrainingTitle3, 'AddTrainingFrom3' => $AddTrainingFrom3 
                                            ,'AddTrainingTo3' => $AddTrainingTo3,'AddTrainingHours3' => $AddTrainingHours3
                                            ,'AddTrainingType3' => $AddTrainingType3,'AddTrainingConduct3' => $AddTrainingConduct3
                                            ,'AddTrainingTitle4' => $AddTrainingTitle4, 'AddTrainingFrom4' => $AddTrainingFrom4 
                                            ,'AddTrainingTo4' => $AddTrainingTo4,'AddTrainingHours4' => $AddTrainingHours4
                                            ,'AddTrainingType4' => $AddTrainingType4,'AddTrainingConduct4' => $AddTrainingConduct4
                                            ,'AddTrainingTitle5' => $AddTrainingTitle5, 'AddTrainingFrom5' => $AddTrainingFrom5 
                                            ,'AddTrainingTo5' => $AddTrainingTo5,'AddTrainingHours5' => $AddTrainingHours5
                                            ,'AddTrainingType5' => $AddTrainingType5,'AddTrainingConduct5' => $AddTrainingConduct5
                                            ,'AddTrainingTitle6' => $AddTrainingTitle6, 'AddTrainingFrom6' => $AddTrainingFrom6 
                                            ,'AddTrainingTo6' => $AddTrainingTo6,'AddTrainingHours6' => $AddTrainingHours6
                                            ,'AddTrainingType6' => $AddTrainingType6,'AddTrainingConduct6' => $AddTrainingConduct6
                                            ,'AddTrainingTitle7' => $AddTrainingTitle7, 'AddTrainingFrom7' => $AddTrainingFrom7 
                                            ,'AddTrainingTo7' => $AddTrainingTo7,'AddTrainingHours7' => $AddTrainingHours7
                                            ,'AddTrainingType7' => $AddTrainingType7,'AddTrainingConduct7' => $AddTrainingConduct7
                                            ,'AddTrainingTitle9' => $AddTrainingTitle9, 'AddTrainingFrom9' => $AddTrainingFrom9 
                                            ,'AddTrainingTo9' => $AddTrainingTo9,'AddTrainingHours9' => $AddTrainingHours9
                                            ,'AddTrainingType9' => $AddTrainingType9,'AddTrainingConduct9' => $AddTrainingConduct9
                                            ,'AddTrainingTitle10' => $AddTrainingTitle10, 'AddTrainingFrom10' => $AddTrainingFrom10 
                                            ,'AddTrainingTo10' => $AddTrainingTo10,'AddTrainingHours10' => $AddTrainingHours10
                                            ,'AddTrainingType10' => $AddTrainingType10,'AddTrainingConduct10' => $AddTrainingConduct10
                                    ]);
                        /*C3-ADD TRAININGS */ 



                        /*C3-INFO */ 
                                        //     // Get the value from cell J54
                                    $InfoSkill = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 42)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 42)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 42)->getCalculatedValue();
                                        //     // Get the value from cell J54
                                $InfoSkill1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 43)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 43)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization1 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 43)->getCalculatedValue();
                                        //     // Get the value from cell J54
                                $InfoSkill3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 44)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 44)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization3 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 44)->getCalculatedValue();
                                        //     // Get the value from cell J54
                                $InfoSkill4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 45)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 45)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization4 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 45)->getCalculatedValue();
                                        //     // Get the value from cell J54
                                $InfoSkill5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 46)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 46)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization5 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 46)->getCalculatedValue();
                                        //     // Get the value from cell J54
                                $InfoSkill6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 47)->getCalculatedValue();
                                        // Get the value from cell M54
                                $InfoRecognition6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 47)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $InfoOrganization6 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 47)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                    $InfoSkill7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(1, 48)->getCalculatedValue();
                                    // Get the value from cell M54
                                $InfoRecognition7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(3, 48)->getCalculatedValue();
                                //     // Get the value from cell J54
                                $InfoOrganization7 = $spreadsheet->getSheetByName('C3')->getCellByColumnAndRow(9, 48)->getCalculatedValue();
                                
                                $C3_Info = Information::where('AccountId',$Id)->first();
                                $C3_Info->update([
                                            'InfoSkill' => $InfoSkill, 'InfoRecognition' => $InfoRecognition 
                                            ,'InfoOrganization' => $InfoOrganization
                                            ,'InfoSkill1' => $InfoSkill1, 'InfoRecognition1' => $InfoRecognition1 
                                            ,'InfoOrganization1' => $InfoOrganization1
                                            ,'InfoSkill3' => $InfoSkill3, 'InfoRecognition3' => $InfoRecognition3 
                                            ,'InfoOrganization3' => $InfoOrganization3
                                            ,'InfoSkill4' => $InfoSkill4, 'InfoRecognition4' => $InfoRecognition4 
                                            ,'InfoOrganization4' => $InfoOrganization4
                                            ,'InfoSkill5' => $InfoSkill5, 'InfoRecognition5' => $InfoRecognition5 
                                            ,'InfoOrganization5' => $InfoOrganization5
                                            ,'InfoSkill6' => $InfoSkill6, 'InfoRecognition6' => $InfoRecognition6 
                                            ,'InfoOrganization6' => $InfoOrganization6
                                            ,'InfoSkill7' => $InfoSkill7, 'InfoRecognition7' => $InfoRecognition7 
                                            ,'InfoOrganization7' => $InfoOrganization7
                                ]);
                        /*C3-INFO */ 


                        /*C3-ADD INFO */ 
                                $AddInfoSkill = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 3)->getCalculatedValue();
                                        
                                $AddInfoRecognition = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 3)->getCalculatedValue();

                                $AddInfoOrganization = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 3)->getCalculatedValue();
                            
                                $AddInfoSkill1 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 4)->getCalculatedValue();
                            
                                $AddInfoRecognition1 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 4)->getCalculatedValue();
                            
                                $AddInfoOrganization1 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 4)->getCalculatedValue();
                                    
                                $AddInfoSkill3 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 5)->getCalculatedValue();
                                
                                $AddInfoRecognition3 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 5)->getCalculatedValue();
                            
                                $AddInfoOrganization3 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 5)->getCalculatedValue();
                                
                                $AddInfoSkill4 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 6)->getCalculatedValue();

                                $AddInfoRecognition4 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 6)->getCalculatedValue();
                                
                                $AddInfoOrganization4 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 6)->getCalculatedValue();
                                    
                                $AddInfoSkill5 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 7)->getCalculatedValue();
                            
                                $AddInfoRecognition5 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 7)->getCalculatedValue();
                        
                                $AddInfoOrganization5 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 7)->getCalculatedValue();
                        
                                $AddInfoSkill6 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 8)->getCalculatedValue();
                        
                                $AddInfoRecognition6 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 8)->getCalculatedValue();
                            
                                $AddInfoOrganization6 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 8)->getCalculatedValue();
                            
                                $AddInfoSkill7 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($A, 9)->getCalculatedValue();
                        
                                $AddInfoRecognition7 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($C, 9)->getCalculatedValue();
                            
                                $AddInfoOrganization7 = $spreadsheet->getSheetByName('AddOtherInfo')->getCellByColumnAndRow($I, 9)->getCalculatedValue();
                                
                                $C3_Info = AddInformation::where('AccountId',$Id)->first();
                                $C3_Info->update([
                                        'AddInfoSkill' => $AddInfoSkill, 'AddInfoRecognition' => $AddInfoRecognition 
                                        ,'AddInfoOrganization' => $AddInfoOrganization
                                        ,'AddInfoSkill1' => $AddInfoSkill1, 'AddInfoRecognition1' => $AddInfoRecognition1 
                                        ,'AddInfoOrganization1' => $AddInfoOrganization1
                                        ,'AddInfoSkill3' => $AddInfoSkill3, 'AddInfoRecognition3' => $AddInfoRecognition3 
                                        ,'AddInfoOrganization3' => $AddInfoOrganization3
                                        ,'AddInfoSkill4' => $AddInfoSkill4, 'AddInfoRecognition4' => $AddInfoRecognition4 
                                        ,'AddInfoOrganization4' => $AddInfoOrganization4
                                        ,'AddInfoSkill5' => $AddInfoSkill5, 'AddInfoRecognition5' => $AddInfoRecognition5 
                                        ,'AddInfoOrganization5' => $AddInfoOrganization5
                                        ,'AddInfoSkill6' => $AddInfoSkill6, 'AddInfoRecognition6' => $AddInfoRecognition6 
                                        ,'AddInfoOrganization6' => $AddInfoOrganization6
                                        ,'AddInfoSkill7' => $AddInfoSkill7, 'AddInfoRecognition7' => $AddInfoRecognition7 
                                        ,'AddInfoOrganization7' => $AddInfoOrganization7
                                ]);
                        
                        /*C3-ADD INFO */   


                        /*C4-QUESTIONS */ 
                                    $a34Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 6)->getCalculatedValue();
                                    $a34No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 6)->getCalculatedValue();
                                    $b34Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 8)->getCalculatedValue();
                                    $b34No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 8)->getCalculatedValue();
                                    $b34Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($H, 11)->getCalculatedValue();

                                    
                                    $a35Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 13)->getCalculatedValue();
                                    $a35No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 13)->getCalculatedValue();
                                    $a35Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($H, 15)->getCalculatedValue();
                                    $b35Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 18)->getCalculatedValue();
                                    $b35No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 18)->getCalculatedValue();
                                    $b35Date = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($K, 20)->getCalculatedValue();
                                    $b35Status = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($K, 21)->getCalculatedValue();


                                    $a36Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 23)->getCalculatedValue();
                                    $a36No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 23)->getCalculatedValue();
                                    $a36Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($H, 25)->getCalculatedValue();

                                    $a37Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 27)->getCalculatedValue();
                                    $a37No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 27)->getCalculatedValue();
                                    $a37Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($H, 29)->getCalculatedValue();


                                    $a38Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 31)->getCalculatedValue();
                                    $a38No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 31)->getCalculatedValue();
                                    $a38Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($K, 32)->getCalculatedValue();
                                    $b38Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 34)->getCalculatedValue();
                                    $b38No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 34)->getCalculatedValue();
                                    $b38Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($K, 35)->getCalculatedValue();


                                    $a39Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 37)->getCalculatedValue();
                                    $a39No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 37)->getCalculatedValue();
                                    $a39Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($H, 39)->getCalculatedValue();


                                    $a40Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 43)->getCalculatedValue();
                                    $a40No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 43)->getCalculatedValue();
                                    $a40Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($L, 44)->getCalculatedValue();

                                    $b40Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 45)->getCalculatedValue();
                                    $b40No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 45)->getCalculatedValue();
                                    $b40Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($L, 46)->getCalculatedValue();

                                    $c40Yes = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($N, 47)->getCalculatedValue();
                                    $c40No = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($O, 47)->getCalculatedValue();
                                    $c40Details = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow($L, 48)->getCalculatedValue();



                                    $C4_Questions = Question::where('AccountId',$Id)->first();
                                    $C4_Questions->update([
                                            'a34Yes' => $a34Yes, 'a34No' => $a34No 
                                            ,'b34Yes' => $b34Yes,'b34No' => $b34No, 'b34Details' => $b34Details 
                                            ,'a35Yes' => $a35Yes,'a35No' => $a35No, 'a35Details' => $a35Details 
                                            ,'b35Yes' => $b35Yes,'b35No' => $b35No, 'b35Date' => $b35Date ,'b35Status' => $b35Status
                                            ,'a36Yes' => $a36Yes,'a36No' => $a36No, 'a36Details' => $a36Details 
                                            ,'a37Yes' => $a37Yes,'a37No' => $a37No, 'a37Details' => $a37Details 
                                            ,'a38Yes' => $a38Yes,'a38No' => $a38No, 'a38Details' => $a38Details 
                                            ,'b38Yes' => $b38Yes,'b38No' => $b38No, 'b38Details' => $b38Details 
                                            ,'a39Yes' => $a39Yes,'a39No' => $a39No, 'a39Details' => $a39Details 
                                            ,'a40Yes' => $a40Yes,'a40No' => $a40No, 'a40Details' => $a40Details 
                                            ,'b40Yes' => $b40Yes,'b40No' => $b40No, 'b40Details' => $b40Details 
                                            ,'c40Yes' => $c40Yes,'c40No' => $c40No, 'c40Details' => $c40Details
                                    ]);

                        /*C4-QUESTIONS */ 

                        /*C4-REFERENCE */ 
                                        //     // Get the value from cell J54
                                        $ReferenceName1 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(1, 52)->getCalculatedValue();
                                        // Get the value from cell M54
                                $ReferenceAddress1 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(6, 52)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $ReferenceTel1 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(7, 52)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $ReferenceName2 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(1, 53)->getCalculatedValue();
                                    // Get the value from cell M54
                                $ReferenceAddress2 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(6, 53)->getCalculatedValue();
                                //     // Get the value from cell J54
                                $ReferenceTel2 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(7, 53)->getCalculatedValue();
                                    //     // Get the value from cell J54
                                $ReferenceName3 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(1, 54)->getCalculatedValue();
                                    // Get the value from cell M54
                                $ReferenceAddress3 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(6, 54)->getCalculatedValue();
                                //     // Get the value from cell J54
                                $ReferenceTel3 = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(7, 54)->getCalculatedValue();
                                //     // Get the value from cell J54
                                $GovernmentId = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(4, 61)->getCalculatedValue();
                                // Get the value from cell M54
                                $GovernmentNo = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(4, 62)->getCalculatedValue();
                                //     // Get the value from cell J54
                                $GovernmentDate = $spreadsheet->getSheetByName('C4')->getCellByColumnAndRow(4, 64)->getCalculatedValue();
                                

                                $C4_References = References::where('AccountId',$Id)->first();
                                $C4_References->update([
                                        'ReferenceName1' => $ReferenceName1, 'ReferenceAddress1' => $ReferenceAddress1 
                                        ,'ReferenceTel1' => $ReferenceTel1
                                        ,'ReferenceName2' => $ReferenceName2, 'ReferenceAddress2' => $ReferenceAddress2 
                                        ,'ReferenceTel2' => $ReferenceTel2
                                        ,'ReferenceName3' => $ReferenceName3, 'ReferenceAddress3' => $ReferenceAddress3 
                                        ,'ReferenceTel3' => $ReferenceTel3
                                        ,'GovernmentId' => $GovernmentId, 'GovernmentNo' => $GovernmentNo 
                                        ,'GovernmentDate' => $GovernmentDate
                                ]);

                                return redirect()->route('UpdatedPDS',['slug'=>$Slug]);
                        /*C4-REFERENCE */ 
   
        }
    }
}




