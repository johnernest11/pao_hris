@include('sidebar1')
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
      <h1 class="page-title">Personal Data Sheet</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0);">Personnel</a></li>
          <li class="breadcrumb-item active" aria-current="page">Personal Data Sheet</li>
      </ol>
  </div>
  <div class="ms-auto pageheader-btn">
    <form  method="post" class="needs-validation" action="{{route('insert-excel')}}"  enctype="multipart/form-data" required>
      @csrf
      <div class="input-group">
              <input type="file" class="form-control" name="import_file" required >
              <button class="btn btn-primary" type="submit" >Insert New Employee</button>
      </div> 
      </form><label style="color:red;"><b>UPLOAD EXCEL FILE</b></label>
  </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
      <div class="row">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-file-text"> Employee Personaal Data Sheet</i></h3>
        
                </div>
                 <!-- End Table with stripped rows -->
          @if (Session::has('success'))
          <div class="alert alert-danger alert-dismissible" role="alert" id="alert">
            <strong></strong> {{ session('success') }}
        </div>
      @endif
        <div class="card-body">
          <h5 class="card-title"></h5>
            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
            <thead>
              <tr>
                <th>Fullname</th>
                <th>Sex</th>
                <th>Appointment</th>
                <th>Agency No</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($employeerec as $row)
              <tr>
                <td>{{$row->SureName}}, {{$row->FirstName}} {{$row->MiddleName}}</td>
                <td>{{$row->Sex}}</td>
                <td>{{$row->work_experience[0]->  WorkPosition}}</td>
                <th>{{$row->AgencyEmpNo}}</th>
                <td><a href="Personal-Data-Sheet/{{$row->slug}}" class="btn btn-success" data[-bs-toggle="tooltip" title="Personal Data Sheet (PDS) "><i class="fe fe-file-text"></i></a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fe fe-trash"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure to Delete this file??????</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">{{$row->SureName}}, {{$row->FirstName}} {{$row->MiddleName}} -Personal Data Sheet</div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="softdelete/{{$row->Id}}" class="btn btn-danger" data[-bs-toggle="tooltip" title="Delete Personal Data Sheet (PDS) "><i class="fe fe-trash">Delete</i></a></button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
              </tr>
                @endforeach
            </tbody>
          </table>
         
        </div>
      </div>

    </div>
  </div>
</section>
<script src="../assets/js/main.js">
$('#btn').click(function(){

$('#alert').removeClass('d-none');

setTimeout(() => {
  $('.alert').alert('close');
}, 2000);

})


</script>
<script src="../assets/js/main.js"></script>
</div>        
</div><!-- End #main -->

<!-- INNER JOIN c2_workexperience ON c2_workexperience.AccountId = c1_personalinfo.Id" -->

