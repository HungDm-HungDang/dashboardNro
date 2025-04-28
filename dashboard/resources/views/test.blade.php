@php
    $current_tab = 'home';
@endphp
@extends('layout.main')
@section('title', 'Home')
@section('style')

@endsection
@section('content')
    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
        <span></span>
        <canvas height="70" width="70"></canvas>
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
                    labels: ['Hoàn thành', 'Chưa hoàn thành'],
                    datasets: [{
                        data: [70, 30],
                        backgroundColor: ['#50CD89', '#E4E6EF'],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutout: '70%',
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        });
    </script>
@endsection

