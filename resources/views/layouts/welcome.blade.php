<!DOCTYPE html>
<html lang="fr">

<head>
  <title>PharmaTlem</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="frontEnd/fonts/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="/search_User" method="get">
            <input type="search" name="search" class="form-control" placeholder="Veuillez entrer le nom / la forme / la famille du medicament souahaité, Puis tapez entrer">
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
                <li><a href="{{url('acceuil')}}">Home</a></li>
                <li class="has-children">
                  <a href="medi">Nos Produits</a>
                  <ul class="dropdown">
                    <li><a href="medi#medi">Medicaments</a></li>
                    <li><a href="medi#soin">Soins et Santé</a></li>
                    <li><a href="medi#materiel">Materiel</a></li>
                  </ul>
                </li>
                <li><a href="{{url('contact')}}">Contact</a></li>
                <li><a href="{{url('about')}}">About</a></li>
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

       @yield('content')
     </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Quick Links</h3>
              <ul class="list-unstyled">
                <li><a href="{{url('medi')}}">Medicaments</a></li>
                <li><a href="{{url('soin')}}">Soins &amp; Santé</a></li>
                <li><a href="{{url('materiel')}}">Materiel</a></li>
                <li><a href="{{url('about')}}">About Us</a></li>
              </ul>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <div class="block-5">
              <h3 class="footer-heading mb-4">Nos réseaux sociaux</h3>
              <div class="wrapper">
                <div class="dis-flex size1 p-b-47">
                  &nbsp&nbsp<a href="#" style="text-decoration: none; color:#9068be;"><span class="fa fa-twitter-square twitter" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
                  <a href="#" style="color:#9068be;"><span class="fa fa-facebook-square facebook" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
                  <a href="#" style="color:#9068be;"><span class="fa fa-instagram instagram" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
                </div>
              </div>
          </div>
        </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Info Contact</h3>
              <ul class="list-unstyled">
                <li class="address">203 cite Essalihin imama, Tlemcen, Algeria</li>
                <li class="phone"><a href="tel://043366042">043366042</a></li>
                <li class="email">pharmaTlem@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="frontEnd/js/jquery-3.3.1.min.js"></script>
  <script src="frontEnd/js/jquery-ui.js"></script>
  <script src="frontEnd/js/popper.min.js"></script>
  <script src="frontEnd/js/bootstrap.min.js"></script>
  <script src="frontEnd/js/owl.carousel.min.js"></script>
  <script src="frontEnd/js/jquery.magnific-popup.min.js"></script>
  <script src="frontEnd/js/aos.js"></script>
  <script src="frontEnd/js/main.js"></script>

</body>

</html>
