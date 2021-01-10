@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Add Cleaning Props')}}</h1>
@stop

@section('content')


<!-- Alert Row  -->
@include('layouts.alert')
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('cleans.store') }}" id="frmCreateClient" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Add Cleaning Props')}} </h3>
          <div class="card-tools">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <!-- @if(count($cleans) > 0)
          <div class="form-group col-md-12">
            <label>{{__('Update New Language Version')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row; width:100px;">
              <input type="checkbox" id="checkbox" onchange="handleChange()" class="form-control col-sm-12" />
            </div>
          </div>
          @endif
          <div class="form-group col-md-12" id="cleanid" style="display: none;">
            <label>{{__('Select title')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="cleanid" id="compareSelector" v-model="locale">
              <option value="" label="Please select title" selected></option>
              @foreach ($cleans as $key => $item)
              <option value="{{ $item->cleanid }}" label="{{ $item->title }}"></option>
              @endforeach
            </select>
          </div> -->
          <div class="form-group col-md-12">
            <label>{{__('Language')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="locale" v-model="locale" disabled>
              @foreach (Config::get('app.locales') as $key => $lang)
              <option value="{{ $key }}" label="{{ $lang }}" {{ $key == session('locale') ? 'selected' : '' }}></option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-sm-12" id="type">
            <label>{{__('Type')}}<code>*</code> </label>
            <select class="form-control col-sm-12" value="{{ old('type') }}" name="type" v-model="type">
              <option value="" label=""></option>
              <option value="Heat Exchangers" label="Heat Exchangers"></option>
              <option value="Parts" label="Parts"></option>
            </select>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="title" class="form-control col-sm-12" value="{{ old('title') }}" required placeholder="{{__('Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}}<code>*</code> </label>
            <div class="input-group mb-3">
              <div class="">
                <input type="file" name="image" required class="custom-file-input-" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Choose file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/whatweclean.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Detail')}} </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="full-editor" name="embed">
                  {!! old('embed') !!}
                </textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Save')}}</button>
          <button class="btn btn-secondary" onclick="return cancel()">{{__('Cancel')}}</button>
        </div>

      </div>
    </form>
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
    selector: '#full-editor',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount'
    ],
    images_upload_credentials: true,
    menubar: false,
    automatic_uploads: true,
    toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table | code preview',
    images_upload_handler: example_image_upload_handler,
    width: "100%",
    height: 500,
  });
</script>
<script>
  function cancel() {
    location.href = "{{ route('cleans.index') }}";
    return false;
  }
  function handleChange() {
    var ele = document.getElementById('checkbox');
    console.log(ele.checked);
    if (ele.checked) {
      $('#cleanid').show();
      $('#type').hide();
    } else {
      $('#cleanid').hide();
      $('#type').show();
    }
  }
</script>
@stop