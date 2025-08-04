@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/reel.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="page-title w-100">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 fw-normal"> {{ __('reels') }} </h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100" id="reelsTable">
                <thead>
                    <tr>
                        <th width="100px"> {{ __('reel') }}</th>
                        <th class="w-25">{{ __('property') }}</th>
                        <th>{{ __('likes') }}</th>
                        <th>{{ __('comments') }}</th>
                        <th>{{ __('views') }}</th>
                        <th>{{ __('user') }}</th>
                        <th width="250px" style="text-align: right"> {{ __('action')}} </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection