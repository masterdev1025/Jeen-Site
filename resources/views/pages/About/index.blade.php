@extends('layout.master')

@section('page-title')
    About Us
@endsection

@section('page-content')
<div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-5 m-0 " style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="" class="text-color-light text-decoration-none">HOME</a></li>
                        <li class="text-color-light active">About Us</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0 mb-0">
        <div class="container pt-3 pb-4">
            <div class="row justify-content-around">
                <div class="col-12 col-md-4 pt-5">
                    <img src="{{ asset('assets/img/jeen_bldg.png') }}" alt="Jeen International Extracts" class="img-fluid">
                </div>
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-0">Meet Jeen</h2>
                    <div class="divider divider-primary divider-small mb-4">
                        <hr class="mr-auto">
                    </div>
                    <p class="mt-4">
                        JEEN International is a privately held global supplier for the Personal Care, Cosmetic, Flavor & Fragrance, and Pharmaceutical markets.
                        We offer a broad range of ingredients and solutions that cater to the ever-evolving needs of the markets we serve. Our core competence is in the development and production of universally
                        approved broad-spectrum preservatives, sensory modifiers, texturizing agents, natural ingredients and sustainable solutions.
                        Over the last decade, we’ve expanded our innovative technology initiatives to offer efficacious plant-derived actives and eco-friendly manufacturing solutions, while maintaining our
                        excellence in regulatory compliance.  We are a recognized, value-add supplier to over 3,000 customers and  20+ global distributors with active sales in over 40+ countries.
                        Our customer portfolio consists of top multinationals, as well as global and emerging indie brands. We are highly engaged with the consumer products community through our
                        memberships with the following organizations:
                        <ul>
                            <li>Personal Care Products Council</li>
                            <li>Society of Cosmetic Chemists</li>
                            <li>Sales Association of the Chemical Industry</li>
                            <li>Roundtable on Sustainable Palm Oil Development</li>
                        </ul>

                        JEEN International is ISO 9001:2015 certified, FDA registered and RSPO MB certified. 2021 marks our 25 years of dedication and entrepreneurial approach to beauty.
                    </p>

                    <!--<a class="mt-3" href="about">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>-->
                </div>
                <!--
                <div class="col-lg-4">
                    <h4 class="mb-0">Our Commitment</h4>
                    <div class="divider divider-primary divider-small mb-4">
                        <hr class="mr-auto">
                    </div>
                    <p class="mt-4 mb-0">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                </div>
                -->
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0 bg-primary">
        <div class="container">
            <div class="row counters counters-text-light row-cols-auto">
                <div class="col">
                    <div class="counter mb-4 mt-4">

                        <strong data-to="2">0</strong>
                        <label class="mt-3">Warehouses</label>
                    </div>
                </div>
                <div class="col">
                    <div class="counter mb-4 mt-4">

                        <strong data-to="40" data-append="+">0</strong>
                        <label class="mt-3">Countries of<br>Active Sales</label>
                    </div>
                </div>
                <div class="col">
                    <div class="counter mb-4 mt-4">

                        <strong data-to="32" >0</strong>
                        <label class="mt-3">Global Distributors</label>
                    </div>
                </div>

                <div class="col">
                    <div class="counter mb-4 mt-4">

                        <strong data-to="70" data-append="%+">0</strong>
                        <label class="mt-3">Core Business with<br>Multinational Brands</label>
                    </div>
                </div>
                <div class="col">
                    <div class="counter mb-4 mt-4">

                        <strong data-to="3000" data-append="+">0</strong>
                        <label class="mt-3">Active Accounts</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pt-4" id="practice-areas">
        <h1 class="mb-3 text-center text-color-primary font-weight-medium" >Jeen International Certifications</h1>
        <div class="container py-5 ">
            <div class="row row-gutter-sm justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                    <a data-toggle="modal" data-target="#isoModal" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 card-custom1 h-100">
                            <div class="card-body vcenter-item justify-content-center p-1">
                                <img class="mt-2  pb-3" width="100" src="{{ asset('assets/img/jeen_iso.png') }}" alt=""  />

                            </div>
                            <h2 class="bg-primary card-title alternative-font-4 text-color-dark font-weight-semibold line-height-2 text-4 mb-3 text-center">
                                ISO 9001:2015<br>Certified
                            </h2>
                        </div>

                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                    <a data-toggle="modal" data-target="#rspoModal" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 card-custom2 h-100">
                            <div class="card-body vcenter-item justify-content-center p-1">
                                <img class="mt-2 pb-3" width="100" src="{{ asset('assets/img/jeen_rspo.png') }}" alt=""  />
                            </div>
                            <h2 class="bg-primary card-title alternative-font-4 text-color-dark font-weight-semibold line-height-2 text-4 mb-3 text-center">
                                RSPO Mass Balance<br>Supply Chain Certification
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                    <a href="/products" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 card-custom3 h-100">
                            <div class="card-body vcenter-item justify-content-center p-1">
                                <img class="mt-2 pb-3" width="100" src="{{asset('assets/img/jeen_fda.png') }}" alt=""  />
                            </div>
                            <h2 class="bg-primary card-title alternative-font-4 text-color-dark font-weight-semibold line-height-2 text-4 mb-3 text-center">
                                FDA Registered<br>
                                (2020)
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-5 m-0 " style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center" style="padding: 50px">
                    <h1 class="mb-2 text-center text-color-light font-weight-bold text-10">Global Footprint</h1>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="isoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jeen ISO Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 150px">
                <img src="{{ asset('/assets/img/jeen_iso_2021.jpg') }}"  class="img-fluid ">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="rspoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jeen RSPO Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0px 150px">
                <img src="{{ asset('/assets/img/jeen_rspo_2021.jpg') }}"  class="img-fluid ">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')

@endsection
