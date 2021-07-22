@extends('layouts.app')@section('title', 'Add new Product')
@section('content')

    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">

{{--    <div style="margin: 0 auto" class="col-8 card-deck">--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/products/create">--}}
{{--                    <h5 class="card-title">Add Products</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here you add new products to the shop.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/manage-orders">--}}
{{--                <h5 class="card-title">Manage Pending Orders</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here you can accept or deny pending orders.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/users">--}}
{{--                <h5 class="card-title">User List</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here you can manage the user list of your store.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/roles">--}}
{{--                <h5 class="card-title">Site roles</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here you can manage the site roles.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/permissions">--}}
{{--                <h5 class="card-title">Site Permisssions</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here you can manage the site permissions.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="/orders">--}}
{{--                <h5 class="card-title">Manage Orders</h5>--}}
{{--                </a>--}}
{{--                <p class="card-text">Here are stored the orders.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="myaccount container" id="myGroup">
        <div class="collapse show " id="main-tab" data-parent="#myGroup">
            <div class="card card-my-account">
                <div class="card-body my-acc">
                    <div class="title-account medium">Account Page</div>
                    <div class="description-account"></div>
                    <div class="cog-pic"><img src="https://bitexlive.com/assets/home/newtheme/img/cog.svg" height="70" alt=""></div>
                    <div class=" mini-cards row">
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card sec-opt" data-toggle="collapse" href="#options-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/padlock-1.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">Security Options</p>
                                    <p class="description-mini-card">Security for login and withdraw transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card  pers-det" data-toggle="collapse" href="#info-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/login.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">Basic Form</p>
                                    <p class="description-mini-card">Information required for authentication</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card ch-pass" data-toggle="collapse" href="#pass-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/padlock-2.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">Password Change</p>
                                    <p class="description-mini-card">Click here to change your password.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card  ip-wh" data-toggle="collapse" href="#ip-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/checklist.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">IP Whitelist</p>
                                    <p class="description-mini-card">Click here for a secure ip address</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card fa-set" data-toggle="collapse" href="#twofa-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/authentication-1.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">2FA Verification</p>
                                    <p class="description-mini-card">Click here to turn 2FA on and off.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card fa-set" data-toggle="collapse" href="#twofa-tab" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="https://bitexlive.com/assets/home/newtheme/img/authentication-1.svg" alt="">
                                <div class="card-body">
                                    <p class="title-mini-card medium">2FA Verification</p>
                                    <p class="description-mini-card">Click here to turn 2FA on and off.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection