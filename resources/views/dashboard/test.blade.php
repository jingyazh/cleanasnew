@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <div class="content-header">
    {{-- <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Master Message</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div> --}}
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Alert Row  -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                  Master Message
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-ban"></i> Test 48 Hours is now available (Please don't sell it ontine to US customers).</h5>                
              </div>
              <div class="alert alert-secondary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-info"></i> Please note that no online sales are no longer tolerated for the Talfaza service, please remove the posters from your e-commerce sites. Violation of this rule will result in a suspension of the account.</h5>                
              </div>
              {{-- <div class="alert alert-secondary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-info"></i> For Android customers, please use the new panel https://store2.talfaza.tv/#/login. If you still can't access, please contact us at contact@talfaza.tv.</h5>                
              </div> --}}
              <div class="alert alert-secondary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-info"></i> Please do not sell the Full or Premium package at less than $ 200 CAD / year. Violation of this rule will result in a suspension of the account.</h5>                
              </div>
    

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Resellers : </label>
            <select class="form-control">
              <option>Choose...</option>
              <option>peter</option>
            </select>
          </div>          
        </div>  
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Customers list </h3>
              <div class="card-tools">
                <a href="{!! route('customers_add') !!}" class="btn btn-tool" >Add &nbsp; <i class="fa fa-plus"></i></a>                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Login</th>
                  <th>Pwd</th>                  
                  <th>mac/serial</th>
                  <th>Subs</th>
                  <th>Admin</th>
                  <th>Begin date</th>
                  <th>End date</th>
                  <th>Package</th>
                  <th>Status</th>                  
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
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/dist/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/dist/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- DataTables -->
<script src="/dist/plugins/datatables/jquery.dataTables.js"></script>
<script src="/dist/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- My Custom JS -->
<script src="/js/global.js"></script>
<script>
  function go(key){
    location.href = '/school/'+key;
  }

  var oTable = null;
  $(function () {
    oTable = $("#listtable").DataTable({
      // processing: true,
      serverSide: false,
      
      columnDefs: [                
        {className: "text-center valign-middle", "targets": [0,1,2,3,4]},
        { "width": "100px", "targets": 4 },          
      ],
      columns: [
          { data: 'regdate', name: 'regdate', searchable:false },            
          { data: 'adminid', name: 'adminid' },
          { data: 'adminphoneno', name: 'adminphoneno' },            
          { data: 'adminname', name: 'adminname' },     
          { data: 'action', name: 'action', orderable:false, searchable:false },
          { data: 'adminname1', name: 'adminname1' },
          { data: 'adminname2', name: 'adminname2' },
          { data: 'adminname3', name: 'adminname3' },
          { data: 'adminname4', name: 'adminname4' },
          { data: 'adminname5', name: 'adminname5' },
          { data: 'adminname6', name: 'adminname6' },          
      ],
      "order": [[ 0, "asc" ]]
      
   

    });
  });  
</script>
@stop