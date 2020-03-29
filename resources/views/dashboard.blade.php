@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">


        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">

            </div>
            <div class="col-xl-12 mb-5 mb-xl-0" style="margin-top: 30px;">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Реализация</h3>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->


                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Товар</th>
                                <th scope="col">Вес</th>
                                <th scope="col">Стоимость</th>
                                <th scope="col">Дата</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-5 mb-xl-0" style="margin-top: 30px;">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Должники</h3>
                            </div>
                            {{--<div class="col text-right">--}}
                            {{--<a href="{{route('operations.historyList', ['realization' => 'true'])}}"--}}
                            {{--class="btn btn-sm btn-primary">Подробнее</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="table-responsive">

                    </div>
                </div>
            </div>

        </div>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
