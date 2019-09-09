@extends('welcome')



@section('content')



<div class="container" >
	<div class="row"> 
	
     <div class="col-9">
                         
	<h2>fiche detaillé sur le medicament </h2>
    
    <div class="card" style="width: 30rem;">
       <img class="card-img-top" src="{{ asset('storage/'.$medicament->photo) }}" alt="Card image cap">
         <div class="card-body">
                       <h2 class="card-title"><strong>{{$medicament->nom}}</strong></h2>
                        <h4><strong>Medicament {{$medicament->famille}}</strong></h4>
                        <p>{{$medicament->resume}}</p>
                        <hr>
                        <p><strong>mode d'administration : {{$medicament->mode}}</strong></p>
                    <hr>
                    <p><strong>composition : {{$medicament->composition}}</strong></p>
                    <hr>
                  
                    <p><strong>plus d'information : <a href="{{$medicament->plus}}">en savoir+</a></strong></p>
                          
         </div>
	</div> 

                       
     </div>


<div class="col-3">
   <h1><u><strong>prix</strong> </u>  <br> {{$medicament->prix}} <strong>DA</strong></h1>
</div> 

     </div>

    

</div>
         

@endsection
