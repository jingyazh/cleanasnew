@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__ ('Order')}} </h1>
@stop

@section('content')

      @include('layouts.alert')
      

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__ ('Order List')}} </h3>              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listtable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    @if (Auth::user()->roleno == $User::ROLE_MASTER)
                      <th>{{__('Reseller')}}</th>
                    @endif
                    <th>{{__('Status')}}</th>
                    <th>{{__('Customer')}}</th>
                    <th>{{__ ('Service')}}</th>
                    <th>{{__ ('Plan Speed')}}</th>
                    <th>{{__ ('Plan Phone')}}</th>
                    <th>{{__ ('VL')}}</th>
                    <th>{{__ ('Phone')}}</th>
                    <th>{{__ ('Create On')}}</th>
                    <th>{{__ ('Installed on')}}</th>


                    <th>{{__ ('Username Sip')}}</th>
                    <th>{{__ ('Password')}}</th>
                    <th>{{__ ('Mac Address')}}</th>

                    <th>{{__ ('Action')}}</th>
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
      ajax: "{{ route('tickets.list_data') }}",      
      
      columnDefs: [                
        {className: "text-center valign-middle", "targets": '_all'},     
      ],
      columns: [

          @if (Auth::user()->roleno == $User::ROLE_MASTER)
            { data: 'reseller', name: 'reseller' },
          @endif
          { data: 'status', name: 'status' },
          { data: 'client', name: 'client' },
          { data: 'service', name: 'service' },
          { data: 'speed', name: 'speed' },
          { data: 'planphone', name: 'planphone' },
          { data: 'clientvl', name: 'clientvl' },
          { data: 'keep_phoneno', name: 'keep_phoneno' },
          { data: 'created_at', name: 'created_at' },
          { data: 'installon', name: 'installon' },

          { data: 'usernamesip', name: 'usernamesip' },
          { data: 'passwd', name: 'passwd' },
          { data: 'macaddr', name: 'macaddr' },
          // { data: 'planphone', name: 'planphone' },
          { data: 'action', name: 'action', searchable:false },
      ],

      "order": [[ {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? 8 : 7}}, "desc" ]],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }      
    });
  });    
</script>
@stop