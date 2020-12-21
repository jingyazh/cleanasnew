@inject('Client', 'App\Client')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Modify Customer')}}</h1>
@stop

@section('content')


      <!-- Alert Row  -->
      @include('layouts.alert')
      <!-- /.row -->


      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('clients.update', $client->id) }}">
            {{ method_field('PUT') }}
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Modify Customer')}} </h3>
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
              <div class="form-group">
                <label>{{__('Name')}} <code>*</code> </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" name="fname"  class="form-control col-sm-3" required value="{{ old('fname', $client->fname) }}" placeholder="{{__('First Name')}}" />
                  <span style="width: 20px" > </span>
                  <input type="text" name="lname"  class="form-control col-sm-3" required value="{{ old('lname', $client->lname) }}" placeholder="{{__('Last Name')}}" />
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Commercial Name')}} <code>*</code> </label>
                <input type="text" name="comname"  class="form-control col-sm-3" value="{{ old('comname', $client->comname) }}"  />
              </div>
              <div class="form-group">
                <label>{{__('Address')}} <code>*</code> </label>
                <input type="text" name="addr1"  class="form-control" required value="{{ old('addr1', $client->addr1) }}" placeholder="{{__('Street Address')}}" />
                <br/>
                <input type="text" name="addr2"  class="form-control" value="{{ old('addr2', $client->addr2) }}" placeholder="{{__('Apt, suite')}}..." />
                <br/>
                <div style="display: flex; flex-direction: row">
                  <input type="text" name="city"  class="form-control col-sm-3" required value="{{ old('city', $client->city) }}" placeholder="{{__('City')}}" />
                  <span style="width: 20px" > </span>
                  <select class="form-control col-sm-3" name="province">
                    @foreach ($Client::PROVINCES as $province) 
                      <option value="{{ $province }}" {{ $province==old('province', $client->province)  ? 'selected':'' }}>{{ $province }} </option> 
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Code Postal')}} <code>*</code> </label>
                <input type="text" name="zipcode"  class="form-control col-sm-3" required value="{{ old('zipcode', $client->zipcode) }}" placeholder="X1X1X1" />
              </div>
              <div class="form-group">
                <label>{{__('Phone')}} <code>*</code> </label>
                <input type="text" name="phone"  class="form-control col-sm-3" required value="{{ old('phone', $client->phone) }}" placeholder="ex: XXX-XXX-XXXX" />
              </div>
            
              <div class="form-group">
                <label>{{__('Email')}} <code> </code> </label>
                <input type="email" name="email" required class="form-control col-sm-3" value="{{ old('email', $client->email) }}" placeholder="abc@gmail.com" />
              </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Apply')}}</button>  
              @if (Auth::user()->roleno == $User::ROLE_MASTER)
                <button type="button" id="btnDeleteClient" class="btn btn-info">{{__('Delete')}}</button>            
              @endif
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


$("#btnDeleteClient").click(function(){
  if(confirm("{{__('Would you delete this Client ?')}}") == false)    
    return false;
  $.ajax({
    url: "{{ route('clients.destroy', $client->id) }}",
    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    type: 'delete', // replaced from put
    dataType: "JSON",
    data: {
      "_token": "{{ csrf_token() }}",
      "id": {{ $client->id }} // method and token not needed in data
    },
    success: function (response)
    {
      location.href = "{{ route('clients.index') }}";
      console.log(response); // see the reponse sent
    },
    error: function(xhr) {
      console.log(xhr.responseText); 
    }
  });
}); 
</script>
@stop