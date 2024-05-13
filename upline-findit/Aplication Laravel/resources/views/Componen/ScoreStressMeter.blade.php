@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 100dvw;"
@endsection

@section('content1')
    @include('Mastering.navtop1')
    <section>
        <p class="fs-2 fw-bold d-flex justify-content-center"
            style="margin: 5dvh;font-family: Poppins, sans-serif;margin-bottom: 5dvh;">Score Quiz</p>
        <div class="container d-flex justify-content-center align-items-center" style="height: 425.9px;">
            <div class="card d-flex align-items-center"
                style="height: 390.6px;background: rgba(0,118,190,0.2);margin: 0px;width: 300px;margin-top: 1.5dvh;">
                <div class="card-body">
                    <h6 class="text-break text-muted card-subtitle mb-2"
                        style="text-align: center;font-family: Poppins, sans-serif;">Tadaa! Your stress assessment is
                        complete. Brace yourself for the reveal below!</h6>
                    <h4 class="text-break text-center card-title"
                        style="padding-top: 1dvh;font-family: Poppins, sans-serif;"><strong>High</strong></h4>
                    <p class="text-break card-text"
                        style="font-size: 14px;padding-top: 1dvh;font-family: Poppins, sans-serif;"><strong>Very
                            Low</strong> : Minimal to no stress, high resilience, and well-being<br><strong>Low</strong> :
                        Low stress, effective stress management, balanced well-being<br><strong>Moderate</strong> : Moderate
                        stress, intermittent challenges, reasonable coping skills<br><strong>High</strong> : High stress,
                        significant impact on daily life, need for support<br><strong>Very High</strong> : Extremely high
                        stress, severe repercussions, urgent intervention required</p>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center" style="margin-top: 2dvh;">
            <a href="{{ url('/home') }}" class="btn btn-primary col-12"
                style="font-family: Poppins, sans-serif;">Continue</a>
        </div>
    </section>
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
