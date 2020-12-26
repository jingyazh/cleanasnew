@inject('Service', 'App\Models\Service')
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
    <form method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data">
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
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <div class="form-group col-md-12">
            <label>{{__('Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="title" class="form-control col-sm-12" required value="{{ old('title', $service->title) }}" placeholder="{{__('Title')}}" />
            </div>
          </div>
          <!-- <div class="form-group">
            <label>{{__('Image')}} 1 <code>*</code> </label>
            <div style="display: flex; flex-direction: row" class="dropzone" id="image_landing_1">
              <div id="preview-template" style="display: none;"></div>
            </div>
          </div> -->
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 1 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="image_landing_1" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Choose
                  file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image_1.jpg" target="_blank">here</a> | Current Image <a href="/{{ $service->image_landing_1 }}" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 2 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="image_landing_2" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                  file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image_2.jpg" target="_blank">here</a> | Current Image <a href="/{{ $service->image_landing_2 }}" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="full-editor" name="embed">
                </textarea>
              </div>
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
    location.href = "{{ route('services.index') }}";
    return false;
  }
</script>

<!-- tinymce editor -->
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#full-editor',
    plugins: ['table', 'code'],
    width: "100%",
    height: 500,
    setup: function(editor) {
      editor.on('init', function(e) {
        editor.setContent("{{ $service->embed }}");
      });
    }
  });
  // var parser = new tinymce.html.SaxParser({
  //   validate: true,

  //   comment: function(text) {
  //     console.log('Comment:', text);
  //   },

  //   cdata: function(text) {
  //     console.log('CDATA:', text);
  //   },

  //   text: function(text, raw) {
  //     console.log('Text:', text, 'Raw:', raw);
  //   },

  //   start: function(name, attrs, empty) {
  //     console.log('Start:', name, attrs, empty);
  //   },

  //   end: function(name) {
  //     console.log('End:', name);
  //   },

  //   pi: function(name, text) {
  //     console.log('PI:', name, text);
  //   },

  //   doctype: function(text) {
  //     console.log('DocType:', text);
  //   }
  // }, schema);
  // parser.parse("{{$service->embed}}");
  // tinymce.activeEditor.setContent("{{$service->embed}}");
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
    if (confirm("{{__('Would you delete this Client ?')}}") == false)
      return false;
    $.ajax({
      url: "{{ route('services.destroy', $service->id) }}",
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": "{{$service->id}}" // method and token not needed in data
      },
      success: function(response) {
        location.href = "{{ route('services.index') }}";
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });
</script>
@stop