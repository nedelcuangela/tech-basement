@extends('layouts.front')@section('title', 'Add new Product')
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
                            <div class="card mini-card sec-opt" role="button">
                                <img class="plus-icon" src="https://img.icons8.com/ios/100/000000/add--v1.png"/>
                                <div class="card-body">
                                    <a href="/products/create" class="card-admin-dashboard-link title-mini-card medium stretched-link">Add Products</a>
                                    <p class="description-mini-card">Here you add new products to the shop.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card  pers-det" role="button">
                                <img class="pending-orders" src="https://img.icons8.com/ios/100/000000/data-pending.png"/>
                                <div class="card-body">
                                    <a href="/manage-orders" class="card-admin-dashboard-link title-mini-card medium stretched-link">Manage Pending Orders</a>
                                    <p class="description-mini-card">Here you can accept or deny pending orders.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card ch-pass" role="button">
                                <img class="users-icon" src="https://img.icons8.com/fluent-systems-regular/96/000000/users-settings.png"/>
                                <div class="card-body">
                                    <a href="/users" class="card-admin-dashboard-link title-mini-card medium stretched-link">User List</a>
                                    <p class="description-mini-card">Here you can manage the user list of the system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card  ip-wh" role="button">
                                <img class="permissions-icon" src="https://img.icons8.com/ios/100/000000/admin-settings-male.png"/>
                                <div class="card-body">
                                    <a href="/roles" class="card-admin-dashboard-link title-mini-card medium stretched-link">Site Roles</a>
                                    <p class="description-mini-card">Here you can manage the site roles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card fa-set" role="button">
                                <img class="roles-icon" src="https://img.icons8.com/ios/100/000000/restriction-shield.png"/>
                                <div class="card-body">
                                    <a href="/permissions" class="card-admin-dashboard-link title-mini-card medium stretched-link">Site Permissions</a>
                                    <p class="description-mini-card">Here you can manage the site permissions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                            <div class="card mini-card fa-set" role="button">
                                <img class="orders-icon" src="https://img.icons8.com/ios/100/000000/open-box.png"/>
                                <div class="card-body">
                                    <a href="/orders" class="card-admin-dashboard-link title-mini-card medium stretched-link">Manage Orders</a>
                                    <p class="description-mini-card">Here are the orders stored.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection