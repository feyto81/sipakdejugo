
<div class="d-none d-md-block d-lg-none col-md-3"></div>
    <div class="col-md-6 col-lg-4" style="margin-top: -50px">
        <div class="pl-20 pl-md-0">
            <div class="mtb-50">
                 <?php
        $modul = DB::table('modul')
                                    ->get();
        foreach ($modul as $c) {?>
                <h4 class="p-title"><b>KEPALA DESA</b></h4>
                <a class="oflow-hidden pos-relative" style="width: 300px;height: 400px" >
                    <div class="wh-200x abs-tlr" style="height: 300px"><img src="{{asset('uploads/'.$c->foto_kepala_desa)}}" alt=""></div>
                    <div class="ml-120 min-h-100x">
                        
                    </div>
                </a>
                       <?php }?>

                
                
                
                
             
            </div>
            <div class="mtb-50">
                 <?php
        $petawilayah = DB::table('wilayahdesamap')
                                    ->get();
        foreach ($petawilayah as $k) {?>
                <h4 class="p-title"><b>PETA DESA</b></h4>
                <a class="oflow-hidden pos-relative" style="width: 300px;height: 400px" >
                    <div class="wh-200x abs-tlr" style="height: 300px">
                        <iframe src="{{$k->link}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    
                </a>   
            </div>
            <?php }?>
            <div class="mtb-50">
                         <?php
        $modul = DB::table('modul')
                                    ->get();
        foreach ($modul as $b) {?>
                <h4 class="p-title"><b>PENGADUAN ONLINE</b></h4>
                <a class="oflow-hidden pos-relative" href="https://wa.me/{{$b->pengaduan_wa}}?text=Saya mau melaporkan" target="_blank">
                    <div class="wh-100x abs-tlr">
                            <img  style="width: 50px;height: 50px" src="{{asset('frontend\images\maklumat/wa.png')}}">
                    </div>
                    <div class="ml-120 min-h-100x">
                        
                    </div>
                </a>   
            </div>
            
            <div class="mtb-50">
                <h4 class="p-title"><b>COVID 19</b></h4>
                <a class="oflow-hidden pos-relative" style="width: 300px;height: 300px" >
                    <div class="wh-200x abs-tlr" style="height: 300px">
                        <iframe src='{{$b->link_informasi_covid}}' width=100% height=350px /></Iframe>
                    </div>
                    <div class="ml-120 min-h-100x">
                        
                    </div>
                </a>   
            </div>
             <?php }?>
        </div>
    </div>