<!DOCTYPE html>
<html lang="en">

<head>
  <title>PharmaTlem</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="frontEnd/fonts/icomoon/style.css">

  <link rel="stylesheet" href="frontEnd/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontEnd/css/magnific-popup.css">
  <link rel="stylesheet" href="frontEnd/css/jquery-ui.css">
  <link rel="stylesheet" href="frontEnd/css/owl.carousel.min.css">
  <link rel="stylesheet" href="frontEnd/css/owl.theme.default.min.css">


  <link rel="stylesheet" href="frontEnd/css/aos.css">

  <link rel="stylesheet" href="frontEnd/css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
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
                    <li><a href="#">Medicaments</a></li>
                    <li><a href="#">Soins et Santé</a></li>
                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
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

    <div class="site-blocks-cover" style="background-image: url('frontEnd/images/hero_1.jpg');" >
      <div class="container">
        <div class="row">
          <div class="order-lg-2 align-self-center">
            <div class="text-center">
            <h1><i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></h1>
            <h2 class="sub-title"><b>Adopter le bon traitement </b></h2>
              <!-- <p>
                style="color: #212529; background-color: #b7e778; border-color: #9068be;"
                <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">


        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/12"> <img src="frontEnd/images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/12">Bioderma</a></h3>
            <p class="price"> 1200</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/13"> <img src="frontEnd/images/mustela.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/13">Mustela</a></h3>
            <p class="price">1380</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/11"> <img src="frontEnd/images/avene.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/11">Avene</a></h3>
            <p class="price">2380</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/14"> <img src="frontEnd/images/nuxe.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/14">Nuxe</a></h3>
            <p class="price">1300</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/15"> <img src="frontEnd/images/roche.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/15">La Roche Poser</a></h3>
            <p class="price">3800</p>
          </div>
           <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/16"> <img src="frontEnd/images/uriage.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/16">Uriage</a></h3>
            <p class="price">3300</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/10"> <img src="frontEnd/images/spasfon.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/10">Spasfon</a></h3>
            <p class="price">340</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/7"> <img src="frontEnd/images/maxilase.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/7">Maxilase</a></h3>
            <p class="price">120</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="http://localhost:8000/medicaments/6"> <img src="frontEnd/images/humex.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/6">Humex</a></h3>
            <p class="price"><del>450</del> &mdash; 230</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/9"> <img src="frontEnd/images/smecta.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/9">Smecta</a></h3>
            <p class="price">380</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/3"> <img src="frontEnd/images/eferalgan.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/3">Eferalgan</a></h3>
            <p class="price">540</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/1"> <img src="frontEnd/images/camilia.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/1">Camilia</a></h3>
            <p class="price">880</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/8"> <img src="frontEnd/images/nurofen.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/8">Nurofen</a></h3>
            <p class="price">780</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/5"> <img src="frontEnd/images/gaviscon.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/5">Gaviscon</a></h3>
            <p class="price">450</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="http://localhost:8000/medicaments/4"> <img src="frontEnd/images/flactor.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/4">Flactor Gel</a></h3>
            <p class="price">2900</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="http://localhost:8000/medicaments/2"> <img src="frontEnd/images/doliprane.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="http://localhost:8000/medicaments/2">Doliprane</a></h3>
            <p class="price"><del>75</del> &mdash; 60</p>
          </div>
        </div>



        <hr>
    <div class="site-section bg-secondary bg-image" style="background-image: url('frontEnd/images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('frontEnd/images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('frontEnd/images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

</html>
