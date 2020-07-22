<header>
    <div class="container-fluid" style="background-color: #06337b;color: #EBc51B">
        <div class="container">
             <?php
        $modul = DB::table('pengaturanaplikasi')
                                    ->get();
        foreach ($modul as $b) {?>
            <a class="logo" href="{{url('/')}}" ><img style="size: 200%" src="{{asset('uploads/'.$b->logo)}}" style="width: 100%" ></a> <!-- classnya maunya logo -->
            <?php }?>
            <a class="right-area src-btn" href="#">
                <i class="active src-icn ion-search"></i>
                <i class="close-icn ion-close"></i>
            </a>
            
            <div class="src-form">
                <form>
                    <input type="text" placeholder="Search here">
                    <button type="submit"><i class="ion-search"></i></a></button>
                </form>
            </div>
            
            <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
           
            <ul class="main-menu" id="main-menu" style="font-size: 16px;">
                <li><a href="/">Home</a></li>
                <li class="drop-down"><a href="">Profil Desa<i class="ion-arrow-down-b"></i></a>
                    <ul  class="drop-down-menu drop-down-inner" id="d" style="background-color: #06337b">
                        <li><a href="{{url('profile/sejarah')}}">Sejarah Desa</a></li>
                        <li><a href="{{url('desa/wilayah-desa')}}">Profil Wilayah Desa </a></li>
                        <li><a href="{{url('desa/arti-lambang')}}">Arti Lambang Desa</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Pemerintah Desa<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner" style="background-color: #06337b">
                        <li><a href="{{url('pemerintah-desa/visi-dan-misi')}}">Visi Dan Misi</a></li>
                        <li><a href="{{url('pemerintah-desa/pemerintah')}}">Pemerintah Desa</a></li>
                        <li><a href="{{url('pemerintah-desa/bpd')}}">Badan Pemusyawaratan Desa</a></li>
                        <li><a href="{{url('pengumuman/desa')}}">Pengumuman Desa</a></li>
                        <li><a href="{{url('struktur-desa')}}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">LemMas<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner" style="background-color: #06337b">
                        <li><a href="{{url('/lemNas/LPM')}}">LPM</a></li>
                        <li><a href="{{url('/lemNas/karang-taruna')}}">Karang Taruna</a></li>
                        <li><a href="{{url('/lemNas/pkk')}}">PKK</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Data Desa<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner" style="background-color: #06337b">
                        <li><a href="{{url('/data-wilayah/administratif')}}">Data Wilayah Administratif</a></li>
                        <li><a href="{{url('/data-desa/kk')}}">Data Pendidikan Dalam KK</a></li>
                       <!--  <li><a href="{{url('/data-pekerjaan/desa')}}">Data Pendidikan Tempuh</a></li> -->
                        <li><a href="{{url('/data-pekerjaan/desa')}}">Data Pekerjaan</a></li>
                        <li><a href="{{url('/data-gender/desa')}}">Data Jenis Kelamin</a></li>
                        <li><a href="{{url('/desa/golongan-darah')}}">Data Golongan Darah</a></li>
                        <!-- <li><a href="{{url('/desa/kelompok-umur')}}">Data Kelompok Umur</a></li> -->
                        <li><a href="{{url('/desa/data-perkawinan')}}">Data Perkawinan</a></li>
                    </ul>
                </li>
               
                <li><a href="{{url('/surat-online')}}">Pelayanan surat</a></li>
            </ul>
            
            <div class="clearfix"></div>
        </div>
    </div>
</header>


