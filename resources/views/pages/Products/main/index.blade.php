@extends('layout.master')

@section('page-title')
    Products
@endsection
@section('page-content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME </a></li>
                        <li class="text-color-primary active">Products</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Products</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0 pt-0" id="prodData">
        <div class="container pt-5 pb-4 jplist-panel">
            <div class="input-group btn-group">
                <button id="showAll" style="display:none;" type="button" data-jplist-control="buttons-text-filter" data-path="default" data-group="data-group-1" data-mode="radio" data-text="" class="form-control" data-name="buttons-text-filter">
                    All
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="featured" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Featured
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-selected="true" data-text="actives" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Active Ingredients
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="botanicals" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    BotanicalsPlus
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="cpw" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Cold Process Waxes
                </button>
            </div>
            <div class="input-group btn-group">
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="conditioners" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Conditioners
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="emollients" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Emollients
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="emulsifiers" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Emulsifiers
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="filmformers" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Film Formers
                </button>
            </div>
            <div class="input-group btn-group">
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="structurants" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Structurants
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="oils" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Natural Oils
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="preservatives" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Preservatives
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="quats" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Quaternary Compounds
                </button>
            </div>
            <div class="input-group btn-group">
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="silicones" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Silicones & Derivatives
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="sunscreens" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Sunscreens
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="surfactants" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Surfactants
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="wax" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Waxes
                </button>
            </div>
            <div class="input-group btn-group col-12 col-md-6 p-0">
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="thickeners" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Thickeners
                </button>
                <button type="button" data-group="data-group-1" data-sType="cat"  data-mode="radio" data-text="vitamins" class="form-control btn btn-cat" data-name="buttons-text-filter">
                    Vitamins
                </button>
            </div>

        </div>
        <div class="container pt-3 pb-4">
            <table id="prodTable" class="table  table-bordered dt-responsive " style="width:100%">
            </table>
        </div>
    </section>
</div>
<div id="device-size-detector">
    <div id="xs" class="d-block d-sm-none"></div>
    <div id="sm" class="d-none d-sm-block d-md-none"></div>
    <div id="md" class="d-none d-md-block d-lg-none"></div>
    <div id="lg" class="d-none d-lg-block d-xl-none"></div>
    <div id="xl" class="d-none d-xl-block"></div>
</div>
@endsection
