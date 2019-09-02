@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="col-xl-7">

              <div class="box-body">
                <h4 class=" box-title">Nombre d'achat par jour </h4>
              <div class="chart">
                <canvas id="Dailysales" ></canvas>
              </div>
            </div>
  </div>
</div>

<script>
var ctx = document.getElementById('Dailysales').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',    //bar , horizontalBar , pie , Line , doughnut ,radar,polarArea

    // The data for our dataset
    data: {
        labels: ['Janvier', 'Février', 'Mars', 'Avirl', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre' ,'Decembre'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45, 25, 14, 45, 31,12]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
@endsection
