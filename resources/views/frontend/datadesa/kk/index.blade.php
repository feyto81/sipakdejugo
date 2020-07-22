@extends('frontend.layouts.master')
@section('title','Statistik Pendidikan | SipakdeJugo')
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
                <h4 class="p-title" style="margin-top: -0px">Demografi Berdasarkan Pendidikan Dalam KK</h4>
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
              <h3>Data Penduduk</h3>
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
                  <td>Tidak / Belum Sekolah</td>
                  <td>{{$blm_sklh}}</td>
                  <td>{{$blm_sklh_lk}}</td>
                  <td>{{$blm_sklh_pr}}</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Belum Tamat SD / Sederajat</td>
                  <td>{{$blm_tmt_sd}}</td>
                  <td>{{$blm_tmt_sd_lk}}</td>
                  <td>{{$blm_tmt_sd_pr}}</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Tamat SD/Sederajat</td>
                  <td>{{$tmt_sd}}</td>
                  <td>{{$tmt_sd_lk}}</td>
                  <td>{{$tmt_sd_pr}}</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>SLTP / Sederajat</td>
                  <td>{{$sltp}}</td>
                  <td>{{$sltp_lk}}</td>
                  <td>{{$sltp_pr}}</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>SLTA / Sederajat</td>
                  <td>{{$slta}}</td>
                  <td>{{$slta_lk}}</td>
                  <td>{{$slta_pr}}</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Diploma I/II</td>
                  <td>{{$diploma12}}</td>
                  <td>{{$diploma12_lk}}</td>
                  <td>{{$diploma12_pr}}</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Akademi/Diploma III/sarjana</td>
                  <td>{{$akademi}}</td>
                  <td>{{$akademi_lk}}</td>
                  <td>{{$akademi_pr}}</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Diploma IV/Strata I</td>
                  <td>{{$diploma41}}</td>
                  <td>{{$diploma41_lk}}</td>
                  <td>{{$diploma41_pr}}</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Strata II</td>
                  <td>{{$strata2}}</td>
                  <td>{{$strata2_lk}}</td>
                  <td>{{$strata2_pr}}</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Strata III</td>
                  <td>{{$strata3}}</td>
                  <td>{{$strata3_lk}}</td>
                  <td>{{$strata3_pr}}</td>
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
    type: 'pie',
    
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
    name: 'Jumlah Penduduk',
    data: [
      { name: 'TIDAK / BELUM SEKOLAH', y: <?=$blm_sklh ?> },
      { name: 'BELUM TAMAT SD / SEDERAJAT', y: <?=$blm_tmt_sd ?> },
      { name: 'TAMAT SD/SEDERAJAT', y: <?=$tmt_sd ?> },
      { name: 'SLTP/SEDERAJAT', y: <?=$sltp?> },
      { name: 'SLTA/SEDERAJAT', y: <?=$slta?> },
      { name: 'DIPLOMA I/II', y: <?=$diploma12 ?> },
      { name: 'AKADEMI/DIPLOMA III/SARJANA MUDA', y: <?=$akademi?> },
      { name: 'DIPLOMA IV/STRATA I', y: <?=$diploma41?> },
      { name: 'STRATA II', y: <?=$strata2?> },
      { name: 'STRATA III', y: <?=$strata3?> },

    ]
  }]
});
</script>
@endpush

