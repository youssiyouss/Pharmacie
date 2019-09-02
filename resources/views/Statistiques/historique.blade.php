<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pharmacie';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$qt = '';
$mois = '';
$jour = '';
//query to get data from the table

$sql =  "SELECT SUM(qt), MONTH(date), DAYOFYEAR(DATE)  FROM `ventes` GROUP BY DAYOFYEAR(DATE) ,MONTH(DATE)";
  $result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {
  $qt = $qt.$row['SUM(qt)'].',';
  $mois =$mois.'"'. $row['MONTH(date)'].'",';
  $jour =$jour.'"'. $row['DAYOFYEAR(DATE)'].'",';
}

$qt = trim($qt,",");
$mois = trim($mois,",");
$jour = trim($jour,",");
 ?>

@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="col-lg-12">
                          <div class="card">
                              <div class="card-body">

                                  <h4 class="card-title">Nombre de  vente pour cette année</h4>

                                  <canvas id="Dailysales" style="height:350vh; width:250vw"></canvas>

                              </div>
                          </div>
  </div>



<script type="text/javascript">
var ctx = document.getElementById("Dailysales").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $jour; ?>],
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
</div>
<!-- var nb=document.getElementById("YearSales").value;
var i=0;
var mois = {};
for(i=0;i<nb;i++){

mois["janvier" + i]=document.getElementById("janvier"+i).value;
mois["fevrier" + i]=document.getElementById("fevrier"+i).value;
mois["mars" + i]=document.getElementById("mars"+i).value;
mois["avril" + i] =document.getElementById("avril"+i).value;
mois["mai" + i]=document.getElementById("mai"+i).value;
mois["juin" + i]=document.getElementById("juin"+i).value;
mois["juillet" + i]=document.getElementById("juillet"+i).value;
mois["aout" + i]=document.getElementById("aout"+i).value;
mois["septembre" + i]=document.getElementById("septembre"+i).value;
mois["octobre" + i]=document.getElementById("octobre"+i).value;
mois["novembre" + i]=document.getElementById("novembre"+i).value;
mois["decembre" + i]=document.getElementById("decembre"+i).value;



}

var ouvresjanv=document.getElementById("ouvresjanv").value;
var ouvresfev=document.getElementById("ouvresfev").value;
var ouvresmars=document.getElementById("ouvresmars").value;
var ouvresavril=document.getElementById("ouvresavril").value;
var ouvresmai=document.getElementById("ouvresmai").value;
var ouvresjuin=document.getElementById("ouvresjuin").value;
var ouvresjuillet=document.getElementById("ouvresjuillet").value;
var ouvresaout=document.getElementById("ouvresaout").value;
var ouvresseptembre=document.getElementById("ouvresseptembre").value;
var ouvresoctobre=document.getElementById("ouvresoctobre").value;
var ouvresnovembre=document.getElementById("ouvresnovembre").value;
var ouvresdecembre=document.getElementById("ouvresdecembre").value;


var graph = {};
var chart = {};

for(var j = 0; j < nb; j++){

var name = "chart" + j;
var area = "myAreaChart"+j;

chart[name] = document.getElementById("myAreaChart"+j);

graph[area] = new Chart(chart[name], {
  type: 'line',
  data: {
      labels: ["Janv","Fev","Mar","Av","Mai","Juin","Juil","Aou","Sep","Oct","Nov","Dec"],
      datasets: [{
          label: "Nombre de TD",
          lineTension: 0.3,
          backgroundColor: "rgba(2,117,216,0.2)",
          borderColor: "rgba(2,117,216,1)",
          pointRadius: 5,
          pointBackgroundColor: "rgba(2,117,216,1)",
          pointBorderColor: "rgba(255,255,255,0.8)",
          pointHoverRadius: 5,
          pointHoverBackgroundColor: "rgba(2,117,216,1)",
          pointHitRadius: 20,
          pointBorderWidth: 2,
          data: [mois["janvier"+j],mois["fevrier"+j],mois["mars"+j],mois["avril"+j],mois["mai"+j],mois["juin"+j],mois["juillet"+j],mois["aout"+j],mois["septembre"+j],mois["octobre"+j],mois["novembre"+j],mois["decembre"+j]]
      },
      {
          label: "Seuil a atteindre",
          lineTension: 0.3,
          backgroundColor: "rgba(255,255,255,0.2)",
          borderColor: "rgba(236,3,3,1)",
          pointRadius: 5,
          pointBackgroundColor: "rgba(236,3,3,1)",
          pointBorderColor: "rgba(255,255,255,0.8)",
          pointHoverRadius: 5,
          pointHoverBackgroundColor: "rgba(236,3,3,1)",
          pointHitRadius: 20,
          pointBorderWidth: 2,
          data: [ouvresjanv,ouvresfev,ouvresmars,ouvresavril,ouvresmai,ouvresjuin,ouvresjuillet,ouvresaout,ouvresseptembre,ouvresoctobre,ouvresnovembre,ouvresdecembre],

      }]

  },
  options: {
      scales: {
          xAxes: [{
              time: {
                  unit: 'date'
              },
              gridLines: {
                  display: false
              },
              ticks: {
                  maxTicksLimit: 12
              }
          }],
          yAxes: [{
              ticks: {
                  min: 0,
                  max: 25,
                  maxTicksLimit: 12
              },
              gridLines: {
                  color: "rgba(0, 0, 0, .125)",
              }
          }],
      },
      legend: {
          display: true
      }
  }
});

} -->

@endsection
