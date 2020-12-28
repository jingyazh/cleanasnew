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

<!-- Small boxes (Stat box) -->
<div class="row" style="justify-content: space-around">
    <div class="container">
        <section id="auth-button"></section>
        <section id="view-selector"></section>
        <div class="row">
            <div class="col-md-6">
                <section id="timeline1"></section>
            </div>
            <div class="col-md-6">
                <section id="timeline2"></section>
            </div>
            <div class="col-md-6">
                <section id="timeline3"></section>
            </div>
            <div class="col-md-6">
                <section id="timeline4"></section>
            </div>
        </div>
    </div>
    <!-- <div class="col-lg-3 col-3">
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
    </div> -->
    <!-- ./col -->
</div>
<!-- /.row -->

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    (function(w, d, s, g, js, fjs) {
        g = w.gapi || (w.gapi = {});
        g.analytics = {
            q: [],
            ready: function(cb) {
                this.q.push(cb)
            }
        };
        js = d.createElement(s);
        fjs = d.getElementsByTagName(s)[0];
        js.src = 'https://apis.google.com/js/platform.js';
        fjs.parentNode.insertBefore(js, fjs);
        js.onload = function() {
            g.load('analytics')
        };
    }(window, document, 'script'));
</script>
<script>
    gapi.analytics.ready(function() {

        // Step 3: Authorize the user.

        var CLIENT_ID = '644602619186-r7oj7p0rtgie7v9qv3qncud9l39p650t.apps.googleusercontent.com';

        gapi.analytics.auth.authorize({
            container: 'auth-button',
            clientid: CLIENT_ID,
        });

        // Step 4: Create the view selector.

        var viewSelector = new gapi.analytics.ViewSelector({
            container: 'view-selector'
        });

        // Step 5: Create the timeline chart.

        var timeline1 = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:sessions',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'LINE',
                container: 'timeline1'
            }
        });

        var timeline2 = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:users',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'COLUMN',
                container: 'timeline2'
            }
        });

        var timeline3 = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:bounceRate',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'LINE',
                container: 'timeline3'
            }
        });

        var timeline4 = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:sessionDuration',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'COLUMN',
                container: 'timeline4'
            }
        });

        // Step 6: Hook up the components to work together.

        gapi.analytics.auth.on('success', function(response) {
            viewSelector.execute();
        });

        viewSelector.on('change', function(ids) {
            var newIds = {
                query: {
                    ids: ids
                }
            }
            timeline1.set(newIds).execute();
            timeline2.set(newIds).execute();
            timeline3.set(newIds).execute();
            timeline4.set(newIds).execute();
        });
    });
</script>
@stop