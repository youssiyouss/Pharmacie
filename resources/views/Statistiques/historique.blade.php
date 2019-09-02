<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pharmacie';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$qt = '';
$jour = '';
$jourMois='';
if (isset($_GET['mois_vente']) && $_GET['mois_vente']<=date("Y-m")) {
	 $mois = $_GET['mois_vente'];
   $sql =  "SELECT SUM(qt) ,DAYOFMONTH(DATE),date
		        FROM `ventes`
		        WHERE DATE_FORMAT(date,'%Y-%m') ='$mois'
		        GROUP BY DAYOFMONTH(DATE),date";
   $result = mysqli_query($mysqli, $sql);


while ($row = mysqli_fetch_array($result)) {
  $qt = $qt.$row['SUM(qt)'].',';
  $jour =$jour.'"'. $row['DAYOFMONTH(DATE)'].'",';
  $jourMois =$jourMois.'"'.$row['date'].'",';
}

$qt = trim($qt,",");
$jour = trim($jour,",");
$jourMois =trim($jourMois,",");
}
?>

@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="col-lg-12">
    <div class="card">
      <form method="GET">
        <fieldset>
          <label><h3><i class="fa fa-calendar" aria-hidden="true" style="Color :#9068be; "></i></h3></label>
          <input type="month"name="mois_vente" value="{{ old('mois_vente') }}" style="Color:#b7e778; border-color:#9068be; border-radius: .25rem;">
          <input type = "submit" value = "Entrer" style="Color :#b7e778;  border-color:#9068be;  font-weight: 400;font-weight: bold;  padding: 7px 18px;border-radius: .25rem; background-color:#b7e778;
           background-color: #fff; ">
        </fieldset>
      </form>
                        <div class="card-body">

                           <h4 class="text-center bg-primary">Nombre de  vente pour ce mois </h4>
                           <canvas id="Dailysales" style="height:250vh; width:250vw"></canvas>
                         </div>
                  </div>
  </div>



<script type="text/javascript">
var ctx = document.getElementById("Dailysales").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo date("m-d", strtotime($jourMois)); ?>],
        datasets:
        [{
            label: 'Vente par jour',
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
@endsection
