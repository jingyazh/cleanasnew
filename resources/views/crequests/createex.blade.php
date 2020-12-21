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
            <input type="hidden" name="ticketno" value="{{ $ticket->id }}"/>
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Add Request')}} </h3>
              <div class="card-tools">
                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label>{{__('Customer Name')}} <code>*</code> </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ $ticket->client->name }}" />
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Message')}} <code> </code></label>
                <textarea type="text" name="ztext" class="form-control col-sm-6" >{{ old('ztext') }}</textarea>
              </div> 
              @if (Auth::user()->roleno == $User::ROLE_MASTER)
                <div class="form-group">
                  <label>{{__('Status')}} <code>*</code></label>
                  <br/>
                  
                  <select class="form-control col-sm-6" name="status" >
                    @foreach ($Crequest::STATUSES as $k=>$v) 
                      <option value="{{ $k }}" {{ $k==old('status') ? 'selected':'' }}>{{ __($v) }} </option> 
                    @endforeach
                  </select>
                  
                </div>  
              @endif   
              <div class="form-group">
                <label>{{__('Service')}} </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ __($ticket->servicestr) }}" />
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Plan Speed')}} </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ $ticket->speedstr }}" />
                </div>
              </div>

              <div class="form-group">
                <label>{{__('Plan Phone')}} </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ __($ticket->planphonestr) }}" />
                </div>
              </div>   
              <div class="form-group">
                <label>{{__('VL')}} </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ $ticket->clientvl }}" />
                </div>
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
