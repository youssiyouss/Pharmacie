@extends('layouts.welcome')

@section('content')
<div class="site-blocks-cover" style="background-image: url('frontEnd/images/purplePill.jpg');min-height: 300px;height: calc(75vh);">
  <div class="container">
    <div class="row">
      <div class="order-lg-2 align-self-center">
        <div class="text-center">
        <h1><i><strong style="color :#b7e778;">Contactez Nous</strong></i></h1>

        </div>
      </div>
    </div>
  </div>
</div>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="{{ route('contact.store') }}" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
				{{ csrf_field() }}


				@if(Session::has('success'))
                   <div class="alert alert-success">
                     {{ Session::get('success') }}
                   </div>
				@endif

				<span class="contact100-form-title">
					Contactez nous
				</span>

				<label class="label-input100" for="first-name">Entrer Votre Nom et prénom *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
					<span class="focus-input100"></span>
				</div>

				@if($errors->get('nom'))
                  @foreach($errors->get('nom') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif

                 @if($errors->get('prenom'))
                  @foreach($errors->get('prenom') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif

				<label class="label-input100" for="email">Entrer votre  Email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" value="{{ old('email') }}">
					<span class="focus-input100"></span>

					@if($errors->get('email'))
                  @foreach($errors->get('email') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif
				</div>

				<label class="label-input100" for="phone">Entrer votre numéro de téléphone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="tel" placeholder="Eg. +231 000000" value="{{ old('tel') }}">
					<span class="focus-input100"></span>

					@if($errors->get('tel'))
                  @foreach($errors->get('tel') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif
				</div>

				<label class="label-input100" for="temoin">Laissez-nous savoir comment vous trouvez nos service si vous faite partie de nos clients </label>
				<div class="wrap-input100">
					<textarea id="temoin" class="input100" name="temoin" placeholder="Vos avis ...">{{ old('temoin') }}</textarea>
					<span class="focus-input100"></span>

					@if($errors->get('temoin'))
              @foreach($errors->get('temoin') as $message)
                <span class="text-danger">{{ $message }}</span>
              @endforeach
          @endif
				</div>
				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Tapez votre message...">{{ old('message') }}</textarea>
					<span class="focus-input100"></span>

					@if($errors->get('message'))
                  @foreach($errors->get('message') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Envoyer
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/drugs-1728381_960_720.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<a href="#"><span class="lnr lnr-map-marker marker"></span></a>
					</div>

					<div class="flex-col size2">
						<a href="https://www.google.com/maps/place/Pharmacie+Hamza+cherif/@34.8828993,-1.3285089,17z/data=!3m1!4b1!4m5!3m4!1s0xd78c97ef6d4772d:0x384c6530d13bbb64!8m2!3d34.8828949!4d-1.3263202" target="_blank"><span class="txt1 p-b-20 adress">
							Adresse
						</span></a>

						<span class="txt2">
              Boulevard Ain Sbaa Ali, Tlemcen, Algeria
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Téléphone
						</span>

						<span class="txt3">
							043 36 60 42
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Email
						</span>

						<span class="txt3">
							pharmatlem@gmail.com
						</span>
					</div>
				</div>

                 <div class="wrapper">
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<a href="#" style="text-decoration: none;"><span class="fa fa-twitter-square twitter" style="font-size:48px"></span></a>
					</div>

					<div class="txt1 p-r-25">
						<a href="https://www.facebook.com/pharm.hamza.cherif/" target="_blank"><span class="fa fa-facebook-square facebook" style="font-size:48px"></span></a>
					</div>

					<div class="txt1 p-r-25">
						<a href="https://www.instagram.com/pharmaciehamzacherif/" target="_blank"><span class="fa fa-instagram instagram" style="font-size:48px"></span></a>
					</div>

				</div>
				</div>

			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

@endsection


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
