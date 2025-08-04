@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/user.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="page-title w-100">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 fw-normal d-flex align-items-center">{{ __('userList') }}</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100" id="userTable">
                <thead>
                    <tr>
                        <th style="width: 100px"> {{ __('userImage') }}</th>
                        <th> {{ __('fullname') }} </th>
                        <th> {{ __('username') }} </th>
                        <th> {{ __('deviceType') }} </th>
                        <th> {{ __('totalProperty') }} </th>
                        <th style="text-align: right; width: 350px;">{{ __('action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection