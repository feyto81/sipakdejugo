<footer class="bg-191 color-ccc" style="background-color: #06337b;color: #EBc51B">
        
        <div class="container">
            <div class="pt-50 pb-20 pos-relative">
                <div class="abs-tblr pt-50 z--1 text-center">
                    <div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="" alt=""></div>
                </div>
                <div class="row">
                
                    <div class="col-sm-4">
                        <div class="mb-30">
                            <?php
                            $modul = DB::table('pengaturanaplikasi')
                                                        ->get();
                            foreach ($modul as $b) {?>
                            <a href="/"><img src="{{asset('uploads/'.$b->logo)}}"></a><?php }?>

                            <?php
                            $id = DB::table('identitasdesa')
                                                        ->get();
                            foreach ($id as $d) {?>

                            <p class="mtb-20 color-ccc" style="font-size: 10px">{{$d->alamat_kantor_desa}}</p>
                            
                            <p class="mtb-20 color-ccc" style="font-size: 12px">Telepon : {{$d->telepon_desa}}</p>
                            <p class="mtb-20 color-ccc" style="font-size: 12px">Email : {{$d->email_desa}}</p>
                            <p class="mtb-20 color-ccc" style="font-size: 12px">SMS Center : {{$d->telepon_desa}}</p>
                        <?php }?>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="mb-30">
                            <h5 class="color-primary mb-20"><b>Temukan Kami</b></h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.400066796821!2d110.92924071414004!3d-6.4709010650682375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712fdb8201f80f%3A0x6a5f6de92081064b!2sBalai%20Desa%20Jugo!5e0!3m2!1sid!2sid!4v1592265578950!5m2!1sid!2sid" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-30">
                            <h5 class="color-primary mb-20"><b>Pengunjung</b></h5>
                            
                        </div>
                </div>
            </div>
            
            <div class="brdr-ash-1 opacty-2"></div>
            
            <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
            
                <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                    <li><a class="pl-0 pl-sm-10" href="https://creativedev.id/" target="_blank">Copyright &copy;  Creative Dev 2020 All rights reserved </a></li>
                   
                </ul>
               

                            <?php
                            $mediasocial = DB::table('mediasocial')
                                                        ->get();
                            foreach ($mediasocial as $ms) {?>
                <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                    <li><a class="pl-0 pl-sm-10" href="{{$ms->facebook}}"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="{{$ms->twitter}}"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="{{$ms->instagram}}"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="{{$ms->Whatsapp}}"><i class="ion-social-whatsapp"></i></a></li>
                </ul>
                <?php }?>
            </div>
        </div>
    </footer>