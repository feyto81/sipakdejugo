@extends('frontend.layouts.master')
@section('title','Status Perkawinan | SipakdeJugo')
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
                <h3 class="p-title" style="margin-top: -10px">Demografi Berdasarkan Status Perkawinan</h3>
                <
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
                  <td>Belum Kawin</td>
                  <td>{{$belum_kawin}}</td>
                  <td>{{$belum_kawin_lk}}</td>
                  <td>{{$belum_kawin_pr}}</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kawin</td>
                  <td>{{$kawin}}</td>
                  <td>{{$kawin_lk}}</td>
                  <td>{{$kawin_pr}}</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Cerai Hidup</td>
                  <td>{{$cerai_hidup}}</td>
                  <td>{{$cerai_hidup_lk}}</td>
                  <td>{{$cerai_hidup_pr}}</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Cerai Mati</td>
                  <td>{{$cerai_mati}}</td>
                  <td>{{$cerai_mati_lk}}</td>
                  <td>{{$cerai_mati_pr}}</td>
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
      { name: 'BELUM KAWIN', y: <?=$belum_kawin ?> },
      { name: 'KAWIN', y: <?=$kawin ?> },
      { name: 'CERAI HIDUP', y: <?=$cerai_hidup?> },
      { name: 'CERAI MATI', y: <?=$cerai_mati?> },
     
    ]
  }]
});
</script>
@endpush

