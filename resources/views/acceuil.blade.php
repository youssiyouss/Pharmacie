@extends('welcome')



@section('content')


 <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/12"> <img src="frontEnd/images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/12">Bioderma</a></h3>
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
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="http://localhost:8000/medicaments/6"> <img src="frontEnd/images/humex.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/6">Humex</a></h3>
            <p class="price"><del>450</del> &mdash; 230</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/13"> <img src="frontEnd/images/mustela.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/13">Mustela</a></h3>
            <p class="price">1380</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/2"> <img src="frontEnd/images/doliprane.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/2">Doliprane</a></h3>
            <p class="price"><del>75</del> &mdash; 60</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="{{url('produit')}}" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="http://localhost:8000/medicaments/11"> <img src="frontEnd/images/avene.jpg" alt="Image"></a>
                <h3 class="text-dark"><a href="http://localhost:8000/medicaments/11">avene</a></h3>
                <p class="price">2340</p>
              </div>

              <div class="text-center item mb-4">
                <a href="http://localhost:8000/medicaments/12"> <img src="frontEnd/images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="http://localhost:8000/medicaments/12">bioderma</a></h3>
                <p class="price">1200</p>
              </div>

              <div class="text-center item mb-4">
                <a href="http://localhost:8000/medicaments/14"> <img src="frontEnd/images/nuxe.jpg" alt="Image"></a>
                <h3 class="text-dark"><a href="http://localhost:8000/medicaments/14">nuxe</a></h3>
                <p class="price">1400</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="frontEnd/images/dexeryl.jpg" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">950.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection