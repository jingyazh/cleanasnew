@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">{{__('Add Metadata')}}</h1>
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
    <form method="POST" action="{{ route('metadata.store') }}" id="frmCreateClient" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">{{__('Add Metadata')}} </h3>
          <div class="card-tools">

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <!-- @if(count($metadata) > 0)
          <div class="form-group col-md-12">
            <label>{{__('Update New Language Version')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row; width:100px;">
              <input type="checkbox" id="checkbox" onchange="handleChange()" class="form-control col-sm-12" />
            </div>
          </div>
          @endif
          <div class="form-group col-md-12" id="page_name" style="display: none;">
            <label>{{__('Select title')}}<code>*</code> </label>
            <select class="form-control col-sm-12" name="page_name" id="compareSelector" v-model="locale">
              <option value="" label="Please select page name" selected></option>
              @foreach ($metadata as $key => $item)
              <option value="{{ $item->page_name }}" label="{{ $item->page_name }}"></option>
              @endforeach
            </select>
          </div> -->
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
            <label>{{__('Meta Name')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="name" class="form-control col-sm-12" placeholder="{{__('Meta Name')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Content')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="content" class="form-control col-sm-12" placeholder="{{__('Meta Content')}}" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>{{__('Meta Property')}} <code>*</code> </label>
            <div style="display: flex; flex-direction: row">
              <input type="text" name="property" class="form-control col-sm-12" placeholder="{{__('Meta Property')}}" />
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">{{__('Save')}}</button>
          <button class="btn btn-secondary" onclick="cancel()">{{__('Cancel')}}</button>
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
    location.href = "{{ route('metadata.index') }}";
  }

  function handleChange() {
    var ele = document.getElementById('checkbox');
    console.log(ele.checked);
    if (ele.checked) {
      $('#page_name').show();
    } else {
      $('#page_name').hide();
    }
  }
</script>
@stop