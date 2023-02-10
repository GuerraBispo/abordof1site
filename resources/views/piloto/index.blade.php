    @include('header.header')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h4>Campeonato de Pilotos 2023 </h4>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($pilotos as $key => $t)
                    <div class="col-md-4">
                        <p style="color: #fff">{{ $t['id'] }}</p>
                        <div class="card">
                            <div class="h-80px rounded-top"
                                style="background-image:url({{ $t['url_imagem_1'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="avatar avatar-lg mt-n5 mb-3">
                                    <a href="group-details.html"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="{{ $t['url_imagem_2'] }}" alt=""></a>
                                </div>
                                <h5 class="mb-0"> {{ $t['nome'] }} </h5>
                                <small> <i class="fa fa-car pe-1"></i> {{ $t['equipe'] }}</small>
                                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                                    <div>
                                        <h6 class="mb-0">Pontos</h6>
                                        <small>{{ $t['pontos'] }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


    </section>
    @include('footer.footer')
