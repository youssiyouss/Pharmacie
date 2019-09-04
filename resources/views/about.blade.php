<!DOCTYPE html>
<html lang="en">

<head>
  <title>PharmaTlem</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                  <a href="#">Nos Produits</a>
                  <ul class="dropdown">
                    <li><a href="{{url('medi')}}">Medicaments</a></li>
                    <li><a href="{{url('soin')}}">Soins et Santé</a></li>
                  </ul>
                </li>
                <li><a href="{{url('about')}}">About</a></li>
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

    <div class="site-blocks-cover" style="background-image: url('frontEnd/images/purplePill.jpg');">
      <div class="container">
        <div class="row">
          <div class="order-lg-2 align-self-center">
            <div class="text-center">
            <h1><i><strong style="color :#b7e778;">About</strong><strong style="color : #9068be;">Us</strong></i></h1>
            </div>
          </div>
        </div>
      </div>
    </div>


      <div class="site-section">
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="../frontEnd/images/bg_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/221163646" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Comment on a commencer</h2>
            </div>
            <p>La pharmacie en ligne PharmaTlem est le pionnier de la vente de médicaments et de produits de parapharmacie. Née le 19 novembre 2012, PharmaTlem est le prolongement de la pharmacie du Bizet située à Algerie Tlemcen. Chaque site de vente en ligne doit être rattaché à une officine et possède un agrément délivré par l’Agence Régionale de Santé enregistré auprès du Conseil National de l’Ordre des Pharmaciens.
              Conscients des enjeux présents liés à la sécurité d’utilisation, à la qualité et à l’accessibilité des médicaments,
              la pharmacie contemporaine doit répondre à de nouvelles attentes et vous garantir un service irréprochable.</p>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16"><br><br><br><br><br><br>
              <figure>
                <img src="../frontEnd/images/vif1.png" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/182825636" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Variété des produits fournits</h2>
            </div>
            <p>Accessible 24h/24 et 7J/7, la pharmacie en ligne vous permet de commander vos médicaments et produits en ligne et vous affranchit complètement des horaires d’ouverture des officines, tout en vous garantissant une confidentialité et une sécurité totale.
              En vous rendant sur notre site, vous avez aussi accès à un choix large de produits de pharmacie en stock, avec plus de 15 000 références disponibles des marques les plus connues et plus recherchées en pharmacie. De très nombreux médicaments sans ordonnance et en libre accès dits OTC (Over the Counter) sont proposés à l’achat sur le site.
              Accessible où que vous soyez, LaSante.net référence de nombreux laboratoires tels que Pfizer, Bayer, Sanofi, Pierre Fabre, … pour vous proposer tous les jours des médicaments de qualité, avec des procédés de fabrication pharmaceutiques contrôlés et une traçabilité des produits constante.
              Notre pharmacie s’engage depuis des années pour proposer une large sélection de substituts nicotiniques pour vous offrir le choix d’un sevrage tabagique qui vous corresponde. Soucieux de vous proposer toujours plus de choix, notre pharmacie met à votre disposition des dispositifs médicaux dont des autotests,
              lecteurs de glycémie dans le cadre d’un diabète ou encore des tests de grossesse. Notre pharmacie en ligne propose également un large choix de matériel médical : vous trouverez, en ligne sur notre site, un large choix de bas,
          </p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <figure>
                <img src="{{ asset('assets/images/icons8-Available_Updates.png') }}" style="width:40px; height:40px;">
              </figure>
            </div>
            <div class="text">
              <h2>Ouvert 24h/24 7j/7</h2>
              <p>Notre pahrmacie est ouverte a n'importe quel moment pour satisfaire les besoins de notre chére clientèle.
                Si vous avez des questions concernant votre commande, n'hésitez pas à nous contacter par téléphone au 043 36 60 42 ou par email à pharmaTlem@gmail.com
                Nos pharmaciens restent à votre disposition.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <figure>
                <img src="../assets/images/icons8-Approval.png" alt="Image placeholder" style="width:40px; height:40px;">
              </figure>
            </div>
            <div class="text">
              <h2>Origine des produits certifiée</h2>
              <p>Les médicaments sont des produits de santé qui bénéficient d’un circuit particulièrement surveillé et sécurisé.
                Les laboratoires fournisseurs partenaires de PharmaTlem font partie des laboratoires les plus connus au monde et distribuent des médicaments dont la qualité est assidument contrôlée.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <figure>
                <img src="../assets/images/icons8-Online_Support.png" alt="Image placeholder" style="width:40px; height:40px;">
              </figure>
            </div>
            <div class="text">
              <h2>Un pharmacien à votre service</h2>
              <p>Une fois validée, chaque commande est contrôlée par un pharmacien (médicaments de la commande en cours, commandes précédentes et votre profil médical).
                Notre priorité est de garantir votre sécurité en évitant une interaction médicamenteuse ou un surdosage.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Notre  Equipe:</h2>
            <p style=" color: #b3b3b3;margin: 0 0 20px 0;font-size: 15px; letter-spacing: .1em;">Notre famille  se constitue des pharmaiens diplomés des grandes universitées et qui ont une experience de 5 ans minimum</p>
          </div>
        </div>
        <div class="row">
          @foreach($phar as $phar)
          <div class="col-md-6 col-lg-6 mb-5">

            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="{{ asset('storage/'.$phar->photo) }}" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">{{ $phar->name}} {{ $phar->Prenom}}</h3>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
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
                  <li><a href="{{url('about')}}">About Us</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <div class="block-5">
                <h3 class="footer-heading mb-4">Nos réseaux sociaux</h3>
                <div class="wrapper">
                  <div class="dis-flex size1 p-b-47">&nbsp&nbsp
                    <a href="#"><span class="fa fa-twitter-square twitter" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
                    <a href="#"><span class="fa fa-facebook-square facebook" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
                    <a href="#"><span class="fa fa-instagram instagram" style="font-size:48px"></span></a>&nbsp&nbsp&nbsp
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
