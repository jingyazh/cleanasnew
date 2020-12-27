@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('ESG')}}</h1>
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
            <label>{{__('ESG Page Banner')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="esg_banner_embed" required name="esg_banner_embed">
                @if(isset($setting) && $setting != null)
                  {!! $setting->esg_banner_embed !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/esg_banner_embed.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="esg_meta_title" class="form-control col-sm-12" value="{{isset($setting) ? $setting->esg_meta_title : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="esg_meta_description" class="form-control col-sm-12" value="{{isset($setting) ? $setting->esg_meta_description : ''}}" required placeholder="{{__('Meta Description')}}" />
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
        <h3 class="card-title">{{__('ESG List')}} </h3>

        <div class="card-tools">
          <a href="{!! route('esgs.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="esgs" class="table table-bordered table-striped" style="width:100%">
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
</div>
<!-- /.row -->
@stop

@section('js')
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#esg_banner_embed',
    plugins: ['table', 'code'],
  });
</script>
<script>
  var oTable = null;
  $(function() {

    oTable = $("#esgs").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('esgs.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
          data: 'esgid',
          name: 'esgid'
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