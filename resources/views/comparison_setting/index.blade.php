@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('How We Clean')}}</h1>
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
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Page Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="form-group col-md-12">
            <label>{{__('Comparison Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="comparison_image" class="custom-file-input" id="comparisonImage">
                <label class="custom-file-label" for="comparisonImage" aria-describedby="inputGroupFileAddon01">
                  @if($setting)
                  {{'Modify Image'}}
                  @else
                  {{'Choose file'}}
                  @endif
                </label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->comparison_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('"Apples To Apples"')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="comparison_txt" required name="comparison_txt">
                @if(isset($setting) && $setting != null)
                  {!! old('comparison_txt', $setting->comparison_txt) !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_txt.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="comparison_meta_title" class="form-control col-sm-12" value="{{isset($setting) ? old('comparison_meta_title', $setting->comparison_meta_title) : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="comparison_meta_description" class="form-control col-sm-12" value="{{isset($setting) ? old('comparison_meta_description', $setting->comparison_meta_description) : ''}}" required placeholder="{{__('Meta Description')}}" />
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
        <h3 class="card-title">{{__('Comparison List')}} </h3>

        <div class="card-tools">
          <a href="{!! route('comparisons.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
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
</div>
<!-- /.row -->
@stop

@section('js')
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#comparison_txt',
    plugins: ['table', 'code'],
  });
</script>
<script>
  var oTable = null;
  $(function() {

    oTable = $("#listtable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('comparisons.comparisons_data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
          data: 'compareid',
          name: 'compareid'
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
  });
  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop