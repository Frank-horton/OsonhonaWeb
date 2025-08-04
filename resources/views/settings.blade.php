@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/settings.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const awsConfig = @json($awsConfig);
        const doConfig = @json($doConfig);

        const isAwsConfigComplete = Object.values(awsConfig).every(value => value !== null && value !== '');
        const awsRadio = document.getElementById('awsRadio');
        const awsNote = document.getElementById('awsNote');
        if (!isAwsConfigComplete) {
            awsRadio.disabled = true;
            $('#awsNote').removeClass('d-none');
        } else {
            $('#localRadio').attr('checked');
            $('#awsNote').addClass('d-none');
        }

        const isDoConfigComplete = Object.values(doConfig).every(value => value !== null && value !== '');
        const doRadio = document.getElementById('doRadio');
        if (!isDoConfigComplete) {
            doRadio.disabled = true;
            $('#doNote').removeClass('d-none');
        } else {
            $('#localRadio').attr('checked');
            $('#doNote').addClass('d-none');
        }
    });
</script>
@endsection
@section('content')


<section class="section">
    <div class="container-fluid">
        <div class="row ">
            <nav class="card-tab">
                <ul class="flex-nowrap nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('settings')}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('propertyTypes') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('supportSubjects') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-admob-tab" data-bs-toggle="pill" data-bs-target="#pills-admob" type="button" role="tab" aria-controls="pills-admob" aria-selected="false">{{ __('admob') }}</button>
                    </li>
                </ul>
            </nav>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 fw-normal d-flex align-items-center">{{ __('settings')}}</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-border" id="settingsForm" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> {{ __('appName') }}</label>
                                                    <input value="{{ $settings->app_name }}" type="text" name="app_name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="currency"> {{ __('currency') }}</label>
                                                    <input value="{{ $settings->currency }}" type="text" name="currency" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="maximum_limit_schedule_tour_request"> {{ __('maximumLimitScheduleTourRequest') }}</label>
                                                    <input value="{{ $settings->maximum_limit_schedule_tour_request }}" type="text" name="maximum_limit_schedule_tour_request" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="radius_limit_for_reel_near_by"> {{ __('radiusLimitForNearByReels') }} (km)</label>
                                                    <input value="{{ $settings->radius_limit_for_reel_near_by }}" type="text" name="radius_limit_for_reel_near_by" class="form-control" required>
                                                </div>
                                            </div>
                                            <hr>
                                            <h5 class="form-group">{{ __('freePlan') }}</h5>
                                            <hr>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="property_upload_limit"> {{ __('propertyUploadLimit') }}</label>
                                                    <input value="{{ $settings->property_upload_limit }}" type="text" name="property_upload_limit" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="reel_upload_limit"> {{ __('reelUploadLimit') }}</label>
                                                    <input value="{{ $settings->reel_upload_limit }}" type="text" name="reel_upload_limit" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-end m-0">
                                            <button type="submit" class="btn btn-primary text-white mr-1">{{ __('save') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="page-title w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0 fw-semibold">{{ __('storageSetting') }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4">
                                    <form id="storageSettingForm" method="POST">
                                        <div class="card w-auto p-3">
                                            <div class="checkbox-slider d-flex align-items-center justify-content-between">
                                                <div class="form-group m-0">
                                                    <label class="m-0"> {{ __('local') }}</label>
                                                </div>
                                                <label class="switch">
                                                    <input type="radio" name="storage_type" value="0" id="localRadio" class="d-none" {{ $settings->storage_type == 0 ? 'checked' : '' }}>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card w-auto p-3">
                                            <div class="checkbox-slider d-flex align-items-center justify-content-between">
                                                <div class="form-group m-0">
                                                    <label class="m-0"> {{ __('AWSS3') }}</label>
                                                    <br>
                                                    <span id="awsNote" class="text-danger"> {{ __('pleaseAddValuesInEnvFile') }} </span>
                                                </div>
                                                <label class="switch">
                                                    <input type="radio" name="storage_type" value="1" id="awsRadio" class="d-none" {{ $settings->storage_type == 1 ? 'checked' : '' }}>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card w-auto p-3">
                                            <div class="checkbox-slider d-flex align-items-center justify-content-between">
                                                <div class="form-group m-0">
                                                    <label class="m-0"> {{ __('digitalOceanSpace') }}</label>
                                                    <br>
                                                    <span id="doNote" class="text-danger"> {{ __('pleaseAddValuesInEnvFile') }} </span>
                                                </div>
                                                <label class="switch">
                                                    <input type="radio" name="storage_type" value="2" id="doRadio" class="d-none" {{ $settings->storage_type == 2 ? 'checked' : '' }}>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-end m-0">
                                            <button type="submit" class="btn btn-primary text-white mr-1">{{ __('save') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4 class="mb-0 fw-normal d-flex align-items-center"> {{ __('propertyTypes') }}</h4>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#propertyTypeModal">
                                {{ __('addPropertyType') }}
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped w-100" id="propertyTypeTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('title') }} </th>
                                        <th> {{ __('propertyCategory') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4 class="mb-0 fw-normal d-flex align-items-center"> {{ __('supportSubjects') }}</h4>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#supportSubjectModal">
                                {{ __('addSupportSubject') }}
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped w-100" id="supportSubjectTable">
                                <thead>
                                    <tr>
                                        <th> {{ __('subject') }} </th>
                                        <th style="text-align: right; width: 200px;"> {{ __('action') }} </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-admob" role="tabpanel" aria-labelledby="pills-admob-tab" tabindex="0">
                    <form id="admobForm" method="POST">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="card-header">
                                        <h4 class="mb-0 fw-semibold">{{ __('admobAndroid') }}</h4>
                                    </div>
                                    <div class="card-body px-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="title" class="form-label">{{ __('bannerId') }}</label>
                                                    <input type="text" class="form-control" name="banner_id_android" required="" value="{{ $settings->banner_id_android }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="title" class="form-label">{{ __('intersialId') }}</label>
                                                    <input type="text" class="form-control" name="intersial_id_android" required="" value="{{ $settings->intersial_id_android }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="card-header">
                                        <h4 class="mb-0 fw-semibold">{{ __('admobIOS') }}</h4>
                                    </div>
                                    <div class="card-body px-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="title" class="form-label">{{ __('bannerId') }}</label>
                                                    <input type="text" class="form-control" name="banner_id_ios" required="" value="{{ $settings->banner_id_ios }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="title" class="form-label">{{ __('intersialId') }}</label>
                                                    <input type="text" class="form-control" name="intersial_id_ios" required="" value="{{ $settings->intersial_id_ios }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer px-0 pb-0 justify-content-end">
                                            <button type="submit" class="btn theme-btn text-white">{{ __('save') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Support Subject Modal  -->
<div class="modal fade" id="supportSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-normal" id="exampleModalLabel">{{ __('addSupportSubject') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addSupportSubjectForm" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="SupportSubject" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('close') }}</button>
                    <button type="submit" class="btn btn-primary text-white">{{ __('save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Support Subject Modal -->
<div class="modal fade" id="editSupportSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-normal" id="exampleModalLabel">{{ __('editSupportSubject') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editSupportSubjectForm" method="post">
                <input type="hidden" name="" id="supportSubjectId">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="editSupportSubject" required="">
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
<!-- Property Type Modal  -->
<div class="modal fade" id="propertyTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-normal" id="exampleModalLabel">{{ __('addPropertyType') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form-border" id="propertyTypeForm" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label> {{ __('addPropertyType') }}</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label> {{ __('selectPropertyCategory') }}</label>
                        <select name="property_category" id="" class="form-control">
                            <option disabled selected> {{ __('selectOption') }} </option>
                            <option value="0"> {{ __('residential') }} </option>
                            <option value="1"> {{ __('commercial') }} </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('close') }}</button>
                    <button type="submit" class="btn btn-primary text-white">{{ __('save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Support Subject Modal -->
<div class="modal fade" id="editPropertyTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-normal" id="exampleModalLabel">{{ __('editPropertyType') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editPropertyTypeForm" method="post">
                <input type="hidden" name="" id="propertyTypeId">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="form-label">{{ __('title') }}</label>
                        <input type="text" class="form-control" name="title" id="editPropertyType" required="">
                    </div>
                    <div class="form-group">
                        <label> {{ __('selectPropertyCategory') }}</label>
                        <select name="editPropertyCategory" class="form-control" id="editPropertyCategory">
                            <option disabled> {{ __('selectOption') }} </option>
                            <option value="0"> {{ __('residential') }} </option>
                            <option value="1"> {{ __('commercial') }} </option>
                        </select>
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
@endsection