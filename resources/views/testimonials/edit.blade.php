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
    <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
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
              <input type="text" name="title" class="form-control col-sm-12" required value="{{ old('title', $testimonial->title) }}" placeholder="{{__('Title')}}" />
            </div>
          </div>
          <!-- <div class="form-group">
            <label>{{__('Image')}} 1 <code>*</code> </label>
            <div style="display: flex; flex-direction: row" class="dropzone" id="image_1">
              <div id="preview-template" style="display: none;"></div>
            </div>
          </div> -->
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 1 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image_1" class="custom-file-input-" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Modify Image</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/testimonial_1.jpg" target="_blank">here</a> | Current Image <a href="/{{ $testimonial->image_1 }}" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 2 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image_2" class="custom-file-input-" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Modify Image</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/testimonial_2.jpg" target="_blank">here</a> | Current Image <a href="/{{ $testimonial->image_2 }}" target="_blank">here</a>
            </small>
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
  <!-- Case Studies -->
  <div class="col-12">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">{{$testimonial->title}} </h3>

        <div class="card-tools">
          <a href="{{ route('feedbacks.create', ['testimonialid' => $testimonial->testimonialid]) }}" class="btn btn-tool">{{__('Add')}} &nbsp; <i class="fa fa-plus"></i></a>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
        @endif
        <table id="data" class="table table-bordered table-striped" style="width:100%">
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
  <!-- End Case Studies -->
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
    location.href = "{{ route('testimonials.index') }}";
    return false;
  }
</script>

<!-- tinymce editor -->
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<!-- tinymce editor -->

<!-- quill editor -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="{{asset('assets/js/vendor/quill.min.js')}}"></script>
<script src="{{asset('assets/js/quill.script.js')}}"></script> -->
<!-- quill editor -->

<!-- dropzone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script>
  var oTable = null;
  oTable = $("#data").DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('testimonials.reviewData', ['testimonialid' => $testimonial->testimonialid] ) }}",

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
        data: 'reviewid',
        name: 'reviewid'
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
  $("#btnDeleteClient").click(function() {
    if (confirm("{{__('Would you like to delete this data?')}}") == false)
      return false;
    $.ajax({
      url: "{{ route('testimonials.destroy', $testimonial->id) }}",
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": "{{$testimonial->id}}" // method and token not needed in data
      },
      success: function(response) {
        location.href = "{{ route('testimonials.index') }}";
      },
      error: function(xhr) {
        console.log(xhr.responseText);
      }
    });
  });
</script>
@stop