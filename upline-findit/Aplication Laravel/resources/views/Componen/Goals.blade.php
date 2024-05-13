{{-- @extends('Mastering.m1')
@section('content1')
    @include('Mastering.navtop1')
    <section>
        <h1
            style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;margin-top: 4dvh;margin-left: 20px;margin-bottom: 15px;">
            Health Profile</h1>
    </section>
    <section>
        <div class="row" style="margin-top: 2dvh;height: 33px;">
            <div class="col-5">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 16dvw;text-align: right;">Weight
                </h1>
            </div>
            <div class="col-3">
                <input type="number" style="width: 67px;height: 27.2px;">
            </div>
            <div class="col">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;">kg</h1>
            </div>
        </div>
        <div class="row" style="margin-top: 2dvh;height: 33px;font-size: 16px;">
            <div class="col-5" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 16dvw;text-align: right;">Height
                </h1>
            </div>
            <div class="col-3" style="font-size: 16px;">
                <input type="number" style="width: 67px;height: 27.2px;font-size: 16px;">
            </div>
            <div class="col" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;">cm</h1>
            </div>
        </div>
        <div class="row" style="margin-top: 2dvh;height: 33px;font-size: 18px;">
            <div class="col-5" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 16dvw;text-align: right;">Age</h1>
            </div>
            <div class="col-3" style="font-size: 18px;">
                <input type="number" style="width: 67px;height: 27.2px;font-size: 18px;">
            </div>
            <div class="col" style="font-size: 18px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 18px;">y.o</h1>
            </div>
        </div>
        <div class="row" style="margin-top: 2dvh;height: 33px;font-size: 18px;">
            <div class="col-5" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 16dvw;text-align: right;">
                    Gender
                </h1>
            </div>
            <div class="col-3" style="font-size: 18px;">
                <select name="gender">
                    <option value="0">Female</option>
                    <option value="">Male</option>
                </select>
            </div>
        </div>
        <div class="row" style="margin-top: 2dvh;height: 33px;font-size: 18px;">
            <div class="col-5" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 5dvw;text-align: right;">
                    Hypertension</h1>
            </div>
            <div class="col-3" style="font-size: 18px;">
                <select name="hyper">
                    <option value="13">No</option>
                    <option value="12">Yes</option>
                </select>
            </div>
        </div>
        <div class="row" style="margin-top: 2dvh;height: 33px;font-size: 18px;">
            <div class="col-5" style="font-size: 16px;">
                <h1 style="font-family: Poppins, sans-serif;font-size: 16px;margin-left: 5dvw;text-align: right;">Diabetes
                </h1>
            </div>
            <div class="col-3" style="font-size: 18px;">
                <select>
                    <option value="13">No</option>
                    <option value="12">Yes</option>
                </select>
            </div>
        </div>
    </section>
    <section>
        <h1
            style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 20px;margin-top: 3dvh;margin-left: 20px;margin-bottom: 12px;">
            Health Goals</h1>
    </section>
    <div class="container">
        <div>
            <div class="selectgroup selectgroup-pills" style="margin-left: 5dvw;font-size: 20px;">
                <label class="form-label selectgroup-item">
                    <input type="checkbox" checked="" class="selectgroup-input" name="value" value="HTML">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Lose
                        Weight</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="CSS"
                        style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Gain
                        Weight</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="PHP"
                        style="font-family: Poppins, sans-serif;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Muscle
                        Gain</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="JavaScript"
                        style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Healthy
                        Lifestyle</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="Ruby"
                        style="font-family: Poppins, sans-serif;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Balanced
                        Diet</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="Ruby"
                        style="font-family: Poppins, sans-serif;font-size: 16px;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Sleep
                        Early</span>
                </label>
                <label class="form-label selectgroup-item" style="font-family: Poppins, sans-serif;">
                    <input type="checkbox" class="selectgroup-input" name="value" value="C++"
                        style="font-family: Poppins, sans-serif;">
                    <span class="selectgroup-button" style="font-family: Poppins, sans-serif;font-size: 16px;">Improve
                        Mental Health</span>
                </label>
            </div>
            <button class="btn btn-primary" type="button"
                style="background: rgb(0,118,190);font-family: Poppins, sans-serif;padding-right: 0dvw;padding-left: 0dvw;padding-top: 1dvh;padding-bottom: 1dvh;margin-top: 5dvh;">Continue</button>
        </div>
    </div>
@endsection --}}


@extends('Mastering.m1')

@section('content1')
    @include('Mastering.navtop1')
    <form method="post" action="">
        <section>
            @csrf
            <h1
                style="font-family: Poppins, sans-serif; font-weight: bold; font-size: 20px; margin-top: 4vh; margin-left: 20px; margin-bottom: 15px;">
                Health Profile
            </h1>
        </section>

        <section class="container" style="margin-left:5dvh">
            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="weight" style="font-family: Poppins, sans-serif; font-size: 16px;">Weight</label>
                </div>
                <div class="col-3">
                    <input type="number" id="weight" name="weight" style="width: 100%; height: 27.2px;">
                </div>
                <div class="col">
                    <span style="font-family: Poppins, sans-serif;">kg</span>
                </div>
            </div>

            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="height" style="font-family: Poppins, sans-serif; font-size: 16px;">Height</label>
                </div>
                <div class="col-3">
                    <input type="number" id="height" name="height" style="width: 100%; height: 27.2px;">
                </div>
                <div class="col">
                    <span style="font-family: Poppins, sans-serif;">cm</span>
                </div>
            </div>

            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="age" style="font-family: Poppins, sans-serif; font-size: 16px;">Date Birth</label>
                </div>
                <div class="col-3">
                    <input type="date" id="age" name="age" style="width: 100%; height: 27.2px;">
                </div>
                <div class="col">
                    <span style="font-family: Poppins, sans-serif;">y.o</span>
                </div>
            </div>

            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="gender" style="font-family: Poppins, sans-serif; font-size: 16px;">Gender</label>
                </div>
                <div class="col-3">
                    <select id="gender" name="gender" style="width: 100%;">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            </div>

            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="hypertension"
                        style="font-family: Poppins, sans-serif; font-size: 16px;">Hypertension</label>
                </div>
                <div class="col-3">
                    <select id="hypertension" name="hypertension" style="width: 100%;">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>
            </div>

            <div class="row" style="margin-top: 2vh;">
                <div class="col-5">
                    <label for="diabetes" style="font-family: Poppins, sans-serif; font-size: 16px;">Diabetes</label>
                </div>
                <div class="col-3">
                    <select id="diabetes" name="diabetes" style="width: 100%;">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>
            </div>
        </section>

        <section>
            <h1
                style="font-family: Poppins, sans-serif; font-weight: bold; font-size: 20px; margin-top: 3vh; margin-left: 20px; margin-bottom: 12px;">
                Health Goals
            </h1>
        </section>

        <div class="container">
            <div class="container selectgroup selectgroup-pills" style="margin-left: 5dvw;">
                <label class="form-label selectgroup-item">
                    <input type="checkbox" checked="" class="selectgroup-input" name="health_goals[]"
                        value="Lose Weight">
                    <span class="selectgroup-button">Lose Weight</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]" value="Gain Weight">
                    <span class="selectgroup-button">Gain Weight</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]" value="Muscle Gain">
                    <span class="selectgroup-button">Muscle Gain</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]" value="Healthy Lifestyle">
                    <span class="selectgroup-button">Healthy Lifestyle</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]" value="Balanced Diet">
                    <span class="selectgroup-button">Balanced Diet</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]" value="Sleep Early">
                    <span class="selectgroup-button">Sleep Early</span>
                </label>

                <label class="form-label selectgroup-item">
                    <input type="checkbox" class="selectgroup-input" name="health_goals[]"
                        value="Improve Mental Health">
                    <span class="selectgroup-button">Improve Mental Health</span>
                </label>
            </div>
            <button class="btn btn-primary" type="submit"
                style="background: rgb(0, 118, 190); margin-top: 5vh;">Continue</button>

        </div>
    </form>
@endsection
