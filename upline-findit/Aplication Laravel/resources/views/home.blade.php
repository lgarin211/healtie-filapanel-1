@extends('Mastering.m1')
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
@section('dotstylebody')
    style="width: 100dvw;background: url(&quot;assets/img/Untitled%20design%20(2).jpg&quot;);"
@endsection

@include('Mastering.dprover')
{{-- main home --}}
@section('content1')
    @include('Mastering.navtop1')
    @yield('inter1')
    @yield('inter2')
    {{-- fiture Water Controll --}}
    @include('mvp.drink')
    <section class="container text-center mt-4" style="justify-content: center;">
        <div class="card p5">
            <div class="row">
                <h4>Come, try your mental health test</h2>
                    <span class="col-3"></span>
                    <a href="{{ url('/quiz') }}" class="btn btn-primary col-6">Start Now</a>
            </div>
        </div>
    </section>

    <section class="container text-center mt-4" style="justify-content: center;">
        <div class="card p5 bg-ouline-primary">
            <div class="row">
                <h4>Come on, take care of your sleep pattern</h2>
                    <span class="col-3"></span>
                    <a href="{{ url('/KebutuhanTidur') }}" class="btn btn-outline-primary col-6">Open</a>
            </div>
        </div>
    </section>
    {{-- @include('Componen.ListResep') --}}
    @include('Mastering.navbtm')
@endsection
