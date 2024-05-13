@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 96dvw;"
@endsection

@section('content1')
    @include('Mastering.navtop1')

    <section>
        <div class="container" style="height: 125.8px;padding-right: 4dvw;padding-left: 4dvw;">
            <div class="card"
                style="font-family: 'Poppins';margin-top: 18px;height: auto;background: transparent;color: rgb(33, 37, 41);border-style: none;">
                <div class="card-body"
                    style="height: auto;margin-top: 0dvh;margin-bottom: 0dvh;background: #dcf4ff;padding-bottom: 6dvh;">
                    <h4 class="card-title"
                        style="font-weight: bold;font-size: 16px;margin-bottom: 2px;padding-left: 1dvw;padding-right: 0dvw;">
                        Watch Your Calorie Intake!</h4>
                    <p class="card-text" style="font-size: 12px;padding-left: 1dvw;padding-right: 0dvw;margin-bottom: -7dvh;">
                        Oops, it looks like you've exceeded your calorie limit for the day. Don’t forget to burn some extra
                        calories! Come on, give your best action!</p><a class="card-link" href="#"></a><a
                        class="card-link" href="#"></a>
                </div>
            </div>
        </div>
    </section>
    <section style="height: 10dvh;"></section>

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
