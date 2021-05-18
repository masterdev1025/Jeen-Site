@extends('layout.master')

@section('page-content')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Reset Password</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10" id="pageTitle">Reset Password</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="containerLogin">
        <div class="row pt-5 justify-content-center" >
            <div class="col-12 col-md-6">
                <p class="lead mb-5 mt-4"></p>

                <form class="kt-form col-md-8" style = "margin:auto;" method="POST" action="/password-reset">
                    @csrf
                    <div class="form-group">
                        <label >{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    @if($errors->any())
                    <span  role="alert">
                        <strong style = "color:red;">{{ $errors->first() }}</strong>
                    </span>
                    @endif
                    <div class="kt-login__actions">
                        <button  class="btn btn-primary btn-elevate kt-login__btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')

@endsection
