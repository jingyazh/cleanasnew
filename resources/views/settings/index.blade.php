@inject('Comparison', 'App\Models\Comparison')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Site Setting')}}</h1>
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
          <h3 class="card-title">{{__('Site Settings')}} </h3>
          <div class="card-tools">
            <select class="btn btn-tool" id="locale" v-model="locale">
              @foreach (Config::get('app.locales') as $key => $lang)
              @if($key != 'en-ad' && $key != 'fr-ad')
              <option style="color: black;" value="{{ $key }}" label="{{ $lang }}" {{ $key == str_replace("_", '-', app()->getLocale()) ? "selected" : ''}}></option>
              @endif
              @endforeach
            </select>
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
            <label>{{__('Landing Page Text')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="home_embed" required name="home_embed">
                  @if(isset($setting) && $setting != null)
                  {!! $setting->home_embed !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/home_embed.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Landing Page Discountor')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="home_discounter" class="form-control col-sm-12" required value="{{ $setting ? old('home_discounter', $setting->home_discounter) : '' }}" placeholder="{{__('Discountor')}}" />
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/landing_discountor.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Home Page ESG Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="home_esg_image" class="custom-file-input" id="esgImage">
                <label class="custom-file-label" for="esgImage" aria-describedby="inputGroupFileAddon01">Choose
                  file</label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/landing_esg.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->home_esg_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Comparison Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="comparison_image" class="custom-file-input" id="comparisonImage">
                <label class="custom-file-label" for="comparisonImage" aria-describedby="inputGroupFileAddon01">Choose
                  file</label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->comparison_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('"Apples To Apples"')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="comparison_txt" required name="comparison_txt">
                @if(isset($setting) && $setting != null)
                  {!! $setting->comparison_txt !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/comparison_txt.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Clean Page Slogan')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="clean_slogan" class="form-control col-sm-12" required value="{{ $setting ? old('clean_slogan', $setting->clean_slogan) : '' }}" placeholder="{{__('If We Can’t Clean It, You Don’t Pay!')}}" />
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/clean_slogan.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Service Page Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="service_image" class="custom-file-input" id="serviceImage">
                <label class="custom-file-label" for="serviceImage" aria-describedby="inputGroupFileAddon01">Choose
                  file</label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->service_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Service Page Text')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="service_txt" required name="service_txt">
                @if(isset($setting) && $setting != null)
                  {!! $setting->service_txt !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_txt.jpg" target="_blank">here</a>
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Service Checklist Image')}} <code>*</code> </label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" name="service_list_image" class="custom-file-input" id="serviceChecklistImage">
                <label class="custom-file-label" for="serviceChecklistImage" aria-describedby="inputGroupFileAddon01">Choose
                  file</label>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/service_list_image.jpg" target="_blank">here</a>
              @if($setting)
              | Current Image <a href="/{{ $setting->service_list_image }}" target="_blank">here</a>
              @endif
            </small>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('ESG Page Banner')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="esg_banner_embed" required name="esg_banner_embed">
                @if(isset($setting) && $setting != null)
                  {!! $setting->esg_banner_embed !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/esg_banner_embed.jpg" target="_blank">here</a>
            </small>
          </div>

          <div class="form-group col-md-12">
            <label>{{__('Footer Text')}} <code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="footer_txt" required name="footer_txt">
                @if(isset($setting) && $setting != null)
                  {!! $setting->footer_txt !!}
                  @endif
                </textarea>
              </div>
            </div>
            <small class="ul-form__text form-text ">
              View example <a href="/assets/examples/footer_txt.jpg" target="_blank">here</a>
            </small>
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
<!-- tinymce editor -->
<script src="{{asset('assets/js/vendor/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#home_embed',
    plugins: ['table', 'code'],

  });
  tinymce.init({
    selector: '#comparison_txt',
    plugins: ['table', 'code'],

  });
  tinymce.init({
    selector: '#service_txt',
    plugins: ['table', 'code'],
  });
  tinymce.init({
    selector: '#esg_banner_embed',
    plugins: ['table', 'code'],
  });
  tinymce.init({
    selector: '#footer_txt',
    plugins: ['table', 'code'],
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