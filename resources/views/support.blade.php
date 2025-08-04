@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/support.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0 fw-normal d-flex align-items-center">
                {{ __('supports') }}
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100" id="supportTable">
                <input type="hidden" name="" value="">
                <thead>
                    <tr>
                        <th width="150px"> {{ __('userImage') }} </th>
                        <th> {{ __('fullname') }} </th>
                        <th> {{ __('userMobileNo') }} </th>
                        <th> {{ __('subject') }} </th>
                        <th> {{ __('description') }} </th>
                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection