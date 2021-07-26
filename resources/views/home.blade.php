@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <section id="head">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <svg xmlns="http://www.w3.org/2000/svg" id="fb0462f1-4822-46c6-85a1-002b71cfcb82"
                         data-name="Layer 1" width="980.49384" height="751.89531" viewBox="0 0 980.49384 751.89531">
                        <title>nakamoto</title>
                        <rect x="313.49413" y="116.99986" width="2" height="107" fill="#3f3d56"/>
                        <rect x="313.49413" y="255.85045" width="2" height="94.14941" fill="#3f3d56"/>
                        <rect x="310.49413" y="364.99986" width="155" height="2" fill="#3f3d56"/>
                        <rect x="244.49413" y="391.99986" width="2" height="85" fill="#3f3d56"/>
                        <rect x="262.49413" y="491.99986" width="235" height="2" fill="#3f3d56"/>
                        <path d="M623.24692,551.05234" transform="translate(-109.75308 -74.05234)" fill="none"
                              stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/>
                        <path d="M623.24692,469.05234" transform="translate(-109.75308 -74.05234)" fill="none"
                              stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/>
                        <rect x="691.49413" y="48.99986" width="2" height="101" fill="#3f3d56"/>
                        <rect x="529.45995" y="165.99986" width="147.03418" height="2" fill="#3f3d56"/>
                        <rect x="512.49399" y="181.9999" width="2" height="135" fill="#3f3d56"/>
                        <path d="M424.24721,331.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,424.24721,331.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,424.24721,299.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M356.24721,584.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,356.24721,584.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,356.24721,552.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <circle cx="315.49384" cy="366" r="16" fill="#3bf7b9"/>
                        <rect x="728.49413" y="238.99986" width="166" height="2" fill="#3f3d56"/>
                        <rect x="711.49413" y="255.85045" width="2" height="94.14941" fill="#3f3d56"/>
                        <rect x="562.49413" y="364.99986" width="133" height="2" fill="#3f3d56"/>
                        <rect x="796.49413" y="373.99986" width="138" height="2" fill="#3f3d56"/>
                        <rect x="780.49413" y="391.99986" width="2" height="85" fill="#3f3d56"/>
                        <rect x="529.49413" y="491.99986" width="235" height="2" fill="#3f3d56"/>
                        <rect x="512.49413" y="414.99986" width="2" height="62" fill="#3f3d56"/>
                        <circle cx="712.49384" cy="240" r="16" fill="#3bf7b9"/>
                        <path d="M802.24721,257.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,802.24721,257.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,802.24721,225.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M623.24721,257.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,623.24721,257.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,623.24721,225.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M890.24721,467.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,890.24721,467.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,890.24721,435.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <circle cx="780.49384" cy="493" r="16" fill="#3bf7b9"/>
                        <path d="M623.24721,584.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,623.24721,584.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,623.24721,552.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M821.24721,457.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,821.24721,457.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,821.24721,425.0522Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M356.24692,416.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,356.24692,416.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M425.24692,143.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,425.24692,143.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M802.24692,74.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,802.24692,74.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M1032.24692,293.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,1032.24692,293.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path d="M1070.24692,428.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,1070.24692,428.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/>
                        <path class="btc-circle-1" d="M624.52486,427.71889l-2.049,8.215c2.323.579,9.483,2.941,10.643-1.708C634.32786,429.37889,626.84786,428.29789,624.52486,427.71889Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3bf7b9"/>
                        <path d="M621.44286,440.07989l-2.26,9.058c2.789.693,11.392,3.455,12.664-1.655C633.17586,442.1549,624.23186,440.77589,621.44286,440.07989Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3bf7b9"/>
                        <path class="btc-component" d="M633.78686,403.26389a37.49274,37.49274,0,1,0,27.308,45.451A37.487,37.487,0,0,0,633.78686,403.26389Zm7.462,31.037c-.541,3.653-2.565,5.422-5.254,6.041,3.691,1.921,5.57,4.869,3.78,9.979-2.22,6.345-7.497,6.881-14.512,5.553l-1.703,6.824-4.115-1.025,1.68-6.733q-1.644-.40726-3.279-.85l-1.686,6.764-4.11-1.026,1.703-6.836c-.961-.246-1.937-.508-2.933-.757l-5.354-1.336,2.042-4.709s3.032.807,2.991.747a1.49616,1.49616,0,0,0,1.885-.978l2.691-10.787c.151.037.298.073.434.108a3.49556,3.49556,0,0,0-.427-.137l1.919-7.701a2.18915,2.18915,0,0,0-1.917-2.392c.065-.044-2.988-.743-2.988-.743l1.095-4.395,5.675,1.417-.005.021c.853.212,1.732.413,2.628.617l1.686-6.757,4.112,1.025-1.652,6.625c1.104.252,2.215.506,3.297.775l1.641-6.581,4.114,1.025-1.685,6.76C638.19585,426.6279,641.99486,429.3099,641.24886,434.3009Z"
                              transform="translate(-109.75308 -74.05234)" fill="#3bf7b9"/>

                    </svg>
                </div>
                <div class="col-md-6">
                    <h1 class="main-h1-home">Practice your trading skills with no risk!</h1>
                    <p style="color: white" class="text-home">Vivamus feugiat, odio in aliquam venenatis, augue ante
                        laoreet eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet
                        eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet
                        eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet
                        eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet
                        eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet
                        eros, eu mattis lacus
                        lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum
                        massa, sit amet tristique sem.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            endpoint = 'live'
            access_key = '5a38e853b2fad378555f8e382553756d';


            // $( "#test-api" ).on( "click", function() {

            $.ajax({
                url: 'http://api.coinlayer.com/api/' + endpoint + '?access_key=' + access_key,
                dataType: 'jsonp',
                success: function (json) {

                    $(".btc-in-usdt").append(json.rates.BTC);
                    $(".dodge-in-usdt").append(json.rates.DOGE);
                    $(".eth-to-usdt").append(json.rates.ETH);
                    $(".rev-to-usdt").append(json.rates.REV);


                    // exchange rata data is stored in json.rates
                    // alert(json.rates.XRP);
                    //
                    // // target currency is stored in json.target
                    // alert(json.target);
                    //
                    // // timestamp can be accessed in json.timestamp
                    // alert(json.timestamp);
                }
            });
            // });

            // get the most recent exchange rates via the "live" endpoint:

        });
    </script>

    <div class="container" id="myGroup">
        <div class="collapse show" id="main-tab" data-parent="#myGroup">
            <div class="card-fiat fiat">
                <div class="card-body">
                    <div class="row-fiat">
                        <div class="col-lg-3 col-md-12 col-sm-12 border-col1">
                            <div class="d-flex justify-content-between">
                                <div class="currency">Bitcoin</div>
                                <div class="b"><img height="40"
                                                    src="https://bitexlive.com/assets/home/images/logo/30092019_024541_logo.png">
                                </div>
                            </div>
                            <div class="usdt btc-in-usdt"> USDT</div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 border-col2">
                            <div class="d-flex justify-content-between">
                                <div class="currency">DogeCoin</div>
                                <div class="b"><img height="40"
                                                    src="https://bitexlive.com/assets/home/images/logo/30092019_024558_logo.png">
                                </div>
                            </div>
                            <div class="usdt dodge-in-usdt"> USDT</div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 border-col3">
                            <div class="d-flex justify-content-between">
                                <div class="currency">Ethereum</div>
                                <div class="b"><img height="40"
                                                    src="https://bitexlive.com/assets/home/images/logo/25092019_141352_logo.png">
                                </div>
                            </div>
                            <div class="usdt eth-to-usdt"> USDT</div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 border-col4">
                            <div class="d-flex justify-content-between">
                                <div class="currency">Revain</div>
                                <div class="b"><img height="40"
                                                    src="https://bitexlive.com/assets/home/images/logo/revain.png">
                                </div>
                            </div>
                            <div class="usdt rev-to-usdt"> USDT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <section id="shiping">--}}
    {{--        <div class="container">--}}
    {{--            <div class="categories-row row">--}}
    {{--                @foreach($products->unique('category') as $product)--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="card card-header-items shipping-box">--}}
    {{--                            <div class="box-title">--}}
    {{--                                <a href="#">--}}
    {{--                                    <h3 class="title-card-homepage" >{{ $product->category }}</h3>--}}
    {{--                                </a>--}}
    {{--                                <p>Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet eros, eu mattis lacus--}}
    {{--                                    lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum--}}
    {{--                                    massa, sit amet tristique sem. </p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <div class="title text-center"><span class="bold">Secured Assets with</span><span class="regular"> Crypterio</span>
    </div>
    <div class="subtitle text-center">Your Asset is Secured with Crypterio</div>

    <div class="container" id="myGroup">
        <div class="collapse show" id="main-tab" data-parent="#myGroup">
            {{--            <div class="card card-my-account">--}}
            {{--                <div class="card-body my-acc">--}}


            {{--                    <div class="products-container">--}}
            {{--                        <div class="filter_products d-flex ml-5 mb-5" style="align-items: center;">--}}
            {{--                            <div style="font-size: 18px; font-weight: bold;" class="mr-2">Filters:</div>--}}
            {{--                            <div class="dropdown">--}}
            {{--                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"--}}
            {{--                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"--}}
            {{--                                        style="padding: 0.375rem 1.75rem;">Sort by--}}
            {{--                                </button>--}}
            {{--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
            {{--                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'low_high'])}}">Price--}}
            {{--                                        ASC</a>--}}
            {{--                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'high_low'])}}">Price--}}
            {{--                                        DESC</a>--}}
            {{--                                    <a class="dropdown-item"--}}
            {{--                                       href="{{route('products.index', ['sort' => 'alphabetically_asc'])}}">Name ASC</a>--}}
            {{--                                    <a class="dropdown-item"--}}
            {{--                                       href="{{route('products.index', ['sort' => 'alphabetically_desc'])}}">Name--}}
            {{--                                        DESC</a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            <div class="four-cards">
                <div class="two-cards">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="operator" src="https://bitexlive.com/assets/home/newtheme/img/operator.svg"
                                     alt="">
                                <div class="content-card">
                                    <div class="title-card medium">24/7 Support</div>
                                    <div class="subtitle-card">Got a problem? Just get in touch. Our support team is
                                        available 24/7.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="insurance"
                                     src="https://bitexlive.com/assets/home/newtheme/img/insurance.svg" alt="">
                                <div class="content-card">
                                    <div class="title-card medium">Security First</div>
                                    <div class="subtitle-card">All data from website is transmitted using encrypted
                                        Transport Layer Security (TLS) connections (i.e., HTTPS)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two-cards">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="padlock" src="https://bitexlive.com/assets/home/newtheme/img/padlock.svg"
                                     alt="">
                                <div class="content-card">
                                    <div class="title-card medium">Secure Storage</div>
                                    <div class="subtitle-card">99% of our users' funds are kept in a cold storage with
                                        multi-signature technologies
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="pincode" src="https://bitexlive.com/assets/home/newtheme/img/pincode.svg"
                                     alt="">
                                <div class="content-card">
                                    <div class="title-card medium">2FA Verification</div>
                                    <div class="subtitle-card">Two-Factor Authentication (2FA) is required for actions
                                        such as withdrawals or changes in account settings
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--                        <div class="row">--}}
            {{--                            @foreach($products as $product)--}}
            {{--                                <div class="col-lg-3 col-md-4 col-sm-6">--}}
            {{--                                    <div class="card mt-2">--}}
            {{--                                        <img src="{{ asset('storage/'. $product->image) }}" alt="">--}}
            {{--                                        <div class="card-body">--}}
            {{--                                            <a href="{{ route('product.show', $product->id) }}"><p--}}
            {{--                                                        class="product-title">{{ $product->name }}</p></a>--}}
            {{--                                            <p class="poduct-price text-center">{{ "Price: ".$product->price." lei" }}</p>--}}
            {{--                                            <div id="outer">--}}
            {{--                                                --}}{{--                                                <div class="inner pb-2 text-center">--}}
            {{--                                                --}}{{--                                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View</a>--}}
            {{--                                                --}}{{--                                                </div>--}}
            {{--                                                <div id="result" class="inner text-center">--}}
            {{--                                                    <a onclick="postProducts({{ $product->id }})"--}}
            {{--                                                       class="btn btn-success btn-add-to-cart" data-dismiss="alert">Add--}}
            {{--                                                        to cart</a>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            @endforeach--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            {{--    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection
