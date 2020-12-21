@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Request List')}}</h1>
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
              <h3 class="card-title">{{__('Request List')}} </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Reseller')}}</th>
                    <th>{{__('Client Name')}}</th>
                    <th>{{__('Client Phone')}}</th>
                    <th>{{__('Message')}}</th>
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
      ajax: "{{ route('crequests.crequests_data') }}",      
      
      columnDefs: [                
        {className: "text-center valign-middle", "targets": '_all'},     
      ],
      columns: [
          { data: 'status', name: 'status' },
          { data: 'resellername', name: 'resellername' },
          { data: 'clientname', name: 'clientname' },
          { data: 'clientphone', name: 'clientphone' },
          { data: 'ztext', name: 'ztext' },
          
                   
          { data: 'created_at', name: 'created_at' },
          
          { data: 'action', name: 'action', searchable:false },
      ],
      "order": [[ 5, "desc" ]],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }      
    });
  });    


  function makeStatus(id, type){
    if(confirm('Would you change the client '+type+' ?') == false)     return false;    
    
    $.ajax({
      url: "{{ route('clients.change_status') }}",
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