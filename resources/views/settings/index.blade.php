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
  opacity: 0.9;
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