@include('sidebar1')

<style>
input[type="text"]
{
    font-size:11px;
}

label{
    font-size:11px;
}
  </style>
 <!-- PAGE -->
 <div class="page">
  <div class="page-main">

    <div class="main-content app-content mt-0">
      <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">
  <!-- PAGE-HEADER -->
  <div class="page-header">
    <div>
        <h1 class="page-title">Lawyer Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Lawyer Profile</a></li>
            {{-- <li class="breadcrumb-item active" aria-current="page">Staff  Record</li> --}}
        </ol>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6 class="">Total Number of PERMANENT</h6>
                        <h3 class="mb-2 number-font">{{$Permanent}}</h3>
                        <p class="text-muted mb-0">
                            {{-- <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span> last month --}}
                        </p>
                    </div>
                    <div class="col col-auto">
                        <div class="counter-icon bg-primary-gradient box-shadow-secondary brround ms-auto">
                          <i class="fa fa-briefcase text-white mb-5 " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
      <div class="card overflow-hidden">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h6 class="">Total Number of TEMPORARY</h6>
                      <h3 class="mb-2 number-font">{{$Temporary}}</h3>
                      <p class="text-muted mb-0">
                          {{-- <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span> last month --}}
                      </p>
                  </div>
                  <div class="col col-auto">
                      <div class="counter-icon bg-success-gradient box-shadow-secondary brround ms-auto">
                          <i class="fa fa-briefcase text-white mb-5 " aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
            <select class="form-control form-select status-category" data-placeholder="Filter Innitial Appointment">
                <option value="">--Posistion Category--</option>
                <option value="I">Attorney I</option>
                <option value="II">Attorney II</option>
                <option value="ATTORNEY III">Attorney III</option>
                <option value="ATTORNEY IV">Attorney IV</option>
                <option value="ATTORNEY V">Attorney V</option>
            </select>
            <select class="form-control form-select status-workstatus" data-placeholder="Filter Innitial Appointment">
                <option value="">--Posistion Status--</option>
                <option value="Permanent">Permanent</option>
                <option value="Temporary">Temporary</option>
            </select>
            <select class="form-control form-select status-salarygrade" data-placeholder="Filter Innitial Appointment">
              <option value="">--Salary Grade--</option>
              <option value="25">SG-25</option>
              <option value="26">SG-26</option>
              <option value="27">SG-27</option>
              <option value="28">SG-28</option>
              <option value="29">SG-29</option>
              <option value="30">SG-30</option>
              <option value="31">SG-31</option>
              <option value="32">SG-32</option>
              <option value="33">SG-33</option>
              <option value="34">SG-34</option>
              <option value="35">SG-35</option>
          </select>
          </div>
        </div>
      </div>
    </div>
  </div> 

  {{-- <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
            <select class="form-control form-select status-category" data-placeholder="Filter Innitial Appointment">
                <option value="">--Filter Category--</option>
                <option value="Officer">Administrative Officer</option>
                <option value="Assistant">Administrative Assistant</option>
                <option value="Aide">Administrative Aide</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>  --}}
</div>
<!-- PAGE-HEADER END -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
      <div class="card">
			<div class="card-header">
				<h3 class="card-title"> <i class="side-menu__icon fe fe-users">Lawyer Profile  Records</i></h3>
		
            </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
            <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Salary Grade</th>
                <th>Status</th>
                <th>RA-1080 NUMBER</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($empdataa as $result)
              <tr>
                <td>{{$result->SureName}}, {{$result->FirstName}} {{$result->MiddleName}}</td>
                <td>{{$result->work_experience[0]->WorkPosition}}</td>
                <td>{{$result->work_experience[0]->WorkGrade}}</td>
                <td>{{$result->work_experience[0]->WorkStatus}}</td>
                <td>{{$result->civil_eligibility[0]->EligibilityNo}}</td>
                <td><button  type="button" class="btn btn-info  mt-3" data-bs-toggle="modal" data-bs-target="#WorkExpId{{$result->Id}}"><i class="fa fa-info" aria-hidden="true"></i></button></td>
                <!--MODAL RESET PASSWORD-->
                <!-- Modal -->
                    <div class="modal fade"  id="WorkExpId{{$result->Id}}" tabindex="-1" role="dialog" >
                        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="col-xl-12 col-md-12 col-sm-12">
                                    <div class="card">
                                    <div class="">
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 ">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h6><b>I. PERSONAL INFORMATION</b></h6>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <br />
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>SURNAME</small></label>
                                                            <div class="col-md-11 col-sm-11 ">
                                                                <input type="text" class="form-control" name="SureName" value="{{$result->SureName}}"disabled >
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>FIRSTNAME </small> </label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="text" class="form-control" name="FirstName" value="{{$result->FirstName}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>EXTENSION(JR.,SR) </small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="ExtensionName" value="{{$result->ExtensionName}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>M.NAME</small></label>
                                                            <div class="col-md-11 col-sm-11 ">
                                                                <input type="text" class="form-control" name="MiddleName" value="{{$result->MiddleName}}"disabled > 
                                                            </div>
                                                        </div>
                                                        <hr>    
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>DATE OF BIRTH (mm/dd/yyyy)</small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="DateBirth" value="{{$result->DateBirth}}"disabled > 
                                                            </div>
                                                            <label class="col-form-label col-md-3 col-sm-3 "><small>CITIZENSHIP</small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" <?php if ($result->Citizenship == 1) echo "checked='checked'"; ?> disabled > Filipino</input>&emsp;&emsp;
                                                                            <input type="checkbox" <?php if ($result->CitizenshipDual == 1) echo "checked='checked'"; ?>disabled> Dual Citizenship</input>
                                                                            <br>
                                                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" <?php if ($result->CitizenshipByBirth == 1) echo "checked='checked'"; ?>disabled> by birth</input>&emsp;&emsp;
                                                                            <input type="checkbox" <?php if ($result->CitizenshipByNaturalization == 1) echo "checked='checked'"; ?>disabled> by naturalization</input>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>PLACE OF BIRTH </small> </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="PlaceBirth" value="{{$result->PlaceBirth}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-3 col-sm-3 ">If holder of  dual citizenship, </label>
                                                            <div class="col-md-32 col-sm-32 ">
                                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label>Pls. indicate country:</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>SEX</small>  </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="Sex" value="{{$result->Sex}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-3 col-sm-3 ">please indicate the details.</label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                            <select class="select2_single form-control" tabindex="-1" disabled>
                                                                        <option></option>
                                                                        <option value="AK">Alaska</option>
                                                                        <option value="HI">Hawaii</option>
                                                                        <option value="CA">California</option>
                                                                        <option value="NV">Nevada</option>
                                                                        <option value="OR">Oregon</option>
                                                                        <option value="WA">Washington</option>
                                                                        <option value="AZ">Arizona</option>
                                                                        <option value="CO">Colorado</option>
                                                                        <option value="ID">Idaho</option>
                                                                        <option value="MT">Montana</option>
                                                                        <option value="NE">Nebraska</option>
                                                                        <option value="NM">New Mexico</option>
                                                                        <option value="ND">North Dakota</option>
                                                                        <option value="UT">Utah</option>
                                                                        <option value="WY">Wyoming</option>
                                                                        <option value="AR">Arkansas</option>
                                                                        <option value="IL">Illinois</option>
                                                                        <option value="IA">Iowa</option>
                                                                        <option value="KS">Kansas</option>
                                                                        <option value="KY">Kentucky</option>
                                                                        <option value="LA">Louisiana</option>
                                                                        <option value="MN">Minnesota</option>
                                                                        <option value="MS">Mississippi</option>
                                                                        <option value="MO">Missouri</option>
                                                                        <option value="OK">Oklahoma</option>
                                                                        <option value="SD">South Dakota</option>
                                                                        <option value="TX">Texas</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>CIVIL STATUS</small>  </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="CivilStatus" value="{{$result->CivilStatus}}"disabled>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>BLOOD TYPE </small> </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="BloodType" value="{{$result->BloodType}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>ADDRESS </small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressLot" value="{{$result->PerAddressLot}}"disabled>
                                                                <label  >House/Block/Lot No.</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressStreet" value="{{$result->PerAddressStreet}}"disabled>
                                                                <label >Street.</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>GSIS ID NO.</small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control"  name="GsisNo" value="{{$result->GsisNo}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "> </label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressVillage" value="{{$result->PerAddressVillage}}"disabled>
                                                                <label  >Subdivision/Village</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressBarangay" value="{{$result->PerAddressBarangay}}"disabled>
                                                                <label >Barangay</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>PAG-IBIG ID NO.</small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="PagibigNo" value="{{$result->PagibigNo}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressCity" value="{{$result->PerAddressCity}}"disabled>
                                                                <label  >City/Municipality</label>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="PerAddressProvince" value="{{$result->PerAddressProvince}}"disabled>
                                                                <label >Province</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>PHILHEALTH NO. </small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="PhilhealthNo" value="{{$result->PhilhealthNo}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><center>ZIP CODE</center></label>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <input type="text" class="form-control" name="PerAddressZipCode" value="{{$result->PerAddressZipCode}}"disabled>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>SSS NO..</small> </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="SssNo" value="{{$result->SssNo}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><center><small>TELEPHONE NO.</small></center></label>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <input type="text" class="form-control" name="TelephoneNo" value="{{$result->TelephoneNo}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>TIN NO..</small> </label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="TinNo" value="{{$result->TinNo}}" disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><center>MOBILE NO.</small></center></label>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <input type="text" class="form-control" name="MobileNo" value="{{$result->MobileNo}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>AGENCY EMPLOYEE NO. </small></label>
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <input type="text" class="form-control" name="AgencyEmpNo" value="  {{$result->AgencyEmpNo}}"disabled>
                                                            </div>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>E-MAIL ADDRESS</small></label>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <input type="text" class="form-control" name="EmailAddress" value="{{$result->EmailAddress}}" disabled>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="x_title">
                                                        <h6><b>III.  EDUCATIONAL BACKGROUND</b></h6>
                                                        <div class="clearfix"></div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>LEVEL </small></label>
                                                            <label class="col-form-label col-md-3 col-sm-3 "><small>NAME OF SCHOOL (Write in full)  </small></label>
                                                            <label class="col-form-label col-md-2 col-sm-2 "><center><small>BASIC EDUCATION/DEGREE/COURSE &emsp;(Write in full)</small></center></label>
                                                            <label class="col-form-label col-md-2 col-sm-2 "><center><small>PERIOD OF ATTENDANCE  &emsp; &emsp; &emsp; &emsp;From &emsp; &emsp; &emsp; &emsp;  To</small></center></label>
                                                            <label class="col-form-label col-md-2 col-sm-2 "><center><small>HIGHEST LEVEL/UNITS EARNED &emsp;(if not graduated)</small></center></label>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><center><small>YEAR GRADUATED</small></center></label>
                                                            <label class="col-form-label col-md-1 col-sm-1 "><center><small>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</small></center></label>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>ELEMENTARY</small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="ElemSchool" value="{{$result->education_background[0]->ElemSchool}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" class="form-control" name="ElemDegree" value="{{$result->education_background[0]->ElemDegree}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="ElemFrom" value="{{$result->education_background[0]->ElemFrom}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="ElemTo" value="{{$result->education_background[0]->ElemTo}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                            <input type="text" class="form-control" name="ElemEarned" value="{{$result->education_background[0]->ElemEarned}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="ElemYearGrad" value="{{$result->education_background[0]->ElemYearGrad}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                            <input type="text" class="form-control" name="ElemHonor" value="{{$result->education_background[0]->ElemHonor}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>SECONDARY</small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="SecondSchool" value="{{$result->education_background[0]->SecondSchool}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" class="form-control" name="SecondDegree" value="{{$result->education_background[0]->SecondDegree}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="SecondFrom" value="{{$result->education_background[0]->SecondFrom}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="SecondTo" value="{{$result->education_background[0]->SecondTo}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                            <input type="text" class="form-control" name="SecondEarned" value="{{$result->education_background[0]->SecondEarned}}"disabled >
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="SecondYearGrad" value="{{$result->education_background[0]->SecondYearGrad}}"disabled > 
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                            <input type="text" class="form-control" name="SecondHonor" value="{{$result->education_background[0]->SecondHonor}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>VOCATIONAL/TRADE COURSE</small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="VocationSchool" value="{{$result->education_background[0]->VocationSchool}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" class="form-control" name="VocationDegree" value="{{$result->education_background[0]->VocationDegree}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="VocationFrom" value="{{$result->education_background[0]->VocationFrom}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="VocationTo" value="{{$result->education_background[0]->VocationTo}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                            <input type="text" class="form-control" name="VocationEarned" value="{{$result->education_background[0]->VocationEarned}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="VocationYearGrad" value="{{$result->education_background[0]->VocationYearGrad}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                            <input type="text" class="form-control" name="VocationHonor" value="{{$result->education_background[0]->VocationHonor}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>COLLEGE</small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="CollegeSchool" value="{{$result->education_background[0]->CollegeSchool}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" class="form-control" name="CollegeDegree" value="{{$result->education_background[0]->CollegeDegree}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="CollegeFrom" value="{{$result->education_background[0]->CollegeFrom}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="CollegeTo" value="{{$result->education_background[0]->CollegeTo}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                            <input type="text" class="form-control" name="CollegeEarned" value="{{$result->education_background[0]->CollegeEarned}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="CollegeYearGrad" value="{{$result->education_background[0]->CollegeYearGrad}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                            <input type="text" class="form-control" name="CollegeHonor" value="{{$result->education_background[0]->CollegeHonor}}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="col-form-label col-md-1 col-sm-1 "><small>GRADUATE STUDIES </small></label>
                                                            <div class="col-md-3 col-sm-3 ">
                                                                <input type="text" class="form-control" name="GraduateSchool" value="{{$result->education_background[0]->GraduateSchool}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" class="form-control" name="GraduateDegree" value="{{$result->education_background[0]->GraduateDegree}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="GraduateFrom" value="{{$result->education_background[0]->GraduateFrom}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="GraduateTo" value="{{$result->education_background[0]->GraduateTo}}"disabled>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 ">
                                                            <input type="text" class="form-control" name="GraduateEarned" value="{{$result->education_background[0]->GraduateEarned}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <input type="text" class="form-control" name="GraduateYearGrad" value="{{$result->education_background[0]->GraduateYearGrad}}"disabled>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 ">
                                                            <input type="text" class="form-control" name="GraduateHonor" value="{{$result->education_background[0]->GraduateHonor}}"disabled>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h6><b>IV.  CIVIL SERVICE ELIGIBILITY</b></h6>
                                                        <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <br />
                                                            <form class="form-label-left input_mask">
                                                            <div class="form-row">
                                                                <label class="col-form-label col-md-3 col-sm-3 "><small>CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE </small></label>
                                                                <label class="col-form-label col-md-1 col-sm-1 "><small>RATING(If Applicable) </small> </label>
                                                                <label class="col-form-label col-md-2 col-sm-2 "><small>DATE OF EXAMINATION / CONFERMENT</small></label>
                                                                <label class="col-form-label col-md-3 col-sm-3 "><small>PLACE OF EXAMINATION / CONFERMENT</small></label>
                                                                <label class="col-form-label col-md-3 col-sm-3 "><center><small>LICENSE (if applicable)</small></center></label>
                                                                <label class="col-form-label col-md-3 col-sm-3 "><small>BARANGAY ELIGIBILITY / DRIVER'S LICENSE </small></label>
                                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                                <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                                <label class="col-form-label col-md-1 col-sm-1 "><center><small>NUMBER</small></center></label>
                                                                <label class="col-form-label col-md-2 col-sm-2 "><center><small>Date of Validity</small></center></label>
                                                            </div>
                                                            <hr>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName" value="{{$result->civil_eligibility[0]->EligibilityName}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->civil_eligibility[0]->EligibilityRating}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate" value="{{$result->civil_eligibility[0]->EligibilityDate}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace" value="{{$result->civil_eligibility[0]->EligibilityPlace}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo" value="{{$result->civil_eligibility[0]->EligibilityNo}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid" value="{{$result->civil_eligibility[0]->EligibilityValid}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName1" value="{{$result->civil_eligibility[0]->EligibilityName1}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating1" value="{{$result->civil_eligibility[0]->EligibilityRating1}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate1" value="{{$result->civil_eligibility[0]->EligibilityDate1}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace1" value="{{$result->civil_eligibility[0]->EligibilityPlace1}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo1" value="{{$result->civil_eligibility[0]->EligibilityNo1}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid1" value="{{$result->civil_eligibility[0]->EligibilityValid1}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName2" value="{{$result->civil_eligibility[0]->EligibilityName2}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating2" value="{{$result->civil_eligibility[0]->EligibilityRating2}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate2" value="{{$result->civil_eligibility[0]->EligibilityDate2}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace2" value="{{$result->civil_eligibility[0]->EligibilityPlace2}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo2" value="{{$result->civil_eligibility[0]->EligibilityNo2}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid2" value="{{$result->civil_eligibility[0]->EligibilityValid2}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName3" value="{{$result->civil_eligibility[0]->EligibilityName3}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating3" value="{{$result->civil_eligibility[0]->EligibilityRating3}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate3" value="{{$result->civil_eligibility[0]->EligibilityDate3}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace3" value="{{$result->civil_eligibility[0]->EligibilityPlace3}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo3" value="{{$result->civil_eligibility[0]->EligibilityNo3}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid3" value="{{$result->civil_eligibility[0]->EligibilityValid3}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName4" value="{{$result->civil_eligibility[0]->EligibilityName4}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating4" value="{{$result->civil_eligibility[0]->EligibilityRating4}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate4" value="{{$result->civil_eligibility[0]->EligibilityDate4}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace4" value="{{$result->civil_eligibility[0]->EligibilityPlace4}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo4" value="{{$result->civil_eligibility[0]->EligibilityNo4}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid4" value="{{$result->civil_eligibility[0]->EligibilityValid4}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName5" value="{{$result->civil_eligibility[0]->EligibilityName5}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating5" value="{{$result->civil_eligibility[0]->EligibilityRating5}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate5" value="{{$result->civil_eligibility[0]->EligibilityDate5}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace5" value="{{$result->civil_eligibility[0]->EligibilityPlace5}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo5" value="{{$result->civil_eligibility[0]->EligibilityNo5}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid5" value="{{$result->civil_eligibility[0]->EligibilityValid5}}"disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityName6" value="{{$result->civil_eligibility[0]->EligibilityName6}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityRating6" value="{{$result->civil_eligibility[0]->EligibilityRating6}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityDate6" value="{{$result->civil_eligibility[0]->EligibilityDate6}}"disabled>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 ">
                                                                    <input type="text" class="form-control" name="EligibilityPlace6" value="{{$result->civil_eligibility[0]->EligibilityPlace6}}"disabled>
                                                                </div>
                                                                <div class="col-md-1 col-sm-1 ">
                                                                    <input type="text" class="form-control" name="EligibilityNo6" value="{{$result->civil_eligibility[0]->EligibilityNo6}}"disabled>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 ">
                                                                    <input type="text" class="form-control" name="EligibilityValid6" value="{{$result->civil_eligibility[0]->EligibilityValid6}}"disabled>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
            <!--MODAL RESET PASSWORD-->
              </tr>
                @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>
<script src="../assets/js/main.js"></script>

</div>        
</div><!-- End #main -->

<script>
$(document).ready(function(){
  var table = $('#datatable').DataTable({
    dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf', 'print'
        ]
                       });
                      $('#datatable tbody').on('click', 'tr', function () {
                        console.log( table.row( this ).data() );
                          if ($(this).hasClass('selected')) {
                              $(this).removeClass('selected');
                          } else {
                              table.$('tr.selected').removeClass('selected');
                              $(this).addClass('selected');
                          }
                      });
                    
                       //FILTER CATEGORY
                    $('.status-category').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-category').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(1).search(Type).draw();
                    })

                     //FILTER SALARY GRADE
                     $('.status-salarygrade').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-salarygrade').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(2).search(Type).draw();
                    })

                    //FILTER WORK STATUS
                    $('.status-workstatus').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-workstatus').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(3).search(Type).draw();
                    })


                  });
  </script>
