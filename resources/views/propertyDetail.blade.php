@extends('include.app')
@section('header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="{{ asset('asset/script/user.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".sideBarli").removeClass("activeLi");
        $(".propertiesSideA").addClass("activeLi");
    });
</script>
@endsection
@section('content')
<input type="hidden" name="" id="property_id" value="{{ $property->id }}">
<section class="section" id="updatedReload">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <h4 class="mb-0 fw-normal ">
                    {{ $property->title }}
                    <h5 class="mb-0 user_type">
                        {{ $propertyType->title }}
                    </h5>
                </h4>
            </div>
            <div class="d-flex">
                <button class="btn btn-success d-flex align-items-center me-3 editThisProperty" rel="{{ $property->id }}" data-user_id="{{ $user->id }}" data-property_category="{{ $property->property_category }}" data-furniture="{{ $property->furniture }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit me-2">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    {{ __('editProperty') }}
                </button>
                <button class="btn btn-danger d-flex align-items-center deleteThisProperty" rel="{{ $property->id }}" data-user_id="{{ $user->id }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 me-2">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                    {{ __('deleteProperty') }}
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="property_detail">
                <div class="row">
                    <div class="col-md-8">
                        @if (count($medias) < 1) <div class="media-gallery">
                            <a class="image-item image-1" width="200">
                                <img src="{{ asset('asset/image/default.png') }}" />
                            </a>
                            <a class="image-item image-2" width="200">
                                <img src="{{ asset('asset/image/default.png') }}" />
                            </a>
                            <a class="image-item image-3" width="200">
                                <img src="{{ asset('asset/image/default.png') }}" />
                            </a>
                    </div>
                    @elseif (count($medias) <= 2 && count($medias)==2) <div class="media-gallery">
                        @foreach ($medias as $media)
                        @if ($media->media_type_id != 7)
                        <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" width="200">
                            <img src="{{ $media->content }}" />
                        </a>
                        @else
                        <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" data-thumb="{{ asset('asset/img/video-thumbnail.png')}}" width="200">
                            <video src="{{ $media->content }}" controls class="w-100 h-100"></video>
                        </a>
                        @endif
                        @endforeach
                        <a class="image-item image-3" width="200">
                            <img src="{{ asset('asset/image/default.png') }}" />
                        </a>
                </div>
                @elseif (count($medias) <= 1 || count($medias)==1) <div class="media-gallery">
                    @foreach ($medias as $media)
                    @if ($media->media_type_id != 7)
                    <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" width="200">
                        <img src="{{ $media->content }}" />
                    </a>
                    @else
                    <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" data-thumb="{{ asset('asset/img/video-thumbnail.png')}}" width="200">
                        <video src="{{ $media->content }}" controls class="w-100 h-100"></video>
                    </a>
                    @endif
                    @endforeach
                    <a class="image-item image-2" width="200">
                        <img src="{{ asset('asset/image/default.png') }}" />
                    </a>
                    <a class="image-item image-3" width="200">
                        <img src="{{ asset('asset/image/default.png') }}" />
                    </a>
            </div>
            @else

            <div class="media-gallery">
                @foreach ($medias as $media)
                @if ($media->media_type_id != 7)
                <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" width="200">
                    <img src="{{ $media->content }}" />
                </a>
                @else
                <a class="image-item image-{{ $loop->iteration }}" href="{{ $media->content }}" data-fancybox="gallery" data-thumb="{{ asset('asset/img/video-thumbnail.png')}}" width="200">
                    <video src="{{ $media->content }}" controls class="w-100 h-100"></video>
                </a>
                @endif
                @endforeach
            </div>
            @endif

        </div>

        <div class="col-md-4">
            <div class="porperty_price mb-3">
                <div class="porperty_price_inner">
                    <span>{{ $property->property_available_for == 0 ? __('forSale') : __('forRent') }}</span>
                    <p> {{ $settings->currency }} {{ $property->first_price }} </p>
                </div>
            </div>
            <div class="property_detail_bottom_inner">
                <h6 class="mb-3 fw-normal">
                    <span class="text-muted fw-400">{{ __('societyName') }} :</span>
                    <br>
                    <p>
                        {{ $property->society_name ?? __('notProvided') }}
                    </p>
                </h6>
                <hr>
                <h6 class="mb-3 fw-normal">
                    <span class="text-muted fw-400">{{ __('address') }} :</span>
                    <br>
                    <p>
                        {{ $property->address ?? __('notProvided') }}
                    </p>
                </h6>
                <hr>
                <div class="d-flex align-items-start justify-content-between">
                    <div class="bed_bathroom flex-wrap">
                        <h5 class="mb-0">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 14.25V9.75C1.5 9.4125 1.56875 9.10625 1.70625 8.83125C1.84375 8.55625 2.025 8.3125 2.25 8.1V6C2.25 5.375 2.46875 4.84375 2.90625 4.40625C3.34375 3.96875 3.875 3.75 4.5 3.75H7.5C7.7875 3.75 8.05625 3.80325 8.30625 3.90975C8.55625 4.01625 8.7875 4.163 9 4.35C9.2125 4.1625 9.44375 4.01575 9.69375 3.90975C9.94375 3.80375 10.2125 3.7505 10.5 3.75H13.5C14.125 3.75 14.6562 3.96875 15.0937 4.40625C15.5312 4.84375 15.75 5.375 15.75 6V8.1C15.975 8.3125 16.1562 8.55625 16.2937 8.83125C16.4312 9.10625 16.5 9.4125 16.5 9.75V14.25H15V12.75H3V14.25H1.5ZM9.75 7.5H14.25V6C14.25 5.7875 14.178 5.60925 14.034 5.46525C13.89 5.32125 13.712 5.2495 13.5 5.25H10.5C10.2875 5.25 10.1092 5.322 9.96525 5.466C9.82125 5.61 9.7495 5.788 9.75 6V7.5ZM3.75 7.5H8.25V6C8.25 5.7875 8.178 5.60925 8.034 5.46525C7.89 5.32125 7.712 5.2495 7.5 5.25H4.5C4.2875 5.25 4.10925 5.322 3.96525 5.466C3.82125 5.61 3.7495 5.788 3.75 6V7.5ZM3 11.25H15V9.75C15 9.5375 14.928 9.35925 14.784 9.21525C14.64 9.07125 14.462 8.9995 14.25 9H3.75C3.5375 9 3.35925 9.072 3.21525 9.216C3.07125 9.36 2.9995 9.538 3 9.75V11.25Z" fill="#A6A6A6" />
                            </svg>
                            <span> {{ $property->bedrooms }} {{ __('bedrooms') }} </span>
                        </h5>
                        <h5 class="mb-0">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 9H15M15 9H3M15 9V10.5C15 11.3535 14.5628 12.936 12.9413 13.3807M3 9C2.80109 9 2.61032 8.92098 2.46967 8.78033C2.32902 8.63968 2.25 8.44891 2.25 8.25V5.25C2.25 4.5 2.7 3 4.5 3C6.3 3 6.75 4.5 6.75 5.25M3 9V10.5C3 11.3535 3.43725 12.936 5.05875 13.3807M6.75 5.25H8.25M6.75 5.25H5.25M5.05875 13.3807C5.36571 13.4626 5.68232 13.5028 6 13.5H12C12.351 13.5 12.6638 13.4572 12.9413 13.3807M5.05875 13.3807L4.5 15M12.9413 13.3807L13.5 15" stroke="#A6A6A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span> {{ $property->bathrooms }} {{ __('bathrooms') }} </span>
                        </h5>
                        <h5 class="mb-0">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_80_42)">
                                    <path d="M1.62021 0.0597668C1.29482 0.139454 0.730367 0.478125 0.55771 0.683985C0.185835 1.12227 0.0397416 1.52734 0.0397416 2.0918C0.033101 2.53008 0.0596635 2.68281 0.205757 2.98828C0.484663 3.57266 0.942867 3.97109 1.56044 4.15039C1.78623 4.2168 1.83271 4.26328 1.87255 4.45586C1.89912 4.58203 2.15146 6.53437 2.43037 8.79219C2.76904 11.5148 2.91513 12.916 2.86865 12.9359C2.63623 13.009 2.17138 13.4008 1.99209 13.6664C1.24834 14.7887 1.64013 16.2297 2.84873 16.7941C3.70537 17.1926 4.82763 16.9203 5.37216 16.1832C5.65771 15.7914 5.75732 15.5656 5.83037 15.1473L5.87685 14.8551L8.91162 14.0582L11.9464 13.2613L12.2519 13.6C12.6901 14.0914 13.1683 14.3039 13.8124 14.3105C14.669 14.3105 15.353 13.8723 15.7315 13.082C15.9772 12.5574 15.9772 11.8004 15.7183 11.309C15.5124 10.9105 15.1737 10.5453 14.855 10.3859C14.7421 10.3262 14.6358 10.273 14.6226 10.2598C14.6093 10.2465 15.0343 6.96601 15.1073 6.52109C15.1405 6.35508 15.1804 6.30859 15.2933 6.30859C15.5323 6.30859 16.0835 6.00976 16.3624 5.7375C17.1726 4.93398 17.1726 3.5793 16.3624 2.7625C15.7581 2.1582 14.762 1.97891 14.0116 2.33086C13.6132 2.52344 13.2081 2.88203 13.0487 3.1875C12.989 3.30039 12.9226 3.38672 12.896 3.38672C12.8694 3.38672 12.5042 3.32695 12.0858 3.25391C11.6675 3.18086 11.2757 3.12109 11.2159 3.12109C11.1362 3.12109 11.0897 3.23398 11.03 3.59922C10.9901 3.8582 10.9769 4.09062 11.0034 4.11719C11.03 4.14375 11.4019 4.2168 11.8202 4.2832C12.6968 4.41601 12.8163 4.4625 12.8163 4.66836C12.8163 5.08008 13.3741 5.85039 13.8456 6.08945C13.9585 6.14922 14.0515 6.1957 14.0647 6.20898C14.078 6.22227 13.653 9.50273 13.58 9.94766C13.5468 10.1137 13.5069 10.1602 13.394 10.1602C13.155 10.1602 12.6038 10.4523 12.3249 10.7246C12.0327 11.0168 11.7737 11.5215 11.714 11.9332C11.694 12.0859 11.6343 12.2254 11.5944 12.2387C11.5479 12.2586 10.18 12.6238 8.54638 13.0555L5.58466 13.8324L5.27255 13.4871C4.9538 13.1285 4.6417 12.9359 4.26982 12.8496C4.15029 12.8297 4.0374 12.7832 4.01748 12.7566C3.93779 12.6172 2.91513 4.08398 2.98154 4.06406C3.26709 3.97109 3.75849 3.50625 4.01748 3.09453C4.07724 2.99492 4.15029 3.00156 4.87412 3.12109C5.30576 3.20078 5.67099 3.24727 5.69091 3.22734C5.7374 3.18086 5.87021 2.26445 5.83701 2.23125C5.82373 2.21133 5.51162 2.15156 5.14638 2.0918C4.3163 1.95898 4.18349 1.90586 4.18349 1.71328C4.17685 1.25508 3.60576 0.517969 3.03466 0.219141C2.68271 0.046484 1.98544 -0.0398426 1.62021 0.0597668ZM2.70927 1.2418C3.04794 1.49414 3.15419 1.70664 3.15419 2.125C3.15419 2.41719 3.12099 2.56328 3.01474 2.69609C2.5499 3.32695 1.73974 3.34688 1.2749 2.73594C1.02255 2.40391 1.01591 1.85273 1.2749 1.51406C1.37451 1.38789 1.5538 1.23516 1.67334 1.16875C1.95224 1.0293 2.47021 1.0625 2.70927 1.2418ZM15.3198 3.29375C15.6186 3.43984 15.8776 3.78516 15.9175 4.10391C16.0503 5.11328 14.855 5.7043 14.1378 4.98711C13.3077 4.15703 14.2573 2.7957 15.3198 3.29375ZM14.2308 11.2492C14.9214 11.5348 15.0808 12.4113 14.5429 12.9492C14.1046 13.3875 13.5069 13.3941 13.0753 12.9559C12.2519 12.1391 13.1616 10.7977 14.2308 11.2492ZM4.13701 13.9055C4.42255 14.0184 4.70146 14.357 4.75459 14.6426C4.82099 15.0145 4.72802 15.3199 4.4624 15.5988C4.0374 16.0504 3.4331 16.0504 2.98818 15.6055C2.16474 14.782 3.06123 13.4539 4.13701 13.9055Z" fill="#A6A6A6" />
                                    <path d="M6.85313 2.84219C6.80664 3.10117 6.77344 3.34023 6.77344 3.37344C6.77344 3.4332 7.46406 3.58594 7.71641 3.58594C7.78945 3.58594 7.8293 3.48633 7.8625 3.24727C7.88906 3.05469 7.92891 2.82227 7.94219 2.72266C7.98203 2.55 7.96875 2.54336 7.63672 2.49687C7.44414 2.47031 7.20508 2.43711 7.10547 2.41719C6.93281 2.37734 6.92617 2.38398 6.85313 2.84219Z" fill="#A6A6A6" />
                                    <path d="M8.9979 2.94843C8.97798 3.06132 8.93813 3.29374 8.90493 3.4664L8.85181 3.78515L9.05767 3.81835C9.17056 3.83828 9.40298 3.87812 9.57563 3.91132L9.89438 3.96445L9.92759 3.75859C9.94751 3.6457 9.98735 3.41328 10.0206 3.24062L10.0737 2.92187L9.86782 2.88867C9.75493 2.86874 9.52251 2.8289 9.34985 2.7957L9.0311 2.74257L8.9979 2.94843Z" fill="#A6A6A6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_80_42">
                                        <rect width="17" height="17" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span> {{ $property->area }} Sqft. </span>
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start justify-content-between">
                    <div class="utilities_grid">
                        <p class="mb-0">
                            <span>{{ __('carParking') }} - {{ $property->car_parkings }}</span>
                        </p>
                        <p class="mb-0">
                            <span>{{ __('floorNumber') }} - {{ $property->floor_number }}</span>
                        </p>
                        <p class="mb-0">
                            <span>{{ __('facing') }} - {{ $property->facing }}</span>
                        </p>
                        <p class="mb-0">
                            <span>{{ __('totalFloors') }} - {{ $property->total_floors }}</span>
                        </p>
                        <p class="mb-0">
                            <span>{{ __('builtYear') }} - {{ $property->built_year }}</span>
                        </p>
                        <p class="mb-0">
                            <span>{{ __('maintenance') }} / Mo. - {{ $settings->currency }} {{ $property->maintenance_month }}</span>
                        </p>
                        @if( $property->second_price != 0 || $property->second_price != null)
                        <p class="mb-0">
                            <span> {{ __('secondPrice') }} - {{ $settings->currency }} {{ $property->second_price }} / sqft </span>
                        </p>
                        @endif
                        <p class="mb-0">
                            <span>{{ $property->furniture == 0 ? __('nonFurnished') : __('furnished') }}</span>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="">
                    <div class="d-flex align-items-center ">
                        <div class="userDetailImage">
                            @if ($user->profile != null)
                            <img src="{{ $user->profile }}" alt="" class="img-fluid">
                            @else
                            <img src="{{ asset('public/asset/image/default.png') }}" alt="" class="img-fluid">
                            @endif
                        </div>
                        <h6 class="mb-0 fw-normal ms-2">
                            <span class="d-flex align-items-center">
                                <a href="../usersDetail/{{ $user->id }}">
                                    {{ $user->fullname }}
                                </a>
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
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 col-12">
            <h6 class="fw-normal">
                <span class="text-muted fw-400">{{ __('about') }} :</span>
                <br>
                <p>
                    {{ $property->about ?? __('notProvided')  }}
                </p>
            </h6>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="mb-3">
        <div class="card-tab">
            <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-panel" type="button" role="tab" aria-controls="media-panel" aria-selected="false"> {{ __('media')}} </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reel-tab" data-bs-toggle="tab" data-bs-target="#reel-panel" type="button" role="tab" aria-controls="reel-panel" aria-selected="false"> {{ __('reel')}} </button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane show active" id="media-panel" role="tabpanel" tabindex="0">
            <div class="card">
                <div class="card-header justify-content-between">
                    <nav class="card-tab mb-0">
                        <div class="nav nav-tabs flex-nowrap" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="all-media-tab" data-bs-toggle="tab" data-bs-target="#all-media" type="button" role="tab" aria-controls="all-media" aria-selected="true">
                                {{ __('allMedia') }}
                            </button>
                            <button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="false">
                                {{ __('overview') }}
                            </button>
                            <button class="nav-link" id="bedroom-tab" data-bs-toggle="tab" data-bs-target="#bedroom" type="button" role="tab" aria-controls="bedroom" aria-selected="false">
                                {{ __('bedrooms') }}
                            </button>
                            <button class="nav-link" id="bathroom-tab" data-bs-toggle="tab" data-bs-target="#bathroom" type="button" role="tab" aria-controls="bathroom" aria-selected="false">
                                {{ __('bathrooms') }}
                            </button>
                            <button class="nav-link" id="floorPlan-tab" data-bs-toggle="tab" data-bs-target="#floorPlan" type="button" role="tab" aria-controls="floorPlan" aria-selected="false">
                                {{ __('floorPlan') }}
                            </button>
                            <button class="nav-link" id="otherImage-tab" data-bs-toggle="tab" data-bs-target="#otherImage" type="button" role="tab" aria-controls="otherImage" aria-selected="false">
                                {{ __('otherImages') }}
                            </button>
                            <button class="nav-link" id="threeSixty-tab" data-bs-toggle="tab" data-bs-target="#threeSixty" type="button" role="tab" aria-controls="threeSixty" aria-selected="false">
                                {{ __('threeSixtyView') }}
                            </button>
                            <button class="nav-link" id="propertyVideo-tab" data-bs-toggle="tab" data-bs-target="#propertyVideo" type="button" role="tab" aria-controls="propertyVideo" aria-selected="false">
                                {{ __('propertyVideo') }}
                            </button>
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane show active" id="all-media" role="tabpanel" aria-labelledby="all-media-tab" tabindex="0">
                            <table class="table table-striped" id="userPropertyMediaTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="overview" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaOverviewTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="bedroom" role="tabpanel" aria-labelledby="bedroom-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaBedroomTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="bathroom" role="tabpanel" aria-labelledby="bathroom-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaBathroomTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="floorPlan" role="tabpanel" aria-labelledby="floorPlan-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaFloorPlanTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="otherImage" role="tabpanel" aria-labelledby="otherImage-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaOtherImageTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="threeSixty" role="tabpanel" aria-labelledby="threeSixty-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaThreeSixtyTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="propertyVideo" role="tabpanel" aria-labelledby="propertyVideo-tab" tabindex="0">
                            <table class="table table-striped w-100" id="propertyMediaPropertyVideoTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('media') }} </th>
                                        <th> {{ __('mediaCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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
                    <table class="table table-striped w-100" id="propertyReelsTable">
                        <thead>
                            <tr>
                                <th width="100px"> {{ __('reel') }}</th>
                                <th>{{ __('description') }}</th>
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


</section>
<!-- Edit Property Modal -->
<div class="modal fade" id="editPropertyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header align-items-start">
                <div>
                    <span class="fw-normal w-100 d-block">
                        {{ __('editProperty') }}
                    </span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editPropertyForm" method="post">
                <div class="modal-body">
                    <ul class="nav nav-tabs editPropertyTab flex-nowrap" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">{{ __('overview') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">{{ __('attributes') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">{{ __('pricing') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="tab-inner-content">
                                <div class="form-group">
                                    <label for="title" class="form-label">{{ __('title') }}</label>
                                    <input type="text" class="form-control" name="title" id="editPropertyTitle" required="" value="{{ $property->title }}">
                                </div>
                                <div class="row">
                                    @if( $property->property_category == 0)
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bedrooms" class="form-label">{{ __('bedrooms') }}</label>
                                            <input type="text" class="form-control" name="bedrooms" id="editBedrooms" required="" value="{{ $property->bedrooms }}">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bathrooms" class="form-label">{{ __('bathrooms') }}</label>
                                            <input type="text" class="form-control" name="bathrooms" id="editBathrooms" required="" value="{{ $property->bathrooms }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="area" class="form-label">{{ __('area') }}</label>
                                    <input type="text" class="form-control" name="area" id="editArea" required="" value="{{ $property->area }}">
                                </div>
                                <div class="form-group">
                                    <label for="about" class="form-label">{{ __('aboutProperty') }}</label>
                                    <textarea name="about" id="editAboutProperty" cols="30" rows="10" class="form-control">{{ $property->about }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label">{{ __('address') }}</label>
                                    <textarea name="address" id="editPropertyAddress" cols="30" rows="10" class="form-control">{{ $property->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="tab-inner-content">
                                <div class="form-group">
                                    <label for="society_name" class="form-label">{{ __('societyName') }}</label>
                                    <input type="text" class="form-control" name="society_name" id="editSocietyName" required="" value="{{ $property->society_name }}">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="built_year" class="form-label">{{ __('builtYear') }}</label>
                                            <input type="text" class="form-control" name="built_year" id="editBuiltYear" required="" value="{{ $property->built_year }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="furniture" class="form-label">{{ __('furniture') }}</label>
                                            <select name="furniture" id="editFurniture" class="form-control">
                                                @if( $property->furniture == 0)
                                                <option value="0" selected> {{ __('nonFurnished') }} </option>
                                                <option value="1"> {{ __('furnished') }} </option>
                                                @else
                                                <option value="0"> {{ __('nonFurnished') }} </option>
                                                <option value="1" selected> {{ __('furnished') }} </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="total_floors" class="form-label">{{ __('totalFloors') }}</label>
                                    <select name="total_floors" id="total_floors" class="form-control">
                                        @for ($i = 1; $i <= env('MAX_FLOOR'); $i++) <option value="{{ $i }}" {{ $property->total_floors == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="floor_number" class="form-label">{{ __('floorNumber') }}</label>
                                    <select name="floor_number" id="floor_number" class="form-control">
                                        @for ($i = 0; $i < env('MAX_FLOOR'); $i++) <option value="{{ $i }}" {{ $property->floor_number == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="car_parkings" class="form-label">{{ __('carParking') }}</label>
                                    <select name="car_parkings" id="car_parking" class="form-control">
                                        @for ($i = 0; $i <= env('CAR_PARKING'); $i++) <option value="{{ $i }}" {{ $property->car_parkings == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="form-group currency-input">
                                    <label for="maintenance_month" class="form-label">{{ __('maintenanceMonth') }}</label>
                                    <span class="currency-symbol">{{ $settings->currency }} </span>
                                    <input type="text" class="form-control" name="maintenance_month" id="editMaintenanceMonth" required="" value="{{ $property->maintenance_month }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="tab-inner-content">
                                <div class="form-group">
                                    <label for="For" class="form-label">{{ __('available') }}</label>
                                    <div class="radioCheckboxBg">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="property_available_for" id="flexRadioDefault1" value="0" {!! $property->property_available_for == 0 ? 'checked' : '' !!} >
                                            <label class="form-check-label" for="flexRadioDefault1"> {{ __('forSale') }} </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="property_available_for" id="flexRadioDefault2" value="1" {!! $property->property_available_for == 1 ? 'checked' : '' !!}>
                                            <label class="form-check-label" for="flexRadioDefault2"> {{ __('forRent') }} </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="forSaleClick" id="box">
                                    <div class="form-group currency-input">
                                        <label for="first_price" class="form-label">{{ __('firstPrice') }}</label>
                                        <span class="currency-symbol">{{ $settings->currency }} </span>
                                        <input type="text" class="form-control" name="first_price" id="editFirstPrice" required="" value="{{ $property->first_price }}">
                                    </div>
                                    <div class="form-group secondPriceGroup currency-input">
                                        <label for="second_price" class="form-label">{{ __('secondPrice')  }} ({{ __('optional')  }}) </label>
                                        <span class="currency-symbol">{{ $settings->currency }} </span>
                                        <input type="text" class="form-control" name="second_price" id="editSecondPrice" value="{{ $property->second_price }}">
                                        <span class="priceOf">/Sqft</span>
                                    </div>
                                </div>
                                <div class="forRentClick" id="box1">
                                    <div class="form-group secondPriceGroup currency-input">
                                        <label for="first_price" class="form-label">{{ __('firstPrice') }} </label>
                                        <span class="currency-symbol">{{ $settings->currency }} </span>
                                        <input type="text" class="form-control" name="first_price1" id="editFirstPrice2" required="" value="{{ $property->first_price }}">
                                        <span class="priceOf">/{{ __('month')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ asset('asset/cdnjs/fancybox.umd.js') }}"></script>
<script>
    var swiper = new Swiper(".editPropertyImageSwiper", {
        slidesPerView: 3.50,
        spaceBetween: 10,
        centerMode: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
    });

    const box = document.getElementById('box');
    const box1 = document.getElementById('box1');

    $(document).ready(function() {
        if (document.getElementById('flexRadioDefault1').checked) {
            box.style.display = 'block';
            box1.style.display = 'none';
        } else {
            box.style.display = 'none';
            box1.style.display = 'block';
        }
    });


    function handleRadioClick() {
        if (document.getElementById('flexRadioDefault1').checked) {
            box.style.display = 'block';
            box1.style.display = 'none';
        } else {
            box.style.display = 'none';
            box1.style.display = 'block';
        }
    }

    const radioButtons = document.querySelectorAll('input[name="property_available_for"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
    });


    Fancybox.bind('[data-fancybox="gallery"]', {
        // Custom options for the second gallery
        Thumbs: false,
        Carousel: {
            infinite: true
        }
    });

    $(function() {
        var numItems = $('.media-gallery').children('a').length;
        if (numItems > 3) {
            $('.image-3').addClass('more_images');
            $('.more_images').append('<span> +' + (numItems - 3) + '</span>');
        }
    });
</script>
@endsection