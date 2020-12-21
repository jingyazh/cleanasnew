@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h3>Regular Panel Dashboard  </h3>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">




      <!-- Small boxes (Stat box) -->
      <div class="row" style="justify-content: space-around">
        <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{Auth::user()->coden}}</h3>
              <p>Codes I Have</p>
            </div>              
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>  
            {{-- <a href="{!! route('users.index') !!}" class="small-box-footer">View Deatils &nbsp; <i class="fa fa-arrow-circle-right"></i></a>                                    --}}
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-info">           
            <div class="inner">
              <h3>{{Auth::user()->totalactcount()}}</h3>
              <p>Total Activation</p>
            </div>              
            <div class="icon">
              <i class="fa fa-comments"></i>
            </div>  
            {{-- <a href="{!! route('clients.index') !!}" class="small-box-footer">View Deatils &nbsp; <i class="fa fa-arrow-circle-right"></i></a>                            --}}
          </div>
        </div>
        <!-- ./col -->
         <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{Auth::user()->todayactcount()}}</h3>
              <p>Today Activation</p>
            </div>              
            <div class="icon">
              <i class="fa fa-commenting-o"></i>
            </div>  
            {{-- <a href="#" class="small-box-footer">View Deatils &nbsp; <i class="fa fa-arrow-circle-right"></i></a>                                --}}
          </div>
        </div>
        <!-- ./col -->
        {{--<div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>0</h3>
              <p>Expired Clients</p>
            </div>              
            <div class="icon">
              <i class="fa fa-support"></i>
            </div>  
            <a href="{!! route('clients.expiredclients') !!}" class="small-box-footer">View Deatils &nbsp; <i class="fa fa-arrow-circle-right"></i></a>                                   
          </div>
        </div> --}}
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Alert Row  -->
      @include('layouts.alert_dash')
      
      <!-- Main Tables -->
      <div class="row" >
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">List of connected clients </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Mac Address</th>
                  {{-- <th>Status</th>                   --}}
                  <th>UserName</th>                  
                  <th>Last Watch</th>
                  {{-- <th>Server</th> --}}
                  <th>Time</th>
                  <th>IP</th>
                  <th>Country</th>
                </tr>
                </thead> 
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

       
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
 
@section('javascript')
<script>
  var oTable = null;
  $(function () {
    oTable = $("#listtable").DataTable({
      //...processing: true,
      serverSide: true,
      ajax: "{{ route('clients.connected_data') }}",

      columnDefs: [                
        {className: "text-center valign-middle", "targets":  '_all'}, // [0,1,2,3,4,5,6,7]
        // { "width": "70px", "targets": 2 },          
      ],
      columns: [
          { data: 'id', name: 'id' },
          { data: 'mac', name: 'mac' },
          // { data: 'status', name: 'status' },            
          { data: 'username', name: 'username' },
          { data: 'lastwatch', name: 'lastwatch' },

          // { data: 'server', name: 'server' },            
          { data: 'time', name: 'time' },
          { data: 'ip', name: 'ip' },
          { data: 'country', name: 'country' },
          
      ],
      "order": [[ 0, "desc" ]],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }      
      
   

    });
  });  

  function reloadUsers() {
    $("#listtable").DataTable().ajax.reload(null, false);    
    setTimeout(reloadUsers, 2000);
  }
  setTimeout(reloadUsers, 5000);
 

</script>
@stop