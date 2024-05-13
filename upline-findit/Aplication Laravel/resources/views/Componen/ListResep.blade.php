    <section style="margin-bottom: 3dvh;padding-top: 0px;">
        <h1
            style="font-family: Poppins, sans-serif;font-weight: bold;font-size: 28px;margin-top: 3dvh;margin-left: 8dvw;margin-right: 8dvw;">
            Healthy Food<br>Recommendation</h1>
        <h1 style="font-family: Poppins, sans-serif;font-size: 13px;margin-right: 5dvw;margin-left: 8dvw;">
            <span style="color: rgb(13, 13, 13);">Discover a treasure trove of nutritious delights</span>
            <br>
            <span style="color: rgb(13, 13, 13);">to fuel your body and mind.</span>
        </h1>
    </section>

    @foreach ($resep as $key1 => $value1)
        <section style="margin-top: 3dvh;">
            <h1
                style="margin-left: 8dvw;font-size: 18px;font-family: Poppins, sans-serif;font-weight: bold;margin-right: 8dvw;">
                {{ $key1 }}
            </h1>
            <div class="row">
                @foreach ($value1 as $key2 => $value2)
                    <div class="col-6" data-bs-toggle="modal" data-bs-target="#{{ $value2->id . 'alimat' }}">
                        <img style="margin-left: 8dvw;width: 138px;margin-bottom: 1dvh;"
                            src="{{ url('storage/' . $value2->poster) }}">
                        <h1 style="font-size: 12px;font-family: Poppins, sans-serif;margin-left: 8dvw;">
                            {{ $value2->produk }}
                        </h1>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ $value2->id . 'alimat' }}" tabindex="-1"
                        aria-labelledby="{{ $value2->id . 'alimat' }}Label" aria-hidden="true" style="padding: 0;">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <section>
                                        <img src="{{ url('storage/' . $value2->poster) }}"
                                            style="width: 392px;padding-top: dvh;">
                                        <div class="container">
                                            <h1
                                                style="font-family: Poppins, sans-serif;font-size: 20px;font-weight: bold;margin-top: 2dvh;margin-left: 3dvw;margin-bottom: 0.5dvh;">
                                                {{ $value2->produk }}
                                            </h1>
                                            <div class="container">
                                                {!! $value2->nutrisi !!}
                                                <br>
                                                {!! $value2->desk !!}
                                            </div>
                                    </section>



                                </div>
                                {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach
