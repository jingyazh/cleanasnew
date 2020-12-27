@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Testimonials')}}</h1>
  <select class="btn btn-tool" name="locale" id="locale" v-model="locale">
    @foreach (Config::get('app.locales') as $key => $lang)
    @if($key != 'en-ad' && $key != 'fr-ad')
    <option style="color: black;" value="{{ $key }}" label="{{ $lang }}" {{ $key == str_replace("_", '-', app()->getLocale()) ? "selected" : ''}}></option>
    @endif
    @endforeach
  </select>
</div>
@stop

@section('content')



<!-- Alert Row  -->
@include('layouts.alert')


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ $setting ? route('settings.update', $setting->id) : route('settings.store') }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Page Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="testimonials_meta_title" class="form-control col-sm-12" value="{{isset($setting) ? $setting->testimonials_meta_title : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="testimonials_meta_description" class="form-control col-sm-12" value="{{isset($setting) ? $setting->testimonials_meta_description : ''}}" required placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-12">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{__('Testimonials')}} </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="testimonials" class="table table-bordered table-striped" style="width:100%">
          <thead>
            <tr>
              <th></th>
              <th>{{__('Title')}}</th>
              <th>{{__('Image 1')}}</th>
              <th>{{__('Image 2')}}</th>
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
  <!-- Case Studies -->
  <div class="col-12 col-xl-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{__('Case Studies')}} </h3>

        <div class="card-tools">
          <a href="{!! route('casestudies.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="case_studies" class="table table-bordered table-striped" style="width:100%">
          <thead>
            <tr>
              <th></th>
              <th>{{__('Title')}}</th>
              <!-- <th>{{__('Description')}}</th> -->
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
  <!-- End Case Studies -->
  <!-- Feedback -->
  <div class="col-12 col-xl-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{__('Case Studies')}} </h3>

        <div class="card-tools">
          <a href="{!! route('feedbacks.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="feedbacks" class="table table-bordered table-striped" style="width:100%">
          <thead>
            <tr>
              <th></th>
              <th>{{__('Title')}}</th>
              <!-- <th>{{__('Description')}}</th> -->
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
  <!-- End Feedback -->
  <!-- Referred Journal Publications -->
  <div class="col-12 col-xl-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{__('Referred Journal Publications')}} </h3>

        <div class="card-tools">
          <a href="{!! route('publications.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="publications" class="table table-bordered table-striped" style="width:100%">
          <thead>
            <tr>
              <th></th>
              <th>{{__('Title')}}</th>
              <!-- <th>{{__('Description')}}</th> -->
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
  <!-- End Referred Journal Publications -->
</div>
<!-- /.row -->
@stop

@section('js')
<script>
  var oTable = null;
  $(function() {

    oTable = $("#testimonials").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('testimonials.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
      columns: [{
          data: 'testimonialid',
          name: 'testimonialid'
        },
        {
          data: 'title',
          name: 'title'
        },
        {
          data: 'image1',
          name: 'image1'
        },
        {
          data: 'image2',
          name: 'image2'
        },
        {
          data: 'locale',
          name: 'locale'
        },
        // { data: 'zipcode', name: 'zipcode' },

        // { data: 'created_at', name: 'created_at' },
        {
          data: 'action',
          name: 'action',
          searchable: false,
          sortable: false
        },
      ],
      // "order": [[ 0, "asc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }
    });
    oTable = $("#case_studies").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('casestudies.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
      columns: [{
          data: 'reviewid',
          name: 'reviewid'
        },
        {
          data: 'title',
          name: 'title'
        },
        // {
        //   data: 'description',
        //   name: 'description'
        // },
        {
          data: 'locale',
          name: 'locale'
        },
        // { data: 'zipcode', name: 'zipcode' },

        // { data: 'created_at', name: 'created_at' },
        {
          data: 'action',
          name: 'action',
          searchable: false,
          sortable: false
        },
      ],
      // "order": [[ 0, "asc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }
    });
    oTable = $("#feedbacks").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('feedbacks.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
      columns: [{
          data: 'reviewid',
          name: 'reviewid'
        },
        {
          data: 'title',
          name: 'title'
        },
        // {
        //   data: 'description',
        //   name: 'description'
        // },
        {
          data: 'locale',
          name: 'locale'
        },
        // { data: 'zipcode', name: 'zipcode' },

        // { data: 'created_at', name: 'created_at' },
        {
          data: 'action',
          name: 'action',
          searchable: false,
          sortable: false
        },
      ],
      // "order": [[ 0, "asc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }
    });
    oTable = $("#publications").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('publications.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
      columns: [{
          data: 'reviewid',
          name: 'reviewid'
        },
        {
          data: 'title',
          name: 'title'
        },
        // {
        //   data: 'description',
        //   name: 'description'
        // },
        {
          data: 'locale',
          name: 'locale'
        },
        // { data: 'zipcode', name: 'zipcode' },

        // { data: 'created_at', name: 'created_at' },
        {
          data: 'action',
          name: 'action',
          searchable: false,
          sortable: false
        },
      ],
      // "order": [[ 0, "asc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{('fr' == App::getLocale()) ? 'French' : 'English'}}.json"
      }
    });
  });
  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop