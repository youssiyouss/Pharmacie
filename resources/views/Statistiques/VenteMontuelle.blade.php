<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pharmacie';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$qt = '';
	$mois = '';
	//query to get data from the table

  $sql =  "SELECT  SUM(qt), MONTH(date) FROM `ventes` GROUP BY MONTH(date)";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {
    $qt = $qt.$row['SUM(qt)'].',';  //	$qt = $qt . '"'. $row['qt'].'",';
		$mois =$mois.'"'. $row['MONTH(date)'].'",';//$mois . '"'. $row['mois'] .'",';
	}

	$qt = trim($qt,",");
	$mois = trim($mois,",");
?>
@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="col-lg-12">
                          <div class="card">
                              <div class="card-body">

                                  <h4 class="card-title">Nombre d'achat par Mois</h4>

                                  <canvas id="Dailysales" style="height:350vh; width:250vw"></canvas>

                              </div>
                          </div>
  </div>


    <script>
				var ctx = document.getElementById("Dailysales").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $mois; ?>],
		            datasets:
		            [{
		                label: 'Data 1',
		                data: [<?php echo $qt; ?>],
										backgroundColor: [
												 'rgba(255, 99, 132, 0.2)',
												 'rgba(54, 162, 235, 0.2)',
												 'rgba(255, 206, 86, 0.2)',
												 'rgba(75, 192, 192, 0.2)',
												 'rgba(153, 102, 255, 0.2)',
												 'rgba(255, 159, 64, 0.2)'
										 ],
										borderColor: [
												 'rgba(255,99,132,1)',
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
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
              </div>
            </div>
  </div>
</div>


@endsection
