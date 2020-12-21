@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Customers')}}</h1>
@stop

@section('content')



      <!-- Alert Row  -->
      @include('layouts.alert')


      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">

        </div>  
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Customer List')}} </h3>

              <div class="card-tools">
                <a href="{!! route('clients.create') !!}" class="btn btn-tool" >{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>                
              </div>
  
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if(session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('error') }}
                  </div>
              @endif
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>{{__('Reseller')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Address')}}</th>
                    <th>{{__('City')}}</th>
                    <th>{{__('Code Postal')}}</th>
                    <th>{{__('Registered')}}</th>
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
      ajax: "{{ route('clients.clients_data') }}",      
      
      columnDefs: [                
        {className: "text-center valign-middle", "targets": '_all'},     
      ],
      columns: [
          { data: 'reseller', name: 'reseller' },
          { data: 'name', name: 'name' },
          { data: 'addr1', name: 'addr1' },
          { data: 'city', name: 'city' },
          { data: 'zipcode', name: 'zipcode' },
                   
          { data: 'created_at', name: 'created_at' },
          { data: 'action', name: 'action', searchable:false },
      ],
      "order": [[ 6, "desc" ]],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }
    });
  });    


  function makeStatus(id, type){
    // if(confirm('Would you change the client '+type+' ?') == false)     return false;  
    if(confirm("{{__('Would you change the client status ?')}}") == false)     return false;     
    
    $.ajax({
      url: "{{ route('clients.change_status') }}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      type: 'POST', 
      dataType: "JSON",
      data: {        
        "_token": "{{ csrf_token() }}",
        "id": id, "type":type       
      },
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