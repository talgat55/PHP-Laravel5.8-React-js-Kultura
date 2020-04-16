@extends('layouts.app', ['title' => __('Добавление записи')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавление записи')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Добавление записи') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('cultureDetailsIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form  id="create-menu-form" method="post" action="{{ route('cultureDetailsCreate') }}" enctype="multipart/form-data"
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



                                <div class="form-group{{ $errors->has('anons') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-anons" style="display: block; width: 100%;">{{ __('Анонс') }}</label>
                                    <textarea name="anons"  class="form-control"    placeholder="Анонс"  style="width: 100%;"  >{{  old('anons')}}</textarea>
                                </div>

                                <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Текст') }}</label>
                                    <textarea name="text"    placeholder="Введите текст"  class="editor">{{  old('text')}}</textarea>
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
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-preview"></div>

                                </div>


                                <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-category">{{ __('Категория') }}</label>

                                    <select class="form-control" id="select-category" name="category">
                                        @foreach ($categories as $key =>$category)
                                            <option value="{{$key}}">{{$category}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category'))
                                        <span class="invalid-status" role="alert">
                                            <strong>{{ $errors->first('category') }}</strong>
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
