@extends('frontend.layouts.master')
@section('title','Golongan Darah | SipakdeJugo')
@section('content')
<style>
    .highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 660px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
 ?>
</style>
<div class="col-md-12 col-lg-8">
    <div class="row">

        <div class="col-sm-12">
            <div class="box box">
                <h3 class="p-title" style="margin-top: -0px">Demografi Berdasarkan Golongan Darah</h3>
            </div>
          
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                  
                </p>
              </figure>
        </div>
       <br>
        <div class="col-sm-12">
          <div class="box box">
              <h3>Table Data</h3>
          </div>
          <hr>
          <div class="table-responsive-xl">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kelompok</th>
                  <th>Jumlah</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>A</td>
                  <td>{{$A}}</td>
                  <td>{{$A_lk}}</td>
                  <td>{{$A_pr}}</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>B</td>
                  <td>{{$B}}</td>
                  <td>{{$B_lk}}</td>
                  <td>{{$B_pr}}</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>AB</td>
                  <td>{{$AB}}</td>
                  <td>{{$AB_lk}}</td>
                  <td>{{$AB_pr}}</td>
                </tr>
                 <tr>
                  <td>4</td>
                  <td>O</td>
                  <td>{{$O}}</td>
                  <td>{{$O_lk}}</td>
                  <td>{{$O_pr}}</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>A+</td>
                  <td>{{$Aplus}}</td>
                  <td>{{$Aplus_lk}}</td>
                  <td>{{$Aplus_pr}}</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>A-</td>
                  <td>{{$Amen}}</td>
                  <td>{{$Amen_lk}}</td>
                  <td>{{$Amen_pr}}</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>B+</td>
                  <td>{{$Bplus}}</td>
                  <td>{{$Bplus_lk}}</td>
                  <td>{{$Bplus_pr}}</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>B-</td>
                  <td>{{$Bmen}}</td>
                  <td>{{$Bmen_lk}}</td>
                  <td>{{$Bmen_pr}}</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>AB+</td>
                  <td>{{$ABplus}}</td>
                  <td>{{$ABplus_lk}}</td>
                  <td>{{$ABplus_pr}}</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>AB-</td>
                  <td>{{$ABmen}}</td>
                  <td>{{$ABmen_lk}}</td>
                  <td>{{$ABmen_pr}}</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>O+</td>
                  <td>{{$Oplus}}</td>
                  <td>{{$Oplus_lk}}</td>
                  <td>{{$Oplus_pr}}</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>O-</td>
                  <td>{{$Omen}}</td>
                  <td>{{$Omen_lk}}</td>
                  <td>{{$Omen_pr}}</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>TIDAK TAHU</td>
                  <td>{{$TIDAK_TAHU}}</td>
                  <td>{{$tidak_tahu_lk}}</td>
                  <td>{{$tidak_tahu_pr}}</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>

@endsection
@push('bottom')
<script>
// Radialize the colors
Highcharts.setOptions({
  colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
      radialGradient: {
        cx: 0.5,
        cy: 0.3,
        r: 0.7
      },
      stops: [
        [0, color],
        [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
      ]
    };
  })
});

// Build the chart
Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Grafik Data'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.f}</b>'
  },
  accessibility: {
    point: {
      valueSuffix: ''
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>',
        connectorColor: 'silver'
      },
      showInLegend: true
    }
  },
  series: [{
    name: 'Jumlah Populasi',
    data: [
      { name: 'A', y: <?=$A?> },
      { name: 'A-', y: <?=$Amen?> },
      { name: 'O+', y: <?=$Oplus?> },
      { name: 'B', y: <?=$B?> },
      { name: 'B+', y: <?=$Bplus?> },
      { name: 'O-', y: <?=$Omen?> },
      { name: 'AB', y: <?=$AB?> },
      { name: 'B-', y: <?=$Bmen?> },
      { name: 'TIDAK TAHU', y: <?=$TIDAK_TAHU?> },
      { name: 'O', y: <?=$O ?> },
      { name: 'AB+', y: <?=$ABplus?> },
      { name: 'A+', y: <?=$Aplus?> },
      { name: 'AB-', y: <?=$ABmen?> },
     
    ]
  }]
});
</script>
@endpush

