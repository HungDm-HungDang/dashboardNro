@php
    $current_tab = 'home';
@endphp
@extends('layout.main')
@section('title', 'Home')
@section('content')
    <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack mt-3">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-black fw-bold fs-3 flex-column justify-content-center my-0">
                Multipurpose
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-gray-500">
                        Home </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">
                    Dashboards
                </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <div class="app-content flex-column-fluid ">
        <div class="app-container container-fluid ">
            <div class="d-flex gap-3">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <div class="block-info p-4" style="background-color: #0e7732">
                                <div class="card-header">
                                    <div
                                        class="fs-2hx fw-bold text-white  me-2 lh-1 ls-n2">{{$fetchDataAcc['countAccount']}}</div>
                                    <span class="fw-bold fs-6 text-white opacity-75">Tài khoản</span>
                                </div>
                                <div class="card-body pt-5">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div
                                            class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>{{$fetchDataAcc['countNewAccount'] ?? 0}} Tài khoản mới (24h)</span>
                                            <span>{{$fetchDataAcc['countPercentAccount'] ?? 0}}%</span>
                                        </div>

                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar"
                                                 style="width: {{$fetchDataAcc['countPercentAccount']}}%;"
                                                 aria-valuenow="50"
                                                 aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="block-info p-4" style="background-color: #F1416C">
                                <div class="card-header">
                                    <div
                                        class="fs-2hx fw-bold text-white  me-2 lh-1 ls-n2">{{$fetchDataClan['countClan']}}</div>
                                    <span class="fw-bold fs-6 text-white opacity-75">Bang</span>
                                </div>
                                <div class="card-body pt-5">
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div
                                            class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>{{$fetchDataClan['countNewClan'] ?? 0}} Bang mới (24h)</span>
                                            <span>{{$fetchDataClan['countPercentClan'] ?? 0}}%</span>
                                        </div>

                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar"
                                                 style="width: {{$fetchDataClan['countPercentClan']}}%;"
                                                 aria-valuenow="50"
                                                 aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="block-info p-4" style="background-color: white">
                                <div class="card-header">
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Amount-->
                                            <span
                                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{$fetchDataPlayer['countPlayer']}}</span>
                                            <!--end::Amount-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Subtitle-->
                                        <span class="fw-bold fs-6 text-gray-500 opacity-75">Người chơi</span>
                                        <!--end::Subtitle-->
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center me-5 pt-2">
                                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                             data-kt-size="70" data-kt-line="11">
                                            <span></span>
                                            <canvas height="70" width="70"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Chart-->

                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Trái đất</div>
                                            <!--end::Label-->

                                            <!--begin::Stats-->
                                            <div
                                                class="fw-bolder text-gray-700 text-xxl-end">{{$fetchDataPlayer['gender0']}}</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Namek</div>
                                            <!--end::Label-->

                                            <!--begin::Stats-->
                                            <div
                                                class="fw-bolder text-gray-700 text-xxl-end">{{$fetchDataPlayer['gender1']}}</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3"
                                                 style="background-color: #F8285A;"></div>
                                            <!--end::Bullet-->

                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Xayda</div>
                                            <!--end::Label-->

                                            <!--begin::Stats-->
                                            <div
                                                class=" fw-bolder text-gray-700 text-xxl-end">{{$fetchDataPlayer['gender2']}}</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-4">
                            <div class="block-info p-4" style="background-color: white">
                                <div class="card-header">
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">Top cook</span>
                                            <!--end::Amount-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <div class="card-body align-items-center mt-3 d-flex">
                                    <table class="col-8">
                                        <thead>
                                        <tr>
                                            <th class="col-1">Top</th>
                                            <th class="col-2">Tên nhân vật</th>
                                            <th class="col-3">Tên nhân vật</th>
                                        </tr>
                                        </thead>
                                        @php
                                            $stt = 1;
                                        @endphp
                                        @foreach($fetchDataTask['topCook'] as $task)
                                            @php
                                                $color = match ($task->gender) {
                                                    0 => '#1B84FF',
                                                    1 => '#17C653',
                                                    2 => '#F8285A',
                                                    default => '#999999',
                                                }
                                            @endphp
                                            <tbody>
                                            <tr>
                                                <td>Top {{$stt}}</td>
                                                <td style="color: {{$color}}">{{$task->name}}</td>
                                                <td >{{$task->task_name}}</td>
                                            </tr>
                                            </tbody>
                                            @php
                                                $stt++;
                                            @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="block-info p-4" style="background-color: white">
                            <div class="card-header">
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">Top nhiệm vụ</span>
                                        <!--end::Amount-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <div class="card-body align-items-center mt-3 d-flex">
                                <table class="col-8">
                                    <thead>
                                    <tr>
                                        <th class="col-1">Top</th>
                                        <th class="col-2">Tên nhân vật</th>
                                        <th class="col-3">Tên nhân vật</th>
                                    </tr>
                                    </thead>
                                    @php
                                        $stt = 1;
                                    @endphp
                                    @foreach($fetchDataTask['topPlayer'] as $task)
                                        @php
                                            $color = match ($task->gender) {
                                                0 => '#1B84FF',
                                                1 => '#17C653',
                                                2 => '#F8285A',
                                                default => '#999999',
                                            }
                                        @endphp
                                        <tbody>
                                        <tr>
                                            <td>Top {{$stt}}</td>
                                            <td style="color: {{$color}}">{{$task->name}}</td>
                                            <td >{{$task->task_name}}</td>
                                        </tr>
                                        </tbody>
                                        @php
                                            $stt++;
                                        @endphp
                                    @endforeach
                                </table>
                                <div class="col-4">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center ">
                                        <div id="kt_card_widget_18_chart" style="min-width: 50%; min-height: 50%"
                                             data-kt-size="70" data-kt-line="11">
                                            <span></span>
                                            <canvas height="70" width="70"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const container = document.getElementById('kt_card_widget_17_chart');
            const canvas = container.querySelector('canvas');
            const ctx = canvas.getContext('2d');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Trái đất', 'Namek', 'Xayda'],
                    datasets: [{
                        data: [{{$fetchDataPlayer['gender0']}}, {{$fetchDataPlayer['gender1']}}, {{$fetchDataPlayer['gender2']}}],
                        backgroundColor: ['#1B84FF', '#17C653', '#F8285A'],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutout: '70%',
                    plugins: {
                        legend: {display: false}
                    }
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function () {
            const container = document.getElementById('kt_card_widget_18_chart');
            const canvas = container.querySelector('canvas');
            const ctx = canvas.getContext('2d');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        @foreach(config('task') as $taskName)
                            "{{ $taskName }}",
                        @endforeach
                    ],
                    datasets: [{
                        data: [
                            @foreach($fetchPercentTask['taskPercents'] as $percent)
                                {{ $percent }},
                            @endforeach
                        ],
                        backgroundColor: [
                            '#1B84FF', '#17C653', '#F8285A', '#FFB300', '#FF6D00',
                            '#F50057', '#651FFF', '#00BFA5', '#C51162', '#AA00FF',
                            '#00C853', '#FFD600', '#FF3D00', '#2962FF', '#6200EA',
                            '#00E5FF', '#76FF03', '#D500F9', '#00B0FF', '#FF1744',
                            '#AEEA00', '#6200EA', '#00C853', '#FFD600', '#FF3D00',
                            '#2962FF', '#6200EA', '#00E5FF', '#76FF03', '#D500F9',
                            '#00B0FF', '#FF1744', '#AEEA00', '#6200EA', '#00C853'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutout: '70%', // Phần lõm giữa
                    plugins: {
                        legend: {
                            display: false // <- Tắt chú thích
                        },
                        tooltip: {
                            enabled: true // Tooltips vẫn bật khi hover
                        }
                    }
                }
            });
        });
    </script>
@endsection

