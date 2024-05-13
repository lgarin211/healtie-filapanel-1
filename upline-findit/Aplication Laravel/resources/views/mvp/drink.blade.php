<section>
    <h1
        style="font-family: Poppins, sans-serif;font-size: 12px;text-align: center;padding-top: 0dvh;padding-bottom: 0dvh;margin-bottom: 1.5dvh;margin-top: 1.5dvh;">
        Tuesday, 7 May 2024
    </h1>
    <div class="container"
        style="border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;background: rgba(255,214,214,0);padding-right: 11.5px;">
        <div class="row"
            style="margin-left: 0dvw;background: rgb(255,255,255);margin-top: 0dvh;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;width: 94dvw;margin-right: 0dvw;">
            <div class="col" style="padding-left: 0dvw;padding-right: 0dvw;">
                <h5
                    style="text-align: left;font-family: Poppins, sans-serif;font-size: 10px;font-weight: bold;margin-top: 7px;margin-left: 3dvw;">
                    Water
                </h5>
            </div>
            <div class="col">
                <h5
                    style="text-align: right;font-family: Poppins, sans-serif;font-size: 10px;font-weight: bold;margin-top: 7px;">
                    {{ $water->targetted ? $water->targetted / 10 : 0 / 10 }} L
                </h5>
            </div>
        </div>
        <div class="row"
            style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;background: #ffffff;margin-left: 0dvw;margin-right: 0dvw;">
            <div class="col" style="padding-bottom: 1dvh;">
                @for ($i = 0; $i < $gelas; $i++)
                    <a class="btn btn-primary" href="{{ url('/addprogreswatter') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                            fill="none" style="font-size: 35px;">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5 2H19L17.3602 18.398C17.1557 20.4428 15.4351 22 13.38 22H10.62C8.56494 22 6.84428 20.4428 6.6398 18.398L5 2ZM7.50998 7L7.20998 4H16.79L16.49 7H7.50998ZM7.70998 9L8.62988 18.199C8.73212 19.2214 9.59245 20 10.62 20H13.38C14.4076 20 15.2679 19.2214 15.3701 18.199L16.29 9H7.70998Z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </a>
                @endfor
                <a href="{{ url('/addprogreswatter?add=1') }}" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                        fill="none" style="font-size: 35px;">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5 2H19L17.3602 18.398C17.1557 20.4428 15.4351 22 13.38 22H10.62C8.56494 22 6.84428 20.4428 6.6398 18.398L5 2ZM7.50998 7L7.20998 4H16.79L16.49 7H7.50998ZM7.70998 9L8.62988 18.199C8.73212 19.2214 9.59245 20 10.62 20H13.38C14.4076 20 15.2679 19.2214 15.3701 18.199L16.29 9H7.70998Z"
                            fill="currentColor">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
