@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Error Pages')}}</h1>
  <select class="btn btn-tool" name="locale" id="locale" v-model="locale">
    @foreach (Config::get('app.locales') as $key => $lang)
    @if($key != 'en-ad' && $key != 'fr-ad')
    <option style="color: black;" value="{{ $key }}" label="{{ $lang }}" {{ $key == str_replace("_", '-', app()->getLocale()) ? "selected" : ''}}></option>
    @endif
    @endforeach
  </select>
</div>
@stop

@section('content')


<!-- Alert Row  -->
@include('layouts.alert')
<!-- /.row -->


<!-- Main Tables -->
<div class="row">
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-404">
          <h3 class="card-title">{{__('404 Error Page')}} </h3>
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
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage404" name="errorpage404">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage404 ? $setting->errorpage404 : '' !!}
                @endif
              </textarea>
              </div>
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
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-410">
          <h3 class="card-title">{{__('410 Error Page')}} </h3>
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
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage410" name="errorpage410">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage410 ? $setting->errorpage410 : '' !!}
                @endif
              </textarea>
              </div>
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
  <div class="col-12">
    <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      @csrf
      <div class="card card-info">
        <div class="card-header error-500">
          <h3 class="card-title">{{__('500 Error Page')}} </h3>
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
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="errorpage500" name="errorpage500">
                @if(isset($setting) && $setting != null)
                {!! $setting->errorpage500 ? $setting->errorpage500 : '' !!}
                @endif
              </textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>
      </div>
      <!-- /.card -->
    </form>
  </div>
</div>

<!-- /.row -->



@stop

@section('css')
<!-- quill css -->
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.bubble.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/quill.snow.css')}}">
<!-- quill css -->


@stop

@section('js')
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#errorpage404',
    plugins: ['table', 'code'],
    width: "100%",
    height: 200,
  });
  tinymce.init({
    selector: '#errorpage410',
    plugins: ['table', 'code'],
    width: "100%",
    height: 200,
  });
  tinymce.init({
    selector: '#errorpage500',
    plugins: ['table', 'code'],
    width: "100%",
    height: 200,
  });
</script>
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