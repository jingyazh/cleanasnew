
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:{{$backcolor}} !important">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="/img/logo{{Auth::user()->roleno}}.png"  class="brand-image img-circle elevation-3"    style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size:18px">
        {{ $title }}  Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="/img/user{{Auth::user()->roleno}}.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="{!! route('myprofile') !!}" class="d-block"> {{ Auth::user()->name }} </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <li class="nav-item has-treeview {!! Request::segment(1) == 'dashboard' ? 'menu-open':'' !!} ">
                  <a href="{!! route('home') !!}" class="nav-link">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>Dashboard</p>
                  </a>                    
              </li>
              @if (Auth::user()->roleno < $User::ROLE_REGULAR)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'users' ? 'menu-open':'' !!} ">
                <a href="{!! route('users.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>Resellers</p>
                </a>                    
              </li>
              @endif

              <li class="nav-item has-treeview {!! Request::segment(1) == 'clients' ? 'menu-open':'' !!} ">
                <a href="{!! route('clients.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-user-secret"></i>
                  <p>Clients</p>
                </a>                    
              </li>

              @if (Auth::user()->roleno == $User::ROLE_SUPER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'subclients' ? 'menu-open':'' !!} ">
                <a href="{!! route('clients.subclients') !!}" class="nav-link">
                  <i class="nav-icon fa  fa-user"></i>
                  <p>Sub Clients</p>
                </a>                    
              </li>
              @endif
              {{-- @if (Auth::user()->roleno > $User::ROLE_SUPER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'unlink' ? 'menu-open':'' !!} ">
                <a href="{!! route('unlink') !!}" class="nav-link">
                  <i class="nav-icon fa fa-link"></i>
                  <p>Unlink</p>
                </a>                    
              </li>
              @endif 
              @if (Auth::user()->roleno != $User::ROLE_MASTER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'boxswitch' ? 'menu-open':'' !!} ">
                <a href="{!! route('boxswitch') !!}" class="nav-link">
                  <i class="nav-icon fa fa-tv"></i>
                  <p>Switch Box</p>
                </a>                    
              </li>
              @endif
              @if (Auth::user()->roleno != $User::ROLE_MASTER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'expiredclients' ? 'menu-open':'' !!} ">
                <a href="{!! route('clients.expiredclients') !!}" class="nav-link">
                  <i class="nav-icon fa fa-user-times"></i>
                  <p>Expired Clients</p>
                </a>                    
              </li>
              @endif
              @if (Auth::user()->roleno > $User::ROLE_SUPER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'test' ? 'menu-open':'' !!} ">
                <a href="{!! route('test') !!}" class="nav-link">
                  <i class="nav-icon fa fa-file-archive-o"></i>
                  <p>Test</p>
                </a>                    
              </li>
              @endif
              @if (Auth::user()->roleno > $User::ROLE_SUPER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'logs' ? 'menu-open':'' !!} ">
                <a href="{!! route('logs') !!}" class="nav-link">
                  <i class="nav-icon fa fa-files-o"></i>
                  <p>Logs</p>
                </a>                    
              </li>
              @endif   --}}
              
              <li class="nav-item has-treeview {!! Request::url() == route('statistics.index') ? 'menu-open':'' !!} ">
                <a href="{!! route('statistics.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-line-chart"></i>
                  <p>Statistics</p>
                </a>                    
              </li>  
              

              @if (Auth::user()->roleno == $User::ROLE_MASTER)
              <li class="nav-item has-treeview {!! Request::segment(1) == 'messages' ? 'menu-open':'' !!} ">
                <a href="{!! route('messages.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-newspaper-o"></i>
                  <p>Message</p>
                </a>                    
              </li>
              @endif      
              <li class="nav-item has-treeview {!! Request::url() == route('codelogs.index') ? 'menu-open':'' !!} ">
                <a href="{!! route('codelogs.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-newspaper-o"></i>
                  <p>Logs</p>
                </a>                    
              </li>           
              <li class="nav-item has-treeview {!! Request::url() == route('tickets.create') ? 'menu-open':'' !!} ">
                <a href="{!! route('tickets.create') !!}" class="nav-link">
                  <i class="nav-icon fa fa-inbox"></i>
                  <p>Compose Ticket</p>
                </a>                    
              </li>                          
              <li class="nav-item has-treeview {!! Request::url() == route('tickets.index') ? 'menu-open':'' !!} ">
                <a href="{!! route('tickets.index') !!}" class="nav-link">
                  <i class="nav-icon fa fa-inbox"></i>
                  <p>Ticket Inbox
                    @if (Auth::user()->newinboxcount() > 0)
                      ({{ Auth::user()->newinboxcount() }})
                    @endif
                  </p>
                </a>                    
              </li>                            
              <li class="nav-item has-treeview {!! Request::url() == route('tickets.outbox') ? 'menu-open':'' !!} ">
                <a href="{!! route('tickets.outbox') !!}" class="nav-link">
                  <i class="nav-icon fa fa-inbox"></i>
                  <p>Ticket Outbox</p>
                </a>                    
              </li>                  
              
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>