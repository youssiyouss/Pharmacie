@extends('layouts.welcome')

@section('content')
<div class="site-blocks-cover" style="background-image: url('frontEnd/images/purplePill.jpg');height: calc(75vh);min-height: 300px;">
  <div class="container">
    <div class="row">
      <div class="order-lg-2 align-self-center">
        <div class="text-center">
        <h1><i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></h1>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="{{ asset('storage/'.$medicament->photo)}}" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$medicament->nom}}</h2>
            <p>{{$medicament->resume}}</p>


            <p><strong class="text-primary h4">{{$medicament->prix}}DA</strong></p>


              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <tr><th>Type</th>
                      <th>Description</th>
                      <th>Forme</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{$medicament->famille}}</th>
                        <td>{{$medicament->composition}}</td>
                        <td>{{$medicament->forme}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3 style="color:#51eaea;">    Pour plus d'info veuillez nous contacter
                  </h3>
                </div>

              </div>
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
