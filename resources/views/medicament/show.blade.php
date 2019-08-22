@extends('layouts.admin')



@section('content')



<div class="container" >
	<div class="row"> 
	<div class=" col-md-12 ">                      
	<p class="text-muted">{{$medicament->nom}}</p>
    
    <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="{{ asset('storage/'.$medicament->photo) }}" alt="Card image cap">
         <div class="card-body">
                       <h5 class="card-title">{{$medicament->nom}}</h5>
                               
         </div>
	</div> 

                       
     </div>
     </div>
</div>  

             

	
		
	<ul>
			<li>
				<div>
					<textarea></textarea>
					<button class="btn btn-primary btn-sm" type="submit">enregistrer</button>
					<button class="btn btn-warning btn-sm">Editer</button>
				</div>
				
			</li>
		</ul>
</div>

@endsection