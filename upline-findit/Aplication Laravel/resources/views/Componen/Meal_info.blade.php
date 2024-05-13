@extends('Mastering.m1')
@section('dotstylebody1')
    style="width: 100dvw;height: 100dvh !important;overflow: hidden;"
@endsection
@section('content1')
    <section>
        <img src="{{ url('storage/' . $lasteat->poster) }}" alt="Image" class="img-fluid"
            style="width: 100dvw;padding-right: 15dvw;padding-left: 15dvw;padding-top: 4dvh;padding-bottom: 2dvh;">
        <h1
            style="text-align: center;font-family: Poppins, sans-serif;font-weight: bold;font-size: 25px;margin-bottom: 0dvh;">
            {{ $lasteat->name }}
        </h1>
        <h1 style="text-align: center;font-family: Poppins, sans-serif;font-size: 19px;">345 kcal</h1>
    </section>
    <section>
        <div class="container"
            style="margin-top: 5dvh;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;">
            <h1
                style="text-align: center;font-family: Poppins, sans-serif;font-weight: bold;font-size: 25px;margin-bottom: 2dvh;">
                Nutrition Facts</h1>
            <div class="row">
                <div class="col">
                    <h1 style="text-align: right;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 2dvh;">
                        Sugar
                    </h1>
                    <h1 style="text-align: right;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 2dvh;">Fat
                    </h1>
                    <h1 style="text-align: right;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 0dvh;">
                        Natrium</h1>
                </div>
                <div class="col">
                    <h1 style="text-align: left;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 2dvh;">20 gr
                    </h1>
                    <h1 style="text-align: left;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 2dvh;">28 gr
                    </h1>
                    <h1 style="text-align: left;font-family: Poppins, sans-serif;font-size: 17px;margin-bottom: 0dvh;">480
                        mg</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top: 4dvh;">
        <a href="{{ url('/newfood') }}" class="btn btn-primary d-block w-100">
            Add Meal</a>
        <a href="{{ url('/home') }}" class="btn btn-danger d-block w-100 mt-2">
            Cancel
        </a>
    </div>
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
