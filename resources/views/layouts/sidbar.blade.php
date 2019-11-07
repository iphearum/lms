@guest
@else
@role('admin|owner')
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-gray" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/theme/profile.jpg')}}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </div>
            </div>
            </div>
            <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                @role('admin')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                        <i class="ni ni-shop text-primary"></i>
                        <span class="nav-link-text">Dashboards</span>
                    </a>
                    <div class="collapse" id="navbar-dashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/book" class="nav-link">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                @else
                @role('owner')
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                    <i class="ni ni-ungroup text-orange"></i>
                    <span class="nav-link-text">Examples</span>
                    </a>
                    <div class="collapse" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="../pages/examples/pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/examples/login.html" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/examples/register.html" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/examples/lock.html" class="nav-link">Lock</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/examples/timeline.html" class="nav-link">Timeline</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/examples/profile.html" class="nav-link">Profile</a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                    <i class="ni ni-ui-04 text-info"></i>
                    <span class="nav-link-text">Components</span>
                    </a>
                    <div class="collapse" id="navbar-components">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="../pages/components/buttons.html" class="nav-link">Buttons</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/components/cards.html" class="nav-link">Cards</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/components/grid.html" class="nav-link">Grid</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/components/notifications.html" class="nav-link">Notifications</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/components/icons.html" class="nav-link">Icons</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/components/typography.html" class="nav-link">Typography</a>
                        </li>
                        <li class="nav-item">
                        <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                        <div class="collapse show" id="navbar-multilevel" style="">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#!" class="nav-link ">Third level menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link ">Just another link</a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link ">One last link</a>
                            </li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                    </div>
                </li>
                @endrole
                @endrole
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                    <i class="ni ni-single-copy-04 text-pink"></i>
                    <span class="nav-link-text">Forms</span>
                    </a>
                    <div class="collapse" id="navbar-forms">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="../pages/forms/elements.html" class="nav-link">Elements</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/forms/components.html" class="nav-link">Components</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/forms/validation.html" class="nav-link">Validation</a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                    <i class="ni ni-align-left-2 text-default"></i>
                    <span class="nav-link-text">Tables</span>
                    </a>
                    <div class="collapse" id="navbar-tables">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="../pages/tables/tables.html" class="nav-link">Tables</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/tables/sortable.html" class="nav-link">Sortable</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/tables/datatables.html" class="nav-link">Datatables</a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                    <i class="ni ni-map-big text-primary"></i>
                    <span class="nav-link-text">Maps</span>
                    </a>
                    <div class="collapse" id="navbar-maps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="../pages/maps/google.html" class="nav-link">Google</a>
                        </li>
                        <li class="nav-item">
                        <a href="../pages/maps/vector.html" class="nav-link">Vector</a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/widgets.html">
                    <i class="ni ni-archive-2 text-green"></i>
                    <span class="nav-link-text">Widgets</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/charts.html">
                    <i class="ni ni-chart-pie-35 text-info"></i>
                    <span class="nav-link-text">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/calendar.html">
                    <i class="ni ni-calendar-grid-58 text-red"></i>
                    <span class="nav-link-text">Calendar</span>
                    </a>
                </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="../docs/getting-started/overview.html" target="_blank">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-text">Getting started</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../docs/foundation/colors.html" target="_blank">
                    <i class="ni ni-palette"></i>
                    <span class="nav-link-text">Foundation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../docs/components/alerts.html" target="_blank">
                    <i class="ni ni-ui-04"></i>
                    <span class="nav-link-text">Components</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../docs/plugins/charts.html" target="_blank">
                    <i class="ni ni-chart-pie-35"></i>
                    <span class="nav-link-text">Plugins</span>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    @endrole
    @endguest
<!-- Main content -->

<div class="main-content" id="panel">
    <!-- Topnav -->
    <div>
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-gray border-bottom">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/" method="POST" role="search">
                {{ csrf_field() }}
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control mt--2 mb--2" placeholder="Search" type="text" name="q">
                    </div>
                </div>
                <button type="submit" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center ml-md-auto">
            @guest
            @else
            <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </div>
            </li>
            @endguest
            <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
                </a>
            </li>
            @guest
            <a class="dropdown-item" href="{{ route('login') }}">
                <i class="ni ni-circle-08" style="margin-bottom:-5px"></i>
                <span> Login</span>
            </a>
            <a class="dropdown-item" href="{{ route('register') }}">
                <i class="ni ni-user-run"></i>
                <span>Register</span>
            </a>
            @else
            @hasanyrole('writer|admin')
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                    <a href="#!" class="list-group-item list-group-item-action">
                    
                    @foreach (Auth::user()->notifications as $not)
                        <div class="row align-items-center">
                            <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="{{asset('img/theme/profile.jpg')}}" class="avatar rounded-circle">
                            </div>
                            <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="mb-0 text-sm">{{$not->data['user_name']}}</h4>
                                </div>
                                <div class="text-right text-muted">
                                <small>{{$not->created_at->diffForHumans()}}</small>
                                </div>
                            </div>
                            <p class="text-sm mb-0">{{$not->data['text']}}</p>
                            </div>
                        </div>
                    @endforeach

                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                        <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                        <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                        <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                        <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                        <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                        <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                    </a>
                </div>
                </div>
            </li>
            @endhasanyrole
            </ul>
            @endguest
            @guest
            @else
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('img/theme/profile.jpg')}}">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                    </div>
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="/users/profile" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="/users/setting" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="/users/activity" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="/users/support" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                @endguest
                @guest
                @else
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="ni ni-button-power"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    </div>