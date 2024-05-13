@extends('Mastering.m1')

{{-- @section('dotstylebody')
    style="width: 96dvw;"
@endsection --}}

@section('content1')
    @include('Mastering.navtop1')
    <section style="margin-top: 23px;">
        <div class="row" style="margin-left: -4px;">
            <div class="col-3 offset-1" style="margin-left: 9dvw;"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                    height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 56px;margin-left: 7dvw;">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                        fill="currentColor"></path>
                </svg></div>
            <div class="col">
                <h1
                    style="font-size: 17px;font-family: Poppins, sans-serif;font-weight: bold;margin-top: 1dvh;margin-bottom: 0dvh;">
                    {{ $user->name }}</h1>
                <h1 style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: 0dvh;"> {{ $usia }} years
                    old</h1>
            </div>
        </div>
    </section>
    <div class="row"
        style="height: 123.6px;margin-right: 10dvw;margin-left: 13dvw;margin-top: 2dvh;border-top: 2px solid rgba(0,0,0,0.44);border-bottom: 2px solid rgba(0,0,0,0.44);">
        <div class="col" style="text-align: left;">
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 4dvw;margin-top: 2dvh;">
                Weight</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 4dvw;margin-top: 2dvh;">
                Height</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 4dvw;margin-top: 2dvh;">
                BMI</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 4dvw;margin-top: 2dvh;">
                Goal</h1>
        </div>
        <div class="col">
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 0dvw;margin-top: 2dvh;text-align: right;margin-right: 4dvw;">
                {{ $weight }} kg</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 0dvw;margin-top: 2dvh;text-align: right;margin-right: 4dvw;">
                {{ $height }} cm</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 0dvw;margin-top: 2dvh;text-align: right;margin-right: 4dvw;">
                {{ $bmi }}</h1>
            <h1
                style="font-size: 13px;font-family: Poppins, sans-serif;margin-bottom: -1dvh;margin-left: 0dvw;margin-top: 2dvh;text-align: right;margin-right: 4dvw;">
                {{ $goals }}</h1>
        </div>
    </div>
    <section style="margin-left: 16px;margin-bottom: -1dvh;">
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 71dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;margin-top: 3dvh;height: 4.5dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Personal Information</h1>
                </div>
                <div class="col-2"><i class="material-icons"
                        style="font-size: 27px;margin-top: 0.7dvh;margin-left: -1dvw;color: #0ea5e9;">navigate_next</i>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-left: 16px;margin-bottom: -1dvh;">
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 71dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;margin-top: 3dvh;height: 4.5dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Delete Account</h1>
                </div>
                <div class="col-2"><i class="material-icons"
                        style="font-size: 27px;margin-top: 0.7dvh;margin-left: -1dvw;color: #0ea5e9;">navigate_next</i>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-left: 16px;margin-bottom: -7px;">
        <div class="container"
            style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 71dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 2dvh;margin-top: 3dvh;height: 4.5dvh;">
            <div class="row">
                <div class="col">
                    <h1
                        style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                        Log Out</h1>
                </div>
                <div class="col-2"><i class="material-icons"
                        style="font-size: 27px;margin-top: 0.7dvh;margin-left: -1dvw;color: #0ea5e9;">navigate_next</i>
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
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets/css/progress-bars-progress.css">
    <link rel="stylesheet" href="assets/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection
