<!DOCTYPE html>
<html lang="en">
<head>
	<title>PharmaTlem</title>
	<meta charset="UTF-8">
	

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	 <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="frontEnd/fonts/icomoon/style.css">

  <link rel="stylesheet" href="frontEnd/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontEnd/css/magnific-popup.css">
  <link rel="stylesheet" href="frontEnd/css/jquery-ui.css">
  <link rel="stylesheet" href="frontEnd/css/owl.carousel.min.css">
  <link rel="stylesheet" href="frontEnd/css/owl.theme.default.min.css">


  <link rel="stylesheet" href="frontEnd/css/aos.css">

  <link rel="stylesheet" href="frontEnd/css/style.css">

  <style type="text/css">

 .instagram {
 background: -webkit-radial-gradient(33% 100% circle, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);
    background: radial-gradient(circle at 33% 100%, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
  .instagram:hover {
    background: -webkit-radial-gradient(33% 100% circle, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);
    background: radial-gradient(circle at 33% 100%, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    
     text-shadow: 0 0 15px #bc2a8d;
    
    
    

  }

  .facebook:hover {
  	color : #3b5998;
  	text-shadow: 0 0 15px #3b5998;
  }  
  .facebook{
  	color:#3b5998
  }	

  .twitter:hover {
  	color : #00aced;
  	text-shadow: 0 0 15px #00aced;
  }  
  .twitter{
  	color:#00aced;
  }

  .marker:hover {
  	color : white;
  	text-shadow: 0 0 30px white;
  }  
  .marker{
  	color:white;
  }	
  </style>

</head>
<body>
	<!--nav-->

<div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="/search_User" method="get">
            <input type="search" name="search" class="form-control" placeholder="Veuillez entrer le nom / la forme / la famille du medicament souahaité; puis tapez entrer">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <img src="../assets/images/pt.png" width="36" height="36" >
              <a href="{{ url('/') }}"><span class="brand-title"><i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></span></a>
           </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class="has-children">
                  <a href="#">Nos Produits</a>
                  <ul class="dropdown">
                    <li><a href="{{url('medi')}}">Medicaments</a></li>
                    <li><a href="{{url('soin')}}">Soins et Santé</a></li>
                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
          <div class="icons">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <div class="brand-title"><a href="{{ url('/home') }}"><i class="icon-fixed-width icon-home" style="color : #9068be;"><strong style="color : #b7e778;">&nbsp;Gestionnaire</strong></i></a> </div>
                  @else
                      <div class="brand-title"><a href="{{ route('login') }}" ><i class="icon-user" style="color : #9068be;"><strong style="color : #b7e778;">&nbsp;Login</strong></i></a></div>
                  @endauth
              </div>
          @endif

          </div>
        </div>
      </div>
    </div>

	<!--endnav-->


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="{{ route('contact.store') }}" method="post" class="contact100-form validate-form">
				{{ csrf_field() }}


				@if(Session::has('success'))
                   <div class="alert alert-success">
                     {{ Session::get('success') }}
                   </div>
				@endif

				<span class="contact100-form-title">
					Contactez nous
				</span>

				<label class="label-input100" for="first-name">Entrer ton Nom et prénom *</label>
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

				<label class="label-input100" for="email">Enter ton Email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" value="{{ old('email') }}">
					<span class="focus-input100"></span>

					@if($errors->get('email'))
                  @foreach($errors->get('email') as $message)
                  <span class="text-danger">{{ $message }}</span>
                  @endforeach
                 @endif
				</div>

				<label class="label-input100" for="phone">Enter ton numéro de téléphone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="tel" placeholder="Eg. +1 800 000000" value="{{ old('tel') }}">
					<span class="focus-input100"></span>

					@if($errors->get('tel'))
                  @foreach($errors->get('tel') as $message)
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
						<a href="#"><span class="txt1 p-b-20 adress">
							Adresse
						</span></a>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
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
							043 22 55 66
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
							Pharmatlem@gmail.com
						</span>
					</div>
				</div>
                 
                 <div class="wrapper">
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<a href="#" style="text-decoration: none;"><span class="fa fa-twitter-square twitter" style="font-size:48px"></span></a>
					</div>

					<div class="txt1 p-r-25">
						<a href="#"><span class="fa fa-facebook-square facebook" style="font-size:48px"></span></a>
					</div>

					<div class="txt1 p-r-25">
						<a href="#"><span class="fa fa-instagram instagram" style="font-size:48px"></span></a>
					</div>

				</div>
				</div>

			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
