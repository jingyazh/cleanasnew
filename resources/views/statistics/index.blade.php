@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Statistic Logs </h1>
@stop

@section('content')

      <!-- Alert Row  -->
      @include('layouts.alert')
      
      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Statistic Log list </h3>
              <div class="card-tools">
                I have {{ Auth::user()->coden}} codes
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>{{__('Date')}}</th>
                  <th>{{__('Reseller')}}</th>
                  <th>{{__('Action')}}</th>                  
                  <th>{{__('Customer')}}</th>
                  <th>{{__('Detail')}}</th>
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

@stop
 
@section('js')
<script>

  var oTable = null;
  $(function () {
    oTable = $("#listtable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('statistics.log_data') }}",

      columnDefs: [                
        {className: "text-center valign-middle", "targets": "_all"},
        // { "width": "160px", "targets": 2 },          
      ],
      columns: [
          // { data: 'id', name: 'id' },            
          { data: 'created_at', name: 'created_at' },            
          { data: 'reseller', name: 'reseller' },
          { data: 'acttype', name: 'acttype' },  
          { data: 'client_name', name: 'client_name' },          
          { data: 'actcontent', name: 'actcontent' },
      ],
      "order": [[ 0, "desc" ]]
      
   

    });
  });  

  function makeStatus(id, type){
    if(confirm('Would you change the seller '+type+' ?') == false)     return false;    
    
    $.ajax({
      url: "{{ route('users.change_status') }}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      type: 'POST', 
      dataType: "JSON",
      data: {        "id": id, "type":type       },
      success: function (response)
      {
        alert(response.success);
        oTable.draw(false);
        console.log(response); // see the reponse sent
      },
      error: function(xhr) {
        alert(xhr.responseText);
        console.log(xhr.responseText); 
      }
    });  
  }


</script>
@stop