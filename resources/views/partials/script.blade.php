<script src="{{asset('back-end/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset('back-end/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('back-end/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('back-end/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('back-end/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('back-end/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('back-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('back-end/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('back-end/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('back-end/dist/js/demo.js')}}"></script>
<!-- <script src="{{asset('back-end/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('back-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script> -->
<script src="{{asset('back-end/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
<script src="{{asset('ckeditor1/ckeditor.js')}}"></script>
<script src="{{asset('ckeditor1/styles.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('back-end/bower_components/PACE/pace.min.js')}}"></script>

<script>hljs.initHighlightingOnLoad();</script>
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
<script>
  $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })
  
</script>
<script>
  $(function () {
    CKEDITOR.replace('editor2')
    $('.textarea').wysihtml5()
  })
  
</script>
<script src="{{asset('back-end/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back-end/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
<script>
  
</script>
<script src="{{asset('back-end/dist/js/demo.js')}}"></script>
<script>
  $(document).ajaxStart(function () {
    Pace.restart()
  })
</script>
<script>
$(document).ready(function(){
$(".preloader").fadeOut();
})
</script>
<script src="{{asset('backend/jquery.idle-master/jquery.idle.js')}}"></script>
<script>
    $(document).idle({
        onIdle: function(){
            window.location="{{url('mastercontrol/logout')}}";                
        },
        idle: 900000
    });
</script>
@toastr_js
@toastr_render