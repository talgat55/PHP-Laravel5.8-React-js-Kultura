@extends('layouts.app', ['title' => __('Редактирование настроек сайта')])

@section('content')
    @include('users.partials.header', ['title' => __('Редактирование настроек сайта')])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирование настроек сайта') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('settingsIndex', $item->id) }}" enctype="multipart/form-data"
                              autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('soc_link_vk') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-soc_link_vk">{{ __('Ссылка на вк') }}</label>
                                    <input type="text" name="soc_link_vk" id="input-soc_link_vk"
                                           class="form-control form-control-alternative{{ $errors->has('soc_link_vk') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка на вк') }}" value="{{ $item->soc_link_vk }}"
                                    >

                                    @if ($errors->has('soc_link_vk'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('soc_link_vk') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('soc_link_fb') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-soc_link_fb">{{ __('Ссылка на fb') }}</label>
                                    <input type="text" name="soc_link_fb" id="input-soc_link_fb"
                                           class="form-control form-control-alternative{{ $errors->has('soc_link_fb') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка на fb') }}" value="{{ $item->soc_link_fb }}"
                                    >
                                    @if ($errors->has('soc_link_fb'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('soc_link_fb') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('soc_link_inst') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-soc_link_inst">{{ __('Ссылка на inst') }}</label>
                                    <input type="text" name="soc_link_inst" id="input-soc_link_inst"
                                           class="form-control form-control-alternative{{ $errors->has('soc_link_inst') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка на inst') }}" value="{{ $item->soc_link_inst }}"
                                    >
                                    @if ($errors->has('soc_link_inst'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('soc_link_inst') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('soc_link_telegram') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-soc_link_telegram">{{ __('Ссылка на telegram') }}</label>
                                    <input type="text" name="soc_link_telegram" id="input-soc_link_telegram"
                                           class="form-control form-control-alternative{{ $errors->has('soc_link_telegram') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Ссылка на telegram') }}" value="{{ $item->soc_link_telegram }}"
                                    >
                                    @if ($errors->has('soc_link_telegram'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('soc_link_telegram') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('name_place') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-soc_link_telegram">{{ __('Текст блока  О нас') }}</label>
                                    <textarea name="about_info"    placeholder="Введите текст"  class="editor">{{ $item->about_info }}</textarea>

                                </div>

                                <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="input-url">{{ __('Новый логотип') }}</label>
                                    <input type="file"
                                           name="file" id="input-url"
                                           class="form-control  image form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Новый логотип') }}" value="{{  $item->url  }}"
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
                                               name="logo_url"
                                               id="input-url-val"
                                               value="{{  $item->logo_url  }}"
                                               class="form-control form-control-alternative "
                                        >
                                    </div>
                                    <div class="image-preview">
                                        <img src="{{ $item->logo_url }}" />
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


                    ///  click by element file
                    jQuery('body').on('click', '.upload-image', function (e) {
                        e.preventDefault();
                        var formData = new FormData();
                        formData.append('file', jQuery('#input-url ')[0].files[0]);
                        formData.append('path', 'main');

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
