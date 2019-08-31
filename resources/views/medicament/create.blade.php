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

				<div class="form-groupe @if($errors->get('prix')) has-error @endif">
					<label for="">prix</label>
					<input type="number" name="prix" class="form-control" value="{{old('prix')}}">

					@if($errors->get('prix'))
					@foreach($errors->get('prix') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif

				</div>
				


				<div class="form-groupe @if($errors->get('dosage')) has-error @endif">
					<label for="">dosage</label>
					<input type="number" name="dosage" class="form-control" value="{{old('dosage')}}">

					@if($errors->get('dosage'))
					@foreach($errors->get('dosage') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif
				</div>
				<div class="form-groupe @if($errors->get('forme')) has-error @endif">
					<p>forme du medicament</p>
					<input list="browsers" name="forme" class="form-control" value="{{ old('forme') }}" required>

						<datalist id="browsers">
							<option value="Comprimé">
    						<option value="Gellule">
    						<option value="Gel">
    						<option value="Pomade">
   						    <option value="sirop">
    						<option value="sollution applicable">
   						    <option value="sollution en goutte">
    						<option value="suspention injectable">
   							 <option value="suppositoire">
    					</datalist>
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

				<div class="form-groupe @if($errors->get('resume')) has-error @endif">
					<label for="">information</label>
					<textarea type="text" name="resume" class="form-control" value="{{old('resume')}}"></textarea>
					@if($errors->get('resume'))
					@foreach($errors->get('resume') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif

				</div>
				<div class="form-groupe @if($errors->get('mode')) has-error @endif">
					<label for="">mode d'administration</label>
					<textarea type="text" name="mode" class="form-control" value="{{old('mode')}}"></textarea>

					@if($errors->get('mode'))
					@foreach($errors->get('mode') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif

				</div>
				
				<div class="form-groupe @if($errors->get('composition')) has-error @endif">
					<label for="">composition</label>
					<textarea type="text" name="composition" class="form-control" value="{{old('composition')}}"></textarea>

					@if($errors->get('composition'))
					@foreach($errors->get('composition') as $message)
					<li>{{ $message }}</li>
					@endforeach
					@endif

				</div>
				<div class="form-groupe @if($errors->get('plus')) has-error @endif">
					<label for="">plus d'information</label>
					<textarea type="text" name="plus" class="form-control" value="{{old('plus')}}"></textarea>

					@if($errors->get('plus'))
					@foreach($errors->get('plus') as $message)
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
