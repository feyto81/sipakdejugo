<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    @include('frontend.partials.css')
    
    
</head>
<body>
 <div class="preloader">
  <div class="loading">
    <img src="{{asset('Loading_2.gif')}}" width="80">
    
  </div>
</div> 
    
    @include('frontend.partials.header')
    
    &nbsp;&nbsp;
    @yield('slider')
    
    
    
    <section>
        <div class="container">
            <div class="row">
            
                @yield('content')
                
                @include('frontend.partials.sidebar')
                
            </div>
        </div>
    </section>
    <br><br>
    @include('frontend.partials.footer')
    

    
    <script src="{{asset('frontend/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{asset('frontend/plugin-frameworks/tether.min.js')}}"></script>
    
    <script src="{{asset('frontend/plugin-frameworks/bootstrap.js')}}"></script>
    
    <script src="{{asset('frontend/common/scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/engine1/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/engine1/script.js')}}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6288228740010", // WhatsApp number
            call_to_action: "Kirim Pesan", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<script>
    document.write(
      '<script src="http://' +
        (location.host || '${1:localhost}').split(':')[0] +
        ':${2:35729}/livereload.js?snipver=1"></' +
        'script>'
    );
  </script>
  <script>
$(document).ready(function(){
$(".preloader").fadeOut();
})
</script>
  <!-- <script src="{{asset('back-end/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script> -->

</body>
@stack('bottom')
</html>