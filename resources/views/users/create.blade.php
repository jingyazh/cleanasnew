@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Add Reseller')}} </h1>
@stop
@section('content')
      <!-- Alert Row  -->
      @include('layouts.alert')

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('users.store') }}">
          @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('New Reseller')}}</h3>
              <div class="card-tools">
                
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

              <div class="row">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label>{{__('Name')}} <code>*</code> </label>
                    <div style="display: flex; flex-direction: row">
                      <input type="text" name="fname"  class="form-control col-sm-4" required value="" placeholder="{{__('First Name')}}" />
                      <span style="width: 20px" > </span>
                      <input type="text" name="lname"  class="form-control col-sm-4" required value="" placeholder="{{__('Last Name')}}" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>{{__('User')}} <code>*</code> </label>
                    <input type="text" name="name"  class="form-control" required value="{{ old('name') }}">
                  </div>
                  <div class="form-group">
                    <label>{{__('Password')}} <code>*</code> </label>
                    <input type="text" name="password" class="form-control" value="{{ old('password', '1234567890') }}"  required minlength="10">
                  </div>


               
                  <div class="form-group">
                    <label>{{__('Email')}}<code>*</code></label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                  </div>                  



                </div>        
              </div>
            
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Add')}}</button>              
            </div> 
                        
          </div>
          <!-- /.card -->
          </form>
        </div>
      </div>
@stop
 
