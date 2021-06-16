@extends('layout.master')

@section('page-title')
    Products
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/r-2.2.7/rg-1.1.2/sp-1.2.2/datatables.min.css"/>
@endsection
@section('page-content')
<div>
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/assets/img/breadcrumbs2.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="/" class="text-color-primary text-decoration-none">HOME </a></li>
                        <li class="text-color-primary active">Products

                        </li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Products
                    @if($data && $data['category'])
                        / {!! $data['category']->html_data !!}
                    @endif</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-default section-no-border mt-0 pt-0" id="prodData">
        @if(!$category)
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
        @endif
        <div class="container pt-3 pb-4">
            <table id="prodTable" class="table  table-bordered dt-responsive " style="width:100%">
                <thead>
                    <tr class='bg-primary prodTitles'>
                        <th class='pName'>Product Trade Name</th>
                        <th>INCI</th>
                        <th>SDS</th>
                        <th>Spec Sheet</th>
                        <th>TDS</th>
                    </tr>
                </thead>
                <tbody>
                @if($data && $data['products'])
                    @foreach($data['products'] as $item)
                    <tr class='prodRow '>
                        <td class='pt-1 pb-1 prodName1'>{{$item->productName}}
                            <table class='mbTable d-block d-sm-none'>
                                <tr>
                                    <td class='prodInci mbInci pl-0 pt-1'>
                                        <strong>INCI</strong><br>{{$item->productInci}}
                                    </td>
                                    <td><div class='btn btn-sm btn-prod pt-0'>Request Information</div></td>
                                </tr>
                            </table>
                        </td>
                        <td class='prodInci pb-1 pt-2'>{{$item->productInci}}</td>
                        <td>
                            @if($item->pdfSds == 1 &&  $item->product_id)
                            <button class = "btn btn-dark btn-sm view-pdf--btn" data-type = "sds" data-id = "{{ $item->product_id }}"><i class = "fa fa-file-pdf"></i></button>
                            @endif
                        </td>
                        <td>
                            @if($item->pdfSpecs == 1)
                            <button class = "btn btn-dark btn-sm"><i class = "fa fa-file-pdf"></i></button>
                            @endif
                        </td>
                        <td>
                            @if($item->pdfTds == 1)
                            <button class = "btn btn-dark btn-sm"><i class = "fa fa-file-pdf"></i></button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
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


@section('page-js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/r-2.2.7/rg-1.1.2/sp-1.2.2/datatables.min.js"></script>'
<script src="https://www.google.com/recaptcha/api.js?render=explicit"></script>
<script>
    $(document).ready(function(){
        var table = $('#prodTable').DataTable({
            ordering: false,
            paging: false,
            responsive: {
                details: false
            },
            columnDefs: [
                {
                    width: '40%', targets: 0
                },
                {
                    width: '17%', targets: 2
                },
                {
                    width: '16%', targets: 3
                },
            ]
        });
        $('#prodTable_filter label input[type=search]').on('keyup', function() {
            console.log($('#prodTable_filter label input[type=search]').val());
            var numItems = $('.jplist-selected').length;
            console.log('num: '+numItems);
            if(numItems > 0){
                $(".btn-cat").removeClass("jplist-selected");
                table.search('').columns().search('').draw();
                $('#prodTable_filter label input[type=search]').keyup();
            }

        });
        $(document).on('click', '.btn-cat', function () {
            table.search('').columns().search('').draw();
            $('#prodTable_filter label input[type=search]').val('');
            var ss = $(this).attr("data-text");
            var searchCol = 3;
            console.log($(this).attr("data-sType"));
            if($(this).attr("data-sType") == 'jee'){
                console.log('search col1');
                searchCol = 0;
            } else {
                searchCol = 3;
            }
            //$('input[aria-controls="prodTable"]').val(ss);
            //$('div#prodTable_filter input').val(ss);
            table
                .columns( searchCol )
                .search(  ss )
                .draw();
            $(".btn-cat").removeClass("jplist-selected");
            $(this).addClass("jplist-selected");

        });
        $(document).on('click', '.btn-prod', function () {
            var uIp = "{{ Request::getClientIp() }}";
            var uLink = "{{ url()->full() }}";
            //calendar.refetchEvents();
            var pid = $(this).attr("data-prodid");
            var prodName = $(this).attr("data-prod");
            Swal.fire({
                title: prodName,
                text: "The data will input",
                html:'<div class="swText mb-4"> To get more information about this product or access product documents, ' +
                    'please fill out the form below. </div>'+
                    '<form id="swForm">'+
                    '<label class="swLabel" for="swName">Name (Required)</label>'+
                    '<input id="swName" name="swName" class="swal2-input mt-0" required>' +
                    '<label class="swLabel" for="swCompany">Company (Required)</label>'+
                    '<input id="swCompany" name="swCompany"  class="swal2-input mt-0" required>' +
                    '<label class="swLabel" for="swEmail">Email (Required)</label>'+
                    '<input id="swEmail" name="swEmail" class="swal2-input mt-0" required>' +
                    '<label class="swLabel">Phone (Required)</label>'+
                    '<input id="swPhone" name="swPhone" value="" class="swal2-input mt-0">' +
                    '<label class="swLabel">Message (Required)</label>'+
                    '<textarea aria-label="Type your message here" class="swal2-textarea mt-0" placeholder="Type your message here..." id="swMsg" name="swMsg" style="display: flex;"></textarea>' +
                    '<div id="g2"></div>' +
                    '<input id="swProduct" value="'+prodName+ '" class="swal2-input" style="display: none">' +
                    '</form>',
                showCancelButton: false,
                showConfirmButton: true,
                showCloseButton: true,

                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Submit',
                cancelButtonText: 'Cancel',
                onOpen: function () {
                    grecaptcha.render('g2', {
                        'sitekey': '6LeGWp8aAAAAAK8jJ7DR10YKzQe2F2yFk5buDbxs'
                    })
                },
                preConfirm: () => {
                    var form = $( "#swForm" );
                    form.validate({
                        rules: {
                            swName: {
                                required: true,
                            },
                            swCompany: {
                                required: true,
                            },
                            swEmail: {
                                required: true,
                                email: true
                            },
                            swPhone: {
                                required: true,
                            },
                            swMsg: {
                                required: true,
                            },
                        },
                        errorPlacement: function(error, element) {
                            // Append error within linked label
                            $( element )
                                .closest( "form" )
                                .find( "label[for='" + element.attr( "id" ) + "']" )
                                .append( error );
                        },
                        errorElement: "span",
                    });
                    //alert( "Valid: " + form.valid() );
                    var subReady = 0;
                    if (form.valid() === false) {
                        Swal.showValidationMessage(`Please fill in missing fields.`)
                    } else if (grecaptcha.getResponse().length === 0) {
                        Swal.showValidationMessage(`Please verify that you're not a robot`)
                    } else {
                        subReady =1;
                        $.ajax({
                            url: 'php/productRequest.php',
                            type: "post",
                            data: {
                                swProduct: $( "#swProduct" ).val(),
                                swName: $( "#swName" ).val(),
                                swCompany: $( "#swCompany" ).val(),
                                swPhone: $( "#swPhone" ).val(),
                                swEmail: $( "#swEmail" ).val(),
                                swMsg: $( "#swMsg" ).val(),
                                swIp: uIp,
                                swLink: uLink,
                                'g-recaptcha-response':grecaptcha.getResponse()
                            },
                            dataType: 'text',
                            cache: false,
                            success: function (result) {
                                if (result == 'success') {
                                    alert('Form submitted successfully.');
                                } else {
                                    alert(result);
                                }
                            }
                        });
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.showValidationError(
                        '.'
                    );
                    //alert('testConfirm');
                } else if (
                    /* Read more about handling dismissals below */
                    result.isDismissed
                ) {
                    //alert('cancelled submit');
                }
            })
        });
        $(document).on('click', '.view-pdf--btn', function(){
            var type = $(this).data('type');
            var id   = $(this).data('id');
            window.open(`/portal/pdf?type=${type}&id=${id}&companyId=1`, '_blank').focus();
        })
    })

</script>
@endsection
