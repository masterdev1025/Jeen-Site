@extends('layout.master')

@section('page-title')
    Brochures
@endsection

@section('page-content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Brochures</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Brochures</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0">
        <div class="container pt-3 pb-4">
            <div class="row justify-content-around">
                <div class="col-lg-4">
                    <img src="{{asset('/assets/img/Slide1a.jpg') }}" alt="Jeen International Extracts" class="img-fluid">
                </div>
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <p class="mb-0">Click on the links below to view our brochures.</p>
                    <div class="divider divider-primary divider-small mb-4">
                        <hr class="mr-auto">
                    </div>
                    <p class="mt-4">
                        <ul>
                        @if($brochureArray)
                            @foreach($brochureArray as $b)
                            <li class='mt-2'><a href="{{ $b['url'] }}">{{$b['urlText']}}</a></li>
                            @if(!empty($b['linkAfter']))
                            <p class='mb-0' style='font-size: 11px;'>{{ $b['linkAfter'] }}</p>
                            @endif
                            @endforeach
                        @endif
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
