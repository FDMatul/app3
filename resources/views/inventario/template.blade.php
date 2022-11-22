<link rel="stylesheet" href="{{ asset("css/app.css") }}">  <!-- importa CSS de bootstrap -->
<script src="{{ asset("js/app.js") }}"></script>

@extends('template.app')
@section('title')
    HR Training @hasSection('subTitle') @yield('subTitle') @endif
@endsection
@section('content')
    <nav class="d-print-none" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="#">Websys</a></li>
            <li class="breadcrumb-item #">
{{--                @if(!Request::is('apps/websys/hr-training'))--}}
                    <a href="#">HR Training</a>
{{--                @else--}}
{{--                    HR Training--}}
{{--                @endif--}}
            </li>
            @hasSection('breadcrumb')
                @yield('breadcrumb')
            @endif
        </ol>
    </nav>

    <div class="row d-print-none">
        <div class="col-md-8">
            <h4><i class="fas fa-user-circle"></i> <strong>HR Training @yield('subTitle')</strong></h4>
        </div>
        <div class="col-md-4 text-right">
            @hasSection('buttons')
                @yield('buttons')
            @else
                @auth
                    <a href="#"
                       class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Registro</a>
                @endauth
            @endif
            @auth
{{--                @if((Auth::user()->isAdmin() || Auth::user()->moduleAccessType('HR Training') == "admin") && !Request::is('apps/websys/hr-training/admin/*'))--}}
                    <a href="#"
                       class="btn btn-outline-primary btn-sm"><i class="fas fa-key">
                        </i> Admin
                    </a>
{{--                @endif--}}
                <a href="#" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-clipboard-list"></i> Reports
                </a>
            @endauth

        </div>

        <div class="col-md-4 text-right">
            @hasSection('buttons2')
                @yield('buttons2')
            @else
                @auth
                    <a href="#"
                       class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Registro</a>
                @endauth
            @endif
{{--            @auth--}}
{{--                --}}{{--                @if((Auth::user()->isAdmin() || Auth::user()->moduleAccessType('HR Training') == "admin") && !Request::is('apps/websys/hr-training/admin/*'))--}}
{{--                <a href="#"--}}
{{--                   class="btn btn-outline-primary btn-sm"><i class="fas fa-key">--}}
{{--                    </i> Admin--}}
{{--                </a>--}}
{{--                --}}{{--                @endif--}}
{{--                <a href="#" class="btn btn-outline-primary btn-sm">--}}
{{--                    <i class="fas fa-clipboard-list"></i> Reports--}}
{{--                </a>--}}
{{--            @endauth--}}

        </div>
    </div>
    <hr/>

    @yield('subContent')
@endsection
