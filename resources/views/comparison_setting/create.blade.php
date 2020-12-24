@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Add Comparison')}}</h1>
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
    <form method="POST" action="{{ route('comparisons.store') }}" id="frmCreateClient" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Add Comparison')}} </h3>
          <div class="card-tools">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <div class="form-group col-md-12">
            <label>{{__('Language')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="locale" v-model="locale">
              @foreach (Config::get('app.locales') as $key => $lang)
              @if($key != 'en-ad' && $key != 'fr-ad')
              <option value="{{ $key }}" label="{{ $lang }}"></option>
              @endif
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="title" class="form-control col-sm-12" required placeholder="{{__('Title')}}" />
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
              View example <a href="/assets/examples/comparison_image_1.jpg" target="_blank">here</a>
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
              View example <a href="/assets/examples/comparison_image_2.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-8">
                <textarea id="full-editor" name="embed">
                </textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Save')}}</button>
          <button class="btn btn-info" onclick="autoplaceorder()">{{__('Save and Place order')}}</button>
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
<script>
  tinymce.init({
    selector: '#full-editor',
    plugins: ['table', 'code'],
    width: 900,
    height: 500,
  });
</script>
<script>
  function autoplaceorder() {
    $("#isautoplaceorder").val(1);
    $("#frmCreateClient").submit();
  }
</script>
@stop