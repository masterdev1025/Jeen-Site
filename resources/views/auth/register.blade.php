@extends('layout.master')

@section('page-content')
<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
<div class="container py-4">
    <div class="row">
        <div class="col text-center">
            <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                <li><a href="/" class="text-color-primary text-decoration-none">HOME</a></li>
                <li class="text-color-primary active">Register</li>
            </ul>
            <h1 class="text-color-light font-weight-bold text-10" id="pageTitle">Register</h1>
        </div>
    </div>
</div>
</section>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
        <h1 class="mb-0 mt-4">Request Access</h1>
        <p class="lead mb-5 mt-4">Please fill out the registration form below to access our customer portal.
        Your request will be reviewed within 1 business day.
        </p>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class = "row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <div>
                                    <input id="userFirst" type="text" class=" name-input form-control @error('userFirst') is-invalid @enderror" name="userFirst" value="{{ old('userFirst') }}" required autocomplete="userFirst">

                                    @error('userFirst')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <div>
                                    <input id="userLast" type="text" class="name-input form-control @error('userLast') is-invalid @enderror" name="userLast" value="{{ old('userLast') }}" required autocomplete="userLast">

                                    @error('userLast')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-6">
                                <label>Company</label>
                                <div>
                                    <input id="userCompany" type="text" class=" name-input form-control @error('userCompany') is-invalid @enderror" name="userCompany" value="{{ old('userCompany') }}" required autocomplete="userCompany">

                                    @error('userCompany')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Position</label>
                                <div>
                                    <input id="userPosition" type="text" class="name-input form-control @error('userPosition') is-invalid @enderror" name="userPosition" value="{{ old('userPosition') }}" required autocomplete="userPosition">

                                    @error('userPosition')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-6">
                                <label>Email</label>
                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class = "col-md-6">
                                <label>Phone</label>
                                <div>
                                    <input id="userPhone" type="userPhone" class="form-control @error('userPhone') is-invalid @enderror" name="userPhone" value="{{ old('userPhone') }}" required autocomplete="userPhone">
                                    @error('userPhone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                            <div class="form-group col-sm-6 reg-form">
                                <label>Country</label>
                                <select class="m-0 form-control" id="userCountry" name="userCountry" data-msg-required="Please select country." required></select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6 reg-form">
                                <label>Address </label>
                                <input type="text" value="" data-msg-required="Please enter your address." maxlength="100" class="form-control" name="userAddress1" required>
                            </div>
                            <div class="form-group col-sm-6 reg-form">
                                <label>Unit/Bldg</label>
                                <input type="text" value="" maxlength="100" class="form-control" name="userAddress1" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4 reg-form">
                                <label>City </label>
                                <input type="text" value="" data-msg-required="Please enter your city." maxlength="100" class="form-control" name="userCity" required>
                            </div>
                            <div class="form-group col-sm-5 reg-form">
                                <label>State</label>
                                <select class="m-0 form-control" id="userState" name="userState" data-msg-required="Please select state." required></select>
                            </div>
                            <div class="form-group col-sm-3 reg-form">
                                <label>Postal Code </label>
                                <input type="text" value="" data-msg-required="Please enter your zip." maxlength="100" class="form-control" name="userPostal" required>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-sm-12">
                                <label>Are you a current customer?</label>
                                <select name="registerCurrentCustomer" id="registerCurrentCustomer" class="form-control" data-msg-required="Please select." required>
                                    <option value="" >- Select - </option>
                                    <option value="1">Yes, I have purchased from Jeen before.</option>
                                    <option value="0">No, I have not purchased from Jeen before.</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Additional Details</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="swMessage" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row" style = "display:none;" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col-md-6">
                                <label>Password</label>
                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class = "col-md-6">
                                <label>Confirm Password</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col text-center">
                                <span class="">Already have a login?</span><a href = "/login" class="text-color-primary ml-2 font-weight-bold" style="cursor: pointer;"><u>Login Here.</u></a>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script src="{{ asset('/js/country-state-select.js') }}"></script>
<script>
    $(document).ready(function(){
        populateCountries("userCountry", "userState");
        $("#userCountry").val("USA").change();
    })
    $(document).on('keyup','.name-input', function(e){
        var userFirst = $('input[name="userFirst"]').val();
        var userLast = $('input[name="userLast"]').val();
        $('input[name="name"]').val(`${userFirst} ${userLast}`);
    })
</script>
@endsection
