@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/user.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header" id="reloadContentForBlockStatus">
            <div class="page-title w-100">
                <div class="d-flex align-items-center justify-content-between align-items-center">
                    <div class="d-flex align-items-center ">
                        <div class="userDetailImage">
                            @if ($user->profile != null)
                            <img src="{{ $user->profile }}" alt="" class="img-fluid">
                            @else
                            <img src="{{ asset('public/asset/image/default.png') }}" alt="" class="img-fluid">
                            @endif
                        </div>
                        <h4 class="mb-0 fw-normal ms-2">
                            <span class="d-flex align-items-center">
                                {{ $user->fullname }}
                                @if ($user->is_verified == 2)
                                <img src="{{ asset('asset/image/verified.svg') }}" alt="verified" class="verified-badge">
                                @endif
                                <h5 class="mb-0 ms-2 user_type">
                                    @if($user->user_type == 0)
                                    Buyer
                                    @elseif($user->user_type == 1)
                                    Seller
                                    @elseif($user->user_type == 2)
                                    Broker
                                    @elseif($user->user_type == 3)
                                    Agency
                                    @endif
                                </h5>
                            </span>
                            <span class="mt-1 fw-400 fs-6 text-muted d-block">{{ $user->email }}</span>
                        </h4>
                        <div class="d-flex  text-center">
                            <div class="px-3 ms-1 border-start border-end">
                                <h4 class="p-0"> {{ $user->followers ?? 0 }} </h4>
                                <span class="mt-1 d-block">{{ __('followers') }}</span>
                            </div>
                            <div class="px-3 border-end">
                                <h4 class="p-0"> {{ $user->following ?? 0 }} </h4>
                                <span class="mt-1 d-block">{{ __('following') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-header-right d-flex align-items-center">
                        @if ($user->is_block == 0)
                        <div class="User-badge">
                            <a href="#" class="ms-3 btn btn-danger px-4 text-white blockUserBtn" rel="{{ $user->id }}" data-tooltip="Block user">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="18" y1="8" x2="23" y2="13"></line>
                                    <line x1="23" y1="8" x2="18" y2="13"></line>
                                </svg>
                                <span class="ms-2"> {{__('blockUser')}} </span>
                            </a>
                        </div>
                        @else
                        <div class="User-badge">
                            <a href="#" class="ms-3 btn btn-success px-4 text-white unblockUserBtn" rel="{{ $user->id }}" data-tooltip="Block user">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="ms-2">{{__('unblockUser')}} </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-items-end justify-content-between">
                        <div class="otherDetails d-flex align-items-start justify-content-between">
                            <ul class="d-flex align-items-start justify-content-between flex-column">
                                <li>
                                    <span>{{ __('mobileNumber') }}</span>: {{ $user->mobile_no }}
                                </li>
                                <li>
                                    <span>{{ __('about') }}</span>: {{ $user->about ?? __('notProvided') }}
                                </li>
                                <li>
                                    <span>{{ __('address') }}</span>: {{ $user->address ?? __('notProvided') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="card-tab">
            <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="property-tab" data-bs-toggle="tab" data-bs-target="#property-panel" type="button" role="tab" aria-controls="property-panel" aria-selected="false"> {{ __('property')}} </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reel-tab" data-bs-toggle="tab" data-bs-target="#reel-panel" type="button" role="tab" aria-controls="reel-panel" aria-selected="false"> {{ __('reel')}} </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="property-panel" role="tabpanel" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0 fw-normal d-flex align-items-center">
                            {{ __('property') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped w-100" id="userPropertyTable">
                            <thead>
                                <tr>
                                    <th width="150px"> {{ __('propertyImage') }} </th>
                                    <th> {{ __('property') }} </th>
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
            </div>
            <div class="tab-pane" id="reel-panel" role="tabpanel" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0 fw-normal d-flex align-items-center">
                            {{ __('reel') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped w-100" id="userReelsTable">
                            <thead>
                                <tr>
                                    <th width="100px"> {{ __('reel') }}</th>
                                    <th class="w-25">{{ __('property') }}</th>
                                    <th>{{ __('likes') }}</th>
                                    <th>{{ __('comments') }}</th>
                                    <th>{{ __('views') }}</th>
                                    <th width="250px" style="text-align: right"> {{ __('action')}} </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" name="" id="userId" value="{{$user->id}}">
@endsection