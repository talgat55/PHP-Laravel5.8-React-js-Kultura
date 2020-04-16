@extends('layouts.app', ['title' => __('Культура в деталях')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-sm-12 text-left text-sm-left">
                                <h3 class="mb-0">{{ __('Культура в деталях') }}</h3>
                            </div>
                            <div class="col-lg-4 col-sm-12 text-lg-right text-sm-left">
                                {{--@if (!Auth::user()->hasRole("viewer"))--}}
                                <a href="{{ route('cultureDetailsCreate') }}"
                                   class="btn btn-sm btn-primary">{{ __('Добавить новую запись') }}</a>
                                {{--@endif--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('Название') }}</th>
                                <th scope="col">{{ __('Категория') }}</th>
                                <th scope="col">{{ __('Статус') }}</th>
                                <th scope="col">{{ __('Сортировка') }}</th>
                                <th scope="col">{{ __('Изображение') }}</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>  {{ $item->category }} </td>
                                    <td> {{  $item->status  }} </td>
                                    <td> {{  $item->sort  }} </td>
                                    <td> <img src="{{  $item->image  }}" alt="Image" style="max-width: 250px;" />  </td>
                                    <td class="text-right">
                                        {{--@if (!Auth::user()->hasRole("viewer"))--}}
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <form action="{{ route('cultureDetailsDelete', $item->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a class="dropdown-item"
                                                       href="{{ route('cultureDetailsEdit', $item->id) }}">{{ __('Редактировать') }}</a>

                                                    <button type="button" class="dropdown-item"
                                                            onclick="confirm('{{ __("Вы уверены что хотите удалить запись?") }}') ? this.parentElement.submit() : ''">
                                                        {{ __('Удалить') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        {{--@endif--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $items->links() }}
                    <div class="card-footer py-4">

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
