
@extends('welcome')



@section('content')

   
      <div class="container">
        

        <div class="row">
          
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/10"> <img src="frontEnd/images/spasfon.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/10">Spasfon</a></h3>
            <p class="price">340</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/7"> <img src="frontEnd/images/maxilase.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/7">Maxilase</a></h3>
            <p class="price">120</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="http://localhost:8000/medicaments/6"> <img src="frontEnd/images/humex.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/6">Humex</a></h3>
            <p class="price"><del>450</del> &mdash; 230</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/9"> <img src="frontEnd/images/smecta.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/9">Smecta</a></h3>
            <p class="price">380</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/3"> <img src="frontEnd/images/eferalgan.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/3">Eferalgan</a></h3>
            <p class="price">540</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/1"> <img src="frontEnd/images/camilia.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/1">Camilia</a></h3>
            <p class="price">880</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/8"> <img src="frontEnd/images/nurofen.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/8">Nurofen</a></h3>
            <p class="price">780</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/5"> <img src="frontEnd/images/gaviscon.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/5">Gaviscon</a></h3>
            <p class="price">450</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/4"> <img src="frontEnd/images/flactor.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/4">Flactor Gel</a></h3>
            <p class="price">2900</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/2"> <img src="frontEnd/images/doliprane.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/2">Doliprane</a></h3>
            <p class="price"><del>75</del> &mdash; 60</p>
          </div>
        </div>
</div>



@endsection