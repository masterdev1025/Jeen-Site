@extends('layout.master')

@section('page-content')
<div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/botanicalsplus_slide1a.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME </a></li>
                        <li><a href="/products" class="text-color-primary text-decoration-none">Product </a></li>
                        <li class="text-color-primary active">{{ $product ? $product['url_alias'] : '' }}</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">{{ $product ? $product['product_name'] : '' }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0 pt-0">
        <div class="container pt-3 pb-4">
            <div class="row mb-6 pb-3 justify-content-md-center">
                <div class="col-md-10" data-jplist-item="">
                    <div class="card">
                        <!--<a href='https://botanicalsplus.com/products/strataphix-aos' class='pLink'>-->

                            <div class="card-img-top" style="
                    background-image: url('<?php echo $product ?  $product['img'] : ''; ?>');
                    height: 200px;
                    background-size: cover;
                    background-position: center;
                    "></div>
                            <h4 class="card-title mb-1 text-4 font-weight-bold text-center productName" style="padding: 10px !important;">{{ $product ? $product['product_name'] : '' }}</h4>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p style="text-decoration: underline;font-weight: bold;font-size: 14px;">Pardon the interruption!</p> Product description and information for {{ $product ? $product['product_name'] : '' }} coming soon!
                                    <br><br>
                                    If you have any questions or need a quote please contact us!<br><br>
                                    <a type="button" class="btn btn-primary" href="/contact">Contact Us</a>
                                </div>
                                <div class="col-md-4">
                                    <p style="text-decoration: underline;font-weight: bold;font-size: 14px;">Documents</p>
                                    Documents coming soon.
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
