@extends('layouts.welcome')



@section('content')


    <div class="site-blocks-cover" style="background-image: url('frontEnd/images/purplePill.jpg');">
      <div class="container">
        <div class="row">
          <div class="order-lg-2 align-self-center">
            <div class="text-center">
            <h1><i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></h1>
            <h2 class="sub-title"><b>Adopter le bon traitement </b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

<<<<<<< HEAD
        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/affichage/12"> <img src="frontEnd/images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/affichage/12">Bioderma</a></h3>
            <p class="price"> 1200</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/10"> <img src="frontEnd/images/spasfon.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/10">Spasfon</a></h3>
            <p class="price">340</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/7"> <img src="frontEnd/images/maxilase.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/7">Maxilase</a></h3>
            <p class="price">120</p>
=======
      <div class="site-section">
         <div class="container">
      <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Produits repondus</h2>
>>>>>>> aecd5a603135c6ed3f31d05a2733e58d98ffa808
          </div>
        </div>

        <div class="row">
          @if($top)
          @foreach($top as $m)

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="{{url('detail/'.$m->id)}}"> <img src="{{ asset('storage/'.$m->photo)}}" style="height:90%;width:80%;" alt="Image"></a>
            <h3 class="text-dark"><a href="{{url('detail/'.$m->id)}}">{{$m->nom}}</a></h3>
            <p class="price">{{$m->prix}}</p>
          </div>
          @endforeach
          @endif
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="{{url('medi')}}" class="btn btn-primary px-4 py-3">Voir tout les produits</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Nouveautés</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              @foreach($new as $n)
              <div class="text-center item mb-4">
                <a href="{{ url('detail/'.$n->id)}}"> <img src="{{ asset('storage/'.$n->photo)}}" style="height:90%;width:80%;" alt="Image"></a>
                <h3 class="text-dark"><a href="{{ url('detail/'.$n->id)}}">{{$n->nom}}</a></h3>
                <p class="price">{{$n->prix}}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Témoignages</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 no-direction owl-carousel">
                  @foreach($tst as $t)
                  @if($t->temoin)
                  <div class="testimony">
                    <blockquote>
                      <p>&ldquo;{{$t->temoin}}&rdquo;</p>
                    </blockquote>

                    <p>&mdash; {{$t->nom}} {{$t->prenom}}</p>
                  </div>
                  @endif
                   @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="site-section bg-image" style="background-image: url('frontEnd/images/bg_1.jpg');">
          <div class="container">
            <div class="row align-items-stretch">
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class=" banner-1-inner ml-auto align-self-center">
                    <h2 style="color: #000; text-transform: uppercase;font-weight: 900;"> Produits  PharmaTlem:</h2>
                    <p>
                        -Une délivrance confidentielle et sécurisée des mêmes médicaments .<br>
                        -Un pharmacien à votre écoute en permanence et accessible par téléphone, email et réseaux sociaux. Il vous délivre des conseils personnalisés et assure une utilisation sûre des médicaments.<br>
                        -Un accès à un catalogue de médicaments de 2000 produits <br>
                        -Une transparence totale au niveau des prix des médicaments et de l’ensemble des produits proposés pour vous garantir le choix mais aussi un accès éclairé à nos catalogues

                    </p>
                  </div>

              </div>
              <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="javascript:void(0)" class="banner-1 h-100 d-flex" style="background-image: url('frontEnd/images/bg_2.jpg');">
                  <div class="banner-1-inner ml-auto  align-self-center">
                    <h2>Traite par des experts</h2>

                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

@endsection
