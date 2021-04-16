@extends('layout.master')

@section('page-title')
    Contact Us
@endsection

@section('page-content')
<div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Contact Us</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-7">
                <h1 class="mb-0">Contact Us</h1>
                <div class="divider divider-primary divider-small mb-4">
                    <hr class="mr-auto">
                </div>
                <p class="lead mb-5 mt-4">We thrive and grow through contact with our customers.   Please let us know about your product needs or any challenge that you are facing.  We routinely customize solutions for customers and match product offering(s) that may be constrained in supply.</p>

                <!-- <form class="contact-form" id="contact-form" action="/" method="POST"> -->
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="text" value="" placeholder="Your name" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="email" value="" placeholder="Your email address *" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="text" value="" placeholder="Company *" data-msg-required="Please enter your company." maxlength="100" class="form-control" name="company" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" value="" placeholder="Your position *" data-msg-required="Please enter your position." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="position" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <select name="subject" id="subject" class="form-control" data-msg-required="Please enter your position.">
                                <option value="" >- Select - </option>
                                <option value="Sales">Sales</option>
                                <option value="Technical Documents">Technical Documents</option>
                                <option value="General">General Question</option>
                            </select>                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" value="" placeholder="Your phone *" data-msg-required="Please enter your phone." data-msg-email="Please enter a valid phone #." maxlength="25" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" placeholder="Message *" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeGWp8aAAAAAK8jJ7DR10YKzQe2F2yFk5buDbxs"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary mb-5" data-loading-text="Loading...">
                            <div class="contact-form-success alert alert-success d-none">
                                Message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none">
                                Error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->

            </div>
            <div class="col-lg-4 col-lg-offset-1">

                <h4 class="mb-0">Headquarters</h4>
                <div class="divider divider-primary divider-small mb-4">
                    <hr class="mr-auto">
                </div>

                <ul class="list list-icons list-icons-style-3 mt-4 mb-4">
                    <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 16 Law Drive &bull; Fairfield, NJ 07004</li>
                    <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (973) 439-1401</li>
                    <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@jeen.com">info@jeen.com</a></li>
                </ul>

                <h4 class="pt-4 mb-0">Business Hours</h4>
                <div class="divider divider-primary divider-small mb-4">
                    <hr class="mr-auto">
                </div>

                <ul class="list list-icons list-dark mt-4">
                    <li><i class="far fa-clock"></i> Mon - Fri - 8:30am to 5:00pm EST</li>
                    <li><i class="far fa-clock"></i> Sat & Sun - Closed</li>
                </ul>

            </div>
        </div>
    </div>
    <div id="googlemaps" class="google-map google-map-footer"></div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->

</div>
@endsection

@section('page-js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ7IXCSxqmMgGYyWnaQCrc9G_vFNTBk5s"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "16 Law Drive, Fairfield, NJ 07004",
        html: "<strong>Jeen International, Inc.</strong><br>Fairfield, NJ 07004",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.869968;
    var initLongitude = -74.301872;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: false,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Create an array of styles.
    var mapColor = "#cfa968";

    var styles = [{
        stylers: [{
            hue: mapColor
        }]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [{
            lightness: 0
        }, {
            visibility: "simplified"
        }]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [{
            visibility: "off"
        }]
    }];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');


</script>
@endsection
