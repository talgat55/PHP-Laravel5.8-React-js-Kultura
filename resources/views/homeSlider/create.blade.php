@extends('layouts.app', ['title' => __('Добавление слайда')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавление слайда')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Добавление слайда') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('homeSliderIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('homeSliderCreate') }}" enctype="multipart/form-data"
                              autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-driver">{{ __('Заголовок') }}</label>
                                    <input type="text" name="name" id="input-name"
                                           class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Заголовок') }}" value="{{ old('name') }}" required
                                           autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_place') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group{{ $errors->has('name_place') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="input-name_place">{{ __('Место проведения') }}</label>
                                        <input type="text" name="name_place" id="input-name_place"
                                               class="form-control form-control-alternative{{ $errors->has('name_place') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Место проведения') }}" value="{{ old('name_place') }}"
                                               >

                                        @if ($errors->has('name_place'))
                                            <span class="invalid-name_place" role="alert">
                                            <strong>{{ $errors->first('name_place') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="input-date">{{ __('Дата проведения') }}</label>
                                        <input type="text" name="date" id="input-date"
                                               class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Дата проведения') }}" value="{{ old('date') }}"
                                               >

                                        @if ($errors->has('date'))
                                            <span class="invalid-name_place" role="alert">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                        @endif
                                    </div>



                                    <div class="form-group{{ $errors->has('credit') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="input-credit">{{ __('Начальный долг') }}</label>
                                        <input type="number" step=".01" pattern="^\d*(\.\d{0,2})?$" min="0"
                                               max="2147483646"
                                               name="credit" id="input-name"
                                               class="form-control form-control-alternative{{ $errors->has('credit') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Начальный долг') }}" value="{{ old('credit') }}"
                                               required
                                               >

                                        @if ($errors->has('credit'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('credit') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="input-url">{{ __('Файл') }}</label>
                                        <input type="file"
                                               name="file" id="input-url"
                                               class="form-control  image form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Файл') }}" value="{{ old('url') }}"
                                        >

                                        @if ($errors->has('url'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <div>
                                            <a href="#" class="upload-image">Загрузить изображеине</a>
                                        </div>
                                        <div class="image-preview"></div>

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

        @section('page-script')
            {{--<script type="text/javascript" src="{{asset('/js/cropper.js')}}"></script>--}}
            <script type="text/javascript">
                $(document).ready(function () {
                    "use strict";

                    jQuery('body').on('click', '.upload-image', function (e) {
                        e.preventDefault();
                        var formData = new FormData();
                        formData.append('file', jQuery('#input-url ')[0].files[0]);
                        formData.append('path', 'home_slider');

                        jQuery.ajax({
                            type: "POST",
                            url: "/admin/upload-images/upload",
                            data: formData,
                            processData: false,
                            contentType: false,
                        })
                            .done(function (data) {
                                console.log(data);
                                jQuery('.image-preview').html(' ').append('<img src="' + data.data + '" />');
                            });
                    });

                });
            </script>
        @stop

        @section('page-styles')
            {{--            <link type="text/css" href="{{ asset('/css/cropper.css') }}" rel="stylesheet">--}}
        @stop

        @include('layouts.footers.auth')
    </div>
@endsection
