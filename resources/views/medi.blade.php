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
           @foreach($medicaments as $o)
           @if($o->famille =='homéopathie'||$o->famille =='paracetamol'||$o->famille =='anti-imflamatoire'||$o->famille =='Gastro'||$o->famille =='antihistamine'||$o->famille =='anti-biotique'||$o->famille =='ANALGESIQUE'||$o->famille =='Allopathie'||$o->famille =='radiothérapeutique')
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="{{ asset('affichage/'.$o->id)}}"> <img src="{{ asset('storage/'.$o->photo)}}" style="border-style: groove; border-radius: 10px;height:90%; width: 80%;" alt="Image"></a>
            <h3 class="text-dark"><a href="{{ asset('affichage/'.$o->id)}}" style="font-size:20px;">{{$o->nom}}</a></h3>
            <p class="price" style="color : #9068be;">{{$o->prix}} <b>DA</b></p>
          </div>
         @endif
         @endforeach
         </div>
         <div class="row">
           <h1><strong style="color :#b7e778;">Soins & Beauté</strong></h1>
         </div>
         <div id="soin" class="row">
         @foreach($medicaments as $o)
         @if($o->famille =='huils'||$o->famille =='Nettoyant'||$o->famille =='dermatologie'||$o->famille =='eau micelaire')
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
          <a href="{{ asset('affichage/'.$o->id)}}"><img src="{{ asset('storage/'.$o->photo)}}" style="border-style: groove; border-radius: 10px;height:90%; width: 80%;" alt="Image"></a>
          <h3 class="text-dark"><a href="{{ asset('affichage/'.$o->id)}}" style="font-size:20px;">{{$o->nom}}</a></h3>
          <p class="price" style="color : #9068be;">{{$o->prix}} <b>DA</b></p>
        </div>

       @endif
       @endforeach
       </div>
       <div class="row">
         <h1><strong style="color :#b7e778;">Materiel</strong></h1>
       </div>
       <div id="materiel" class="row">
       @foreach($medicaments as $o)
       @if($o->famille =='materiel')
      <div class="col-sm-6 col-lg-4 text-center item mb-4">
        <a href="{{ asset('affichage/'.$o->id)}}"><img src="{{ asset('storage/'.$o->photo)}}" style="border-style: groove; border-radius: 10px;height:90%; width: 80%;" alt="Image"></a>
        <h3 class="text-dark"><a href="{{ asset('affichage/'.$o->id)}}" style="font-size:20px;">{{$o->nom}}</a></h3>
        <p class="price" style="color : #9068be;">{{$o->prix}} <b>DA</b></p>
      </div>

     @endif
     @endforeach

</div>



@endsection
