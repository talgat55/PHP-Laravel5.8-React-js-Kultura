@extends('layouts.app', ['title' => __('Редактирование слайда')])

@section('content')
    @include('users.partials.header', ['title' => __('Редактирование слайда')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирование слайда') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('homeSliderIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('homeSliderEdit', $item->id) }}" enctype="multipart/form-data"
                              autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-status">{{ __('Опубликовать ?') }}</label>

                                    <select class="form-control" id="select-status" name="status">
                                        <option  @if ($item->status =='1')   selected    @endif  value="1">Да</option>
                                        <option @if ($item->status =='0')   selected    @endif  value="0">Нет</option>
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
                                           placeholder="{{ __('Сортировка') }}" value="{{ $item->sort }}"
                                    >

                                    @if ($errors->has('sort'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sort') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-driver">{{ __('Заголовок') }}</label>
                                    <input type="text" name="name" id="input-name"
                                           class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Заголовок') }}" value="{{ $item->name }}" required
                                           autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_place') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Текст') }}</label>
                                    <input type="text" name="text" id="input-text"
                                           class="form-control form-control-alternative{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Текст') }}" value="{{ $item->text }}"
                                    >

                                    @if ($errors->has('text'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-link">{{ __('Ссылка кнопки') }}</label>
                                    <input type="text" name="link" id="input-link"
                                           class="form-control form-control-alternative{{ $errors->has('link') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка кнопки') }}" value="{{ $item->link }}"
                                    >

                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('name_place') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-name_place">{{ __('Место проведения') }}</label>
                                    <input type="text" name="name_place" id="input-name_place"
                                           class="form-control form-control-alternative{{ $errors->has('name_place') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Место проведения') }}" value="{{ $item->name_place }}"
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
                                           placeholder="{{ __('Дата проведения') }}" value="{{  $item->date  }}"
                                    >

                                    @if ($errors->has('date'))
                                        <span class="invalid-name_place" role="alert">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-url">{{ __('Файл') }}</label>
                                    <input type="file"
                                           name="file" id="input-url"
                                           class="form-control  image form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Файл') }}" value="{{  $item->url  }}"
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
                                        <input type="hidden"
                                               name="url"
                                               id="input-url-val"
                                               value="{{  $item->url  }}"
                                               class="form-control form-control-alternative "
                                        >
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
                                console.log(data.data);
                                jQuery('#input-url-val').val(data.data);
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
