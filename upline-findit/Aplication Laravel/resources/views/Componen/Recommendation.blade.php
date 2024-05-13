{{-- @dump($user) --}}
<section>
    <h1
        style="padding-top: 2.5dvh;font-size: 22px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;">
        Recommendations</h1>
</section>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 57.6625px;margin-left: 0dvw;">
                Name</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;margin-left: 0dvw;">
                : {{ $user->Detail->name }}</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 95.5875px;">
                Height</h1>
        </div>
        <div class="col" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;">
                : {{ $user->height * 100 }} cm</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 57.6625px;margin-left: 0dvw;">
                Age</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;margin-left: 0dvw;">
                : 20 y.o</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 95.5875px;">
                Weight</h1>
        </div>
        <div class="col" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;">
                : {{ $user->weight * 100 }} kg</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 57.6625px;margin-left: 0dvw;">
                Gender</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;margin-left: 0dvw;">
                : {{ $user->gender ? 'Male' : 'Female' }}</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 95.5875px;">
                Hypertension</h1>
        </div>
        <div class="col" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;">
                : {{ $user->Hypotermia ? 'Yes' : 'No' }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 57.6625px;margin-left: 0dvw;">
                Goals</h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;width: 88.6px;margin-left: 0dvw;">
                : {{ $user->Detail->goals }}
                {{-- $Datauser->Detail->goals --}}
            </h1>
        </div>
        <div class="col-3" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;width: 95.5875px;">
                Diabetes</h1>
        </div>
        <div class="col" style="font-size: 13px;">
            <h1
                style="padding-top: 0dvh;font-size: 13px;font-family: Poppins, sans-serif;padding-left: 0dvw;text-align: left;">
                : {{ $user->Diabetes ? 'Yes' : 'No' }}</h1>
        </div>
    </div>
</div>
<section>
    <h1
        style="padding-top: 2dvh;font-size: 16px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;margin-bottom: -2dvh;padding-bottom: 2dvh;">
        Fitness Type</h1>
    <h1 class="text-break"
        style="padding-top: 0dvh;font-size: 12px;font-family: Poppins, sans-serif;padding-left: 0dvw;margin-bottom: 0dvh;text-align: justify;padding-right: 2dvw;width: 375.587px;">
        {{ $workout['Rekomendasi_Kegiatan_2'] }}
    </h1>
</section>
<section>
    <h1
        style="padding-top: 2dvh;font-size: 16px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;margin-bottom: -2dvh;padding-bottom: 2dvh;">
        Exercises</h1>
    <h1 class="text-break"
        style="padding-top: 0dvh;font-size: 12px;font-family: Poppins, sans-serif;padding-left: 0dvw;margin-bottom: 0dvh;text-align: justify;padding-right: 2dvw;width: 375.587px;">
        {{ $workout['Rekomendasi_Jenis_Olahraga'] }}
    </h1>
</section>
<section>
    <h1
        style="padding-top: 2dvh;font-size: 16px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;margin-bottom: -2dvh;padding-bottom: 2dvh;">
        Diet Plan</h1>
    <h1 class="text-break"
        style="padding-top: 0dvh;font-size: 12px;font-family: Poppins, sans-serif;padding-left: 0dvw;margin-bottom: 0dvh;text-align: justify;padding-right: 2dvw;width: 375.587px;">
        {{ $workout['Rekomendasi_Makanan'] }}
    </h1>
</section>
<section>
    <h1
        style="padding-top: 2dvh;font-size: 16px;font-family: Poppins, sans-serif;font-weight: bold;padding-left: 0dvw;margin-bottom: -2dvh;padding-bottom: 2dvh;">
        Conclusion</h1>
    <h1 class="text-break"
        style="padding-top: 0dvh;font-size: 12px;font-family: Poppins, sans-serif;padding-left: 0dvw;margin-bottom: 0dvh;padding-right: 2dvw;width: 375.587px;text-align: justify;">
        {{ $workout['Desk1'] }}</h1>
</section>
