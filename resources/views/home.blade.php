
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pharmacie';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
// line
$qt = '';
$date='';
$today = date ("Y-m", mktime(0,0,0,date("m")-1,date("d"),date("Y")));
	 $sql =  "SELECT SUM(qt) ,DAYOFMONTH(DATE),CURDATE()
		        FROM `ventes`
		        WHERE DATE_FORMAT(date,'%Y-%m') ='$today'
		        GROUP BY DAYOFMONTH(DATE)";
 $result = mysqli_query($mysqli, $sql);
   while ($row = mysqli_fetch_array($result)) {
     $qt = $qt.$row['SUM(qt)'].',';
     }

    $query= "SELECT DATE_FORMAT(DATE,'%M') as MY,DAY(DATE)
          from `ventes`
          WHERE DATE_FORMAT(date,'%Y-%m') = '$today'
          GROUP BY DATE_FORMAT(DATE,'%M'),DAY(DATE)";
 $result2=mysqli_query($mysqli,$query);
  while ($row = mysqli_fetch_array($result2)) {
    $date =$date.'"'.$row['MY'].'/'.$row['DAY(DATE)'].'",';
  }
$qt = trim($qt,",");
$date = trim($date,",");


// <!-- doughnut -->
$qnt='';
$months='';
$annee =  date ("Y", mktime(date("Y")));
$sql =  "SELECT SUM(qt) ,DATE_FORMAT(DATE,'%M') as M,MONTH(DATE)
         FROM `ventes`
         WHERE DATE_FORMAT(DATE,'%Y') ='$annee'
         GROUP BY DATE_FORMAT(DATE,'%M'),MONTH(DATE)
				 ORDER BY MONTH(DATE)";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result)) {
  $qnt .= $row['SUM(qt)'].',';
  $months .='"'.$row['M'].'",';
}
$qnt = trim($qnt,",");
$months = trim($months,",");
//revenue du mois derniers:

$prix = '';
$moisPasse =  date ("Y-m", mktime(0,0,0,date("m")-1,date("d"),date("Y")));;

$revenueM =  mysqli_query($mysqli,"SELECT SUM(`lots`.prix * `ventes`.qt) as A
            FROM `ventes`,`lots`
            WHERE `ventes`.lot=`lots`.id
            AND DATE_FORMAT(date,'%Y-%m') = '$moisPasse';");

while ($row = mysqli_fetch_array($revenueM)) {
  $prix.=$row['A'];
}
//revenue de l'annee derniere
$prixA = '';

$anneePasse =   date ("Y", mktime(date("Y")-1));

$revenueA =  mysqli_query($mysqli,"SELECT SUM(`lots`.prix * `ventes`.qt) as B
            FROM `ventes`,`lots`
            WHERE `ventes`.lot=`lots`.id
            AND DATE_FORMAT(date,'%Y') = '$anneePasse';");

while ($row = mysqli_fetch_array($revenueA)) {
  $prixA.=$row['B'];
}


?>
@extends('layouts.admin')

@section('content')
<div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Salut  <span>{{Auth::user()->login}}!</span></h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12">

                        <div class="card">
                            <div class="card-body">
                                <i><h4 class=" card-title text-center bg-primary">Vente du dernier mois</h4></i>
                                <div class="f-s-30 f-w-300 text-success">Revenue  total :<br><?php echo $prix; ?><span class="f-s-16 text-uppercase">DA</span>                                </div>

                            </div>
                            <canvas id="chart-1" width="392" height="256" class="chartjs-render-monitor" style="display: block; width: 392px; height: 256px;"></canvas>
                          </div>
                    </div>
                    <script type="text/javascript">
                    var ctx = document.getElementById("chart-1").getContext('2d');
                      var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [<?php echo $date; ?>],
                            datasets:
                            [{
                                label: 'Vente par jour',
                                data: [<?php echo $qt; ?>],
                                backgroundColor: [
                                     'rgba(213, 184, 255, 1)',
                                     'rgba(54, 162, 235, 0.2)',
                                     'rgba(255, 206, 86, 0.2)',
                                     'rgba(75, 192, 192, 0.2)',
                                     'rgba(153, 102, 255, 0.2)',
                                     'rgba(255, 159, 64, 0.2)'
                                 ],
                                borderColor: [
                                     'rgba(123, 239, 178, 1)',
                                     'rgba(54, 162, 235, 1)',
                                     'rgba(255, 206, 86, 1)',
                                     'rgba(75, 192, 192, 1)',
                                     'rgba(153, 102, 255, 1)',
                                     'rgba(255, 159, 64, 1)'
                                 ],
                                borderWidth: 2
                            }]

                            },

                            options: {
                                  responsive: true,
                                  tooltips: {
                                    mode: 'index',
                                    intersect: false,
                                  },
                                  hover: {
                                    mode: 'nearest',
                                    intersect: true
                                  },
                                  scales: {
                                    xAxes: [{
                                      display: true,
                                      scaleLabel: {
                                        display: true,
                                        labelString: 'Mois'
                                      }
                                    }],
                                    yAxes: [{
                                      display: true,
                                      scaleLabel: {
                                        display: true,
                                        labelString: 'Vente de chaque jour'
                                      }
                                    }]
                                  }
                                }
                    });

                    </script>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                          <div class="card">
                              <div class="card-body">
                                  <i><h4 class=" card-title text-center bg-primary">Vente de l'année derniere</h4></i>
                                  <div class="f-s-30 f-w-300 text-success">Revenue  total :<br><?php echo $prixA; ?><span class="f-s-16 text-uppercase">DA</span>                                </div>

                              </div>
                                  <canvas id="chart-area" style="display: block; width: 533px; height: 266px;" width="533" height="266" class="chartjs-render-monitor"></canvas>
                          </div>
                        </div>
                        <script type="text/javascript">
                                    var ctx = document.getElementById("chart-area").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                              type: 'doughnut',
                                              data: {
                                                    labels: [<?php echo $months; ?>],
                                                    datasets:
                                                        [{
                                                            label: 'Vente par mois',
                                                            data: [<?php echo $qnt; ?>],
                                                            backgroundColor: [
                                                                	'rgba(219, 10, 91, 0.5)',
																																	'rgba(191, 85, 236, 0.5)',
																																	'rgba(82, 179, 217, 0.5)',
																																	'rgba(63, 195, 128, 0.5)',
																																	'rgba(254, 241, 96, 0.5)',
																																	'rgba(243, 156, 18, 0.5)',
																																	'rgba(46, 49, 49, 0.5)',
																																	'rgba(207, 0, 15, 0.5)',
																																	'rgba(154, 18, 179, 0.5)',
																																	'rgba(248, 148, 6, 0.5)',
																																	'rgba(140, 20, 252, 0.5)',
																																	'rgba(77, 5, 232, 0.5)'
                                                                 ],
                                                            borderColor: [
                                                                 'rgba(255,99,132,1)',
                                                                 'rgba(54, 162, 235, 1)',
                                                                 'rgba(255, 206, 86, 1)',
                                                                 'rgba(75, 192, 192, 1)',
                                                                 'rgba(153, 102, 255, 1)',
                                                                 'rgba(255, 159, 64, 1)',
																																 'rgba(219, 10, 91, 0.5)',
																																 'rgba(191, 85, 236, 0.5)',
																																 'rgba(82, 179, 217, 0.5)',
																																 'rgba(63, 195, 128, 0.5)',
																																 'rgba(254, 241, 96, 0.5)'
                                                             ],
                                                            borderWidth: 2
                                                        }]

                                                        },

                                                        options: {

                                                              responsive: true,
                                                              tooltips: {
                                                                mode: 'index',
                                                                intersect: false,
                                                              },
                                                              hover: {
                                                                mode: 'nearest',
                                                                intersect: true
                                                              },
                                                              animation: {animateScale: true,animateRotate: true}

                                                            }
                                                });

                                                </script>


                        </div>
												<div class="col-xl-12">
		                        <div class="card">
		                            <div class="card-body">
		                                <h4 class="card-title">Messages</h4>

																		@foreach($msg as $msg)
																		<a href="messages">
																	  <div class="media border-bottom-1 p-t-15 p-b-15">
		                                   <div class="media-body">
		                                        <h5>{{$msg->nom}} {{$msg->prenom}} </h5>
		                                        <p class="m-b-0">{{$msg->message}}</p>
		                                    </div><span class="text-muted f-s-12">{{$msg->created_at}}</span>
		                                </div>
																		</a>
																		@endforeach
		                            </div>
		                        </div>
		                    </div>


  </div>

@endsection
