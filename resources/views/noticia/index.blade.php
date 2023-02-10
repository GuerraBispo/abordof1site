 @include('header.header')
 <section class="pt-5 pb-5">
     <div class="container">
         <div class="row">
             <div class="col-12 mb-3">
                 <h4>Notícias F1 </h4>
             </div>
         </div>

         <div class="row g-4">
             @foreach ($tarefas as $key => $t)
                 <div class="col-sm-8 col-xl-6">
                     <div class="card">
                         <p style="color: #fff">{{ $t['id'] }}</p>
                         <div class="card-header border-0 pb-0">
                             <div class="d-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                     <div class="avatar me-2">
                                         <img class="" src="assets/logo/logo.webp" alt="abordof1">
                                     </div>
                                     <div>
                                         <div class="nav nav-divider">
                                             <h6 class="nav-item card-title mb-0">{{ $t['titulo'] }}</h6>
                                             <span class="nav-item small">Publicado -
                                                 {{ date('d/m/Y', strtotime($t['created_at'])) }}.</span>
                                         </div>
                                         <p class="mb-0 small">{{ $t['subtitulo'] }}.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                             <img class="card-img" src="{{ $t['url_imagem'] }}" alt="abordof1"><br><br>
                             <h6 class="nav-item card-title mb-0">Criado por {{ $t['autor'] }}.</h6><br>
                             <p>{{ $t['artigo'] }}</p>
                             <!-- <ul class="nav nav-stack py-3 small">
                 <li class="nav-item">
                     <a class="nav-link" href=""> <i class="bi bi-chat-fill pe-1"></i>Saiba mais</a>
                 </li>
             </ul> -->
                         </div>
                     </div>
                 </div>

                 <br><br>
             @endforeach
         </div>
     </div>
 </section>
 @include('footer.footer')
