@extends('frontend.layouts.master')
@section('title','Gender | SipakdeJugo')
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
                <h4 class="p-title" style="margin-top: -0px">Demografi Berdasarkan Jenis Kelamin</h4>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>LAKI-LAKI</td>
                  <td>{{$laki_laki}}</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>PEREMPUAN</td>
                  <td>{{$perempuan}}</td>
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
      { name: 'LAKI-LAKI', y: <?=$laki_laki?> },
      { name: 'PEREMPUAN', y: <?=$perempuan?> },
     
    ]
  }]
});
</script>
@endpush

