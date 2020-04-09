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


                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Адрес') }}</label>
                                    <input type="text" name="address" id="input-address"
                                           class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Адрес') }}" value="{{ $item->address }}"
                                    >

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone">{{ __('Телефон') }}</label>
                                    <input type="text" name="phone" id="input-phone"
                                           class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Телефон') }}" value="{{ $item->phone }}"
                                    >

                                    @if ($errors->has('phone'))
                                        <span class="invalid-duration" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
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
                                               value="{{ $item->image }}"
                                               id="input-url-val"
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-preview">
                                        <img src="{{ $item->image }}" />
                                    </div>

                                </div>


                                <div class="form-group{{ $errors->has('category_place_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-category_place_id">{{ __('Категория') }}</label>

                                    <select class="form-control" id="select-category_place_id" name="category_place_id">
                                        <option selected value="1">Нет</option>
                                        <option value="2">1</option>
                                    </select>

                                    @if ($errors->has('category_place_id'))
                                        <span class="invalid-status" role="alert">
                                            <strong>{{ $errors->first('category_place_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('web_site_link') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-web_site_link">{{ __('Ссылка на веб сайт') }}</label>
                                    <input type="text" name="web_site_link" id="input-web_site_link"
                                           class="form-control form-control-alternative{{ $errors->has('web_site_link') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка на веб сайт') }}" value="{{ $item->web_site_link }}"
                                    >

                                    @if ($errors->has('web_site_link'))
                                        <span class="invalid-web_site_link" role="alert">
                                            <strong>{{ $errors->first('web_site_link') }}</strong>
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
