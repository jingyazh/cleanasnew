@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Add FAQ')}}</h1>
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
    <form method="POST" action="{{ route('faqs.store') }}" id="frmCreateClient" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Add FAQ')}} </h3>
          <div class="card-tools">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          @if(count($faqs) > 0)
          <div class="form-group col-md-12">
            <label>{{__('Update New Language Version')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row; width:100px;">
              <input type="checkbox" id="checkbox" onchange="handleChange()" class="form-control col-sm-12" />
            </div>
          </div>
          @endif
          <div class="form-group col-md-12" id="faqid" style="display: none;">
            <label>{{__('Select title')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="faqid" id="compareSelector" v-model="locale">
              <option value="" label="Please select title" selected></option>
              @foreach ($faqs as $key => $item)
              <option value="{{ $item->faqid }}" label="{{ \Soundasleep\Html2Text::convert($item->title, ['ignore_errors' => true, 'drop_links' => true]) }}"></option>
              @endforeach
            </select>
          </div>
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
            <label>{{__('Title')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="title" name="title">
                </textarea>
              </div>
            </div>
          </div>
          
          <div class="form-group col-md-12">
            <label>{{__('Detail')}}<code>*</code> </label>
            <div class="col-md-12 mb-4">
              <div class="mx-auto col-md-12">
                <textarea id="embed" name="embed">
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
    selector: '#title',
    plugins: ['table', 'code'],
    width: "100%",
    height: 200,
  });
  tinymce.init({
    selector: '#embed',
    plugins: ['table', 'code'],
    width: "100%",
    height: 500,
  });
</script>
<script>
  function cancel() {
    location.href = "{{ route('faqs.index') }}";
    return false;
  }
  function handleChange() {
    var ele = document.getElementById('checkbox');
    console.log(ele.checked);
    if (ele.checked) {
      $('#faqid').show();
    } else {
      $('#faqid').hide();
    }
  }
</script>
@stop