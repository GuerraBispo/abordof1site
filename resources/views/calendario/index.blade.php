    @include('header.header')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-sm-flex justify-content-between">
                        <h4>Calendário 2023 </h4>
                        <a class="btn btn-link" href="">Não perca nenhuma corrida!</a>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="carousel owl-carousel">
                    @foreach ($calendarios as $key => $t)
                        <div class="card card-1">
                            <p style="color: #fff">{{ $t['id'] }}</p>
                                <div class="position-relative">
                                    <img class="img-fluid rounded-top" src="{{ $t['url_imagem'] }}" alt="">
                                    <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                        Circuito
                                    </div>
                                </div>
                            <div class="card-body position-relative pt-0">
                                <h5 class="mt-3">{{ $t['nome_gp'] }}</h5>
                                <p class="mb-0 small"> <i
                                        class="fa-solid fa-calendar pe-1"></i><b>Quinta</b><br>{{ $t['quinta'] }}
                                </p>
                                <hr>
                                <p class="small"> <i class="fa-solid fa-calendar pe-1"></i><b>Sexta</b><br>
                                    {{ $t['sexta_t1'] }}<br> {{ $t['sexta_t2'] }} </p>

                                <hr>
                                <p class="small"> <i
                                        class="fa-solid fa-calendar pe-1"></i><b>Sábado</b><br>{{ $t['sabado_t1'] }} <br>
                                    {{ $t['sabado_t2'] }} </p>
                                <hr>
                                <p class="small"> <i class="fa-solid fa-calendar pe-1"></i><b>Domingo</b><br>
                                    {{ $t['domingo'] }} </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('footer.footer')
