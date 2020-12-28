@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Home')}}</h1>
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
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Page Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group col-md-12">
            <label>{{__('Landing Page Text')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="home_embed" required name="home_embed">
                  @if(isset($setting) && $setting != null)
                  {!! $setting->home_embed !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/home_embed.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Water Saving Counter')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="home_discounter" class="form-control col-sm-12" required value="{{ $setting ? old('home_discounter', $setting->home_discounter) : '' }}" placeholder="{{__('Discountor')}}" />
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/landing_discountor.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Home Page ESG Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="home_esg_image" class="custom-file-input" id="esgImage">
                <label class="custom-file-label" for="esgImage" aria-describedby="inputGroupFileAddon01">
                  @if($setting)
                  {{'Modify Image'}}
                  @else
                  {{'Choose file'}}
                  @endif
                </label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/landing_esg.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->home_esg_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Footer Text')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="footer_txt" required name="footer_txt">
                @if(isset($setting) && $setting != null)
                  {!! $setting->footer_txt !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/footer_txt.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="home_meta_title" class="form-control col-sm-12" value="{{isset($setting) ? $setting->home_meta_title : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="home_meta_description" class="form-control col-sm-12" value="{{isset($setting) ? $setting->home_meta_description : ''}}" required placeholder="{{__('Meta Description')}}" />
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
        <h3 class="card-title">{{__('Slider List')}} </h3>

        <div class="card-tools">
          <a href="{!! route('posts.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
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
              <!-- <th>{{__('Image 2')}}</th> -->
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
    selector: '#home_embed',
    plugins: ['table', 'code'],
  });
  tinymce.init({
    selector: '#footer_txt',
    plugins: ['table', 'code'],
  });
</script>
<script>
  var oTable = null;
  $(function() {

    oTable = $("#listtable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('posts.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
          data: 'postid',
          name: 'postid'
        },
        {
          data: 'title',
          name: 'title'
        },
        {
          data: 'image1',
          name: 'image1'
        },
        // {
        //   data: 'image2',
        //   name: 'image2'
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
      "order": [],
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