@inject('User', 'App\User')

<div class="row">
  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
            Master Message
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        @foreach ($master_messages as $message)
        <div class="alert alert-{{$message->type==0?'secondary':'danger'}}  alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fa fa-info"></i> {{$message->cont}}</h5>
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

