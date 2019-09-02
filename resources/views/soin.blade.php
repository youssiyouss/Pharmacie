@extends('welcome')



@section('content')
    
      <div class="container">
       

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/12"> <img src="frontEnd/images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/12">Bioderma</a></h3>
            <p class="price"> 1200</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/13"> <img src="frontEnd/images/mustela.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/13">Mustela</a></h3>
            <p class="price">1380</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/11"> <img src="frontEnd/images/avene.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/11">Avene</a></h3>
            <p class="price">2380</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/14"> <img src="frontEnd/images/nuxe.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/14">Nuxe</a></h3>
            <p class="price">1300</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/15"> <img src="frontEnd/images/roche.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/15">La Roche Poser</a></h3>
            <p class="price">3800</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/16"> <img src="frontEnd/images/uriage.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/16">Uriage</a></h3>
            <p class="price">3300</p>
          </div>
        </div>
</div>
@endsection
