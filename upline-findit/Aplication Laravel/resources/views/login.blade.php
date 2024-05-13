@extends("Mastering.m1")
@section("content2")
<section>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="margin-top: 7dvh;margin-bottom: -62px;">
                    <h2 style="font-weight: bold;">Welcome to Healtie!</h2>
                    <p class="w-lg-50">Sign In to Continue</p>
                </div>
            </div>
            <div class="card mb-5" style="border-color: rgba(33,37,41,0);">
                <div class="card-body d-flex flex-column align-items-center" style="backdrop-filter: opacity(1);">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z">
                            </path>
                        </svg>
                    </div>
                    <form class="text-center" method="post" action="{{route("login")}}" style="border-color: rgba(33,37,41,0);">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="email" name="email" placeholder="Email" style="height: 7dvh;">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="password" name="password" placeholder="Password" style="height: 7dvh;">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-block w-100" type="submit">Sign In</button>
                        </div>
                        <p class="text-muted">Don't have an account?<br>
                            <a href="{{route("register")}}">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
