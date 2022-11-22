<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @hasSection('title')
        <title>@yield('title') - Sensata Apps</title>
    @else
        <title>Sensata Apps</title>
    @endif
{{--    @routes--}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Style -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header class="d-print-none">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="{{url('/')}}">
{{--                <img src="#" width="130" height="50" alt=""/>--}}
                Sensata Apps
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                    aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
{{--                    @auth--}}
{{--                        @if(Auth::user()->ntype == 'Super' || Auth::user()->isAdmin())--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="#"--}}
{{--                                   role="button"--}}
{{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    Admin <span class="caret"></span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="#"><i--}}
{{--                                            class="fas fa-users"></i> Users</a>--}}
{{--                                    <a class="dropdown-item" href="{{ URL::to('apps/websys/config') }}"><i--}}
{{--                                            class="fas fa-cogs"></i> Config</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endif--}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Modules <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                                @foreach (Auth::user()->modules as $module)--}}
{{--                                    <a class="dropdown-item" href="{{ URL::to('apps/websys/'.$module->route) }}"><i--}}
{{--                                            class="fa {{$module->icon}}"></i> {{$module->name}}</a>--}}
{{--                                @endforeach--}}
                            </div>
                        </li>
{{--                    @endauth--}}
                </ul>

                <!-- Right Side Of Navbar -->
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#}">--}}
{{--                            <i class="fas fa-question-circle fa-2x align-middle"></i> {{ __('Help') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- Authentication Links -->
{{--                    @guest--}}
                        <li class="nav-item">
                            <a class="align-middle nav-link align-middle" href="#">
                                <i class="fas fa-2x fa-sign-in-alt align-middle"></i> #
                            </a>
                        </li>
{{--                    @else--}}
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                                @if ( strpos( Auth::user()->img, 'http')===false )--}}
{{--                                    <img id="imgUser" src="{{ asset('images/uploads/users/'.Auth::user()->img)}}"--}}
{{--                                         border="0"--}}
{{--                                         width="30px" class="rounded-circle">&nbsp;--}}
{{--                                @else--}}
{{--                                    <img id="imgfile" src="{{asset('images/uploads/users/default2.jpg')}}" border="0" width="30px"--}}
{{--                                         class="img-circle">&nbsp;--}}
{{--                                @endif--}}
{{--                                {{ Auth::user()->fullName() }}--}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="fas fa-cube"></i>
                                    WebSys</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-user"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-sign-out-alt"></i>
                                    Logout</a>
                            </div>
                        </li>
{{--                    @endguest--}}
                </ul>
            </div>
        </nav>
    </header>
    <!-- Success & Error messages -->
{{--    @if (Session::has('success') || Session::has('error') || Session::has('errors'))--}}

{{--        @if (Session::has('success'))--}}
{{--            <div class="alert margin-menu text-center alert-success alert-dismissible" role="alert">--}}
{{--                <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--                <strong class="h5">#</strong>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if (Session::has('error'))--}}
{{--            <div class="alert margin-menu text-center alert-dismissible alert-danger">--}}
{{--                <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--                <strong class="h5">#</strong>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if (Session::has('errors'))--}}
{{--            <div class="alert margin-menu text-center alert-dismissible alert-danger">--}}
{{--                <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--                @foreach (Session::get('errors')->all() as $err)--}}
{{--                    <li><strong class="h5">{!! $err !!}</strong></li>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--    @endif--}}

{{--@endif--}}
<!-- /Success & Error messages -->
    <main class="py-4">
        <div class="{{ isset($full) ?'container-fluid':'container' }} body">
            @yield('content')
        </div>
    </main>
    <footer class="d-print-none footer mt-auto py-3 bg-dark text-center fixed-bottom">
        <span class="text-muted">© Copyright Sensata Technologies {{date("Y")}}.</span>
    </footer>
    <div class="modal-back">
{{--        <div class="loading fa-5x"><i class="fas fa-spinner fa-pulse"></i> Loading....</div>--}}
    </div>
</div>

<!-- Scripts -->
<script type="text/javascript">
    var base_url = window.location.origin;
</script>
<script type="text/javascript" src="#"></script>
<script type="text/javascript" src="#"></script>
<script type="text/javascript" src="#"></script>
@if (env('APP_ENV')=='production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4NZMNVL6SZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-4NZMNVL6SZ');
    </script>
@endif
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('.searchYammerPerson').select2({--}}
{{--            placeholder: 'Search for a user',--}}
{{--            allowClear: true,--}}
{{--            ajax: {--}}
{{--                url: route('yammcomplete'),--}}
{{--                dataType: 'json',--}}
{{--                cache: true,--}}
{{--                delay: 650,--}}
{{--                data: function (params) {--}}
{{--                    return {--}}
{{--                        q: params.term, // search term--}}
{{--                        page: params.page--}}
{{--                    };--}}
{{--                },--}}
{{--                success: function (data, status, xhr) {--}}
{{--                    if (data.code == 500) {--}}
{{--                        if (data.message == "Token not found in session, are you sure you stored it?") {--}}
{{--                            toastr.error('The yammer session has expired do you want to renew it? <a href="' + base_url + '/yammlogin"" target="_blank">Renew</a>');--}}
{{--                            //Redirect to yammlogin to get a new token--}}
{{--                        } else {--}}
{{--                            toastr.error(data.message);--}}
{{--                        }--}}
{{--                    }--}}
{{--                    ;--}}
{{--                },--}}
{{--                error: function (data) {--}}
{{--                    var error = JSON.parse(data.responseText);--}}
{{--                    if (error.error.message == "Token not found in session, are you sure you stored it?") {--}}
{{--                        toastr.error('The yammer session has expired do you want to renew it? <a href="' + base_url + '/yammlogin"" target="_blank">Renew</a>');--}}
{{--                        //Redirect to yammlogin to get a new token--}}
{{--                        window.open(base_url + "/yammlogin", '_blank');--}}
{{--                    } else {--}}
{{--                        toastr.error(error.error.message);--}}
{{--                        setTimeout(function () {--}}
{{--                            location.reload();--}}
{{--                        }, 3000);--}}
{{--                    }--}}
{{--                    ;--}}
{{--                },--}}
{{--                processResults: function (data, params) {--}}
{{--                    // parse the results into the format expected by Select2--}}
{{--                    // since we are using custom formatting functions we do not need to--}}
{{--                    // alter the remote JSON data, except to indicate that infinite--}}
{{--                    // scrolling can be used--}}
{{--                    params.page = params.page || 1;--}}

{{--                    return {--}}
{{--                        results: $.map(data, function (item) {--}}
{{--                            return {--}}
{{--                                id: item.email,--}}
{{--                                mugshot_url: item.photo,--}}
{{--                                full_name: (item.full_name) ? item.full_name : item.email,--}}
{{--                                email: item.email,--}}
{{--                            }--}}
{{--                        }),--}}
{{--                        pagination: {--}}
{{--                            more: (params.page * 30) < data.total_count--}}
{{--                        }--}}
{{--                    };--}}
{{--                },--}}
{{--                cache: true--}}
{{--            },--}}
{{--            escapeMarkup: function (markup) {--}}
{{--                return markup;--}}
{{--            }, // let our custom formatter work--}}
{{--            minimumInputLength: 3,--}}
{{--            templateResult: function (user) {--}}
{{--                if (user.loading) return user.text;--}}
{{--                if (user.id != "") {--}}
{{--                    var markup =--}}
{{--                        "<div class='outlook-result'>" +--}}
{{--                        "<div class='outlook-result-avatar'>" +--}}
{{--                        "<img class='img-circle' src='" + user.mugshot_url + "' />" +--}}
{{--                        "</div>" +--}}
{{--                        "<div class='outlook-result-avatar-meta truncate'>" +--}}
{{--                        "<div class='outlook-result-avatar-name'>" + user.full_name + "</div>" +--}}
{{--                        "<div class='outlook-result-avatar-email'>" + user.email + "</div>" +--}}
{{--                        "</div>" +--}}
{{--                        "</div>";--}}

{{--                    return markup;--}}
{{--                }--}}
{{--            },--}}
{{--            templateSelection: function (user) {--}}
{{--                if (typeof user.email !== 'undefined') {--}}
{{--                    return user.email;--}}
{{--                } else {--}}
{{--                    return user.text;--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}
@hasSection('extraJS')
    @yield('extraJS')
@endif
</body>
</html>
