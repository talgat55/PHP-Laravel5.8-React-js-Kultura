@extends('layouts.app', ['title' => __('Редактирование записи')])

@section('content')
    @include('users.partials.header', ['title' => __('Редактирование записи')])
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
                                <a href="{{ route('galleryIndex') }}"
                                   class="btn btn-sm btn-primary">{{ __('вернуться назад') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form id="edit-menu-form" method="post" action="{{ route('galleryEdit', $item->id) }}"
                              enctype="multipart/form-data"
                              autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-status">{{ __('Опубликовать ?') }}</label>

                                    <select class="form-control" id="select-status" name="status">
                                        <option @if ($item->status =='1')   selected @endif  value="1">Да</option>
                                        <option @if ($item->status =='0')   selected @endif  value="0">Нет</option>
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


                                <div class="form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Описание') }}</label>
                                    <textarea name="text" placeholder="Введите текст"
                                              class="editor">{{ $item->description }}</textarea>
                                </div>


                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-url">{{ __('Файл') }}</label>
                                    <input type="file"
                                           name="file" id="input-url"
                                           class="form-control  image form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Файл') }}" value="{{ old('images') }}"
                                    >

                                    @if ($errors->has('images'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group ">
                                    <div>
                                        <a href="#" class="upload-image">Загрузить изображеине</a>
                                        <input type="hidden"
                                               name="images"
                                               value="{{ $item->images }}"
                                               id="input-url-val"
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-previews">
                                        @foreach ( json_decode($item->images) as $itemValue)
                                            <img src="{{ $itemValue }}"/>
                                        @endforeach
                                    </div>
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
                        .create(document.querySelector('.editor'), {

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
                        })
                        .then(editor => {
                            window.editor = editor;


                        })
                        .catch(error => {
                            console.error('Oops, something gone wrong!');
                            console.error('Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:');
                            console.warn('Build id: dkqkwhvokqft-o3t4tlqhfufq');
                            console.error(error);
                        });

                    jQuery('body').on('click', '.upload-image', function (e) {
                        e.preventDefault();
                        var formData = new FormData();
                        formData.append('file', jQuery('#input-url ').files);
                        formData.append('path', 'main');

                        var totalImages = jQuery('#input-url')[0].files.length;
                        var images = jQuery('#input-url')[0];
                        for (var i = 0; i < totalImages; i++) {
                            formData.append('file' + i, images.files[i]);
                        }
                        formData.append('totalImages', totalImages);

                        jQuery.ajax({
                            type: "POST",
                            url: "/admin/upload-images/uploads",
                            data: formData,
                            processData: false,
                            contentType: false,
                        })
                            .done(function (data) {
                                console.log(data.data.length);
                                jQuery('#input-url-val').val(' ').val(JSON.stringify(data.data));
                                jQuery('.image-previews').html(' ');
                                for (var x = 0; x < data.data.length; x++) {
                                    jQuery('.image-previews').append('<img src="' + data.data[x] + '" />');
                                }

                            });
                    });

                });
            </script>
        @stop
        @include('layouts.footers.auth')
    </div>
@endsection
