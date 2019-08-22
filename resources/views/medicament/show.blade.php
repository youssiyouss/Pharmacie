@extends('layouts.admin')



@section('content')



<div class="container" >
	<div class="row"> 
	<div class=" col-md-12 ">                      
	<p class="text-muted">{{$medicament->nom}}</p>
                
                       
                          </div>
                        </div>
                  </div>  

             

	
		<h4>comment utiliser ce medicament</h4>	
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