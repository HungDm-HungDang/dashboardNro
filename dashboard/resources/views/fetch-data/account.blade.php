@php
    $current_tab = 'account';
@endphp
@extends('layout.main')
@section('title', 'Account')
@section('content')
<div class="app-content flex-column-fluid ">
    <div class="app-container container-fluid ">
        <div class="row">
            <div class="col-3 block-info p-4" style="background-color: #0e7732">
                <div class="card-header">
                    <div class="total-text">{{$countData}}</div>
                    <span class="fw-bold fs-6 text-white opacity-75">Account</span>
                </div>
                <div class="card-body pt-5">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>{{$countNewAccount ?? 0}} New Account</span>
                            <span>{{$countPercentAccount ?? 0}}%</span>
                        </div>

                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: {{$countPercentAccount}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
