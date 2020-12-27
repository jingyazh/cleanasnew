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
    <form method="POST" action="{{ route('metadata.update', $metadata->id) }}" enctype="multipart/form-data">
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
          @if(isset($message) && $message != null)
          <div class="alert alert-danger">
            {{ $message }}
          </div>
          @endif
          <div class="form-group col-md-12">
            <label>{{__('Language')}}<code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="name" disabled class="form-control col-sm-12" value="{{ Config::get('app.locales')[$metadata->locale]}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Name')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="name" class="form-control col-sm-12" value="{{$metadata->name}}" placeholder="{{__('Meta Name')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Content')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="content" class="form-control col-sm-12" value="{{$metadata->content}}" placeholder="{{__('Meta Content')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Property')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="property" class="form-control col-sm-12" value="{{$metadata->property}}" placeholder="{{__('Meta Property')}}" />
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
    location.href = "{{ route('metadata.index') }}";
    return false;
  }
</script>
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
      url: "{{ route('metadata.destroy', $metadata->id) }}",
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": "{{$metadata->id}}" // method and token not needed in data
      },
      success: function(response) {
        location.href = "{{ route('settings.index') }}";
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });
</script>
@stop