@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/report.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>{{ __('reports') }}</h4>
            <div class="ms-3 card-tab">
                <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="userReportTab" data-bs-toggle="tab" data-bs-target="#userReports-panel" type="button" role="tab" aria-controls="userReports-panel" aria-selected="true"> {{ __('userReports')}} </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="propertyReports-tab" data-bs-toggle="tab" data-bs-target="#propertyReports-panel" type="button" role="tab" aria-controls="propertyReports-panel" aria-selected="false"> {{ __('propertyReports')}} </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="reelReports-tab" data-bs-toggle="tab" data-bs-target="#reelReports-panel" type="button" role="tab" aria-controls="reelReports-panel" aria-selected="false"> {{ __('reelReports')}} </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane" id="userReports-panel" role="tabpanel" tabindex="0">
                    <table class="table table-striped w-100" id="userReportsTable">
                        <thead>
                            <tr>
                                <th width="150px"> {{ __('userImage') }} </th>
                                <th> {{ __('fullname') }} </th>
                                <th> {{ __('reason') }} </th>
                                <th class="w-100"> {{ __('description') }} </th>
                                <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane" id="propertyReports-panel" role="tabpanel" tabindex="0">
                    <table class="table table-striped w-100" id="propertyReportsTable">
                        <thead>
                            <tr>
                                <th width="150px"> {{ __('propertyImage') }} </th>
                                <th class="w-25"> {{ __('property') }} </th>
                                <th class="w-25"> {{ __('reason') }} </th>
                                <th class="w-100"> {{ __('description') }} </th>
                                <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-pane show active" id="reelReports-panel" role="tabpanel" tabindex="0">
                    <table class="table table-striped w-100" id="reelReportsTable">
                        <thead>
                            <tr>
                                <th width="100px"> {{ __('reel') }} </th>
                                <th class="w-25"> {{ __('property') }} </th>
                                <th class="w-25"> {{ __('reason') }} </th>
                                <th class="w-100"> {{ __('description') }} </th>
                                <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection