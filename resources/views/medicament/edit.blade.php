@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" align="center">Modification Medicament:
          <a href="{{ url('medicaments')}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;">Retour</i></a>
        </div>

        <div class="card-body">
          <form action="{{url('medicaments/'.$medicament->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Nom:</label>

               <div class="col-md-6">
                   <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$medicament -> nom}}">

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
                   <input type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" class="form-control" value="{{$medicament -> prix}}">

                   @error('Prix')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Dose:</label>

               <div class="col-md-6">
									 <input type="number" class="form-control @error('dosage') is-invalid @enderror" name="dosage" class="form-control" value="{{$medicament -> dosage}}">

                   @error('dosage')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Forme:</label>

               <div class="col-md-6">
                   <input list="formes" class="form-control @error('forme') is-invalid @enderror" name="form" value="{{$medicament -> forme}}">
									 <datalist id="formes">
									     <option value="SOLUTION BUV">
									 		 <option value="COMP.PELLI.SEC">
											 <option value="COMP.PELLI">
											 <option value="COMP.SEC">
											 <option value="COMP.SECABLE">
											 <option value="SIROP">
											 <option value="COMP">
											 <option value="SOL.INJ">
										   <option value="GLES">
											 <option value="SOL.BUV.GTTES">
											 <option value="CP.ORODISPERSIBLE">
											 <option value="SOLUTION SUBLINGUALE D'UN MELANGE D'EXTRAITS ALLERGENIQUE POUR IMMUNOTHERAPIE SPECIFIQUE">
										   <option value="SOL INJ  IV OU PERIDURALE">
											 <option value="POUDRE POUR SOL INJ OU POUR PERF IV ">
											 <option value="LIQUIDE POUR INHALATION PAR VAPEUR">
											 <option value="LIQUIDE POUR INHALATION PAR VAPEUR">
											 <option value="PDRE.SOL.INJ">
											 <option value="GAZ POUR INHA">
											 <option value="BOUTEILLE">
											 <option value="SOL. P. INHAL">
											 <option value="EMULSION INJECTABLE EN SURINGUE Pré-remplie">
											 <option value="SOL.INJ. USAGE DENTAIRE">
											 <option value="SUPPO.">
											 <option value="GELULE">
											 <option value="CREME">
											 <option value="GLES">
									 </datalist>
                   @error('forme')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
							 </div>
		           <div class="form-group row">
								 <label class="col-md-4 col-form-label text-md-right">Famille:</label>
   							 	<div class="col-md-6">
                   <input list="familles" class="form-control @error('famille') is-invalid @enderror" name="famille" value="{{$medicament -> famille}}">
									 <datalist id="familles">
									     <option value="ANTIBIOTIQUES">
									 		 <option value="ANTIDÉPRESSEURS">
											 <option value="ANTI-INFLAMMATOIRES">
											 <option value="ANXIOLITIQUES">
											 <option value="SOMNIFÈRES">
											 <option value="ANTI-HISTAMINIQUES">

									 </datalist>
                   @error('famille')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
							 </div>
							 <div class="form-group row">
									 <label class="col-md-4 col-form-label text-md-right">image:</label>
									 <div class="col-md-6">
										 <input name="photo" type="file" accept="image/*" style="height: auto;"class="form-control @error('image') is-invalid @enderror">

											 @error('image')
													 <span class="invalid-feedback" role="alert">
															 <strong>{{ $message }}</strong>
													 </span>
											 @enderror
									 </div>

							 </div>
							 <div class="form-group row">
									 <label class="col-md-4 col-form-label text-md-right">Information:</label>
									 <div class="col-md-6">
										 <textarea type="text" name="resume" class="form-control @error('resume') is-invalid @enderror">{{$medicament -> resume}}</textarea>

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
					 					<textarea type="text" name="mode" class="form-control @error('mode') is-invalid @enderror">{{$medicament -> mode}}</textarea>

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
										 <textarea type="text" name="composition" class="form-control @error('composition') is-invalid @enderror">{{$medicament -> composition}}</textarea>

											 @error('composition')
													 <span class="invalid-feedback" role="alert">
															 <strong>{{ $message }}</strong>
													 </span>
											 @enderror
									 </div>

							 </div>
							 <div class="form-group row">
									 <label class="col-md-4 col-form-label text-md-right">Plus de details:</label>
									 <div class="col-md-6">
										 <textarea type="text" name="plus" class="form-control @error('plus') is-invalid @enderror">{{$medicament -> plus}}</textarea>

											 @error('plus')
													 <span class="invalid-feedback" role="alert">
															 <strong>{{ $message }}</strong>
													 </span>
											 @enderror
									 </div>

							 </div>

           </div>
           <div class="form-group row mb-0">
               <div class="col-md-6 offset-md-4">
                 <button type="submit" class="btn btn-success "><i class="fa fa-thumbs-o-up" aria-hidden="true"> Enregistrer</i></button>
                 <a href="{{ url('medicaments') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
             </div>
         </div>

      </form>

    </div>
  </div>
</div>
</div>
</div>

		<!-- <p>
	<input type="checkbox" name="forme" value="Comprimé enrobé">Comprimé scrable<br>
<input type="checkbox" name="forme" value="Comprimé enrobé">Comprimé enrobé<br>
<input type="checkbox" name="forme" value="Gellule"> Gellule<br>
<input type="checkbox" name="forme" value="Sirop">Sirop<br>
<input type="checkbox" name="forme" value="Sirop">Sollution buvable<br>
<input type="checkbox" name="forme" value="Sirop">Sollution en gouttes<br>
<input type="checkbox" name="forme" value="Sirop">Sollution injectable<br>
<input type="checkbox" name="forme" value="Sirop">Suppositoire<br>
</p> -->

@endsection
