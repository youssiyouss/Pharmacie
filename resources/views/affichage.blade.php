@extends('layouts.welcome')

@section('content')
<div class="site-blocks-cover" style="background-image: url('frontEnd/images/purplePill.jpg');">
  <div class="container">
    <div class="row">
      <div class="order-lg-2 align-self-center">
        <div class="text-center">
        <h1><i><strong style="color :#b7e778;">Nos Produits</strong></i></h1>

        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row">

      <h1><strong style="color :#b7e778;">Medicaments:</strong></h1>
    </div>
        <div id="medi" class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <img src="{{ asset('storage/'.$medicament->photo)}}" style="border-style: groove; border-radius: 10px;height:90%; width: 80%;" alt="Image"></a>
            <h3 class="text-dark">{{$medicament->nom}}</h3>
            <p class="price" style="color : #9068be;">{{$medicament->prix}} <b>DA</b></p>
          </div>
        </div>

</div>



@endsection
