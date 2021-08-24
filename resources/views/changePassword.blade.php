@extends('layouts.app')
@section('content')
    <style>
        .content-page {
            background-color: #0d0a2a;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='376' height='376' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%231a1546' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%231a1546'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
    <div class="login container main-container">
        <div class="title medium">Schimbare Parola</div>
        <div class="notice">Te rugam sa verifici pagina pe care o vizitezi:</div>
        <div class="link-home"><a href="/">https://crypterio.ro</a></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="change-pw">
                    <div class="content">
                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach

                            <div class="forms col-lg-8 col-md-8 col-sm-8 forms">
                                <div class="input-group input-password form-group row">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="https://bitexlive.com/assets/home/newtheme/img/padlock-3.svg" alt="">
                                    </span>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="current_password"
                                           autocomplete="current-password" placeholder="Current Password">
                                </div>

                                <div class="input-group input-password form-group row">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="https://bitexlive.com/assets/home/newtheme/img/padlock-3.svg" alt="">
                                    </span>
                                    </div>
                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                           autocomplete="current-password" placeholder="New Password">
                                </div>

                                <div class="input-group input-password form-group row">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="https://bitexlive.com/assets/home/newtheme/img/padlock-3.svg" alt="">
                                    </span>
                                    </div>
                                    <input id="new_confirm_password" type="password" class="form-control"
                                           name="new_confirm_password" autocomplete="current-password"
                                           placeholder="Confirm New Password">
                                </div>

                                <div class="login-button col-lg-8 col-md-8 col-sm-8">
                                    <button type="submit" class="submit-change">
                                        Actualizeaza Parola
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="register d-flex justify-content-center"><p>Nu ai cont?</p><a href="/register"
                                                                                                 class="pl-1 lightgreen">Inregistreaza-te.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
