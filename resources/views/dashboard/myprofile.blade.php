@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Profile')}}</h1>
@stop
@inject('User', 'App\User')
@section('content')

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
        @if (Auth::user()->roleno == $User::ROLE_MASTER)
          <form method="POST"  action="{{ route('users.masterupdate') }}">
            {{ method_field('PUT') }}
            @csrf
        @endif
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{__('My Profile')}} </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>{{__('Name')}} </label>
                    <input type="text" class="form-control" disabled value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                      <label>{{__('Name')}} ({{__('displayed to your customers')}}) </label>
                      <input type="text" class="form-control" disabled value="{{Auth::user()->username}}">
                    </div> 
                    <div class="form-group">
                      <label>{{__('Email')}}</label>
                      <input type="email" class="form-control" disabled value="{{Auth::user()->email}}">
                    </div> 

                    @if (Auth::user()->roleno == $User::ROLE_MASTER)
                    <div class="form-group">
                      <label>{{__('Password')}} <code>*</code> </label>
                      <input type="text" name="password" class="form-control" value="{{ old('password', '') }}" placeholder="{{__('Keep empty to use old password')}}"  >
                    </div>
                    @endif
                  </div>        
                </div>

              
                
              </div>
              <!-- /.card-body -->
              @if (Auth::user()->roleno == $User::ROLE_MASTER)
              <div class="card-footer">
                <button type="submit" class="btn btn-info">{{__('Apply')}}</button>   
              </div> 
              @endif

                          
            </div>
            <!-- /.card -->
        @if (Auth::user()->roleno == $User::ROLE_MASTER)
          </form>
        @endif
        </div>
      </div>

      <!-- /.row -->
@stop
