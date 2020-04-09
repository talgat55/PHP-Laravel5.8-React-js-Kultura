@extends('layouts.app', ['title' => __('Добавление пункта меню')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавление пункта меню')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Добавление пункта меню') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('menuIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form  id="create-menu-form" method="post" action="{{ route('menuCreate') }}" enctype="multipart/form-data"
                              autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-status">{{ __('Опубликовать ?') }}</label>

                                    <select class="form-control" id="select-status" name="status">
                                        <option selected value="1">Да</option>
                                        <option value="0">Нет</option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="invalid-status" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('sort') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sort">{{ __('Сортировка') }}</label>
                                    <input type="text" name="sort" id="input-sort"
                                           class="form-control form-control-alternative{{ $errors->has('sort') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Сортировка') }}" value="500"
                                    >

                                    @if ($errors->has('sort'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sort') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-driver">{{ __('Название') }}</label>
                                    <input type="text" name="name" id="input-name"
                                           class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Название') }}" value="{{ old('name') }}" required
                                           autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-link">{{ __('Ссылка') }}</label>
                                    <input type="text" name="link" id="input-link"
                                           class="form-control form-control-alternative{{ $errors->has('link') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка') }}" value="{{ old('link') }}"
                                            >

                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('custom_name_class') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-custom_name_class">{{ __('Дополнительный класс для пункта меню') }}</label>
                                    <input type="text" name="custom_name_class" id="input-custom_name_class"
                                           class="form-control form-control-alternative{{ $errors->has('custom_name_class') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Дополнительный класс для пункта меню') }}" value="{{ old('custom_name_class') }}"
                                    >

                                    @if ($errors->has('custom_name_class'))
                                        <span class="invalid-name_place" role="alert">
                                            <strong>{{ $errors->first('custom_name_class') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                            class="btn btn-success mt-4">{{ __('Сохранить') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        @include('layouts.footers.auth')
    </div>
@endsection
