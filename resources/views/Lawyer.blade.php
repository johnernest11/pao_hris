@include('sidebar1')

<style>
input[type="text"]
{
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
        <h1 class="page-title">Lawyer  Records</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Promotion</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lawyer  Record</li>
        </ol>
    </div>
  <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
            <select class="form-control form-select status-category" data-placeholder="Filter Innitial Appointment">
                <option value="">--Posistion Category--</option>
                <option value="ATTORNEY I">Attorney I</option>
                <option value="ATTORNEY II">Attorney II</option>
                <option value="ATTORNEY III">Attorney III</option>
                <option value="ATTORNEY IV">Attorney IV</option>
                <option value="ATTORNEY V">Attorney V</option>
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
				<h3 class="card-title"> <i class="side-menu__icon fe fe-users"> Lawyer Work History  Records</i></h3>
		
            </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
            <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
            <thead>
              <tr>
                <th>Current Position</th>
                <th>Name</th>
                <th>Date of Assumption</th>
                <th>Salary Grade</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($empdataa as $result)
              <tr>
                <td>{{$result->work_experience[0]->WorkPosition}}</td>
                <td>{{$result->SureName}}, {{$result->FirstName}} {{$result->MiddleName}}</td>
                <td>{{$result->work_experience[0]->WorkFrom}}</td>
                <td>{{$result->work_experience[0]->WorkGrade}}</td>
                <td><button  type="button" class="btn btn-info"  mt-3" data-bs-toggle="modal" data-bs-target="#WorkExpId{{$result->Id}}"><i class="fa fa-info " aria-hidden="true"></i></button></td>
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
                                <hr>
                                <div class="x_title">
                                    <h6><b>V.  WORK EXPERIENCE HISTORY </b></h6>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-row">
                                    <label class="col-form-label col-md-2 col-sm-2 ">28. INCLUSIVE DATES (mm/dd/yyyy)</label>
                                    <label class="col-form-label col-md-3 col-sm-3 ">POSITION TITLE</label>
                                    <label class="col-form-label col-md-3 col-sm-3 ">DEPARTMENT / AGENCY / OFFICE / COMPANY</label>
                                    <label class="col-form-label col-md-1 col-sm-1 ">MONTHLY SALARY</label>
                                    <label class="col-form-label col-md-1 col-sm-1 "><center>SALARY/ JOB/ PAY GRADE </center></label>
                                    <label class="col-form-label col-md-1 col-sm-1 ">STATUS OF APPOINTMENT</label>
                                    <label class="col-form-label col-md-1 col-sm-1 ">GOV'T SERVICE(Y/ N)</label>
                                    <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                    <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                    <label class="col-form-label col-md-3 col-sm-3 "></label>
                                    <label class="col-form-label col-md-3 col-sm-3 ">(Write in full/Do not abbreviate)</label>
                                    <label class="col-form-label col-md-1 col-sm-1 "></label>
                                    <label class="col-form-label col-md-1 col-sm-1 "></label>
                                    <label class="col-form-label col-md-1 col-sm-1 "></label>
                                    <label class="col-form-label col-md-1 col-sm-1 "></label>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom" value="{{$result->work_experience[0]->WorkFrom}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo" value="{{$result->work_experience[0]->WorkTo}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition" value="{{$result->work_experience[0]->WorkPosition}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency0" value="{{$result->work_experience[0]->WorkAgency0}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary" value="{{$result->work_experience[0]->WorkSalary}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade" value="{{$result->work_experience[0]->WorkGrade}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus" value="{{$result->work_experience[0]->WorkStatus}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov" value="{{$result->work_experience[0]->WorkGov}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom1" value="{{$result->work_experience[0]->WorkFrom1}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo1" value="{{$result->work_experience[0]->WorkTo1}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition1" value="{{$result->work_experience[0]->WorkPosition1}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency1" value="{{$result->work_experience[0]->WorkAgency1}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary1" value="{{$result->work_experience[0]->WorkSalary1}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade1" value="{{$result->work_experience[0]->WorkGrade1}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus1" value="{{$result->work_experience[0]->WorkStatus1}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov1" value="{{$result->work_experience[0]->WorkGov1}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom2" value="{{$result->work_experience[0]->WorkFrom2}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo2" value="{{$result->work_experience[0]->WorkTo2}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition2" value="{{$result->work_experience[0]->WorkPosition2}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency2" value="{{$result->work_experience[0]->WorkAgency2}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary2" value="{{$result->work_experience[0]->WorkSalary2}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade2" value="{{$result->work_experience[0]->WorkGrade2}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus2" value="{{$result->work_experience[0]->WorkStatus2}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov2" value="{{$result->work_experience[0]->WorkGov2}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom3" value="{{$result->work_experience[0]->WorkFrom3}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo3" value="{{$result->work_experience[0]->WorkTo3}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition3" value="{{$result->work_experience[0]->WorkPosition3}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency3" value="{{$result->work_experience[0]->WorkAgency3}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary3" value="{{$result->work_experience[0]->WorkSalary3}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade3" value="{{$result->work_experience[0]->WorkGrade3}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus3" value="{{$result->work_experience[0]->WorkStatus3}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov3" value="{{$result->work_experience[0]->WorkGov3}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom4" value="{{$result->work_experience[0]->WorkFrom4}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo4" value="{{$result->work_experience[0]->WorkTo4}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition4" value="{{$result->work_experience[0]->WorkPosition4}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency4" value="{{$result->work_experience[0]->WorkAgency4}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary4" value="{{$result->work_experience[0]->WorkSalary4}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade4" value="{{$result->work_experience[0]->WorkGrade4}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus4" value="{{$result->work_experience[0]->WorkStatus4}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov4" value="{{$result->work_experience[0]->WorkGov4}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom5" value="{{$result->work_experience[0]->WorkFrom5}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo5" value="{{$result->work_experience[0]->WorkTo5}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition5" value="{{$result->work_experience[0]->WorkPosition5}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency5" value="{{$result->work_experience[0]->WorkAgency5}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary5" value="{{$result->work_experience[0]->WorkSalary5}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade5" value="{{$result->work_experience[0]->WorkGrade5}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus5" value="{{$result->work_experience[0]->WorkStatus5}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov5" value="{{$result->work_experience[0]->WorkGov5}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom6" value="{{$result->work_experience[0]->WorkFrom6}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo6" value="{{$result->work_experience[0]->WorkTo6}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition6" value="{{$result->work_experience[0]->WorkPosition6}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency6" value="{{$result->work_experience[0]->WorkAgency6}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary6" value="{{$result->work_experience[0]->WorkSalary6}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade6" value="{{$result->work_experience[0]->WorkGrade6}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus6" value="{{$result->work_experience[0]->WorkStatus6}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov6" value="{{$result->work_experience[0]->WorkGov6}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom7" value="{{$result->work_experience[0]->WorkFrom7}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo7" value="{{$result->work_experience[0]->WorkTo7}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition7" value="{{$result->work_experience[0]->WorkPosition7}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency7" value="{{$result->work_experience[0]->WorkAgency7}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary7" value="{{$result->work_experience[0]->WorkSalary7}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade7" value="{{$result->work_experience[0]->WorkGrade7}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus7" value="{{$result->work_experience[0]->WorkStatus7}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov7" value="{{$result->work_experience[0]->WorkGov7}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom8" value="{{$result->work_experience[0]->WorkFrom8}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo8" value="{{$result->work_experience[0]->WorkTo8}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition8" value="{{$result->work_experience[0]->WorkPosition8}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency8" value="{{$result->work_experience[0]->WorkAgency8}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary8" value="{{$result->work_experience[0]->WorkSalary8}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade8" value="{{$result->work_experience[0]->WorkGrade8}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus8" value="{{$result->work_experience[0]->WorkStatus8}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov8" value="{{$result->work_experience[0]->WorkGov8}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom9" value="{{$result->work_experience1[0]->WorkFrom9}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo9" value="{{$result->work_experience1[0]->WorkTo9}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition9" value="{{$result->work_experience1[0]->WorkPosition9}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency9" value="{{$result->work_experience1[0]->WorkAgency9}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary9" value="{{$result->work_experience1[0]->WorkSalary9}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade9" value="{{$result->work_experience1[0]->WorkGrade9}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus9" value="{{$result->work_experience1[0]->WorkStatus9}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov9" value="{{$result->work_experience1[0]->WorkGov9}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom10" value="{{$result->work_experience1[0]->WorkFrom10}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo10" value="{{$result->work_experience1[0]->WorkTo10}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition10" value="{{$result->work_experience1[0]->WorkPosition10}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency10" value="{{$result->work_experience1[0]->WorkAgency10}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary10" value="{{$result->work_experience1[0]->WorkSalary10}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade10" value="{{$result->work_experience1[0]->WorkGrade10}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus10" value="{{$result->work_experience1[0]->WorkStatus10}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov10" value="{{$result->work_experience1[0]->WorkGov10}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom11" value="{{$result->work_experience1[0]->WorkFrom11}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo11" value="{{$result->work_experience1[0]->WorkTo11}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition11" value="{{$result->work_experience1[0]->WorkPosition11}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency11" value="{{$result->work_experience1[0]->WorkAgency11}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary11" value="{{$result->work_experience1[0]->WorkSalary11}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade11" value="{{$result->work_experience1[0]->WorkGrade11}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus11" value="{{$result->work_experience1[0]->WorkStatus11}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov11" value="{{$result->work_experience1[0]->WorkGov11}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom12" value="{{$result->work_experience1[0]->WorkFrom12}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo12" value="{{$result->work_experience1[0]->WorkTo12}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition12" value="{{$result->work_experience1[0]->WorkPosition12}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency12" value="{{$result->work_experience1[0]->WorkAgency12}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary12" value="{{$result->work_experience1[0]->WorkSalary12}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade12" value="{{$result->work_experience1[0]->WorkGrade12}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus12" value="{{$result->work_experience1[0]->WorkStatus12}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov12" value="{{$result->work_experience1[0]->WorkGov12}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom13" value="{{$result->work_experience1[0]->WorkFrom13}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo13" value="{{$result->work_experience1[0]->WorkTo13}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition13" value="{{$result->work_experience1[0]->WorkPosition13}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency13" value="{{$result->work_experience1[0]->WorkAgency13}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary13" value="{{$result->work_experience1[0]->WorkSalary13}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade13" value="{{$result->work_experience1[0]->WorkGrade13}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus13" value="{{$result->work_experience1[0]->WorkStatus13}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov13" value="{{$result->work_experience1[0]->WorkGov13}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom14" value="{{$result->work_experience1[0]->WorkFrom14}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo14" value="{{$result->work_experience1[0]->WorkTo14}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition14" value="{{$result->work_experience1[0]->WorkPosition14}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency14" value="{{$result->work_experience1[0]->WorkAgency14}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary14" value="{{$result->work_experience1[0]->WorkSalary14}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade14" value="{{$result->work_experience1[0]->WorkGrade14}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus14" value="{{$result->work_experience1[0]->WorkStatus14}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov14" value="{{$result->work_experience1[0]->WorkGov14}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom15" value="{{$result->work_experience1[0]->WorkFrom15}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo15" value="{{$result->work_experience1[0]->WorkTo15}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition15" value="{{$result->work_experience1[0]->WorkPosition15}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency15" value="{{$result->work_experience1[0]->WorkAgency15}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary15" value="{{$result->work_experience1[0]->WorkSalary15}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade15" value="{{$result->work_experience1[0]->WorkGrade15}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus15" value="{{$result->work_experience1[0]->WorkStatus15}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov15" value="{{$result->work_experience1[0]->WorkGov15}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom16" value="{{$result->work_experience1[0]->WorkFrom16}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo16" value="{{$result->work_experience1[0]->WorkTo16}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition16" value="{{$result->work_experience1[0]->WorkPosition16}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency160" value="{{$result->work_experience1[0]->WorkAgency16}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary16" value="{{$result->work_experience1[0]->WorkSalary16}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade16" value="{{$result->work_experience1[0]->WorkGrade16}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus16" value="{{$result->work_experience1[0]->WorkStatus16}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov16" value="{{$result->work_experience1[0]->WorkGov16}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom17" value="{{$result->work_experience1[0]->WorkFrom17}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo17" value="{{$result->work_experience1[0]->WorkTo17}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition17" value="{{$result->work_experience1[0]->WorkPosition17}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency17" value="{{$result->work_experience1[0]->WorkAgency17}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary17" value="{{$result->work_experience1[0]->WorkSalary17}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade17" value="{{$result->work_experience1[0]->WorkGrade17}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus17" value="{{$result->work_experience1[0]->WorkStatus17}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov17" value="{{$result->work_experience1[0]->WorkGov17}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom18" value="{{$result->work_experience2[0]->WorkFrom18}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo18" value="{{$result->work_experience2[0]->WorkTo18}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition18" value="{{$result->work_experience2[0]->WorkPosition18}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency18" value="{{$result->work_experience2[0]->WorkAgency18}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary18" value="{{$result->work_experience2[0]->WorkSalary18}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade18" value="{{$result->work_experience2[0]->WorkGrade18}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus18" value="{{$result->work_experience2[0]->WorkStatus18}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov18" value="{{$result->work_experience2[0]->WorkGov18}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom19" value="{{$result->work_experience2[0]->WorkFrom19}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo19" value="{{$result->work_experience2[0]->WorkTo19}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition19" value="{{$result->work_experience2[0]->WorkPosition19}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency19" value="{{$result->work_experience2[0]->WorkAgency19}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary19" value="{{$result->work_experience2[0]->WorkSalary19}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade19" value="{{$result->work_experience2[0]->WorkGrade19}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus19" value="{{$result->work_experience2[0]->WorkStatus19}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov19" value="{{$result->work_experience2[0]->WorkGov19}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom20" value="{{$result->work_experience2[0]->WorkFrom20}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo20" value="{{$result->work_experience2[0]->WorkTo20}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition20" value="{{$result->work_experience2[0]->WorkPosition20}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency20" value="{{$result->work_experience2[0]->WorkAgency20}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary20" value="{{$result->work_experience2[0]->WorkSalary20}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade20" value="{{$result->work_experience2[0]->WorkGrade20}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus20" value="{{$result->work_experience2[0]->WorkStatus20}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov20" value="{{$result->work_experience2[0]->WorkGov20}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom21" value="{{$result->work_experience2[0]->WorkFrom21}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo21" value="{{$result->work_experience2[0]->WorkTo21}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition21" value="{{$result->work_experience2[0]->WorkPosition21}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency21" value="{{$result->work_experience2[0]->WorkAgency21}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary21" value="{{$result->work_experience2[0]->WorkSalary21}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade21" value="{{$result->work_experience2[0]->WorkGrade21}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus21" value="{{$result->work_experience2[0]->WorkStatus21}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov21" value="{{$result->work_experience2[0]->WorkGov21}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom22" value="{{$result->work_experience2[0]->WorkFrom22}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo22" value="{{$result->work_experience2[0]->WorkTo22}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition22" value="{{$result->work_experience2[0]->WorkPosition22}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency22" value="{{$result->work_experience2[0]->WorkAgency22}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary22" value="{{$result->work_experience2[0]->WorkSalary22}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade22" value="{{$result->work_experience2[0]->WorkGrade22}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus22" value="{{$result->work_experience2[0]->WorkStatus22}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov22" value="{{$result->work_experience2[0]->WorkGov22}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom23" value="{{$result->work_experience2[0]->WorkFrom23}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo23" value="{{$result->work_experience2[0]->WorkTo23}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition23" value="{{$result->work_experience2[0]->WorkPosition23}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency23" value="{{$result->work_experience2[0]->WorkAgency23}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary23" value="{{$result->work_experience2[0]->WorkSalary23}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade23" value="{{$result->work_experience2[0]->WorkGrade23}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus23" value="{{$result->work_experience2[0]->WorkStatus23}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov23" value="{{$result->work_experience2[0]->WorkGov23}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom24" value="{{$result->work_experience2[0]->WorkFrom24}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo24" value="{{$result->work_experience2[0]->WorkTo24}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition24" value="{{$result->work_experience2[0]->WorkPosition24}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency24" value="{{$result->work_experience2[0]->WorkAgency24}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary24" value="{{$result->work_experience2[0]->WorkSalary24}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade24" value="{{$result->work_experience2[0]->WorkGrade24}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus24" value="{{$result->work_experience2[0]->WorkStatus24}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov24" value="{{$result->work_experience2[0]->WorkGov24}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom25" value="{{$result->work_experience2[0]->WorkFrom25}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo25" value="{{$result->work_experience2[0]->WorkTo25}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition25" value="{{$result->work_experience2[0]->WorkPosition25}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency25" value="{{$result->work_experience2[0]->WorkAgency25}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary25" value="{{$result->WorkSalary25}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade25" value="{{$result->work_experience2[0]->WorkGrade25}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus25" value="{{$result->work_experience2[0]->WorkStatus25}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov25" value="{{$result->work_experience2[0]->WorkGov25}}"disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkFrom26" value="{{$result->work_experience2[0]->WorkFrom26}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkTo26" value="{{$result->work_experience2[0]->WorkTo26}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkPosition26" value="{{$result->work_experience2[0]->WorkPosition26}}"disabled>
                                    </div>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input type="text" class="form-control" name="WorkAgency26" value="{{$result->work_experience2[0]->WorkAgency26}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkSalary26" value="{{$result->work_experience2[0]->WorkSalary26}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGrade26" value="{{$result->work_experience2[0]->WorkGrade26}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                    <input type="text" class="form-control" name="WorkStatus26" value="{{$result->work_experience2[0]->WorkStatus26}}"disabled>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <input type="text" class="form-control" name="WorkGov26" value="{{$result->work_experience2[0]->WorkGov26}}"disabled>
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
                      table.column(0).search(Type).draw();
                    })

                     //FILTER SALARY GRADE
                     $('.status-salarygrade').on('change', function(e){
                      var Type = $(this).val();
                      $('.status-salarygrade').val(Type)
                      console.log(Type)
                      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                      table.column(3).search(Type).draw();
                    })

                  });
  </script>
