@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Site Settings')}}</h1>
  <select class="btn btn-tool" name="locale" id="locale" v-model="locale">
    @foreach (Config::get('app.locales') as $key => $lang)
    <option value="{{ $key }}" label="{{ $lang }}" {{ $key == session('locale') ? 'selected' : '' }}></option>
    @endforeach
  </select>
</div>
@stop

@section('css')
<style>
  .editMark {
    justify-content: flex-end;
    z-index: 1;
    color: gray;
    float: right;
    opacity: 0.8;
  }

  .editMark:hover {
    color: black;
    transform: scale(1.2);
    opacity: 1;
  }
</style>
@stop

@section('content')


<!-- Alert Row  -->
@include('layouts.alert')
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ route('mainSetting.pageVisibleSetting') }}" enctype="multipart/form-data">
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Top Menu Setting')}} </h3>
          <div class="card-tools">
            <a href="{!! route('settings.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
          </div>
        </div>
        <div class="card-body">
          @if(isset($menuSetting) && $menuSetting != null)
          @foreach($menuSetting as $key => $value)
          <label class="checkbox checkbox-primary" style="width: 200px;">
            <input type="checkbox" name="{{ $value->key }}" value="{{ $value->value }}" {{ $value->value == '1' ? 'checked' : '' }}>
            <span>{{ Config::get('app.pages')[$value->key] }} Page</span>
            <span class="editMark"></span>
          </label>
          <!-- here is top menu -->
          @endforeach
          @endif
          @if(isset($extraPages) && count($extraPages) > 0)
          <p style="margin-top: 1rem; margin-bottom: 0.5rem">Extra Pages</p>
          @endif
          @if(isset($extraPages) && $extraPages != null)
          @foreach($extraPages as $key => $value)
          <label class="checkbox checkbox-primary" style="width: 200px;">
            <input type="checkbox" name="{{ $value->title }}" value="{{ $value->is_visible }}" {{ $value->is_visible == '1' ? 'checked' : '' }}>
            <span>{{ $value->title }}</span>
            <a href="{{ route('extraPage.edit', $value->id) }}"><span class="editMark"><i class="fa fa-edit"></i></span></a>
          </label>
          @endforeach
          @endif
        </div>
        <div class="card-footer bg-transparent">
          <div class="mc-footer">
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary m-1">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col-12">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{__('Meta Tags Setting')}} </h3>
        <div class="card-tools">
          <a href="{!! route('metadata.create') !!}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <div class="form-group col-md-12">
          @if(isset($metadata) && $metadata != null)
          @foreach($metadata as $key => $value)
          <div style="display: flex; flex-direction: row; justify-content: space-between">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">{{ __('<meta name="') }}</span>
              </div>
              <input disabled type="text" class="form-control col-sm-2" value="{{ $value->name ? $value->name : ''}}" aria-describedby="basic-addon3">
              <div class="input-group-prepend">
                <span class="input-group-text">{{ __('" content="') }}</span>
              </div>
              <input disabled type="text" class="form-control col-sm-2" value="{{ $value->content ? $value->content : ''}}" aria-describedby="basic-addon3">
              <div class="input-group-prepend">
                <span class="input-group-text">{{ __('" property="') }}</span>
              </div>
              <input disabled type="text" class="form-control col-sm-2" value="{{ $value->property ? $value->property : ''}}" aria-describedby="basic-addon3">
              <div class="input-group-append">
                <span class="input-group-text">"></span>
              </div>
              <a href="{{ route('metadata.edit', $value->id)}}">
                <div class="input-group-append edit-metatag">
                  <span class="input-group-text">Detail</span>
                </div>
              </a>
            </div>
          </div>
          @endforeach
          @endif
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-12">
    <form action="{{route('settings.update', $setting->id)}}" method="POST">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Choose Language Page Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group col-md-12">
            <div class="form-group col-md-12">
              <label>{{__('Meta Title')}} <code>*</code> </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="lang_meta_title" class="form-control col-sm-12" value="{{ old('lang_meta_title', $setting->lang_meta_title) }}" required placeholder="{{__('Meta Title')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('Meta Description')}} <code>*</code> </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="lang_meta_description" class="form-control col-sm-12" value="{{ old('lang_meta_description', $setting->lang_meta_description) }}" required placeholder="{{__('Meta Description')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('Detail')}} <code>*</code> </label>
              <div class="col-md-12 mb-4">
                <div class="mx-auto col-md-12">
                  <textarea id="lang_detail" required name="lang_detail">
                @if(isset($setting) && $setting != null)
                  {!! old('lang_detail', $setting->lang_detail) !!}
                  @endif
                </textarea>
                </div>
              </div>
              <small class="ul-form__text form-text ">
                View example <a href="/assets/examples/service_txt.jpg" target="_blank">here</a>
              </small>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:locale')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_locale_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_locale_lang', $setting->og_locale_lang) : ''}}" placeholder="{{__('en_US')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:site_name')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_site_name_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_site_name_lang', $setting->og_site_name_lang) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:type')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_type_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_type_lang', $setting->og_type_lang) : ''}}" placeholder="{{__('website')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:url')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_url_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_url_lang', $setting->og_url_lang) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:title')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_title_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_title_lang', $setting->og_title_lang) : ''}}" placeholder="{{__('Clean As New')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:description')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_description_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_description_lang', $setting->og_description_lang) : ''}}" placeholder="{{__('Clean As New')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:image')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_image_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_image_lang', $setting->og_image_lang) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:image:width')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_image_width_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_image_width_lang', $setting->og_image_width_lang) : ''}}" placeholder="{{__('1200')}}" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label>{{__('og:image:height')}} </label>
              <div style="display: flex; flex-direction: row">
                <input type="text" name="og_image_height_lang" class="form-control col-sm-12" value="{{isset($setting) ? old('og_image_height_lang', $setting->og_image_height_lang) : ''}}" placeholder="{{__('630')}}" />
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
    </form>
    <!-- /.card -->
  </div>
</div>

<!-- /.row -->



@stop

@section('css')
<!-- quill css -->
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.bubble.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.snow.css')}}">
<!-- quill css -->

<!-- dropzone css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet">
<style type="text/css">
  .dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
  }
</style>
<!-- dropzone css -->

@stop

@section('js')
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script src="{{asset('assets/js/tinymce_image_upload.js')}}"></script>
<script>
  tinymce.init({
    selector: '#lang_detail',
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