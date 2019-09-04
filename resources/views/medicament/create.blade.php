@extends('layouts.admin')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation d'un nouveau medicament:</div>

                <div class="card-body">
									<form method="POST" action="{{url('medicaments')}}" enctype="multipart/form-data">
											@csrf
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Nom:</label>

													<div class="col-md-6">
															<input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

															@error('nom')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Prix:</label>

													<div class="col-md-6">
															<input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix">

															@error('prix')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Dosage:</label>

													<div class="col-md-6">
															<input type="number" class="form-control @error('dosage') is-invalid @enderror" name="dosage" value="{{ old('dosage') }}" required autocomplete="dosage">

															@error('dosage')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Forme du medicament:</label>

													<div class="col-md-6">
															<input list="browsers" class="form-control @error('forme') is-invalid @enderror" name="forme" value="{{ old('forme') }}" required autocomplete="forme">
															<datalist id="browsers">
																<option value="Comprimé">
																	<option value="Gellule">
																	<option value="Gel">
																	<option value="Pomade">
																	<option value="sirop">
																	<option value="Créme">
																	<option value="sollution applicable">
																	<option value="sollution en goutte">
																	<option value="suspention injectable">
																	<option value="suppositoire">
																</datalist>

															@error('forme')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">famille:</label>

													<div class="col-md-6">
															<input type="text" class="form-control @error('famille') is-invalid @enderror" name="famille" value="{{ old('famille') }}" required autocomplete="famille">

															@error('famille')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Indication:</label>

													<div class="col-md-6">
														<textarea type="text" class="form-control @error('resume') is-invalid @enderror" name="resume"  value="{{old('resume')}}"></textarea>

															@error('resume')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Mode d'administration:</label>

													<div class="col-md-6">
														<textarea type="text" class="form-control @error('mode') is-invalid @enderror" name="mode"  value="{{old('mode')}}"></textarea>

															@error('mode')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Composition:</label>

													<div class="col-md-6">
														<textarea type="text" class="form-control @error('composition') is-invalid @enderror" name="composition"  value="{{old('composition')}}"></textarea>

															@error('composition')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">Plus d'information:</label>

													<div class="col-md-6">
														<textarea type="text" class="form-control @error('plus') is-invalid @enderror" name="plus"  value="{{old('plus')}}"></textarea>

															@error('plus')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row">
													<label class="col-md-4 col-form-label text-md-right">image du produit:</label>

													<div class="col-md-6">
														<input name="photo" class="form-control @error('photo') is-invalid @enderror" type="file" accept="image/*" style="height: auto;">
															@error('photo')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>
											<div class="form-group row mb-0">
													<div class="col-md-6 offset-md-4">
															<button type="submit" class="btn btn-primary">
																<i class="fa fa-check-circle-o" aria-hidden="true">
																	{{ __('Enregistrer') }}
																</i>
															</button>
															<a href="{{ url('medicaments') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
													</div>
											</div>
									</form>

		</div>
</div>
</div>
</div>
</div>


@endsection
