@extends('layouts.admin')



@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if(session()->has('success'))
			<div class="alert alert-success">
				{{ session()->get('success')}}
			</div>
			@endif

<div>
            <ul class="nav navbar-nav navbar-left">
               		 <li><a href="{{url('medicaments/home')}}">Accueil_____</a>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Paracetamole</a></li>
                        <li><a href="">cardiologie</a></li>
                        <li><a href="">anti-inflamatoire</a></li>
                    </ul>
                </li>
            </ul>
 </div>

			<h1>la liste des medicaments</h1>
			<div class="pull-right">
				<a href="{{url('medicaments/create')}}" class="btn btn-success">Nouveau medicament</a>



			<table class="table">
				<head>
					<tr>
						<th>nom</th>
						<th>dosage</th>
						<th>forme</th>
						<th>famille</th>
						<th>action</th>
					</tr>
				</head>
				@foreach($medicaments as $listeM)
				<body>
					<tr>
						<td>{{$listeM->nom}}</td>
						<td>{{$listeM->dosage}}</td>
						<td>{{$listeM->forme}}</td>
						<td>{{$listeM->famille}}</td>
						<td>
							

							<form action="{{('medicaments/'.$listeM->id)}}" method="post">
								{{csrf_field()}}
								{{method_field('DELETE')}}

								<a href="{{url('medicaments/'.$listeM->id)}}" class="btn btn-primary">detail</a>
							<a href="{{url('medicaments/'.$listeM->id.'/edit')}}" class="btn btn-default">modifier</a>
							<button type="submit" class="btn btn-danger">supprimer</button>
							</form>

						</td>
					</tr>
				</body>
				@endforeach
			</table>
		</div>
	</div>
</div>
</div>



@endsection