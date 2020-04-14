@extends('layouts.app', ['title' => __('Редактирование баннера')])

@section('content')
    @include('users.partials.header', ['title' => __('Редактирование баннера')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирование баннера') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('bannersIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form  id="edit-menu-form" method="post" action="{{ route('bannersEdit', $item->id) }}" enctype="multipart/form-data"
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
                                    <label class="form-control-label" for="input-driver">{{ __('Название') }}</label>
                                    <input type="text" name="name" id="input-name"
                                           class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Название') }}" value="{{ $item->name }}" required
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
                                           class="form-control form-control-alternative{{ $errors->has('duration') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка') }}" value="{{ $item->link }}"
                                    >

                                    @if ($errors->has('link'))
                                        <span class="invalid-duration" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-url">{{ __('Файл') }}</label>
                                    <input type="file"
                                           name="file" id="input-url"
                                           class="form-control  image form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Файл') }}" value="{{ old('image') }}"
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
                                               name="image"
                                               id="input-url-val"
                                               value="{{$item->image}}"
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-preview">
                                        <img src="{{$item->image}}" />
                                    </div>

                                </div>

                                <div class="form-group{{ $errors->has('page') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-page">{{ __('Где расположить') }}</label>

                                    <select class="form-control" id="select-status" name="page">
                                        @foreach ($places as  $key => $place)
                                            <option value="{{$key}}"   @if($key == $item->page)  selected     @endif >{{$place}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('page'))
                                        <span class="invalid-status" role="alert">
                                            <strong>{{ $errors->first('page') }}</strong>
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
        @include('layouts.footers.auth')
    </div>
@endsection
