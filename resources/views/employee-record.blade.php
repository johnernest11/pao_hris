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
      <h1 class="page-title">List of Personnel</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0);">Administrative Action</a></li>
          <li class="breadcrumb-item active" aria-current="page">List of Personnel</li>
      </ol>
  </div>
  <div class="col-lg-4">
    <div class="">
      <div class="card-body">
        <div class="wd-200 mg-b-30">
          <div class="input-group">
            <select class="form-control form-select status-category" data-placeholder="Filter Innitial Appointment">
              <option value="">--Filter Categories--</option>
              <option value="Lawyer">Lawyer</option>
              <option value="Staff">Staff</option>
          </select>
          {{-- <select class="form-control form-select status-category" data-placeholder="Filter Innitial Appointment">
            <option value="">--Filter Offices--</option>
            <option value="ATTORNEY">Lawyer</option>
            <option value="ADMINISTRATIVE">Staff</option>
        </select> --}}
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
<!-- PAGE-HEADER END -->
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title"> <i class="side-menu__icon fe fe-file-text"> List of Personnel</i></h3>
        
            </div>
        <div class="card-body">
          <div class="modal-body">
            </div>
            
            <table class="table table-bordered text-nowrap border-bottom w-100" id="datatable">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>Fullname</th>
                <th>Current Item</th>
                <th>Category</th>
                <th>Office</th>
              </tr>
            </thead>
            <tbody>
                @foreach($employeerecord as $row)
                @php
                if($row->work_experience[0]->WorkPosition === 'PUBLIC ATTORNEY I' || $row->work_experience[0]->WorkPosition === 'PUBLIC ATTORNEY II' 
                || $row->work_experience[0]->WorkPosition === 'PUBLIC ATTORNEY III')
                  $WorkClassification ='LAWYER';
                else
                  $WorkClassification ='STAFF';
              @endphp

              <tr>
                <td>{{$row->SureName}}, {{$row->FirstName}} {{$row->MiddleName}}</td>
                <td>{{$row->work_experience[0]->WorkPosition}}</td>
                <td>{{$WorkClassification}}</td>
                <td>{{$row->work_experience[0]->WorkRegion}}</td>
              </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Fullname</th>
                <th>Current Item</th>
                <th>Category</th>
                <th>Office</th>
              </tr>
          </tfoot>
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

<!-- INNER JOIN c2_workexperience ON c2_workexperience.AccountId = c1_personalinfo.Id" -->
<style>

  </style>
<script>
 $(document).ready(function () {
  var table = $('#exampletable').DataTable({
   

      dom: 'Bfrtip',
        buttons: [
             'csv', 'excel'
        ],
        
        
      initComplete: function () {
            this.api().columns([1,2,3]).every(function () {
                    var column = this;
                    var select = $('<select  class="form-control form-select select2" ><option value="">FILTER CATEGORY</option></select>')
                        .appendTo($(column.header()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
 
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
 
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                        
                });
                
                $('th.sorting').off();
            $("th.sorting").css('cursor', 'default');
            $("th.sorting_asc").css('cursor', 'default');
            $("th.sorting_desc").css('cursor', 'default');
        },
        order: [[1, 'desc']]
    });
});
</script>

<script>
  $(document).ready(function(){
    var table = $('#datatable').DataTable({
      
      dom: 'Bfrtip',
        buttons: [
             'csv', 'excel'
        ],
                          
                          'select': {
                            'style': 'multi'
                            }
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
                        table.column(2).search(Type).draw();
                      })
                     
  order: [[1, 'asc']]
                    });
    </script>