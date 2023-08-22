@include('sidebar1')
 <!-- PAGE -->
 <div class="page">
  <div class="page-main">

      <!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <div>
                  <h1 class="page-title">Dashboard</h1>
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- ROW-1 -->
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                  <div class="row">
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                          <div class="card overflow-hidden">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col">
                                          <h6 class="">Total Employees</h6>
                                          <h3 class="mb-2 number-font">{{$TotalEmployee}}</h3>
                                          <p class="text-muted mb-0">
                                              {{-- <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span> last month --}}
                                          </p>
                                      </div>
                                      <div class="col col-auto">
                                          <div class="counter-icon bg-primary-gradient box-shadow-secondary brround ms-auto">
                                            <i class="fa fa-users text-white mb-5 " aria-hidden="true"></i>
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
                                        <h6 class="">Total Number of Lawyers</h6>
                                        <h3 class="mb-2 number-font">{{$Lawyer}}</h3>
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
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                      <div class="card overflow-hidden">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col">
                                    <h6 class="">Total Number of Administrative & Legal Staffs</h6>
                                      <h3 class="mb-2 number-font">{{$Staff}} / {{$Legal}}</h3>
                                      <p class="text-muted mb-0">
                                          {{-- <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span> last month --}}
                                      </p>
                                  </div>
                                  <div class="col col-auto">
                                      <div class="counter-icon bg-primary-gradient box-shadow-secondary brround ms-auto">
                                        <i class="fa fa-sitemap text-white mb-5 "" aria-hidden="true"></i>
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
                                          <h6 class="">Total Number of Male/Female/LGBTQ</h6>
                                          <h4 class="mb-2 number-font">{{$Male}} Male / {{$Female}} Female/{{$Lgbtq}} LGBTQ</h4>
                                          <p class="text-muted mb-0">
                                              {{-- <span class="text-danger"><i class="fa fa-chevron-circle-down text-danger me-1"></i> 0.2%</span> last month --}}
                                          </p>
                                      </div>
                                      <div class="col col-auto">
                                          <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                                              <i class="fa fa-male text-white mb-5 "></i>/<i class="fa fa-female text-white mb-5 "></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Years in Service</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-sracked" class="chartsh"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gender & Civil status</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-bar-rotated" class="chartsh"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Age Bracket</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart-bar-stacked" class="chartsh"></div>
                            </div>
                        </div>
                    </div><!-- COL-END -->
                    
                </div>
            </div>
          </div>
        
          <!-- ROW-1 END -->

           <!-- ROW-5 -->
           <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title mb-0">This Month Birthday Celebrator`s</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="taasd" class="table table-bordered text-nowrap mb-0">
                              <thead>
                                <tr>
                                  <th>Agency No</th>
                                  <th>Fullname</th>
                                  <th>Sex</th>
                                  <th>Position</th>
                                  <th>Age</th>
                                  <th>Birthday</th>
                                </tr>
              
                               
                              </thead>
                              <tbody>
                                @foreach($EmployeeBirthday as $row)
                              
                                
                                <tr>
                                  <th scope="row">{{$row->AgencyEmpNo}}</th>
                                  <td>{{$row->SureName}}, {{$row->FirstName}} {{$row->MiddleName}}</td>
                                  <td>{{$row->Sex}}</td>
                                  <td>{{$row->work_experience[0]->WorkPosition}}</td>
                                  <td>{{$row->age()}}</td>
                                  <td> {{$bday = date('M - d', strtotime($row->DateBirthFormat));}}</td>
                              </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- ROW-5 END -->
      </div>
      <!-- CONTAINER END -->
  </div>
</div>
<!--app-content end-->

     
  </div>
</div>


<script>
    
(function($) {   
    $(document).ready(function () {
    $('#taasd').DataTable({
        order: [[5, 'asc']],
    });
});

    
    /*chart-sracked*/
 	var chart = c3.generate({
 		bindto: '#chart-sracked', // id of chart wrapper
 		data: {
 			columns: [
 				// each columns data
                 ['data1', 50, 10, 5, 2, 1, 0],
 			],
 			labels: true,
 			type: 'area-spline', // default type of chart
 			colors: {
 				data1: '#eb6f33'
 			},
 			names: {
 				// name of each serie
 				'data1': 'Total # of Employee'
 			}
 		},
 		axis: {
 			x: {
 				type: 'category',
 				// name of each category
 				categories: ['Below 5', '5 to 9', '10 to 19', '20 to 29', '30 to 39', '40 up']
 			},
 		},
 		legend: {
 			show: false, //hide legend
 		},
 		padding: {
 			bottom: 0,
 			top: 0
 		},
 	});
    /*chart-bar-rotated Gender $ Civil Status*/
 	var chart = c3.generate({
 		bindto: '#chart-bar-rotated', // id of chart wrapper
 		data: {
 			columns: [
 				// each columns data
 				['data1', {{$MaleMarried}}, {{$FemaleMarried}}, {{$LgbtqMarried}}],
 				['data2', {{$MaleSingle}}, {{$FemaleSingle}}, {{$LgbtqSingle}}],
                 ['data3', {{$MaleWidow}}, {{$FemaleWidow}}, {{$LgbtqWidow}}],
                 ['data4', {{$MaleAnulled}}, {{$FemaleAnulled}}, {{$LgbtqAnulled}}]
 			],
 			type: 'bar', // default type of chart
 			colors: {
 				data1: '#00bfff',
 				data2: '#ffa500',
                 data3: '#8b0000',
                 data4: '#00ff00'
                 
 			},
 			names: {
 				// name of each serie
 				'data1': 'Married',
 				'data2': 'Single',
                 'data3': 'Widow/er',
                 'data4': 'Annuled/Divorced'
                 
 			}
 		},
 		axis: {
 			x: {
 				type: 'category',
 				// name of each category
 				categories: ['Male', 'Female', 'LGBTQ']
 			},
 			rotated: true,
 		},
 		bar: {
 			width: 15
 		},
 		legend: {
 			show: false, //hide legend
 		},
 		padding: {
 			bottom: 0,
 			top: 0
 		},
 	});
 	/*chart-bar-stacked*/
    /*chart-pie*/
 	var chart = c3.generate({
 		bindto: '#chart-pie2', // id of chart wrapper
 		data: {
            
 			columns: [
 				// each columns data
 				['data1', age()],
 				['data2', 10],
 				['data3', 34],
 				['data4', 55],
 				['data5', 12],
 			],
 			type: 'pie', // default type of chart
 			colors: {
 				'data1': '#6259ca',
 				'data2': '#eb6f33',
 				'data3': '#ec546c',
 				'data4': '#0774f8',
 				'data5': '#f82649',
 			},
 			names: {
 				// name of each serie
 				'data1': '20-29',
 				'data2': '30-39',
 				'data3': '40-49',
 				'data4': '50-59',
 				'data5': '60 Up'
 			}
 		},
         pie: {
    label: {
      format: function(value, ratio, id) {
        return value;
      }
    }
  },
 		axis: {},
 		legend: {
 			show: false, //hide legend
 		},
 		padding: {
 			bottom: 0,
 			top: 0
 		},
 	});
 	/*chart-pie*/

    /*chart-bar-stacked*/
 	var chart = c3.generate({
 		bindto: '#chart-bar-stacked', // id of chart wrapper
 		data: {
 			columns: [
 				// each columns data
 				['data1',  $TwentyToTwentynine, 8, 15, 18, 19],
 				['data2', 7, 7, 5, 7, 9]
 			],
 			type: 'bar', // default type of chart
 			groups: [
 				['data1', 'data2']
 			],
 			colors: {
 				data1: '#6259ca',
 				data2: '#eb6f33'
 			},
 			names: {
 				// name of each serie
 				'data1': 'Male',
 				'data2': 'Female'
 			},
             legend: {
                position: 'bottom'
            }
 		},
 		axis: {
 			x: {
 				type: 'category',
 				// name of each category
 				categories: ['20-29', '30-39', '40-49', '50-59', '60 Up']
 			},
 		},
 		bar: {
 			width: 16
 		},
 		legend: {
 			show: false, //hide legend
 		},
 		padding: {
 			bottom: 0,
 			top: 0
 		},
 	});

    
})(jQuery);
    </script>
