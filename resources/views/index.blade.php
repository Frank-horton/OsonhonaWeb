@extends('include.app')
@section('header')
<script src="{{ asset('asset/script/index.js') }}"></script>
@endsection
@section('content')
<section class="section">
    <div class="row">
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('properties') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="box"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $properties }} </p>
                    <h4 class="mt-3 fw-normal mb-0"> {{ __('properties') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('users') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="users"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $users }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('users') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('reels') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="play-circle"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $reels }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('reels') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('notification') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="bell"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $notifications }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('notification') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('support') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="archive"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $support }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('support') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('reports') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="info"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $reports }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('reports') }}</h4>
                </div>
            </a>
        </div>
        <div class="dashboard-card col-lg-3 col-md-6">
            <a href="{{ route('faqs') }}" class="dashboard-blog">
                <span></span>
                <span></span>
                <div class="dashboard-blog-content-left">
                    <div class="dashboard-blog-icon">
                        <i data-feather="help-circle"></i>
                    </div>
                </div>
                <div class="dashboard-blog-content-right">
                    <p> {{ $faqs }} </p>
                    <h4 class="mt-3 fw-normal mb-0">{{ __('faqs') }}</h4>
                </div>
            </a>
        </div>

    </div>
</section>
@endsection