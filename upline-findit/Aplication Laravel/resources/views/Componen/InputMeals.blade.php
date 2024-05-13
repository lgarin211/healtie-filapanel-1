@extends('Mastering.m1')

@section('content1')
    @include('Mastering.navtop1')
    <section>
        <div class="container">
            <h1
                style="font-family: Poppins, sans-serif;font-weight: bold;text-align: center;font-size: 27px;margin-top: 10dvh;margin-bottom: 0dvh;color: #0ea5e9;">
                Saturday</h1>
            <h1 style="font-family: Poppins, sans-serif;font-size: 16px;text-align: center;">{{ Date('Y-m-d ') }}</h1>
            <div style="margin-bottom: -12px;">
                <hr
                    style="color: rgb(0,0,0);background: #000000;opacity: 1;filter: brightness(0%);border-width: 1.5px;margin-left: 5dvw;margin-right: 5dvw;">
            </div>
            <div class="row" style="margin-bottom: 3dvh;">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: center;font-size: 20px;margin-top: 1dvh;margin-bottom: 0dvh;">
                        {{ $TotalKonsumsi }}</h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: center;">Eaten</h1>
                </div>
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: center;font-size: 20px;margin-top: 1dvh;margin-bottom: 0dvh;">
                        1730</h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: center;">Remaining</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-right: 5dvw;">
            <h1 style="font-family: Poppins, sans-serif;font-size: 19px;margin-left: 6dvw;margin-bottom: 1.5dvh;">
                Meals Breakdown
            </h1>
        </div>
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 322.2px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 19px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Breakfast
                    </h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: left;margin-left: 2dvw;">
                        {{ $Breakfast }} kcal
                    </h1>
                </div>
                <div class="col-2">
                    <a href="{{ url('newfood?pat=Breakfast') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" viewBox="0 0 24 24" fill="none"
                            style="font-size: 31px;margin-top: 1.5dvh;margin-left: -1dvw;color: #0ea5e9;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V13H17C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11H13V7Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 322.2px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 19px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Lunch</h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: left;margin-left: 2dvw;">
                        {{ $Lunch }}
                        kcal</h1>
                </div>
                <div class="col-2">
                    <a href="{{ url('newfood?pat=Lunch') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                            fill="none" style="font-size: 31px;margin-top: 1.5dvh;margin-left: -1dvw;color: #0ea5e9;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V13H17C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11H13V7Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 322.2px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 19px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Dinner</h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: left;margin-left: 2dvw;">
                        {{ $Dinner }}
                        kcal</h1>
                </div>
                <div class="col-2">
                    <a href="{{ url('newfood?pat=Dinner') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                            fill="none" style="font-size: 31px;margin-top: 1.5dvh;margin-left: -1dvw;color: #0ea5e9;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V13H17C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11H13V7Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 322.2px;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 19px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Snack</h1>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 14px;text-align: left;margin-left: 2dvw;">
                        {{ $Snack }}
                        kcal</h1>
                </div>
                <div class="col-2">
                    <a href="{{ url('newfood?pat=Snack') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                            fill="none" style="font-size: 31px;margin-top: 1.5dvh;margin-left: -1dvw;color: #0ea5e9;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V13H17C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11H13V7Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('Mastering.navbtm')
@endsection
@section('addtohead')
    <link rel="stylesheet" href="assets/css/Poppins.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets/css/progress-bars-progress.css">
    <link rel="stylesheet" href="assets/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection
