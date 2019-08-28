@extends('layouts.admin')



@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">


			<form action="{{url('medicaments')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-groupe @if($errors->get('nom')) has-error @endif">
					<label for="">nom</label>
					<input type="text" name="nom" class="form-control" value="{{old('nom')}}">

					@if($errors->get('nom'))
					@foreach($errors->get('nom') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif

				</div>
				<div class="form-groupe @if($errors->get('dosage')) has-error @endif">
					<label for="">dosage</label>
					<input type="text" name="dosage" class="form-control" value="{{old('dosage')}}">

					@if($errors->get('dosage'))
					@foreach($errors->get('dosage') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('forme')) has-error @endif">
					<label for="">forme</label>
					<input type="text" name="forme" class="form-control" value="{{old('form')}}">
					@if($errors->get('forme'))
					@foreach($errors->get('forme') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('famille')) has-error @endif">
					<label for="">famille</label>
					<input type="text" name="famille" class="form-control" value="{{old('famille')}}">
					@if($errors->get('famille'))
					@foreach($errors->get('famille') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe">
					<label for="">image</label>
					<input name="photo" class="form-control" type="file" accept="image/*" style="height: auto;">
				</div>

				<div class="form-groupe">
					
					<input type="submit" class="form-control btn btn-primary" value="enregistrer">
				</div>
				
			</form>
			
		</div>
	</div>
</div>




@endsection
