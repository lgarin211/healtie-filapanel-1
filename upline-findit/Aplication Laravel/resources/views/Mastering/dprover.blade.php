@section('inter1')
    <section
        style=" width: 100dvw;padding-bottom: 0dvh;height: 134.887px;background: rgba(0,118,190,0);margin-bottom: -1dvh;">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
            style="font-size: 66px;margin-right: 0dvw;margin-left: 0dvw;margin-bottom: 0;width: 100dvw;margin-top: 2dvh;">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z"
                fill="currentColor">
            </path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z"
                fill="currentColor">
            </path>
        </svg>
        <h1
            style="font-family: Poppins, sans-serif;font-size: 15px;text-align: center;font-weight: bold;margin-top: 0.5dvh;margin-bottom: 0dvh;">
            {{ $user_name }}
        </h1>
        <h1 style="text-align: center;font-size: 14px;">Lose Weight</h1>
    </section>
@endsection
@section('inter2')
    <section style="width: 97dvw;">
        <div class="container"
            style="border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;background: rgba(255,214,214,0);">
            <div class="row"
                style="margin-left: 0dvh;background: rgb(255,255,255);margin-top: 1dvh;border-top-left-radius: 6px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;width: 94dvw;">
                @php
                    $sugar = $TrimNutrisi['sum']->total_sugar;
                    $natrium = $TrimNutrisi['sum']->total_natrium;
                    $fat = $TrimNutrisi['sum']->total_fat;
                    $sugarp = ($sugar / 50) * 100;
                    $natriump = ($natrium / 2000) * 100;
                    $fatp = ($fat / 84) * 100;
                @endphp
                <div class="col" style="padding-left: 0dvw;padding-right: 0dvw;">
                    <h5
                        style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;font-weight: bold;margin-top: 7px;">
                        Sugar</h5>
                    <div class="progress beautiful progress-lg"
                        style="margin-top: -0.5dvh;margin-bottom: 0.5dvh;width: 24dvw;margin-left: 3dvw;height: 1dvh;">
                        <div class="progress-bar bg-primary" aria-valuenow="{{ $sugarp }}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{ $sugarp }}%;"><span
                                class="visually-hidden">{{ $sugarp }}%</span>
                        </div>
                    </div>
                    <h5 style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;">{{ $sugar }}/50g
                    </h5>
                </div>

                <div class="col">
                    <h5
                        style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;font-weight: bold;margin-top: 7px;">
                        Natrium</h5>
                    <div class="progress beautiful progress-lg"
                        style="margin-top: -0.5dvh;margin-bottom: 0.5dvh;width: 24dvw;margin-left: 3dvw;height: 1dvh;">
                        <div class="progress-bar bg-primary" aria-valuenow="{{ $natriump }}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{ $natriump }}%;"><span
                                class="visually-hidden">{{ $natriump }}%</span>
                        </div>
                    </div>
                    <h5 style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;">
                        {{ $natrium }}/2000mg</h5>
                </div>
                <div class="col" style="padding-left: 0dvw;padding-right: 0dvw;">
                    <h5
                        style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;font-weight: bold;margin-top: 7px;">
                        Fat</h5>
                    <div class="progress beautiful progress-lg"
                        style="margin-top: -0.5dvh;margin-bottom: 0.5dvh;width: 24dvw;margin-left: 3dvw;height: 1dvh;">
                        <div class="progress-bar bg-primary" aria-valuenow="{{ $fatp }}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{ $fatp }}%;"><span
                                class="visually-hidden">{{ $fatp }}%</span>
                        </div>
                    </div>
                    <h5 style="text-align: center;font-family: Poppins, sans-serif;font-size: 10px;">
                        {{ $fat }}/67g</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
