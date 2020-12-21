@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Edit Reseller')}} </h1>
@stop
@inject('User', 'App\User')
@section('content')


      <!-- Alert Row  -->
      @include('layouts.alert')

      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <form method="POST"  action="{{ route('users.update', $user->id) }}">
          {{ method_field('PUT') }}
          @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Modify Reseller Information')}}</h3>
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
                  <!-- select -->
                  <div class="form-group">
                    <label>{{__('Login')}} ID <code>*</code> </label>
                    <input type="text" name="name"  class="form-control" readonly value="{{ old('name', $user->name) }}" required>
                  </div>
                  <div class="form-group">
                    <label>{{__('New Password')}} <code></code> </label>
                    <input type="text" name="password" class="form-control" value="{{ old('password', '') }}" placeholder="{{__('Keep empty to use old password')}}"  >
                  </div>
                  <div class="form-group">
                    <label>{{__('Name')}} <code>*</code> </label>
                    <div style="display: flex; flex-direction: row">
                      <input type="text" name="fname"  class="form-control col-sm-4" required value="{{ old('fname', $user->fname) }}" placeholder="{{__('First Name')}}" />
                      <span style="width: 20px" > </span>
                      <input type="text" name="lname"  class="form-control col-sm-4" required value="{{ old('lname', $user->lname) }}" placeholder="{{__('Last Name')}}" />
                    </div>                    
                  </div>                  

                  <div class="form-group">
                    <label>{{__('Status')}}  </label>
                    <input type="text" value="{{ $user->is_disabled===1 ? 'Disabled':'Active' }}" class="form-control" disabled>
                  </div>  

                  <div class="form-group">
                    <label>{{__('Email')}}<code>*</code></label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email', $user->email) }}">
                  </div>     


                </div>        
              </div>
            
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Apply')}}</button>              
              <button type="button" id="btnDeleteUser" class="btn btn-info">{{__('Delete')}}</button>
            </div> 
                        
          </div>
          <!-- /.card -->
          </form>
        </div>
      </div>

      <!-- /.row -->
@stop
 
@section('js')
<script>
$("#btnDeleteUser").click(function(){
  if(confirm("{{__('Would you delete this reseller ?')}}") == false)    
    return false;
  $.ajax({
    url: "{{ route('users.destroy', $user->id) }}",
    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    type: 'delete', // replaced from put
    dataType: "JSON",
    data: {
      "_token": "{{ csrf_token() }}",
      "id": {{ $user->id }} // method and token not needed in data
    },
    success: function (response)
    {
      location.href = "{{ route('users.index') }}";
      console.log(response); // see the reponse sent
    },
    error: function(xhr) {
      console.log(xhr.responseText); 
    }
  });
});
</script>
@stop