<ul class="nav nav-pills nav-fill bg-body-tertiary nav-tab rounded-0 fixed-bottom border-top" id="bottom-nav"
    role="tablist">
    <li class="nav-item" role="presentation">
        <button onclick="redirectTo('{{ 'home' }}')"
            class="ovb nav-link @if (Route::current()->getName() == 'home') active @endif" id="bottom-home" aria-label="home"
            data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">
            <svg class="bi bi-house-door-fill" fill="currentColor" height="1.4em" viewbox="0 0 16 16" width="1.4em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z">
                </path>
            </svg>
            <span class="d-none">Home</span>
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button onclick="redirectTo('{{ 'workout' }}')" id="bottom-Workout"
            class="ovb nav-link @if (Route::current()->getName() == 'workout') active @endif" aria-label="Workout"
            data-bs-toggle="tab" data-bs-target="#Workout" type="button" role="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icon-tabler-barbell"
                style="font-size: 36px;margin-top: -4dvh;margin-bottom: -4dvh;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                </path>
                <path d="M2 12h1">
                </path>
                <path d="M6 8h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2">
                </path>
                <path d="M6 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z">
                </path>
                <path d="M9 12h6">
                </path>
                <path d="M15 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z">
                </path>
                <path d="M18 8h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2">
                </path>
                <path d="M22 12h-1">
                </path>
            </svg>
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button onclick="redirectTo('{{ 'newfood' }}')" id="bottom-newfood"
            class="ovb nav-link @if (Route::current()->getName() == 'newfood') active @endif" aria-label="newfood"
            data-bs-toggle="tab" data-bs-target="#newfood" type="button" role="tab">
            <span class="d-none">newfood</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                viewBox="0 0 16 16" class="bi bi-upc-scan"
                style="font-size: 27px;width: auto;margin-top: -4dvh;margin-bottom: -4dvh;--bs-body-font-weight: normal;">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z">
                </path>
            </svg>
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button onclick="redirectTo('{{ 'heltieF' }}')" id="bottom-heltieF"
            class="ovb nav-link @if (Route::current()->getName() == 'heltieF') active @endif" aria-label="heltieF"
            data-bs-toggle="tab" data-bs-target="#heltieF" type="button" role="tab">
            <span class="d-none">heltieF</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em"
                fill="currentColor" style="font-size: 29px;margin-top: -4.5dvh;margin-bottom: -4dvh;">
                <path d="M0 0h24v24H0z" fill="none">
                </path>
                <path
                    d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-8-15.03-8-15.03 0h15.03zM1.02 17h15v2h-15z">
                </path>
            </svg>
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button onclick="redirectTo('{{ 'EditProfile' }}')" id="bottom-user"
            class="ovb nav-link @if (Route::current()->getName() == 'EditProfile') active @endif " aria-label="user" data-bs-toggle="tab"
            data-bs-target="#user" type="button" role="tab">
            <svg class="bi bi-person" fill="currentColor" height="1.5em" viewbox="0 0 16 16" width="1.5em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                </path>
            </svg>
            <span class="d-none">User</span>
        </button>
    </li>
</ul>
<script>
    function redirectTo(url) {
        window.location.replace(url);
        // alert(url);
    }
</script>

{{-- buatlam basik nav tabnya --}}
