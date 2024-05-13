@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 100dvw;"
@endsection

@section('content1')
    @include('Mastering.navtop1')

    <div class="container" style="margin-top: 3dvh;letter-spacing: 0px;font-family: Poppins, sans-serif;">
        <p class="fs-4 fw-bolder" style="text-align: center;font-family: Poppins, sans-serif;">Set Your<br>Sleep Schedule</p>
    </div>
    <div class="container" style="font-family: Poppins, sans-serif;">
        <p class="text-center"
            style="padding-right: 1.5rem;padding-left: 1.5rem;padding-top: 0.5rem;font-family: Poppins, sans-serif;"><span
                style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Healtie uses your sleep schedule to
                monitor your sleep and assess its quality.</span></p>
    </div>
    <section style="margin-top: 3dvh;font-family: Poppins, sans-serif;">
        <div class="container" style="font-family: Poppins, sans-serif;">
            <div class="card" style="font-family: Poppins, sans-serif;">
                <div class="card-body align-items-center" style="height: 96px;font-family: Poppins, sans-serif;">


                    <form action="" method="post">
                        @csrf
                        <div class="row d-flex" style="font-family: Poppins, sans-serif;">
                            <div class="col-6 d-flex align-items-center" style="font-family: Poppins, sans-serif;">
                                <p class="d-flex align-items-center" style="font-family: Poppins, sans-serif;">Start</p>
                            </div>
                            <div class="col" style="font-family: Poppins, sans-serif;">
                                <div class="form-group mb-3" style="font-family: Poppins, sans-serif;">
                                    <div class="col-sm-10" style="font-family: Poppins, sans-serif;">
                                        <div class="row" style="font-family: Poppins, sans-serif;">
                                            <div class="col" style="font-family: Poppins, sans-serif;">
                                                <input type="time" style="font-family: Poppins, sans-serif;"
                                                    name="mulai">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 3dvh;font-family: Poppins, sans-serif;">
        <div class="container" style="font-family: Poppins, sans-serif;">
            <div class="card" style="font-family: Poppins, sans-serif;">
                <div class="card-body" style="font-family: Poppins, sans-serif;">
                    <div class="row" style="font-family: Poppins, sans-serif;">
                        <div class="col-6 d-flex align-items-center" style="font-family: Poppins, sans-serif;">
                            <p style="font-family: Poppins, sans-serif;">End</p>
                        </div>
                        <div class="col d-flex align-items-center" style="font-family: Poppins, sans-serif;">
                            <input type="time" style="font-family: Poppins, sans-serif;" name="wakeup">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center align-items-center"
        style="margin-top: 3dvh;font-family: Poppins, sans-serif;"><button class="btn btn-primary" type="submit"
            style="font-family: Poppins, sans-serif;margin-right: 3dvw; margin-left: 3dvw;">Add</button></section>
    <div style="padding-top: 13dvh;"></div>
    </form>
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
