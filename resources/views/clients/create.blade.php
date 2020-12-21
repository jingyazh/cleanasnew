@inject('Client', 'App\Client')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Add Customer')}}</h1>
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
          <form method="POST" action="{{ route('clients.store') }}" id="frmCreateClient">
            @csrf
            <input type="hidden" id="isautoplaceorder" name="isautoplaceorder" value="0" />
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Add Customer')}} </h3>
              <div class="card-tools">
                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label>{{__('Name')}} <code>*</code> </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" name="fname"  class="form-control col-sm-3" required value="" placeholder="{{__('First Name')}}" />
                  <span style="width: 20px" > </span>
                  <input type="text" name="lname"  class="form-control col-sm-3" required value="" placeholder="{{__('Last Name')}}" />
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Commercial Name')}} <code>*</code> </label>
                <input type="text" name="comname"  class="form-control col-sm-3" value=""  />
              </div>                  
              <div class="form-group">
                <label>{{__('Address')}} <code>*</code> </label>
                <input type="text" name="addr1"  class="form-control" required value="" placeholder="{{__('Street Address')}}" />
                <br/>
                <input type="text" name="addr2"  class="form-control" value="" placeholder="{{__('App, suite')}}..." />
                <br/>
                <div style="display: flex; flex-direction: row">
                  <input type="text" name="city"  class="form-control col-sm-3" required value="" placeholder="{{__('City')}}" />
                  <span style="width: 20px" > </span>
                  <select class="form-control col-sm-3" name="province">
                    @foreach ($Client::PROVINCES as $province) 
                      <option value="{{ $province }}" {{ $province==old('province') ? 'selected':'' }}>{{ $province }} </option> 
                    @endforeach
                  </select>
                </div>
              </div>
          
              <div class="form-group">
                <label>{{__('Code Postal')}} <code>*</code> </label>
                <input type="text" name="zipcode"  class="form-control col-sm-3" required value="" placeholder="X1X1X1" />
              </div>
              <div class="form-group">
                <label>{{__('Phone')}} <code>*</code> </label>
                <input type="text" name="phone"  class="form-control col-sm-3" required value="" placeholder="ex: XXX-XXX-XXXX" />
              </div>
              <div class="form-group">
                <label>{{__('Email')}} <code> </code> </label>
                <input type="email" name="email" required class="form-control col-sm-3" value="" placeholder="abc@gmail.com" />
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
<script>
  function autoplaceorder() {
    $("#isautoplaceorder").val(1);
    $("#frmCreateClient").submit();
  }
</script>
@stop