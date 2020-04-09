<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('adminIndex') }}">
            {{--<img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">--}}
            <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap&subset=cyrillic"
                  rel="stylesheet">
            <span class=""
                  style="color:#6772e5;font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 30px; ">
            Культура
            </span>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">

                    {{--<a href="{{ route('profile.edit') }}" class="dropdown-item">--}}
                    {{--<i class="ni ni-single-02"></i>--}}
                    {{--<span>{{ __('My profile') }}</span>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                    {{--<i class="ni ni-settings-gear-65"></i>--}}
                    {{--<span>{{ __('Settings') }}</span>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                    {{--<i class="ni ni-calendar-grid-58"></i>--}}
                    {{--<span>{{ __('Activity') }}</span>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                    {{--<i class="ni ni-support-16"></i>--}}
                    {{--<span>{{ __('Support') }}</span>--}}
                    {{--</a>--}}
                    <div class="dropdown-divider"></div>
                    {{--<a href="{{/* route('logout') */}}" class="dropdown-item" onclick="event.preventDefault();--}}
                    <a href="#" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Выйти') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('adminIndex') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
        {{--<form class="mt-4 mb-3 d-sm-none">--}}
        {{--<div class="input-group input-group-rounded input-group-merge">--}}
        {{--<input type="search" class="form-control form-control-rounded form-control-prepended"--}}
        {{--placeholder="{{ __('Search') }}" aria-label="Search">--}}
        {{--<div class="input-group-prepend">--}}
        {{--<div class="input-group-text">--}}
        {{--<span class="fa fa-search"></span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
        <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminIndex') }}">
                        <i class="ni ni-tv-2 text-primary text-green"></i> {{ __('Рабочий стол') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homeSliderIndex') }}">
                        <i class="ni ni-tv-2 text-primary text-green"></i> {{ __('Слайдер на главной') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('settingsIndex') }}">
                        <i class="ni ni-app text-primary text-orange"></i> {{ __('Настройки сайта') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menuIndex') }}">
                        <i class="ni ni-align-center text-primary text-yellow"></i> {{ __('Меню') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('afishaIndex') }}">
                        <i class="ni ni-tv-2 text-primary  "></i> {{ __('Афиша') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('placeIndex') }}">
                        <i class="ni ni-pin-3 text-info "></i> {{ __('Места') }}
                    </a>
                </li>

                {{--@if (!Auth::user()->hasRole("viewer"))--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button"--}}
                {{--aria-expanded="true" aria-controls="navbar-examples">--}}
                {{--<i class="fab fa-laravel" style="color: #f4645f;"></i>--}}
                {{--<span class="nav-link-text" style="color: #f4645f;">{{ __('Операции') }}</span>--}}
                {{--</a>--}}

                {{--<div class="collapse show" id="navbar-examples">--}}
                {{--<ul class="nav nav-sm flex-column">--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.index') }}">--}}

                {{--{{ __('Поступление товара') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.realization') }}">--}}
                {{--{{ __('Реализация товара') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.updateCredit') }}">--}}
                {{--{{ __('Получение средств от клиента') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.orgSetCredit') }}">--}}
                {{--{{ __('Оплата организации') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.withdraw') }}">--}}
                {{--{{ __('Расход по кассе') }}--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--</ul>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--@endif--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('clients.index') }}">--}}
                {{--<i class="ni ni-circle-08 text-primary text-red"></i>  {{ __('Клиенты') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('cars.index') }}">--}}
                {{--<i class="ni ni-bus-front-12  text-primary"></i> {{ __('Автомобили') }}--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('clients.index') }}">--}}
                {{--<i class="ni ni-single-02  text-primary text-orange"></i> {{ __('Клиенты') }}--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('storage.index') }}">--}}
                {{--<i class="ni ni-box-2 text-primary text-red"></i> {{ __('Склад') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('waybillsRealization.index') }}">--}}
                {{--<i class="ni ni-box-2 text-primary text-red"></i> {{ __('Накладные (реализация)') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('waybillsEntrance.index') }}">--}}
                {{--<i class="ni ni-box-2 text-primary text-red"></i> {{ __('Накладные (поступление)') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('statistics.index') }}">--}}
                {{--<i class="ni ni-box-2 text-primary text-red"></i> {{ __('Статистика') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('operations.reconciliation') }}">--}}
                {{--<i class="ni ni-box-2 text-primary text-red"></i> {{ __('Акт сверки') }}--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link active" href="#navbar-products" data-toggle="collapse" role="button"--}}
                {{--aria-expanded="false" aria-controls="navbar-products">--}}
                {{--<i class="ni ni-basket text-primary  text-info"></i>--}}
                {{--<span class="nav-link-text" style="color: #f4645f;">{{ __('Заполнение данных') }}</span>--}}
                {{--</a>--}}

                {{--<div class="collapse" id="navbar-products">--}}
                {{--<ul class="nav nav-sm flex-column">--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('items.index') }}">--}}

                {{--{{ __('Категории овощей') }}--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('sort.index') }}">--}}
                {{--{{ __('Сорты овощей') }}--}}
                {{--</a>--}}
                {{--</li>--}}


                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('cars.index') }}">--}}
                {{--{{ __('Организации') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@if (Auth::user()->hasRole("admin"))--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('user.index') }}">--}}
                {{--{{ __('Администраторы') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('user.index') }}">--}}
                {{--<i class=" ni ni-single-02 text-primary text-info"></i> {{ __('Пользователи') }}--}}
                {{--</a>--}}
                {{--</li>--}}


                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                {{--<i class="ni ni-planet text-blue"></i> {{ __('Icons') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                {{--<i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                {{--<i class="ni ni-key-25 text-info"></i> {{ __('Login') }}--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                {{--<i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}--}}
                {{--</a>--}}
                {{--</li>--}}

            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
        {{--<h6 class="navbar-heading text-muted">Documentation</h6>--}}
        <!-- Navigation -->
            {{--<ul class="navbar-nav mb-md-3">--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">--}}
            {{--<i class="ni ni-spaceship"></i> Getting started--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">--}}
            {{--<i class="ni ni-palette"></i> Foundation--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">--}}
            {{--<i class="ni ni-ui-04"></i> Components--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
</nav>
