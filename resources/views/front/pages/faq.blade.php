@extends('front.includes.layout')

@section('preloader')
    @include('front.includes.preloader')
@endsection

@section('content')
    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    @include('front.includes.header')
    <!--=====HEADER ENDS=======-->

    <!--===== HERO AREA STARTS =======-->
    <div class="inner-header-area">
        <div class="containe-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-header heading1">
                        <h2>Frequently Asked Question</h2>
                        <div class="space28"></div>
                        <p><a href="index.html">Home</a> <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="16" viewBox="0 0 9 16" fill="none">
                                <path d="M1.5 1.74997L7.75 7.99997L1.5 14.25" stroke="#1B1B1B" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Frequently Asked Question</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-images">
                        <img src="assets/img/all-images/hero/hero-img9.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== FAQ AREA STARTS =======-->
    <div class="faq-inner-section-area sp1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-widget-area">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All Question</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">General Question</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Buying Property</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact1" type="button" role="tab"
                                    aria-controls="pills-contact1" aria-selected="false">Selling Property</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact2" type="button" role="tab"
                                    aria-controls="pills-contact2" aria-selected="false">Renting & Investment</button>
                            </li>
                        </ul>
                        <div class="space48"></div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                                aria-expanded="false" aria-controls="collapseFive">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample2">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                                aria-expanded="true" aria-controls="collapseSix">
                                                                What hidden costs should I expect when buying a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                                aria-expanded="false" aria-controls="collapseSeven">
                                                                What is the difference between freehold best property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeven" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                                aria-expanded="false" aria-controls="collapseEight">
                                                                How do I determine the right price for my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEight" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                                aria-expanded="false" aria-controls="collapseNine">
                                                                What is the difference between leasehold property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNine" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                                aria-expanded="false" aria-controls="collapseTen">
                                                                What is the difference between renting and leasing?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample2">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample3">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                                aria-expanded="true" aria-controls="collapseEleven">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEleven" class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                                                aria-expanded="false" aria-controls="collapseTwelve">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwelve" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                                                aria-controls="collapseThirteen">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                                                aria-controls="collapseFourteen">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFifteen" aria-expanded="false"
                                                                aria-controls="collapseFifteen">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFifteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample4">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtysix" aria-expanded="true"
                                                                aria-controls="collapseThirtysix">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtysix" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtyseven"
                                                                aria-expanded="false" aria-controls="collapseThirtyseven">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyseven" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtyeight"
                                                                aria-expanded="false" aria-controls="collapseThirtyeight">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyeight" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtynine" aria-expanded="false"
                                                                aria-controls="collapseThirtynine">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtynine" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFourty"
                                                                aria-expanded="false" aria-controls="collapseFourty">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourty" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample4">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample5">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSixteen" aria-expanded="true"
                                                                aria-controls="collapseSixteen">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSixteen" class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSeventeen" aria-expanded="false"
                                                                aria-controls="collapseSeventeen">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeventeen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseEightteen" aria-expanded="false"
                                                                aria-controls="collapseEightteen">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEightteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseNineteen" aria-expanded="false"
                                                                aria-controls="collapseNineteen">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNineteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                                                aria-expanded="false" aria-controls="collapseTwenty">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwenty" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample5">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample6">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyone" aria-expanded="true"
                                                                aria-controls="collapseFourtyone">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyone" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtytwo" aria-expanded="false"
                                                                aria-controls="collapseFourtytwo">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtytwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtythree"
                                                                aria-expanded="false" aria-controls="collapseFourtythree">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtythree" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyfour" aria-expanded="false"
                                                                aria-controls="collapseFourtyfour">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyfour" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyfive" aria-expanded="false"
                                                                aria-controls="collapseFourtyfive">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyfive" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample6">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact1" role="tabpanel"
                                aria-labelledby="pills-contact1-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample7">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentyone" aria-expanded="true"
                                                                aria-controls="collapseTwentyone">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentyone"
                                                            class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample7">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentytwo" aria-expanded="false"
                                                                aria-controls="collapseTwentytwo">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentytwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample7">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentythree"
                                                                aria-expanded="false" aria-controls="collapseTwentythree">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentythree" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample7">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentyfour" aria-expanded="false"
                                                                aria-controls="collapseTwentyfour">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentyfour" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample7">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentyfive" aria-expanded="false"
                                                                aria-controls="collapseTwentyfive">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentyfive" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample7">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample8">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtySix" aria-expanded="true"
                                                                aria-controls="collapseFourtySix">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtySix" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample8">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtySeven"
                                                                aria-expanded="false" aria-controls="collapseFourtySeven">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtySeven" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample8">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyEight"
                                                                aria-expanded="false" aria-controls="collapseFourtyEight">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyEight" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample8">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyNine" aria-expanded="false"
                                                                aria-controls="collapseFourtyNine">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyNine" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample8">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFourtyTen" aria-expanded="false"
                                                                aria-controls="collapseFourtyTen">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFourtyTen" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample8">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                aria-labelledby="pills-contact2-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample9">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentysix" aria-expanded="true"
                                                                aria-controls="collapseTwentysix">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentysix"
                                                            class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample9">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentyseven"
                                                                aria-expanded="false" aria-controls="collapseTwentyseven">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentyseven" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample9">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentyeight"
                                                                aria-expanded="false" aria-controls="collapseTwentyeight">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentyeight" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample9">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwentynine" aria-expanded="false"
                                                                aria-controls="collapseTwentynine">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwentynine" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample9">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThirty"
                                                                aria-expanded="false" aria-controls="collapseThirty">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirty" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample9">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample10">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtyone" aria-expanded="true"
                                                                aria-controls="collapseThirtyone">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyone" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample10">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtytwo" aria-expanded="false"
                                                                aria-controls="collapseThirtytwo">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtytwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample10">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtythree"
                                                                aria-expanded="false" aria-controls="collapseThirtythree">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtythree" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample10">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtyfour" aria-expanded="false"
                                                                aria-controls="collapseThirtyfour">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyfour" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample10">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThirtyfive" aria-expanded="false"
                                                                aria-controls="collapseThirtyfive">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThirtyfive" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample10">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                                aria-labelledby="pills-contact3-tab" tabindex="0">
                                <div class="faq-section-area">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample11">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                                aria-expanded="true" aria-controls="collapse1">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse1" class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample11">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                                aria-expanded="false" aria-controls="collapse2">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse2" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample11">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                                aria-expanded="false" aria-controls="collapse3">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse3" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample11">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                                aria-expanded="false" aria-controls="collapse4">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse4" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample11">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                                aria-expanded="false" aria-controls="collapse5">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse5" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample11">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordian-area">
                                                <div class="accordion" id="accordionExample12">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                                aria-expanded="true" aria-controls="collapse6">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse6" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample12">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                                aria-expanded="false" aria-controls="collapse7">
                                                                How do I calculate my on investment (ROI) real estate?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse7" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample12">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                                aria-expanded="false" aria-controls="collapse8">
                                                                How much down payment do I need to buy a home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse8" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample12">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                                aria-expanded="false" aria-controls="collapse9">
                                                                Do I need a real estate agent to buy or sell a property?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse9" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample12">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space20"></div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse10"
                                                                aria-expanded="false" aria-controls="collapse10">
                                                                Do I have to pay taxes when selling my home?
                                                            </button>
                                                        </h2>
                                                        <div id="collapse10" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample12">
                                                            <div class="accordion-body">
                                                                <p>Navigating the real estate market can been overwhelming,
                                                                    whether you're buying your first home, selling property,
                                                                    or investing in real estate. Housa, we understand that
                                                                    every decision involves crucial details, from financing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== FAQ AREA ENDS =======-->
@endsection

@section('footer')
    @include('front.includes.footer')
@endsection
