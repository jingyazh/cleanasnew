@extends('adminlte::page')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Dashboard') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @foreach (Config::get('app.locales') as $lang => $langstr)
                    @if ($lang == 'en' || $lang == 'fr-ad')
                        @if ($lang != App::getLocale())
                            <li class="breadcrumb-item"><a href="{!! route('changelocale', $lang) !!}">{{$langstr}}</a></li>
                        @else
                            <li class="breadcrumb-item active">{{$langstr}}</li>
                        @endif
                    @endif
                @endforeach
            </ol>
        </div><!-- /.col -->
    </div>
@stop
@inject('User', 'App\User')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <input class="form-control" type="search" style="text-align:center" placeholder="{{__('Search')}}" aria-label="Search">
        </div>
    </div>
</div>
<!-- Small boxes (Stat box) -->
<div class="row" style="justify-content: space-around">
    <div class="col-lg-3 col-3">
        <!-- small box -->
        <a href="#">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{--$customeractive_count--}}</h3>
                    <p>{{__('Users')}}</p>
                </div>              
                <div class="icon">
                    <i class="fas fa-fw fa-users"></i>
                </div>  
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-3">
        <!-- small box -->
        <a href="#">
            <div class="small-box bg-success">           
                <div class="inner">
                    <h3>{{--$orderinprogress_count--}}</h3>
                    <p>{{__('Order in Progress')}}</p>
                </div>              
                <div class="icon">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                </div> 
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-3">
        <!-- small box -->
        <a href="#">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{--$requestinprogress_count--}}</h3>
                    <p>{{__('Request in Progress')}}</p>
                </div>              
                <div class="icon">
                    <i class="fas fa-fw fa-edit"></i>
                </div>  
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-3">
        <!-- small box -->
        <a href="#">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{--$customercancel_count--}}</h3>
                    <p>{{__('Customer Cancelled')}}</p>
                </div>              
                <div class="icon">
                    <i class="fas fa-fw fa-user"></i>
                </div>  
            </div>
        </a>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
        {{__('Master Message')}}
        </h3>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@stop
 
@section('js')
<script>

 


</script>
@stop