<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<link rel="icon" type="image/png" href="../Login_v16/images/icons/pt.png"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="../Login_v16/css/util.css">
    	<link rel="stylesheet" type="text/css" href="../Login_v16/css/main.css">

    <link rel="stylesheet" href="frontEnd/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/modernizr-3.6.0.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.bundle.js"></script>
    <title>Resultat de recherche</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('../Login_v16/images/pills.jpg');">
      <div class="row">
        <div class="col-md-12">
         <div class="col-lg-12 col-xl-12">
                                 <div class="card">
                                   <div class="card-header" align="center">
                                     <a href="{{ url('/')}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;">Retour</i></a>
                                   </div>
                                     <div class="card-body">
                                         <div class="active-member">
                                             <div class="table-responsive">

         @if(count($medicaments) > 0)
           @if (isset($medicaments))
                                                <table class="table table-xs">
                                                        <thead>
                                                           <tr>
                                                             <th>nom</th>
                                                             <th>dosage (ml/mg)</th>
                                                             <th>forme</th>
                                                             <th>famille</th>
                                                             <th>prix </th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                          @foreach($medicaments as $listeM)
                                                           <tr class="col-md-2">
                                                             <td><span><img src="{{ asset('storage/'.$listeM->photo)}}" class="pull-left m-r-10 avatar-img w-40px" alt="">{{$listeM->nom}}</span>
                                                             </td>
                                                               <td><span>{{$listeM->dosage}}</span></td>
                                                               <td><span>{{$listeM->forme}}</span></td>
                                                               <td><span>{{$listeM->famille}}</span></td>
                                                               <td><span>{{$listeM->prix}}</span></td>

                                                           </tr>
                                                           @endforeach
                                                       </tbody>
                                                    </table>
           @endif
           @else
                                              <h5>Désole! Aucun Medicament trouvée </h5>
         @endif

                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                      </div>
                    </div>

  </body>
</html>
