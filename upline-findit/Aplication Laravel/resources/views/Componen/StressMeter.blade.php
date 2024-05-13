@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 100dvw;"
@endsection

@section('content1')
    @include('Mastering.navtop1')

    <section>
        <p class="fs-4 fw-semibold d-flex justify-content-center" style="margin-top: 1dvh;font-family: Poppins, sans-serif;">
            Stress Meter</p>
    </section>
    @foreach ($questions as $question)
        <section style="margin-top: 2dvh;">
            <div class="container">
                <div class="card" style="background: rgba(0,118,190,0.45);position: static;">
                    <div class="card-body">
                        <fieldset>
                            <legend style="font-family: Poppins, sans-serif;font-size: 16px;"><span
                                    style="color: rgba(33, 37, 41, 0.75);">{{ $question['text'] }}</span></legend>
                            @foreach ($question['options'] as $option)
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="{{ $option['id'] }}" class="custom-control-input"
                                        name="{{ $question['name'] }}" value="{{ $option['value'] }}">
                                    <label class="form-label custom-control-label" for="{{ $option['id'] }}"
                                        style="font-family: Poppins, sans-serif;margin-left: 2dvw;">{{ $option['label'] }}</label>
                                </div>
                            @endforeach
                        </fieldset>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <div class="container d-flex justify-content-center" style="margin-top: 2dvh;">
        <a href="{{ url('/score') }}" class="btn btn-primary col-12" style="">Submit</a>
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
