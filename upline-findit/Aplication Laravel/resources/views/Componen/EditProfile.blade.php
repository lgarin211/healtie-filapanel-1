@extends('Mastering.m1')
@section('content1')
    @include('Mastering.navtop1')
    <section>
        <h1
            style="padding-top: 10dvh;font-size: 20px;font-family: Poppins, sans-serif;padding-left: 6dvw;margin-bottom: 2dvh;">
            Details</h1>
        <section style="margin-left: 0dvw;margin-bottom: 0dvh;width: 100dvw;margin-top: -1dvh;">
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Health Goal</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            {{ $user->tujuan ? $user->tujuan : '-' }}
                        </h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">

                            First Name
                        </h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            {{ $user->name ? $user->name : '-' }}
                        </h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Weight</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            {{ $pane->weight ? $pane->weight : '-' }} kg</h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Height</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            {{ $pane->height }} cm</h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Gender</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            - {{-- {{ $user->gender ? $user->gender : '-' }} --}}
                        </h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Age</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            {{-- tanggal hari saat ini di kurang lahir   --}}
                            @php
                                $date = new DateTime($user->tanggal_lahir);
                                $now = new DateTime();
                                $interval = $now->diff($date);
                            @endphp
                            {{ $interval->y }} Tahun
                        </h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Hypertension</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            No</h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
            <div class="container"
                style="box-shadow: 0px 0px 5px rgba(0,0,0,0.65);width: 89dvw;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;margin-bottom: 0.5dvh;margin-top: 1dvh;height: 4.2dvh;">
                <div class="row">
                    <div class="col">
                        <h1
                            style="font-family: Poppins, sans-serif;font-weight: bold;text-align: left;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 2dvw;">
                            Diabetes</h1>
                    </div>
                    <div class="col-5">
                        <h1
                            style="font-family: Poppins, sans-serif;text-align: right;font-size: 15px;margin-top: 1dvh;margin-bottom: 0dvh;margin-left: 7dvw;color: rgba(33,37,41,0.23);width: 107.7px;">
                            No</h1>
                    </div>
                    <div class="col-1"><i class="material-icons"
                            style="font-size: 27px;margin-top: 0.5dvh;margin-left: -3dvw;color: #0ea5e9;">navigate_next</i>
                    </div>
                </div>
            </div>
        </section>
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
