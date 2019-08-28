@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="col-xl-7">
      <div class="card">
          <div class="card-body">
              <h4 class=" card-title">Nombre d'achat par jour </h4>
              <div class="f-s-30 f-w-300 text-success">3500 <span class="f-s-16 text-uppercase">DA</span></div>
              <a href="#" class="btn btn-outline-dark btn-flat m-t-5 m-b-30 f-s-14">View Details</a>
              <canvas id="Dailysales"></canvas>
          </div>
      </div>
  </div>
</div>

<script>
    let myChart = document.getElementById('Dailysales').getContext('2d');
    let DailysalesChart = new Chart(myChart,{
      type:'bar', //bar , horizontalBar , pie , Line , doughnut ,radar,polarArea
      data:{
        labels:[],
        datasets:[]
      },
      options:{}
    });
</script>
@endsection
