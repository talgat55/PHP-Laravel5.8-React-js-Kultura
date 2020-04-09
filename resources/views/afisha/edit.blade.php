@extends('layouts.app', ['title' => __('Редактирование афиши')])

@section('content')
    @include('users.partials.header', ['title' => __('Редактирование афиши')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирование афиши') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('afishaIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form  id="edit-menu-form" method="post" action="{{ route('afishaEdit', $item->id) }}" enctype="multipart/form-data"
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

                                <div class="form-group{{ $errors->has('age_limit') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-age_limit">{{ __('Ограничения по возрасту') }}</label>
                                    <input type="text" name="age_limit" id="input-age_limit"
                                           class="form-control form-control-alternative{{ $errors->has('age_limit') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ограничения по возрасту') }}" value="{{ $item->age_limit }}"
                                    >

                                    @if ($errors->has('age_limit'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('age_limit') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('duration') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-duration">{{ __('Продолжительность') }}</label>
                                    <input type="text" name="duration" id="input-duration"
                                           class="form-control form-control-alternative{{ $errors->has('duration') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Продолжительность') }}" value="{{ $item->duration }}"
                                    >

                                    @if ($errors->has('duration'))
                                        <span class="invalid-duration" role="alert">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Текст') }}</label>
                                    <textarea name="text"    placeholder="Введите текст"  class="editor">{{ $item->text }}</textarea>

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
                                               value="{{ $item->image }}"
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-preview">
                                        <img src="{{ $item->image }}" />

                                    </div>

                                </div>


                                <div class="form-group{{ $errors->has('place_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-place_id">{{ __('Место проведения') }}</label>

                                    <select class="form-control" id="select-status" name="place_id">
                                        <option selected value="none">Нет</option>
                                        <option value="1">1</option>
                                    </select>

                                    @if ($errors->has('place_id'))
                                        <span class="invalid-status" role="alert">
                                            <strong>{{ $errors->first('place_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('date_time_launch') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-date">{{ __('Начало') }}</label>
                                    <input type="text" name="date_time_launch" id="input-date"
                                           class="form-control form-control-alternative{{ $errors->has('date_time_launch') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Начало') }}" value="{{ $item->date_time_launch  }}"
                                    >

                                    @if ($errors->has('date_time_launch'))
                                        <span class="invalid-date_time_launch" role="alert">
                                            <strong>{{ $errors->first('date_time_launch') }}</strong>
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
            <script type="text/javascript" src="{{asset('/js/ckeditor.js')}}"></script>
            <script type="text/javascript" src="{{asset('/js/ckfinder.js')}}"></script>
            {{--<script type="text/javascript" src="{{asset('/js/cropper.js')}}"></script>--}}
            <script type="text/javascript">
                $(document).ready(function () {
                    "use strict";

                    ClassicEditor
                        .create( document.querySelector( '.editor' ), {

                            toolbar: {
                                items: [
                                    '|',
                                    'bold',
                                    'italic',
                                    'link',
                                    'bulletedList',
                                    'numberedList',
                                    '|',
                                    'indent',
                                    'outdent',
                                    '|',
                                    'imageUpload',
                                    'blockQuote',
                                    'insertTable',
                                    'mediaEmbed',
                                    'undo',
                                    'redo',
                                    'fontSize',
                                    'CKFinder',
                                    'alignment',
                                    'removeFormat',
                                    'fontFamily',
                                    'highlight',
                                    'code',
                                    'heading'
                                ]
                            },
                            ckfinder: {
                                // Upload the images to the server using the CKFinder QuickUpload command.
                                uploadUrl: '/admin/upload-images/upload',

                            },
                            language: 'ru',
                            image: {
                                toolbar: [
                                    'imageTextAlternative',
                                    'imageStyle:full',
                                    'imageStyle:side'
                                ]
                            },
                            table: {
                                contentToolbar: [
                                    'tableColumn',
                                    'tableRow',
                                    'mergeTableCells',
                                    'tableProperties'
                                ]
                            },
                            licenseKey: '',
                            placeholder: 'Введите текст'
                        } )
                        .then( editor => {
                            window.editor = editor;




                        } )
                        .catch( error => {
                            console.error( 'Oops, something gone wrong!' );
                            console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
                            console.warn( 'Build id: dkqkwhvokqft-o3t4tlqhfufq' );
                            console.error( error );
                        } );

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
