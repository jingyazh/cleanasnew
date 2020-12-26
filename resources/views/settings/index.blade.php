@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Site Settings')}}</h1>
@stop

@section('content')


<!-- Alert Row  -->
@include('layouts.alert')
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ $setting ? route('settings.update', $setting->id) : route('settings.store') }}" enctype="multipart/form-data">
      @if($setting)
      {{ method_field('PUT') }}
      @endif
      @csrf
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
            <div style="display: flex; flex-direction: row; justify-content: space-between">
              @if(isset($metadata) && $metadata != null)
              @foreach($metadata as $key => $value)
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">{{ __('<meta name="') }}</span>
                </div>
                <input type="text" class="form-control col-sm-2" name="name[]" aria-describedby="basic-addon3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">{{ __('" content="') }}</span>
                </div>
                <input type="text" class="form-control col-sm-2" id="basic-url" aria-describedby="basic-addon3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">{{ __('" property="') }}</span>
                </div>
                <input type="text" class="form-control col-sm-2" id="basic-url" aria-describedby="basic-addon3">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">"></span>
                </div>
              </div>
              @endforeach
              @endif
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
    location.href = "{{ route('settings.index') }}";
  }
</script>
<script>
  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop