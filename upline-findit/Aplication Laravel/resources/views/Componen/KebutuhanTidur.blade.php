@extends('Mastering.m1')

@section('dotstylebody')
    style="width: 96dvw;"
@endsection

@section('content1')
    @include('Mastering.navtop1')
    <section>
        <p class="text-center"
            style="margin-top: 2dvh;margin-bottom: 2dvh;color: var(--bs-emphasis-color);font-family: poppins;font-weight: bold;">
            Kebutuhan Tidur</p>
        <div style="margin: 2;margin-top: 2dvh;">
            <canvas
                data-bss-chart='{"type":"bar","data":{"labels":["January","February","March","April","May","June"],"datasets":[{"label":"Revenue","backgroundColor":"#4e73df","borderColor":"#4e73df","data":[4500,5300,6250,7800,9800,15000]}]},"options":{"maintainAspectRatio":true,"legend":{"display":false,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"bold","position":"top"},"scales":{"xAxes":[{"ticks":{"fontStyle":"normal"}}],"yAxes":[{"ticks":{"fontStyle":"normal"}}]}}'></canvas>
        </div>

        <div class="col d-flex justify-content-center align-items-center" style="margin-top: 2dvh;">
            <a href="{{ url('/tambah_data_tidur') }}" class="btn btn-primary text-center" type="button"
                style="font-family: Poppins, sans-serif;">Tambah
                Data</a>
        </div>
    </section>
    <section style="text-align: left;font-family: Poppins, sans-serif;">
        <div class="container" style="font-family: Poppins, sans-serif;">
            <p class="fs-5 fw-semibold" style="margin-top: 1dvh;font-family: Poppins, sans-serif;">Pilihan</p>
            <div class="card d-flex"
                style="color: var(--bs-body-color);background: rgba(0,118,190,0.11);height: 2.5rem;font-family: Poppins, sans-serif;">
                <div class="row d-flex align-items-center" style="font-family: Poppins, sans-serif;">
                    <div class="col align-items-center" style="font-family: Poppins, sans-serif;">
                        <p class="d-flex align-items-center"
                            style="margin-top: 0.5rem;padding-left: 3dvw;font-family: Poppins, sans-serif;">Tambah ke
                            Favorit</p>
                    </div>
                    <div class="col-2 d-flex align-items-start" style="padding-bottom: 8px;"><svg class="bi bi-star"
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                            </path>
                        </svg></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 2dvh;font-family: Poppins, sans-serif;">
            <div class="card d-flex"
                style="color: var(--bs-body-color);background: rgba(0,118,190,0.11);height: 2.5rem;font-family: Poppins, sans-serif;">

                <div class="row d-flex align-items-center">
                    <div class="col align-items-center">
                        <p class="d-flex align-items-center" style="margin-top: 0.5rem;padding-left: 3dvw;">Tampilkan Semua
                            Data</p>
                    </div>
                    <div class="col-2 d-flex align-items-start" style="padding-bottom: 8px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-chevron-right">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg></div>
                </div>
            </div>
        </div>
        <div class="container">
            <p class="fs-5 fw-semibold" style="margin-top: 3dvh;font-family: Poppins, sans-serif;">Kategori Jam Tidur</p>
            <div class="card" style="margin-top: 1dvh;background: rgb(227,240,248);">
                <div class="card-body">
                    <p class="card-text" style="font-family: Poppins, sans-serif;">Buruk : 0 - 4 jam / hari<br>Sedang : 5-6
                        jam / hari<br>Baik : 7-8 jam / hari</p>
                </div>
            </div>
        </div>
    </section>
    <div style="padding-top: 13dvh;"></div>
    @include('Mastering.navbtm')
@endsection

@section('addtohead')
    <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets3/css/Poppins.css">
    <link rel="stylesheet" href="assets3/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets3/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets3/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets3/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets3/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets3/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets3/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets3/css/progress-bars-progress.css">
    <link rel="stylesheet" href="assets3/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets3/css/styles.css">
@endsection
