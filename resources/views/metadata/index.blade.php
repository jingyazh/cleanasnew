@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Metadata')}}</h1>
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
        <h3 class="card-title">{{__('Metadata')}} </h3>

        <div class="card-tools">
          <select class="btn btn-tool" name="locale" id="locale" v-model="locale">
            @foreach (Config::get('app.locales') as $key => $lang)
            <option value="{{ $key }}" label="{{ $lang }}" {{ $key == session('locale') ? 'selected' : '' }}></option>
            @endforeach
          </select>
          <a href="{!! route('metadata.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
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
              <th></th>
              <th>{{__('Page Name')}}</th>
              <th>{{__('Meta Title')}}</th>
              <th>{{__('Meta Description')}}</th>
              <th>{{__('Language')}}</th>
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
  $(function() {

    oTable = $("#listtable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('metadata.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

      columnDefs: [{
          className: "text-center valign-middle",
          "targets": '_all'
        },
        {
          "targets": [0],
          "visible": false,
          "searchable": false
        },
      ],
      columns: [
        {
          data: 'id',
          name: 'id'
        },
        {
          data: 'page_name',
          name: 'page_name'
        },
        {
          data: 'meta_title',
          name: 'meta_title'
        },
        {
          data: 'meta_description',
          name: 'meta_description'
        },
        {
          data: 'locale',
          name: 'locale'
        },
        {
          data: 'action',
          name: 'action',
          searchable: false,
          sortable: false
        },
      ],
      // "order": [[ 0, "asc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json"
      }
    });
  });

  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop