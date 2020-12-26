@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<div style="justify-content: space-between; display: flex">
  <h1 class="m-0 text-dark">{{__('Contact')}}</h1>
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
    <form method="POST" action="{{ $setting ? route('settings.update', $setting->id) : route('settings.store') }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Page Setting')}} </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="form-group col-md-12">
            <label>{{__('Meta Title')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="contact_meta_title" class="form-control col-sm-12" value="{{isset($metadata) ? $metadata->contact_meta_title : ''}}" required placeholder="{{__('Meta Title')}}" />
            </div>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Meta Description')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="contact_meta_description" class="form-control col-sm-12" value="{{isset($metadata) ? $metadata->contact_meta_description : ''}}" required placeholder="{{__('Meta Description')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Apply')}}</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-12">
    <form method="POST" action="{{ $contact ? route('contacts.update', $contact->id) : route('contacts.store') }}">
      @csrf
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Contact Data')}} </h3>
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
          <h4>{{ __('Offsite Cleaning Facility') }}</h4>
          <div class="form-group col-md-12">
            <label>{{__('Street')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="offsite_cleaning_facility_address" class="form-control col-sm-12" required value="{{ $contact ? old('offsite_cleaning_facility_address', $contact->offsite_cleaning_facility_address) : '' }}" placeholder="{{__('Street')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Town')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="offsite_cleaning_facility_town" class="form-control col-sm-12" required value="{{ $contact ? old('offsite_cleaning_facility_town', $contact->offsite_cleaning_facility_town) : '' }}" placeholder="{{__('Town')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Tel')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="tel" name="offsite_cleaning_facility_tel" class="form-control col-sm-12" required value="{{ $contact ? old('offsite_cleaning_facility_tel', $contact->offsite_cleaning_facility_tel) : '' }}" placeholder="{{__('Tel')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Email')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="email" name="offsite_cleaning_facility_email" class="form-control col-sm-12" required value="{{ $contact ? old('offsite_cleaning_facility_email', $contact->offsite_cleaning_facility_email) : '' }}" placeholder="{{__('Email')}}" />
            </div>
          </div>

          <h4>{{ __('Offices') }}</h4>
          <div class="form-group col-md-12">
            <label>{{__('Street')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="offices_address" class="form-control col-sm-12" required value="{{ $contact ? old('offices_address', $contact->offices_address) : '' }}" placeholder="{{__('Street')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Town')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="offices_town" class="form-control col-sm-12" required value="{{ $contact ? old('offices_town', $contact->offices_town) : '' }}" placeholder="{{__('Town')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Tel')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="tel" name="offices_tel" class="form-control col-sm-12" required value="{{ $contact ? old('offices_tel', $contact->offices_tel) : '' }}" placeholder="{{__('Tel')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Email')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="email" name="offices_email" class="form-control col-sm-12" required value="{{ $contact ? old('offices_email', $contact->offices_email) : '' }}" placeholder="{{__('Email')}}" />
            </div>
          </div>


          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="full-editor" required name="embed">
                </textarea>
              </div>
            </div>
          </div>
          <!-- <div class="form-group col-md-12">
            <label>{{__('Language')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="locale" v-model="locale">
              @foreach (Config::get('app.locales') as $key => $lang)
              @if($key != 'en-ad' && $key != 'fr-ad')
              <option value="{{ $key }}" label="{{ $lang }}"></option>
              @endif
              @endforeach
            </select>
          </div> -->
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
    location.href = "{{ route('contacts.index') }}";
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
  $('#locale').change(() => {
    const locale = $('#locale').val();
    location.href = `{{ url('lang/${locale}') }}`;
  })
</script>
@stop