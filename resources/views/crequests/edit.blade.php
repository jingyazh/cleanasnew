@inject('Crequest', 'App\Crequest')
@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Modify Request')}}</h1>
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
          <form method="POST" action="{{ route('crequests.update', $crequest->id) }}">
            {{ method_field('PUT') }}
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Modify Request')}} </h3>
              <div class="card-tools">
                
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label>{{__('Customer Name')}} <code>*</code> </label>
                <div style="display: flex; flex-direction: row">
                  <input type="text" disabled class="form-control col-sm-6" required value="{{ $crequest->client->name }}" />
                </div>
              </div>
              <div class="form-group">
                <label>{{__('Message')}} <code> </code></label>
                <textarea name="ztext" class="form-control col-sm-6" >{{ old('ztext', $crequest->ztext) }}</textarea>
              </div>
              
              <div class="form-group">
                <label>{{__('Master Answer')}} <code> </code></label>
                @if ($user->roleno == $User::ROLE_MASTER)
                  <textarea name="masteranswer" class="form-control col-sm-6" >{{ old('masteranswer', $crequest->masteranswer) }}</textarea>
                @else
                  <textarea disabled class="form-control col-sm-6" >{{ $crequest->masteranswer }}</textarea>
                @endif
              </div>    
              
              
              <div class="form-group">
                <label>{{__('Status')}} <code>*</code></label>
                <br/>
                @if (Auth::user()->roleno == $User::ROLE_MASTER)
                  <select class="form-control col-sm-6" name="status" >
                    @foreach ($Crequest::STATUSES as $k=>$v) 
                      <option value="{{ $k }}" {{ $k==old('status', $crequest->status) ? 'selected':'' }}>{{ __($v) }} </option> 
                    @endforeach
                  </select>
                @else
                 <input type="text" disabled class="form-control col-sm-6" value="{{ __($Crequest::STATUSES[$crequest->status]) }}" />
                @endif   
              </div>  
              
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Save')}}</button>  
              @if (Auth::user()->roleno == $User::ROLE_MASTER)
                <button type="button" id="btnDelete" class="btn btn-info">{{__('Delete')}}</button>
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


$("#btnDelete").click(function(){
  if(confirm("{{__('Would you delete this Request ?')}}") == false)    
    return false;
  $.ajax({
    url: "{{ route('crequests.destroy', $crequest->id) }}",
    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    type: 'delete', // replaced from put
    dataType: "JSON",
    data: {
      "_token": "{{ csrf_token() }}",
      "id": {{ $crequest->id }} // method and token not needed in data
    },
    success: function (response)
    {
      location.href = "{{ route('crequests.index') }}";
      console.log(response); // see the reponse sent
    },
    error: function(xhr) {
      console.log(xhr.responseText); 
    }
  });
}); 
</script>

@stop

