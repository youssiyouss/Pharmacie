@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation d'un nouveau fournisseur:</div>

                <div class="card-body">
                  <form action="{{ URL('fournisseurs')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nom:</label>

                        <div class="col-md-6">
                            <input  type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Adresse:</label>

                        <div class="col-md-6">
                            <input  type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-md-4 col-form-label text-md-right">Numero Telephone:</label>

                        <div class="col-md-6">
                            <input  type="number" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="adresse" autofocus>

                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
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
                            <a href="{{ url('fournisseurs') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
                        </div>
                    </div>
      </form>
    </div>
  </div>
</div>

@endsection
