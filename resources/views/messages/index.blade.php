@inject('User', 'App\User')

@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Messages')}} </h1>
@stop

@section('content')


      <!-- Main Tables -->
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('messages.store') }}">
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__('Post New Message')}} </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <div class="row">
                <div class="col-sm-12">
                  <!-- select -->
                  <div class="form-group">
                    <label>{{__('Message')}} <code>*</code></label>
                    <textarea name="cont" class="form-control" required style="height:150px"></textarea>
                  </div>       
                  <div class="form-group">
                    <label>{{__('Is Hot')}} <code>*</code></label>
                    <select class="form-control" name="type">
                      <option value="0">{{__('Normal')}}</option>
                      <option value="1">{{__('Hot')}}</option>
                    </select>
                  </div>                               
                </div>        
              </div>
            
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__('Post')}}</button>              
            </div> 
                        
          </div>
          </form>
          <!-- /.card -->
        </div>
      </div>      

      <!-- Message Row  -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
              {{__('Latest Messages')}}
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @foreach($messages as $message)              
              <div class="alert alert-{{$message->type==0?'secondary':'danger'}} alert-dismissible">
                <button type="button" class="close remove-message" 
                    onclick="return removeMessage({{$message->id}});" >×</button>
                <h5><i class="icon fa fa-info"></i> {{ $message->cont }}</h5>
              </div>              
              @endforeach
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->      
   
@stop
 
@section('js')

<script>

  function removeMessage(id){
    if(confirm("{{__('Would you remove the message ?')}}") == false){
      return false;    
    }
    $.ajax({
      url: "{{ route('messages.index') }}"+"/"+id,
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      type: 'delete',
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": id // method and token not needed in data
      },
      success: function (response)
      {
        location.reload();
        
        console.log(response); // see the reponse sent
      },
      error: function(xhr) {
        alert(xhr.responseText);
        console.log(xhr.responseText); 
      }
    });    


  }
</script>
@stop