@extends('layout.master')

@section('page-content')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Login</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10" id="pageTitle">Login</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="containerLogin">
        <div class="row pt-5 justify-content-center" >
            <div class="col-12 col-md-6">
                <p class="lead mb-5 mt-4"></p>

                <form class="kt-form col-md-8" style = "margin:auto;" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>Email</div>
                    <div class="input-group form-group">
                        <input class="form-control @error('email') is-invalid @enderror"  type="email" placeholder="Email" name="email" required autocomplete="off" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>Password</div>
                    <div class="input-group form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    @if($errors->any())
                    <span  role="alert">
                        <strong style = "color:red;">{{ $errors->first() }}</strong>
                    </span>
                    @endif
                    <div id="rc3login"></div>
                    <div class="kt-login__actions">
                        <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Login Now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script>
    var onloadCallback = function() {
        grecaptcha.render('rc3login', {
            'sitekey': '6LeGWp8aAAAAAK8jJ7DR10YKzQe2F2yFk5buDbxs'
        });
    };
</script>
@endsection
