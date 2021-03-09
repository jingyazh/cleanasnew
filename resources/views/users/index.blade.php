@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Colleagues ')}} </h1>
@stop

@section('content')
      <!-- Alert Row  -->
      @include('layouts.alert')
      

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Colleagues List')}} </h3>
              
              <!-- <div class="card-tools">
                <a href="{!! route('users.create') !!}" class="btn btn-tool" >{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>                
              </div> -->
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>{{__('Name')}}</th>
                  <th>{{__('User')}}</th>                  
                  <th>{{__('Email')}}</th>
                  <!-- <th>{{__('Clients')}}({{__('All')}}/{{__('Active')}})</th> -->
                  <th>{{__('Action')}}</th>
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
      ajax: "{{ route('users.users_data') }}",

      columnDefs: [                
        {className: "text-center valign-middle", "targets": "_all"},     
      ],
      columns: [         
          { data: 'username', name: 'username' },            
          { data: 'name', name: 'name' },  
          { data: 'email', name: 'email' },                              
          // { data: 'clientscount', name: 'clientscount', searchable:false },            
          // { data: 'lastip', name: 'lastip' },
          // { data: 'lastlogintime', name: 'lastlogintime' },
          // { data: 'status', name: 'status' },
          // { data: 'role', name: 'role' },


          { data: 'action', name: 'action', orderable:false, searchable:false },
      ],
      "order": [[ 0, "asc" ]],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
      }      
      
   

    });
  });  

  function makeStatus(id, type){
    if(confirm("{{__('Would you change the reseller status ?')}}") == false)     return false;    
    
    $.ajax({
      url: "{{ route('users.change_status') }}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      type: 'POST', 
      dataType: "JSON",
      data: {    "_token": "{{ csrf_token() }}",    "id": id, "type":type       },
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