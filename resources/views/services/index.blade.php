@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Our Services')}}</h1>
  <select class="btn btn-tool" name="locale" id="locale" v-model="locale">
    @foreach (Config::get('app.locales') as $key => $lang)
    <option value="{{ $key }}" label="{{ $lang }}" {{ $key == session('locale') ? 'selected' : '' }}></option>
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
          <!-- <div class="form-group col-md-12">
            <label>{{__('Service Page Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="service_image" class="custom-file-input-" id="serviceImage">
                <label class="custom-file-label" for="serviceImage" aria-describedby="inputGroupFileAddon01">
                  @if($setting)
                  {{'Modify Image'}}
                  @else
                  {{'Choose file'}}
                  @endif
                </label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->service_image }}" target="_blank">here</a>
              @endif
            </small>
          </div> -->
          <div class="form-group col-md-12">
            <label>{{__('Service Page Banner')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="service_txt" required name="service_txt">
                @if(isset($setting) && $setting != null)
                  {!! old('service_txt', $setting->service_txt) !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_txt.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Service Checklist Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="service_list_image" class="custom-file-input-" id="serviceChecklistImage">
                <label class="custom-file-label" for="serviceChecklistImage" aria-describedby="inputGroupFileAddon01">
                  @if($setting)
                  {{'Modify Image'}}
                  @else
                  {{'Choose file'}}
                  @endif
                </label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_list_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->service_list_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="service_meta_title" class="form-control col-sm-12" value="{{isset($setting) ? $setting->service_meta_title : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="service_meta_description" class="form-control col-sm-12" value="{{isset($setting) ? $setting->service_meta_description : ''}}" required placeholder="{{__('Meta Description')}}" />
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
    <form method="POST" action="{{ route('settings.update_og', ['id' => $og->id]) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Open Graph Meta Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($og) ? old('og_locale', $og->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($og) ? old('og_site_name', $og->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($og) ? old('og_type', $og->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($og) ? old('og_url', $og->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($og) ? old('og_title', $og->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($og) ? old('og_description', $og->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($og) ? old('og_image', $og->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($og) ? old('og_image_width', $og->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($og) ? old('og_image_height', $og->og_image_height) : ''}}" placeholder="{{__('630')}}" />
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
        <h3 class="card-title">{{__('Services List')}} </h3>

        <div class="card-tools">
          <a href="{!! route('services.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
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
<script src="{{asset('assets/js/tinymce_image_upload.js')}}"></script>
<script>
  tinymce.init({
    selector: '#service_txt',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount importcss'
    ],
    images_upload_credentials: true,
    extended_valid_elements: "-em[class|style],#i[class|style], svg[*],defs[*],pattern[*],desc[*],metadata[*],g[*],mask[*],path[*],line[*],marker[*],rect[*],circle[*],ellipse[*],polygon[*],polyline[*],linearGradient[*],radialGradient[*],stop[*],image[*],view[*],text[*],textPath[*],title[*],tspan[*],glyph[*],symbol[*],switch[*],use[*]",
    menubar: false,
    automatic_uploads: true,
    toolbar: '| responsivefilemanager | undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table | code preview',
    images_upload_handler: example_image_upload_handler,
    content_css: ["{{ asset('assets/css/custom_tinymce.css') }}"],
    external_filemanager_path: "/filemanager/",
    filemanager_title: "Responsive Filemanager",
    external_plugins: {
      "responsivefilemanager": "{{ asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
      "filemanager": "{{ asset('filemanager/plugin.min.js')}}"
    },
  });
</script>
<script>
  var oTable = null;
  $(function() {

    oTable = $("#listtable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('services.data', ['locale' => str_replace('_', '-', app()->getLocale())]) }}",

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
          data: 'serviceid',
          name: 'serviceid'
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