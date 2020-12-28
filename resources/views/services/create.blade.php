@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Add Service')}}</h1>
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
    <form method="POST" action="{{ route('services.store') }}" id="frmCreateClient" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Add Service')}} </h3>
          <div class="card-tools">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <!-- @if(count($services) > 0)
          <div class="form-group col-md-12">
            <label>{{__('Update New Language Version')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row; width:100px;">
              <input type="checkbox" id="checkbox" onchange="handleChange()" class="form-control col-sm-12" />
            </div>
          </div>
          @endif
          <div class="form-group col-md-12" id="serviceid" style="display: none;">
            <label>{{__('Select title')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="serviceid" id="compareSelector" v-model="locale">
              <option value="" label="Please select title" selected></option>
              @foreach ($services as $key => $item)
              <option value="{{ $item->serviceid }}" label="{{ $item->title }}"></option>
              @endforeach
            </select>
          </div> -->
          <div class="form-group col-md-12">
            <label>{{__('Language')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="locale" v-model="locale" disabled>
              @foreach (Config::get('app.locales') as $key => $lang)
              @if($key != 'en-ad' && $key != 'fr-ad')
              <option value="{{ $key }}" label="{{ $lang }}" {{ $key == session('locale') ? 'selected' : '' }}></option>
              @endif
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="title" class="form-control col-sm-12" value="{{ old('title') }}" required placeholder="{{__('Title')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 1 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="image_landing_1" required class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon01">Choose file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image_1.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Image')}} 2 <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="image_landing_2" required class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div> -->
            </div>

            <small id="passwordHelpBlock" class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image_2.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
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
<script>
  tinymce.init({
    selector: '#full-editor',
    plugins: ['table', 'code'],
    width: "100%",
    height: 500,
  });
</script>
<script>
  function cancel() {
    location.href = "{{ route('services.index') }}";
    return false;
  }

  function handleChange() {
    var ele = document.getElementById('checkbox');
    console.log(ele.checked);
    if (ele.checked) {
      $('#serviceid').show();
    } else {
      $('#serviceid').hide();
    }
  }
</script>
@stop