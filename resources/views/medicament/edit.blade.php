@extends('layouts.admin')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">


			<form action="{{url('medicaments/'.$medicament->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				{{csrf_field()}}
				<div class="form-groupe @if($errors->get('nom')) has-error @endif">
					<label for="">nom</label>
					<input type="text" name="nom" class="form-control" value="{{$medicament -> nom}}">
					@if($errors->get('nom'))
					@foreach($errors->get('nom') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('dosage')) has-error @endif">
					<label for="">dosage</label>
					<input type="text" name="dosage" class="form-control" value="{{$medicament -> dosage}}">
					@if($errors->get('dosage'))
					@foreach($errors->get('dosage') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('forme')) has-error @endif">
					<label for="">forme</label>
					<input type="text" name="forme" class="form-control" value="{{$medicament -> forme}}">
					@if($errors->get('forme'))
					@foreach($errors->get('forme') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('famille')) has-error @endif">
					<label for="">famille</label>
					<input type="text" name="famille" class="form-control" value="{{$medicament -> famille}}">
					@if($errors->get('famille'))
					@foreach($errors->get('famille') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>

				<div class="form-groupe">
					
					<input type="submit" class="form-control btn btn-danger" value="modifier">
				</div>
			</form>
			
		</div>
	</div>
</div>




@endsection
