<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  @include('partials.css')
</head>
<body class="hold-transition skin-red sidebar-mini">
  <div class="preloader">
  <div class="loading">
    <img src="{{asset('Loading_2.gif')}}" width="80">
    <p>Harap Tunggu</p>
  </div>
</div>
<div class="wrapper">
  <header class="main-header">
    <a href="{{{route('home')}}}" class="logo">
      <span class="logo-mini"><b>S</b>PD</span>
      <span class="logo-lg"><b>SIPAKDEJUGO</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('back-end/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="user-image" alt="User Image">
              @if(Auth::user())
              <!-- <span class="hidden-xs">Alexander Pierce</span> -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
              @endif
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('back-end/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
@if(Auth::user())
                <p>
                  {{Auth::user()->name}} 
                  <small>{{date('Y-m-d')}}</small>
                </p>
@endif
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{url('mastercontrol/logout')}}" class="btn btn-default btn-flat">Sign Out</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <?php
        $identitasdesa = DB::table('identitasdesa')
                                    ->get();
        foreach ($identitasdesa as $k) {?>
        <div class="pull-left image">
          <img src="{{asset('uploads/'.$k->lambang_desa)}}" class="img-circle" alt="User Image">
        </div>

       
        <div class="pull-left info">
        
          <h4>Desa {{$k->nama_desa}}</h4>
       
          <a href="#"></a>
        </div>
      </div>
    <?php }?>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active w menu-open">
          <a href="{{route('home')}}">
            <i class="fa fa-home" style="color: #ac7c1e"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard" style="color: #ac7c1e"></i>
            <span>Info Desa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('identitas-desa/konfigurasi')}}"><i class="fa fa-circle-o"></i> Identitas Desa</a></li>
            <li><a href="{{url('wilayah/konfigurasi')}}"><i class="fa fa-circle-o"></i> Wilayah Administratif</a></li>
            <li><a href="{{url('pemerintahdesa/aparatur')}}"><i class="fa fa-circle-o"></i> Pemerintahan Desa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users" style="color: #ac7c1e"></i>
            <span>Kependudukan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('penduduks/konfigurasi')}}"><i class="fa fa-circle-o"></i> Penduduk</a></li>
            {{-- <li><a href="{{url('keluarga/konfigurasi')}}"><i class="fa fa-circle-o"></i> Keluaraga</a></li> --}}
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book" style="color: #ac7c1e"></i>
            <span>Layanan Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('cetak-surat')}}"><i class="fa fa-circle-o"></i> Cetak Surat</a></li>
          </ul>
        </li>
                
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop" style="color: #ac7c1e"></i>
            <span>Admin Web</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('pengumuman/index')}}"><i class="fa fa-circle-o"></i> pengumuman</a></li>
            <li><a href="{{url('slider/konfigurasi')}}"><i class="fa fa-circle-o"></i> Slider</a></li>
            <li><a href="{{url('category/all')}}"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="{{url('berita/all')}}"><i class="fa fa-circle-o"></i> Berita</a></li>
            <li><a href="{{url('sejarah/data/1')}}"><i class="fa fa-circle-o"></i> Sejarah Desa</a></li>
            <li><a href="{{url('visi-misi/1')}}"><i class="fa fa-circle-o"></i> Visi Dan Misi</a></li>
            <li><a href="{{url('pemerintah-desa/1')}}"><i class="fa fa-circle-o"></i> Pemerintah Desa</a></li>
            <li><a href="{{url('lpm/1')}}"><i class="fa fa-circle-o"></i> LPM</a></li>
            <li><a href="{{url('karangtaruna/1')}}"><i class="fa fa-circle-o"></i> Karang Taruna</a></li>
            <li><a href="{{url('pkk/1')}}"><i class="fa fa-circle-o"></i> PKK</a></li>
            <li><a href="{{url('profile-wilayah-desa/1')}}"><i class="fa fa-circle-o"></i> Profil Wilayah Desa</a></li>
            <li><a href="{{url('bpd/1')}}"><i class="fa fa-circle-o"></i> BPD</a></li>
            <li><a href="{{url('arti-lambang/1')}}"><i class="fa fa-circle-o"></i> Arti Lambang</a></li>
            <li><a href="{{url('struktur-desa/1')}}"><i class="fa fa-circle-o"></i> Struktur Desa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-globe" style="color: #ac7c1e"></i>
            <span>Pemetaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"  style="color: #ac7c1e"></i>
            <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('pengaturan/aplikasi')}}"><i class="fa fa-circle-o"></i> Aplikasi</a></li>
            <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Pengguna</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-inbox" style="color: #ac7c1e"></i> <span>Layanan Mandiri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="creativedev.id">CreativeDev</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



@include('partials.script')
</body>
@stack('bottom')
</html>
