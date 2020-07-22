@extends('frontend.layouts.master')
@section('title','Kelompok Umur | SipakdeJugo')
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
                <h3 class="p-title" style="margin-top: -10px">Demografi Berdasarkan Kelompok Umur</h3>
                
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
                  <td>Di Bawah 1 Tahun</td>
                  <td>25</td>
                  <td>10</td>
                  <td>15</td>
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
      { name: 'Di Bawah 1 Tahun', y: 90 },
      { name: '2 s/d 4 Tahun', y: 20 },
      { name: '5 s/d 9 Tahun', y: 60 },
      { name: '10 s/d 10 Tahun', y: 30 },
      { name: '15 s/d 19 Tahun', y: 100 },
      { name: '20 s/d 24 Tahun', y: 90 },
      { name: '25 s/d 19 Tahun', y: 80 },
      { name: '30 s/d 34 Tahun', y: 90 },
      { name: '35 s/d 39 Tahun', y: 800 },
      { name: '40 s/d 44 Tahun', y: 100 },
      { name: '45 s/d 49 Tahun', y: 97 },
      { name: '50 s/d 54 Tahun', y: 29 },
      { name: '55 s/d 59 Tahun', y: 80 },
      { name: '60 s/d 64 Tahun', y: 78 },
      { name: '65 s/d 69 Tahun', y: 78 },
      { name: '70 s/d 74 Tahun', y: 78 },
      { name: 'Di atas 75 Tahun', y: 78 },
    ]
  }]
});
</script>
@endpush

