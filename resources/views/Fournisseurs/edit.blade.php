@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" align="center">Modification fournisseur:
          <a href="{{ url('fournisseurs')}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;">Retour</i></a>
        </div>

        <div class="card-body">

          <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Nom:</label>

               <div class="col-md-6">
                   <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $frnsrs->nom }}">

                   @error('nom')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Adresse:</label>

               <div class="col-md-6">
                   <input type="text" class="form-control @error('nom') is-invalid @enderror" name="adresse" value="{{ $frnsrs->adresse}}">

                   @error('nom')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Numero Telephone:</label>

               <div class="col-md-6">
                   <input type="telephone" class="form-control @error('nom') is-invalid @enderror" name="tel" value="{{ $frnsrs->tel}}">

                   @error('nom')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label class="col-md-4 col-form-label text-md-right">Email:</label>

               <div class="col-md-6">
                   <input type="email" class="form-control @error('nom') is-invalid @enderror" name="email" value="{{ $frnsrs->email}}">

                   @error('nom')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row mb-0">
               <div class="col-md-6 offset-md-4">
                 <button type="submit" class="btn btn-success "><i class="fa fa-thumbs-o-up" aria-hidden="true"> Enregistrer</i></button>
                 <a href="{{ url('fournisseurs') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
             </div>
         </div>

      </form>

    </div>
  </div>
</div>
</div>
</div>


@endsection
