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



			<h1>la liste des medicaments</h1>
			<div class="pull-right">
				<a href="{{url('medicaments/create')}}" class="btn btn-success">Nouveau medicament</a>



			<table class="table">
				<head>
					<tr>
						<th>nom</th>
						<th>dosage (ml/mg)</th>
						<th>forme</th>
						<th>famille</th>
						<th>prix DA</th>
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
						<td>{{$listeM->prix}}</td>
						
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