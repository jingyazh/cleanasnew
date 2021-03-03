@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Error Pages')}}</h1>
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
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-404">
          <h3 class="card-title">{{__('404 Error Page')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            please complete all required fields.
          </div>
          @endif

          <div class="form-group col-md-12">
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage404" name="errorpage404">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage404 ? $setting->errorpage404 : '' !!}
                @endif
              </textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_title" class="form-control col-sm-12" value="{{isset($og_404) ? old('meta_title', $og_404->meta_title) : ''}}" placeholder="{{__('Meta Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_description" class="form-control col-sm-12" value="{{isset($og_404) ? old('meta_description', $og_404->meta_description) : ''}}" placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_locale', $og_404->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_site_name', $og_404->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_type', $og_404->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_url', $og_404->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_title', $og_404->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_description', $og_404->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_image', $og_404->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_image_width', $og_404->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($og_404) ? old('og_image_height', $og_404->og_image_height) : ''}}" placeholder="{{__('630')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>

      </div>
    </form>
    <!-- /.card -->
  </div>
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-410">
          <h3 class="card-title">{{__('410 Error Page')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            please complete all required fields.
          </div>
          @endif

          <div class="form-group col-md-12">
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage410" name="errorpage410">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage410 ? $setting->errorpage410 : '' !!}
                @endif
              </textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_title" class="form-control col-sm-12" value="{{isset($og_410) ? old('meta_title', $og_410->meta_title) : ''}}" placeholder="{{__('Meta Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_description" class="form-control col-sm-12" value="{{isset($og_410) ? old('meta_description', $og_410->meta_description) : ''}}" placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_locale', $og_410->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_site_name', $og_410->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_type', $og_410->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_url', $og_410->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_title', $og_410->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_description', $og_410->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_image', $og_410->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_image_width', $og_410->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($og_410) ? old('og_image_height', $og_410->og_image_height) : ''}}" placeholder="{{__('630')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>

      </div>
    </form>
    <!-- /.card -->
  </div>
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-500">
          <h3 class="card-title">{{__('500 Error Page')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            please complete all required fields.
          </div>
          @endif

          <div class="form-group col-md-12">
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage500" name="errorpage500">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage500 ? $setting->errorpage500 : '' !!}
                @endif
              </textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_title" class="form-control col-sm-12" value="{{isset($og_500) ? old('meta_title', $og_500->meta_title) : ''}}" placeholder="{{__('Meta Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_description" class="form-control col-sm-12" value="{{isset($og_500) ? old('meta_description', $og_500->meta_description) : ''}}" placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_locale', $og_500->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_site_name', $og_500->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_type', $og_500->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_url', $og_500->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_title', $og_500->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_description', $og_500->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_image', $og_500->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_image_width', $og_500->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($og_500) ? old('og_image_height', $og_500->og_image_height) : ''}}" placeholder="{{__('630')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>
      </div>
      <!-- /.card -->
    </form>
  </div>
</div>

<!-- /.row -->



@stop

@section('css')
<!-- quill css -->
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.bubble.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.snow.css')}}">
<!-- quill css -->


@stop

@section('js')
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script src="{{asset('assets/js/tinymce_image_upload.js')}}"></script>
<script>
  tinymce.init({
    selector: '#errorpage404',
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
    contextmenu: false,
    setup: function(editor) {
      editor.on('init', function(args) {
        editor = args.target;

        editor.on('NodeChange', function(e) {
          if (e && e.element.nodeName.toLowerCase() == 'img') {
            tinyMCE.DOM.setAttribs(e.element, {
              'width': null,
              'height': null
            });
          }
        });
      });
    },
    external_plugins: {
      "responsivefilemanager": "{{ asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
      "filemanager": "{{ asset('filemanager/plugin.min.js')}}"
    },
    width: "100%",
    height: 200,
  });
  tinymce.init({
    selector: '#errorpage410',
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
    contextmenu: false,
    setup: function(editor) {
      editor.on('init', function(args) {
        editor = args.target;

        editor.on('NodeChange', function(e) {
          if (e && e.element.nodeName.toLowerCase() == 'img') {
            tinyMCE.DOM.setAttribs(e.element, {
              'width': null,
              'height': null
            });
          }
        });
      });
    },
    external_plugins: {
      "responsivefilemanager": "{{ asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
      "filemanager": "{{ asset('filemanager/plugin.min.js')}}"
    },
    width: "100%",
    height: 200,
  });
  tinymce.init({
    selector: '#errorpage500',
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
    contextmenu: false,
    setup: function(editor) {
      editor.on('init', function(args) {
        editor = args.target;

        editor.on('NodeChange', function(e) {
          if (e && e.element.nodeName.toLowerCase() == 'img') {
            tinyMCE.DOM.setAttribs(e.element, {
              'width': null,
              'height': null
            });
          }
        });
      });
    },
    external_plugins: {
      "responsivefilemanager": "{{ asset('tinymce/plugins/responsivefilemanager/plugin.min.js')}}",
      "filemanager": "{{ asset('filemanager/plugin.min.js')}}"
    },
    width: "100%",
    height: 200,
  });
</script>
<script>
  function cancel() {
    location.href = "{{ route('settings.index') }}";
    return false;
  }
</script>
<script>
  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop