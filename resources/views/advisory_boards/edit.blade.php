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
    <form method="POST" action="{{ route('advisory_boards.update', $advisory_board->id) }}" enctype="multipart/form-data">
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
            <label>{{__('Name')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="name" class="form-control col-sm-12" required value="{{ old('name', $advisory_board->name) }}" placeholder="{{__('Name')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}}<code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image" class="custom-file-input-" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Modify Image</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/advisory_board.jpg" target="_blank">here</a> | Current Image <a href="/{{ $advisory_board->image }}" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__("Member's quote")}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="quote" name="quote">
                {!! old('quote', $advisory_board->quote) !!}
                </textarea>
              </div>
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="embed" name="embed">
                {!! $advisory_board->embed !!}
                </textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_title" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('meta_title', $advisory_board->meta_title) : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="meta_description" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('meta_description', $advisory_board->meta_description) : ''}}" required placeholder="{{__('Meta Description')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('og:locale')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_locale" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_locale', $advisory_board->og_locale) : ''}}" placeholder="{{__('en_US')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:site_name')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_site_name" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_site_name', $advisory_board->og_site_name) : ''}}" placeholder="{{__('Clean As New Powered by Tech Sonic®')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:type')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_type" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_type', $advisory_board->og_type) : ''}}" placeholder="{{__('website')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:url')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_url" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_url', $advisory_board->og_url) : ''}}" placeholder="{{__('https://cleanasnew.com')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:title')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_title" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_title', $advisory_board->og_title) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:description')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_description" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_description', $advisory_board->og_description) : ''}}" placeholder="{{__('Clean As New')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_image', $advisory_board->og_image) : ''}}" placeholder="{{__('https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:width')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_width" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_image_width', $advisory_board->og_image_width) : ''}}" placeholder="{{__('1200')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('og:image:height')}} </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="og_image_height" class="form-control col-sm-12" value="{{isset($advisory_board) ? old('og_image_height', $advisory_board->og_image_height) : ''}}" placeholder="{{__('630')}}" />
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
    location.href = "{{ route('advisory_boards.index') }}";
    return false;
  }
</script>
<!-- tinymce editor -->
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script src="{{asset('assets/js/tinymce_image_upload.js')}}"></script>
<script>
  tinymce.init({
    selector: '#quote',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount importcss'
    ],
    images_upload_credentials: true,
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
    width: "100%",
    height: 500
  });
  tinymce.init({
    selector: '#embed',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount importcss'
    ],
    images_upload_credentials: true,
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
    width: "100%",
    height: 500
  });
</script>
<!-- tinymce editor -->

<!-- quill editor -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="{{asset('assets/js/vendor/quill.min.js')}}"></script>
<script src="{{asset('assets/js/quill.script.js')}}"></script> -->
<!-- quill editor -->

<!-- dropzone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script>
  // Dropzone.autoDiscover = false;
  // $(document).ready(function() {
  //   var dropzone = new Dropzone('#demo-upload', {
  //     previewTemplate: document.querySelector('#preview-template').innerHTML,
  //     parallelUploads: 1,
  //     thumbnailHeight: 120,
  //     thumbnailWidth: 120,
  //     maxFilesize: 1,
  //     filesizeBase: 1000,
  //     // thumbnail: function(file, dataUrl) {
  //     //   if (file.previewElement) {
  //     //     file.previewElement.classList.remove("dz-file-preview");
  //     //     var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
  //     //     for (var i = 0; i < images.length; i++) {
  //     //       var thumbnailElement = images[i];
  //     //       thumbnailElement.alt = file.name;
  //     //       thumbnailElement.src = dataUrl;
  //     //     }
  //     //     setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
  //     //   }
  //     // }

  //   });


  //   // Now fake the file upload, since GitHub does not handle file uploads
  //   // and returns a 404

  //   var minSteps = 6,
  //     maxSteps = 60,
  //     timeBetweenSteps = 100,
  //     bytesPerStep = 100000;

  //   dropzone.uploadFiles = function(files) {
  //     var self = this;

  //     for (var i = 0; i < files.length; i++) {

  //       var file = files[i];
  //       totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

  //       for (var step = 0; step < totalSteps; step++) {
  //         var duration = timeBetweenSteps * (step + 1);
  //         setTimeout(function(file, totalSteps, step) {
  //           return function() {
  //             file.upload = {
  //               progress: 100 * (step + 1) / totalSteps,
  //               total: file.size,
  //               bytesSent: (step + 1) * file.size / totalSteps
  //             };

  //             self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
  //             if (file.upload.progress == 100) {
  //               file.status = Dropzone.SUCCESS;
  //               self.emit("success", file, 'success', null);
  //               self.emit("complete", file);
  //               self.processQueue();
  //               //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
  //             }
  //           };
  //         }(file, totalSteps, step), duration);
  //       }
  //     }
  //   }

  // })


  $("#btnDeleteClient").click(function() {
    if (confirm("{{__('Would you like to delete this data?')}}") == false)
      return false;
    $.ajax({
      url: "{{ route('advisory_boards.destroy', $advisory_board->id) }}",
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": "{{$advisory_board->id}}" // method and token not needed in data
      },
      success: function(response) {
        location.href = "{{ route('aboutus.index') }}";
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });
</script>
@stop