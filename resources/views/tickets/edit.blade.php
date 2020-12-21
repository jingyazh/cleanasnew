@inject('Ticket', 'App\Ticket')
@inject('User', 'App\User')
@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">{{__ ('Order')}} </h1>
@stop

@section('content')

      <!-- Main Tables -->
      <div class="row" id="app">
        <div class="col-12">
        <form method="POST" action="{{ route('tickets.update', $ticket->id) }}">
            {{ method_field('PUT') }}
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{__ ('Modify Order')}} </h3>
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
                <label for="clientno">{{__ ('Select Customer')}} <code>*</code></label>
                <select  name="clientno" id="clientno" class="form-control select2" style="width: 100%;">
                  @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id==old('clientno', $ticket->clientno) ? 'selected':'' }} >{{ $client->fname." ".$client->lname }}</option>
                  @endforeach
                </select>
              </div>
              @if ($user->roleno == $User::ROLE_MASTER)
                <div class="form-group">
                  <label>{{__('Status')}} <code>*</code></label>
                  <br/>
                  <select class="form-control col-sm-6" name="status" >
                    @foreach ($Ticket::STATUSES as $k=>$v) 
                      <option value="{{ $k }}" {{ $k==old('status', $ticket->status) ? 'selected':'' }}>{{ __($v) }} </option> 
                    @endforeach
                  </select>
                </div>
              @else
                <div class="form-group">
                  <label>Status : {{ $Ticket::STATUSES[$ticket->status] }} </label>
                </div>
              @endif                     
              <div class="form-group">
                <label>{{__('Service')}} <code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="serviceno" v-model="serviceno">
                  @foreach ($Ticket::SERVICES as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('serviceno', $ticket->serviceno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
              </div>
              <div class="form-group" v-if="serviceno == 1">
                <label>{{__('Old address')}} <code>*</code></label>
                <br/>
                <input type="text" name="oldaddr"  class="form-control col-sm-6" required value="{{ old('oldaddr', $ticket->oldaddr) }}" placeholder="{{__('Old address')}}" />
              </div>
              <div class="form-group" v-if="serviceno == 1">
                <label>{{__('New address')}} <code>*</code></label>
                <br/>
                <input type="text" name="newaddr"  class="form-control col-sm-6" required value="{{ old('newaddr', $ticket->newaddr) }}" placeholder="{{__('New address')}}" />
              </div>                             
              <div class="form-group" v-if="serviceno == 2">
                <label>{{__ ('Transfer Choice')}} <code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="transferno" v-model="transferno">
                  @foreach ($Ticket::TRANSFERS as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('transferno', $ticket->transferno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
                <br/>
                <input v-if="transferno == 4" type="text" name="transother"  class="form-control col-sm-6" required value="{{ old('transother', $ticket->transother) }}" placeholder="{{__('Name Foulder')}}" />
              </div>
              <!-- <div class="form-group" v-if="serviceno==2 && transferno == 0"> -->
              <div class="form-group">
                <label>{{__('Choice Modem')}} <code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="modemno">
                  @foreach ($Ticket::MODEMS as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('modemno', $ticket->modemno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
                <br/> <label>{{__ ('Serial No')}} <code>*</code></label> <br/>
                <input type="text" name="sn" value="{{ old('sn', $ticket->sn) }}" class="form-control  col-sm-6" required placeholder="{{__('Serial No')}}">
                <br/> <label>{{__ ('Mac Address')}} <code>*</code></label> <br/>
                <input type="text" name="macaddr" value="{{ old('macaddr', $ticket->macaddr) }}" class="form-control  col-sm-6" required placeholder="{{__('Mac Address')}}">
        
              </div>   
              <div class="form-group" v-if="">
                <label>{{__('Installed on')}}<code> </code></label>
                <br/>
                <input type="text" name="installon" value="{{ old('installon', $ticket->installon) }}" class="form-control  col-sm-6" {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? '' : 'disabled'}} placeholder="{{__ ('Installed on')}}"> 
              </div>           
              <div class="form-group">
                <label>{{__ ('Customer VL')}} <code>*</code></label>
                <br/> 
                <input type="text" name="clientvl" value="{{ old('clientvl', $ticket->clientvl) }}" class="form-control  col-sm-6" {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? '' : 'disabled'}} placeholder="{{__('Customer VL')}}"> 
              </div>           
              <div class="form-group">
                <label>{{__('Request Service')}} <code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="-">
                  @foreach ($Ticket::REQUESTS as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('requestno', $ticket->requestno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>{{__('Plan Internet Speed')}}<code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="speedno">
                  @foreach ($Ticket::SPEEDS as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('speedno', $ticket->speedno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>{{__('Plan Phone')}} <code>*</code></label>
                <br/>
                <select class="form-control col-sm-6" name="planphoneno">
                  @foreach ($Ticket::PLANPHONES as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('planphoneno', $ticket->planphoneno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach
                </select>
                <br/>
                <label>{{__('Keep Number')}} <code>*</code></label>
                <select class="form-control col-sm-6" name="iskeepno" v-model="iskeepno">
                  @foreach ($Ticket::ISKEEPNOS as $k=>$v) 
                    <option value="{{ $k }}" {{ $k==old('iskeepno', $ticket->iskeepno) ? 'selected':'' }}>{{ __($v) }} </option> 
                  @endforeach      
                </select>
                <div  v-if="iskeepno == 1" >
                  <!-- <input type="text" name="keep_fname"  class="form-control col-sm-6" required value="{{ old('keep_fname', $ticket->keep_fname) }}" placeholder="{{__('First Name')}}" /> -->
                  <!-- <br/><input type="text" name="keep_lname"  class="form-control col-sm-6" required value="{{ old('keep_lname'), $ticket->keep_lname }}" placeholder="{{__('Last Name')}}" /> -->
                  <br/><input type="text" name="keep_address"  class="form-control col-sm-6" required value="{{ old('keep_address', $ticket->keep_address) }}" placeholder="{{__('Holder name')}}" />
                  <!-- <br/><input type="text" name="keep_oldprovider"  class="form-control col-sm-6" required value="{{ old('keep_oldprovider', $ticket->keep_oldprovider) }}" placeholder="Old Provider" /> -->
                  <br/><input type="text" name="keep_phoneno"  class="form-control col-sm-6" required value="{{ old('keep_phoneno', $ticket->keep_phoneno) }}" placeholder="{{__('Phone Number')}}" />
                </div>  
              </div>

              <div class="form-group">
                <label>{{__('Install Date')}} <code>*</code></label>
                <input type="date" name="installdate" class="form-control  col-sm-6" {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? 'required' : 'disabled'}} value="{{ old('installdate', $ticket->installdate) }}">
              </div>
              <div class="form-group">
                <label>{{__('Availability')}} <code>*</code></label>
                @foreach ($Ticket::AVAILTIMES as $k=>$v)
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" name="availtimes[]" class="form-check-input" value="{{ $k }}" {{ in_array( $k, old('availtimes', $ticket->availtimes)) ? 'checked':'' }} >
                      {{ __($v) }}
                    </label>
                  </div>                
                @endforeach  
              </div>

              <div class="form-group">
                <label>{{__('Username Sip')}} <code>*</code></label>
                <input type="text" name="usernamesip" class="form-control  col-sm-6"  
                {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? '' : 'disabled'}}
                
                value="{{ old('usernamesip', $ticket->usernamesip) }}">
              </div>
              <div class="form-group">
                <label>{{__('Password')}} <code>*</code></label>
                <input type="text" name="passwd" class="form-control  col-sm-6" {{ (Auth::user()->roleno == $User::ROLE_MASTER) ? '' : 'disabled'}} value="{{ old('passwd', $ticket->passwd) }}">
              </div>
              <div class="form-group">
                <label>{{__('Comment')}} <code>*</code></label>
                <textarea name="comment" class="form-control  col-sm-6" >{{ old('comment', $ticket->comment) }}</textarea>
              </div>                

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">{{__ ('Apply')}}</button>  
              @if (Auth::user()->roleno == $User::ROLE_MASTER)
                <button type="button" id="btnDelete" class="btn btn-info">{{__ ('Delete')}}</button>  
              @endif
            </div> 
                        
          </div>
          </form>
          <!-- /.card -->
        </div>
      </div>      
     
   
@stop
 
@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
  $(function () {
    $('.select2').select2();  
  });

  var app = new Vue({
    el: '#app',
    data: {
      serviceno: {{$ticket->serviceno}},
      transferno: {{$ticket->transferno}},
      iskeepno: {{$ticket->iskeepno}},
    },
    mounted: function () {
      //... move scroll to bottom
      var container = this.$el.querySelector(".direct-chat-messages");
      container.scrollTop = container.scrollHeight;

    },
    methods: {
    },
  });


  $("#btnDelete").click(function(){
    if(confirm("{{__('Would you delete this Order ?')}}") == false)    
      return false;
    $.ajax({
      url: "{{ route('tickets.destroy', $ticket->id) }}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
      type: 'delete', // replaced from put
      dataType: "JSON",
      data: {
        "_token": "{{ csrf_token() }}",
        "id": {{ $ticket->id }} // method and token not needed in data
      },
      success: function (response)
      {
        location.href = "{{ route('tickets.index') }}";
        console.log(response); // see the reponse sent
      },
      error: function(xhr) {
        console.log(xhr.responseText); 
      }
    });
  }); 
</script>
@stop