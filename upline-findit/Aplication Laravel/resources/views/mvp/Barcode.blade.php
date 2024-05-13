<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healtie ferren</title>
    <link rel="stylesheet" href="{{ asset('assets4/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/Poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/Login-Form-Basic-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/Multiple-Input-Select-Pills.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/progress-bars-progress.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/Sign-Up-Form---Gabriela-Carvalho.css') }}">
    <link rel="stylesheet" href="{{ asset('assets4/css/styles.css') }}">
</head>

<body style="width: 100dvw;">
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <section onclick="document.getElementById('uvb').click()" class="bg-outline-primary">
            <input type="file" name="pati" id="uvb" style="margin-top: 8dvh; display: none;"
                onchange="document.getElementById('upercv').src = window.URL.createObjectURL(this.files[0]);document.getElementById('polimerpat').style.display = 'block';">
            <img id="upercv"
                style="width: 100dvw;margin-top: 8dvh;height: 55dvh;max-height: 60dvh;object-fit: contain;"
                src="https://w7.pngwing.com/pngs/785/825/png-transparent-cartoon-logo-graphy-camera-cartoon-camera-text-photography-logo.png">
        </section>
        <div class="container" style="display: none;" id="polimerpat">
            <button class="btn btn-primary" type="submit">kirim</button>
        </div>
    </form>
    <section style="background: #ffffff;border-top-left-radius: 37px;border-top-right-radius: 37px;">
        <h1 style="font-family: Poppins, sans-serif;font-size: 21px;padding-top: 2dvh;text-align: center;">Choose your
            option</h1>
        <div class="row" style="padding-bottom: 25px;">
            <div class="col" style="padding-left: 6dvw;padding-right: 0dvw;">
                <div class="btn btn-outline-primary" style="width: -webkit-fill-available;" id="tmb1">
                    <!-- style="height: 67.8px;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;" -->
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em"
                        fill="currentColor" style="font-size: 25px;margin-top: 1dvh;">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-8-15.03-8-15.03 0h15.03zM1.02 17h15v2h-15z">
                        </path>
                    </svg>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 19px;text-align: center;margin-top: 0.5dvh;">
                        Scan Food</h1>
                </div>
            </div>
            <div class="col" style="padding-left: 2dvw;padding-right: 6dvw;">
                <div class="btn btn-primary" style="width: -webkit-fill-available;" id="tmb2">
                    <!-- style="height: 67.8px;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;" -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icon-tabler-barcode"
                        style="font-size: 25px;margin-top: 1dvh;">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 11h1v2h-1z"></path>
                        <path d="M10 11l0 2"></path>
                        <path d="M14 11h1v2h-1z"></path>
                        <path d="M19 11l0 2"></path>
                    </svg>
                    <h1 style="font-family: Poppins, sans-serif;font-size: 19px;text-align: center;margin-top: 0.5dvh;">
                        Barcode</h1>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets4/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
        function toggleButton(btn1, btn2) {
            btn1.classList.remove('btn-outline-primary');
            btn1.classList.add('btn-primary');
            btn2.classList.remove('btn-primary');
            btn2.classList.add('btn-outline-primary');
            let filehandel = document.getElementById('uvb');
            filehandel.name = filehandel.name === 'pato' ? 'pati' : 'pato';
            console.log(filehandel.name);
        }

        document.getElementById('tmb1').addEventListener('click', function() {
            toggleButton(this, document.getElementById('tmb2'));
        });

        document.getElementById('tmb2').addEventListener('click', function() {
            toggleButton(this, document.getElementById('tmb1'));
        });
    </script>

</body>

</html>
