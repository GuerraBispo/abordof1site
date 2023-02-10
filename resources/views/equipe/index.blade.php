@include('header.header')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h4>Campeonato de Contrutores 2023 </h4>
            </div>
        </div>
       

        <div class="wrapper">
            <div class="carousel owl-carousel">
                @foreach ($equipes as $key => $t)
                    <div class="card">
                            <div class="h-80px rounded-top"
                                style="background-image:url({{ $t['url_imagem'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div><br><br>
                            <div class="card-body text-center pt-0">
                                <h5 class="mb-0"> {{ $t['nome'] }} </h5>
                                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                                    <div>
                                        <h6 class="mb-0">Pontos</h6>
                                        <small>{{ $t['pontos'] }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>


    </div>
</section>
@include('footer.footer')
