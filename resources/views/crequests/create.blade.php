@inject('Crequest', 'App\Crequest')
@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Add Request')}} </h1>
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
          <form method="POST" action="{{ route('crequests.store') }}">
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Add Request')}} </h3>
              <div class="card-tools">
                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label for="clientno">{{__('Select Customer')}} <code>*</code></label>
                <select  name="clientno" id="clientno" required class="form-control select2" style="width: 100%;">
                    <option value="" selected></option>
                  @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id==old('clientno', $cid) ? 'selected':'' }} >{{ $client->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>{{__('Message')}} <code> </code></label>
                <textarea type="text" name="ztext" class="form-control col-sm-6" >{{ old('ztext') }}</textarea>
              </div> 
              
              <div class="form-group">
                <label>{{__('Status')}} <code>*</code></label>
                <br/>
                @if (Auth::user()->roleno == $User::ROLE_MASTER)
                  <select class="form-control col-sm-6" name="status" >
                    @foreach ($Crequest::STATUSES as $k=>$v) 
                      <option value="{{ $k }}" {{ $k==old('status') ? 'selected':'' }}>{{ __($v) }} </option> 
                    @endforeach
                  </select>
                @else
                <input type="text" disabled class="form-control col-sm-6" value="{{ __($Crequest::STATUSES[0]) }}" />
                @endif  
              </div>  
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Send')}}</button>  
            </div> 
                        
          </div>
          </form>
          <!-- /.card -->
        </div>
      </div>

      <!-- /.row -->



@stop
@section('js')
<script>
  $(function () {
    $('.select2').select2();  
  });

</script>
@stop