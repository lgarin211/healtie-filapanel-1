@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 96dvw;"
@endsection

@section('addtohead')
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json" crossorigin="use-credentials">
    <link rel="stylesheet" href="assets/css/Poppins.css">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets/css/progress-bars-progress.css">
    <link rel="stylesheet" href="assets/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection

@section('content1')
    <section>
        <section class="position-relative py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="margin-top: 1dvh;margin-bottom: -62px;">
                    <h2 style="font-weight: bold;width: 100dvw;">Create an Account</h2>
                    <p class="w-lg-50" style="margin-bottom: 5dvh;width: 100dvw;">Sign Up to Join</p>
                </div>
            </div>
            <div class="container" style="padding-right: 0dvw;">
                <div class="card mb-5" style="border-style: none;">
                    <form method="POST" style="border-style: none;">
                        @csrf
                        <div class="gc004-container">
                            <label class="form-label fw-bold" for="email" style="margin-bottom: 2dvh;">Your Name</label>
                            <input type="text" placeholder="Your Name" name="psw-repeat" required=""
                                style="margin-top: -9dvh;height: 46px;">
                            <label class="form-label fw-bold" for="email" style="margin-bottom: 2dvh;">Email</label>
                            <input type="text" placeholder="Enter Email" name="email" required=""
                                style="height: 46px;margin-top: -9dvh;">
                            <label class="form-label fw-bold" for="psw" style="margin-bottom: 2dvh;">Password</label>
                            <input type="password" placeholder="Enter Password" name="psw" required=""
                                style="height: 46px;margin-top: -9dvh;margin-bottom: 20px;">
                            <p style="margin-top: 0;">By creating an account you agree to our&nbsp;
                                <a class="gc004-dodgerblue" href="#">Terms &amp; Privacy</a>.
                            </p>
                            <button class="btn btn-primary d-block w-100" type="submit" style="margin-bottom: 16px;">Sign
                                Up
                            </button>
                            <div class="gc-clearfix">

                            </div>
                            <p class="text-muted" style="text-align: center;">Already have an account?&nbsp;<a
                                    href="#">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
@endsection
