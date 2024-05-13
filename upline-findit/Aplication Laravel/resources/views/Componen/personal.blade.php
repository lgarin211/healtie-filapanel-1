@extends('Mastering.m1')
@section('content1')
    @include('Mastering.navtop1')
    <section>
        <img src="assets3/img/fitness_xptixd.jpg" style="width: 100dvw;">
    </section>
    <div class="container">
        <h1 class="text-break"
            style="font-size: 30px;font-family: Poppins, sans-serif;font-weight: bold;margin-top: 2dvh;text-align: center;">
            <br>
            <strong>
                <span style="color: rgb(0, 0, 0);">Discover Your Personalized Health Recommendations</span>
            </strong>
        </h1>
        <h4
            style="font-size: 15px;text-align: justify;font-family: Poppins, sans-serif;margin-left: 5dvw;margin-right: 5dvw;margin-top: 2dvh;">
            Explore diet plans, exercise routines, suitable fitness types, and recommended exercise equipment, all designed
            to support and enhance your journey to a healthier lifestyle.</h4>
        <button class="btn btn-primary d-block w-100" type="submit" style="font-family: Poppins, sans-serif;margin-top: 5dvh;"
            data-bs-toggle="modal" data-bs-target="#Hyperpoin">Get Started</button>
    </div>
    <div class="modal fade" id="Hyperpoin" tabindex="-1" aria-labelledby="HyperpoinLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    @include('Componen.Recommendation')
                </div>
            </div>
        </div>
    </div>
    @include('Mastering.navbtm')
@endsection

@section('addtohead')
    <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets3/css/Poppins.css">
    <link rel="stylesheet" href="assets3/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets3/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets3/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets3/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets3/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets3/css/progress-bars-progress.css">
    <link rel="stylesheet" href="assets3/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets3/css/styles.css">
@endsection

@section('jspaten')
    <script src="assets3/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets3/js/bs-init.js"></script>
@endsection
