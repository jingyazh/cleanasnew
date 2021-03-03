@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Modify')}}</h1>
@stop

@section('content')


<!-- Alert Row  -->
@include('layouts.alert')
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ route('comparisons.update', $comparison->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Modify Data')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            please complete all required fields.
          </div>
          @endif
          <div class="form-group col-md-12">
            <label>{{__('Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="title" class="form-control col-sm-12" required value="{{ old('title', $comparison->title) }}" placeholder="{{__('Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Slug')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="compareid" class="form-control col-sm-12" value="{{ old('compareid', $comparison->compareid) }}" required placeholder="{{__('Slug')}}" />
            </div>
          </div>
          <!-- <div class="form-group">
            <label>Desktop Image <code>*</code> </label>
            <div style="display: flex; flex-direction: row" class="dropzone" id="image_landing_1">
              <div id="preview-template" style="display: none;"></div>
            </div>
          </div> -->
          <div class="form-group col-md-12">
            <label>Desktop Image <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image_landing_1" class="custom-file-input-" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Modify Image</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_image_1.jpg" target="_blank">here</a> | Current Image <a href="/{{ $comparison->image_landing_1 }}" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>Mobile Image <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image_landing_2" class="custom-file-input-" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Modify Image</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_image_2.jpg" target="_blank">here</a> | Current Image <a href="/{{ $comparison->image_landing_2 }}" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="full-editor" name="embed">
                  @if(isset($comparison) && $comparison != null)
                  {!! old('embed', $comparison->embed) !!}
                  @endif
                </textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_title" class="form-control col-sm-12" value="{{isset($comparison) ? old('meta_title', $comparison->meta_title) : ''}}" placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_description" class="form-control col-sm-12" value="{{isset($comparison) ? old('meta_description', $comparison->meta_description) : ''}}" placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_locale', $comparison->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_site_name', $comparison->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_type', $comparison->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_url', $comparison->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_title', $comparison->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_description', $comparison->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_image', $comparison->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_image_width', $comparison->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($comparison) ? old('og_image_height', $comparison->og_image_height) : ''}}" placeholder="{{__('630')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
          @if (Auth::user()->roleno == $User::ROLE_MASTER)
          <button type="button" id="btnDeleteClient" class="btn btn-info">{{__('Delete')}}</button>
          @endif
          <!-- <button class="btn btn-secondary" onclick="return cancel()">{{__('Cancel')}}</button> -->
        </div>

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
<script>
  function cancel() {
    location.href = "{{ route('comparisons.index') }}";
    return false;
  }
</script>

<!-- tinymce editor -->
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script src="{{asset('assets/js/tinymce_image_upload.js')}}"></script>
<script>
  tinymce.init({
    selector: '#full-editor',
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
    height: 500,
  });
</script>
<!-- tinymce editor -->


<!-- dropzone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script>

  $("#btnDeleteClient").click(function() {
    if (confirm("{{__('Would you like to delete this data?')}}") == false)
      return false;
    $.ajax({
      url: "{{ route('comparisons.destroy', $comparison->id) }}",
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": "{{$comparison->id}}" // method and token not needed in data
      },
      success: function(response) {
        location.href = "{{ route('comparisons.index') }}";
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });
</script>
@stop