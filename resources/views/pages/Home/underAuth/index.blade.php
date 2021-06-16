@extends('layout.master')

@section('page-title')
    Dashboard
@endsection

@section('page-content')
<div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-5 m-0 " style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-light text-decoration-none">HOME</a></li>
                        <li class="text-color-light active">Dashboard</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Dashboard</h1>
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
</div>
@endsection

@section('page-js')

@endsection
