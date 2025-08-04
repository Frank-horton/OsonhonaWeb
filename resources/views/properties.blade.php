@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/properties.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0 fw-normal d-flex align-items-center">
                {{ __('allProperties') }}
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100" id="allPropertiesTable">
                <input type="hidden" name="" value="">
                <thead>
                    <tr>
                        <th width="150px"> {{ __('propertyImage') }} </th>
                        <th class="w-25"> {{ __('property') }} </th>
                        <th> {{ __('propertyType') }} </th>
                        <th> {{ __('availableFor') }} </th>
                        <th> {{ __('builtYear') }} </th>
                        <th> {{ __('price') }} </th>
                        <th> {{ __('featuredItem') }} </th>
                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection