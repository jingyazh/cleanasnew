@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Add Request')}} </h1>
@stop

@section('content')
      <!-- Alert Row  -->
      @include('layouts.alert')
      

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Add Request')}}</h3>
              <div class="card-tools">
                <a href="{!! route('crequests.create') !!}" class="btn btn-tool" >{{__('Open Request')}} &nbsp; <i class="fa fa-plus"></i></a>                
              </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>{{__('Name')}}</th>
                  <th>{{__('Status')}}</th>                  
                  <th>{{__('VL')}}</th>
                  <th>{{__('Service')}}</th>
                  <th>{{__('Plan Speed')}}</th>
                  <th>{{__('Plan Phone')}}</th>
                  <th>{{__ ('Create On')}}</th>
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
      ajax: "{{ route('crequests.openlist_data') }}",   
      
      columnDefs: [                
        {className: "text-center valign-middle", "targets": '_all'},     
      ],
      columns: [
          { data: 'clientname', name: 'clientname' },          
          { data: 'statusstr', name: 'statusstr' , searchable:false },
          { data: 'clientvl', name: 'clientvl' , searchable:false },
          { data: 'servicestr', name: 'servicestr' , searchable:false },
          { data: 'speedstr', name: 'speedstr' , searchable:false },
          { data: 'planphonestr', name: 'planphonestr' , searchable:false },    
          { data: 'created_at', name: 'created_at' },     
          { data: 'action', name: 'action', searchable:false },
      ],
      "order": [[ 6, "desc" ]],
      "language": {
        "sEmptyTable":     '{{__("No data available in table")}}',
        "sInfo":           '{{__("Showing _START_ to _END_ of _TOTAL_ entries")}}',
        "sInfoEmpty":      '{{__("Showing 0 to 0 of 0 entries")}}',
        "sInfoFiltered":   '{{__("(filtered from _MAX_ total entries)")}}',
        "sLengthMenu":     '{{__("Show _MENU_ entries")}}',
        "sLoadingRecords": '{{__("Loading...")}}',
        "sProcessing":     '{{__("Processing...")}}',
        "sSearch":         "{{__('Customer Search').':'}}",
        "sZeroRecords":    '{{__("No matching records found")}}',
        "oPaginate": {
          "sFirst":    '{{__("First")}}',
          "sLast":     '{{__("Last")}}',
          "sNext":     '{{__("Next")}}',
          "sPrevious": '{{__("Previous")}}'
        },
        "oAria": {
          "sSortAscending":  '{{__(": activate to sort column ascending")}}',
          "sSortDescending": '{{__(": activate to sort column descending")}}'
        }
          

      }      
    });
  });    
</script>
@stop