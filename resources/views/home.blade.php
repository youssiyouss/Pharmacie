
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

    $query= "SELECT MONTH(DATE),DAY(DATE)
          from `ventes`
          WHERE DATE_FORMAT(date,'%Y-%m') = '$today'
          GROUP BY MONTH(DATE),DAY(DATE)";
 $result2=mysqli_query($mysqli,$query);
  while ($row = mysqli_fetch_array($result2)) {
    $date =$date.'"'.$row['MONTH(DATE)'].'/'.$row['DAY(DATE)'].'",';
  }
$qt = trim($qt,",");
$date = trim($date,",");


// <!-- doughnut -->
$qnt='';
$months='';
$annee =  date ("Y", mktime(date("Y")));
$sql =  "SELECT SUM(qt) ,MONTH(DATE)
         FROM `ventes`
         WHERE DATE_FORMAT(DATE,'%Y') ='$annee'
         GROUP BY MONTH(DATE)";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result)) {
  $qnt .= $row['SUM(qt)'].',';
  $months .='"'.$row['MONTH(DATE)'].'",';
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
                                label: 'Vente par mois',
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
																																	'rgba(30, 130, 76, 0.5)',
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
                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Messages</h4>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="../../assets/images/avatar/1.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="../../assets/images/avatar/2.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                                <div class="media p-t-15 p-b-15">
                                    <img src="../../assets/images/avatar/3.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="f-s-30 m-b-0">$6,932.60</h2><span class="f-w-600">Total Revenue</span>
                                <div class="m-t-30">
                                    <h4 class="f-w-600">2,365</h4>
                                    <h6 class="m-t-10 text-muted">Online Earning <span class="pull-right">50%</span></h6>
                                    <div class="progress m-t-15 h-6px">
                                        <div class="progress-bar bg-primary wow animated progress-animated w-50pc h-6px" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="m-t-20 m-b-20">
                                    <h4 class="f-w-600">1,250</h4>
                                    <h6 class="m-t-10">Offline Earning <span class="pull-right">50%</span></h6>
                                    <div class="progress m-t-15 h-6px">
                                        <div class="progress-bar bg-success wow animated progress-animated w-50pc h-6px" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs">
                                            <thead>
                                                <tr>
                                                    <th>Top Active Members</th>
                                                    <th>Views</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Comments</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/1.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>125</span>
                                                    </td>
                                                    <td>United States</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>84</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/2.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>547</span>
                                                    </td>
                                                    <td>Canada</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/3.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>557</span>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td><i class="fa fa-circle-o text-danger f-s-12 m-r-10"></i> Inactive</td>
                                                    <td><span>55</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/4.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>753</span>
                                                    </td>
                                                    <td>England</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>45</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/5.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>453</span>
                                                    </td>
                                                    <td>China</td>
                                                    <td><i class="fa fa-circle-o text-danger f-s-12 m-r-10"></i> Inactive</td>
                                                    <td><span>63</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../../assets/images/avatar/6.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>658</span>
                                                    </td>
                                                    <td>Japan</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>38</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="../../assets/images/users/2.jpg" class="rounded-circle m-t-15 w-75px" alt="">
                                    <h4 class="m-t-15 m-b-2">Paul Custard</h4>
                                    <p class="text-muted">Web Developer</p>
                                    <ul class="list-inline m-t-15">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin f-s-20 text-muted"></i></a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Name:</span> <span class="pull-right">Bob Springer</span>
                                        </div>
                                        <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right">example@examplel.com</span>
                                        </div>
                                        <div class="col-12 p-t-10 p-b-10"><span class="pull-left f-w-600">Phone:</span> <span class="pull-right">+12 123 124 125</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity Timeline</h4>
                                <div class="timeline-">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div><a href="#" class="timeline-panel text-muted"><span>10 minutes ago</span><h6 class="m-t-5">Youtube, a video-sharing website, goes live.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div><a href="#" class="timeline-panel text-muted"><span>20 minutes ago</span><h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div><a href="#" class="timeline-panel text-muted"><span>30 minutes ago</span><h6 class="m-t-5">Google acquires Youtube.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div><a href="#" class="timeline-panel text-muted"><span>15 minutes ago</span><h6 class="m-t-5">StumbleUpon is acquired by eBay.</h6></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="../../assets/images/users/1.jpg" class="rounded-circle m-t-10 w-50px" alt="">
                                    <h6 class="f-w-500 m-t-15">Bob Springer</h6>
                                    <p class="m-b-0 f-s-12">Status: <strong>Online</strong>
                                    </p>
                                    <p class="m-b-0 f-s-12">Response Time: <strong>3 Hours</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="../../assets/images/users/2.jpg" class="rounded-circle m-t-10 w-50px" alt="">
                                    <h6 class="f-w-500 m-t-15">Bob Springer</h6>
                                    <p class="m-b-0 f-s-12">Status: <strong>Online</strong>
                                    </p>
                                    <p class="m-b-0 f-s-12">Response Time: <strong>3 Hours</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
