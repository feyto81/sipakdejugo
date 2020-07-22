<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Penduduks;
use App\Dusun;

class D_DesaController extends Controller
{
    public function data_desa_kk()
    {
        $blm_sklh = Penduduks::where('pendidikan', 'TIDAK/BLM SEKOLAH')->count();
        $blm_tmt_sd = Penduduks::where('pendidikan', 'BELUM TAMAT SD/SEDERAJAT')->count();
        $tmt_sd = Penduduks::where('pendidikan', 'TAMAT SD/SEDERAJAT')->count();
        $sltp = Penduduks::where('pendidikan', 'SLTP/SEDERAJAT')->count();
        $slta = Penduduks::where('pendidikan', 'SLTA/SEDERAJAT')->count();
        $diploma12 = Penduduks::where('pendidikan', 'DIPLOMA I/II')->count();
        $akademi = Penduduks::where('pendidikan', 'AKADEMI/DIPLOMA III/SARJANA MUDA')->count();
        $diploma41 = Penduduks::where('pendidikan', 'DIPLOMA IV/STRATA I')->count();
        $strata2 = Penduduks::where('pendidikan', 'STRATA II')->count();
        $strata3 = Penduduks::where('pendidikan', 'STRATA III')->count();

        $blm_sklh_lk = Penduduks::where('pendidikan', 'TIDAK/BLM SEKOLAH')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $blm_sklh_pr = Penduduks::where('pendidikan', 'TIDAK/BLM SEKOLAH')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $blm_tmt_sd_lk = Penduduks::where('pendidikan', 'BELUM TAMAT SD/SEDERAJAT')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $blm_tmt_sd_pr = Penduduks::where('pendidikan', 'BELUM TAMAT SD/SEDERAJAT')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $tmt_sd_lk = Penduduks::where('pendidikan', 'TAMAT SD/SEDERAJAT')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $tmt_sd_pr = Penduduks::where('pendidikan', 'TAMAT SD/SEDERAJAT')->where('jenis_kelamin', 'PEREMPUAN')->count();

        $sltp_lk = Penduduks::where('pendidikan', 'SLTP/SEDERAJAT')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $sltp_pr = Penduduks::where('pendidikan', 'SLTP/SEDERAJAT')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $slta_lk = Penduduks::where('pendidikan', 'SLTA/SEDERAJAT')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $slta_pr = Penduduks::where('pendidikan', 'SLTA/SEDERAJAT')->where('jenis_kelamin', 'PEREMPUAN')->count();

        $diploma12_lk = Penduduks::where('pendidikan', 'DIPLOMA I/II')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $diploma12_pr = Penduduks::where('pendidikan', 'DIPLOMA I/II')->where('jenis_kelamin', 'PEREMPUAN')->count();

        $akademi_lk = Penduduks::where('pendidikan', 'AKADEMI/DIPLOMA III/SARJANA MUDA')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $akademi_pr = Penduduks::where('pendidikan', 'AKADEMI/DIPLOMA III/SARJANA MUDA')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $diploma41_lk = Penduduks::where('pendidikan', 'DIPLOMA IV/STRATA I')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $diploma41_pr = Penduduks::where('pendidikan', 'DIPLOMA IV/STRATA I')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $strata2_lk = Penduduks::where('pendidikan', 'STRATA II')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $strata2_pr = Penduduks::where('pendidikan', 'STRATA II')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $strata3_lk = Penduduks::where('pendidikan', 'STRATA III')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $strata3_pr = Penduduks::where('pendidikan', 'STRATA III')->where('jenis_kelamin', 'PEREMPUAN')->count();

        return view('frontend.datadesa.kk.index', compact(
            'blm_sklh',
            'blm_tmt_sd',
            'tmt_sd',
            'sltp',
            'slta',
            'diploma12',
            'akademi',
            'diploma41',
            'strata2',
            'strata3',
            'blm_sklh_lk',
            'blm_sklh_pr',
            'blm_tmt_sd_lk',
            'blm_tmt_sd_pr',
            'tmt_sd_lk',
            'tmt_sd_pr',
            'sltp_lk',
            'sltp_pr',
            'slta_lk',
            'slta_pr',
            'diploma12_lk',
            'diploma12_pr',
            'akademi_lk',
            'akademi_pr',
            'diploma41_lk',
            'diploma41_pr',
            'strata2_lk',
            'strata2_pr',
            'strata3_lk',
            'strata3_pr'
        ));
    }
    public function data_desa_wilayah()
    {
        $dusun = Dusun::all();
        return view('frontend.datadesa.wilayah.index',compact('dusun'));
    }
    public function data_desa_pekerjaan()
    {
        return view('frontend.datadesa.pekerjaan.index');
    }
    public function data_desa_gender()
    {
        $semua = Penduduks::count();
        $laki_laki = Penduduks::where('jenis_kelamin', 'LAKI-LAKI')->count();
        $perempuan = Penduduks::where('jenis_kelamin', 'Perempuan')->count();
        return view('frontend.datadesa.gender.index', compact('laki_laki', 'semua', 'perempuan'));
    }
    public function data_desa_gdarah()
    {
        $A = Penduduks::where('gol_darah', 'A')->count();
        $B = Penduduks::where('gol_darah', 'B')->count();
        $AB = Penduduks::where('gol_darah', 'AB')->count();
        $O = Penduduks::where('gol_darah', 'O')->count();
        $Aplus = Penduduks::where('gol_darah', 'A+')->count();
        $Amen = Penduduks::where('gol_darah', 'A-')->count();
        $Bplus = Penduduks::where('gol_darah', 'B+')->count();
        $Bmen = Penduduks::where('gol_darah', 'B-')->count();
        $ABplus = Penduduks::where('gol_darah', 'AB+')->count();
        $ABmen = Penduduks::where('gol_darah', 'AB-')->count();
        $Oplus = Penduduks::where('gol_darah', 'O+')->count();
        $Omen = Penduduks::where('gol_darah', 'O-')->count();
        $TIDAK_TAHU = Penduduks::where('gol_darah', 'TIDAK TAHU')->OrWhere('gol_darah', '-')->count();
        $A_lk = Penduduks::where('gol_darah', 'A')->where('jenis_kelamin','LAKI-LAKI')->count();
        $A_pr = Penduduks::where('gol_darah', 'A')->where('jenis_kelamin','PEREMPUAN')->count();
        $B_lk = Penduduks::where('gol_darah', 'B')->where('jenis_kelamin','LAKI-LAKI')->count();
        $B_pr = Penduduks::where('gol_darah', 'B')->where('jenis_kelamin','PEREMPUAN')->count();
        $AB_lk = Penduduks::where('gol_darah', 'AB')->where('jenis_kelamin','LAKI-LAKI')->count();
        $AB_pr = Penduduks::where('gol_darah', 'AB')->where('jenis_kelamin','PEREMPUAN')->count();
        $O_lk = Penduduks::where('gol_darah', 'O')->where('jenis_kelamin','LAKI-LAKI')->count();
        $O_pr = Penduduks::where('gol_darah', 'O')->where('jenis_kelamin','PEREMPUAN')->count();
        $Aplus_lk = Penduduks::where('gol_darah', 'A+')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Aplus_pr = Penduduks::where('gol_darah', 'A+')->where('jenis_kelamin','PEREMPUAN')->count();
        $Amen_lk = Penduduks::where('gol_darah', 'A-')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Amen_pr = Penduduks::where('gol_darah', 'A-')->where('jenis_kelamin','PEREMPUAN')->count();
        $Bplus_lk = Penduduks::where('gol_darah', 'B+')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Bplus_pr = Penduduks::where('gol_darah', 'B+')->where('jenis_kelamin','PEREMPUAN')->count();
        $Bmen_lk = Penduduks::where('gol_darah', 'B-')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Bmen_pr = Penduduks::where('gol_darah', 'B-')->where('jenis_kelamin','PEREMPUAN')->count();
        $ABplus_lk = Penduduks::where('gol_darah', 'AB+')->where('jenis_kelamin','LAKI-LAKI')->count();
        $ABplus_pr = Penduduks::where('gol_darah', 'AB+')->where('jenis_kelamin','PEREMPUAN')->count();
        $ABmen_lk = Penduduks::where('gol_darah', 'AB-')->where('jenis_kelamin','LAKI-LAKI')->count();
        $ABmen_pr = Penduduks::where('gol_darah', 'AB-')->where('jenis_kelamin','PEREMPUAN')->count();
        $Oplus_lk = Penduduks::where('gol_darah', 'O+')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Oplus_pr = Penduduks::where('gol_darah', 'O+')->where('jenis_kelamin','PEREMPUAN')->count();
        $Omen_lk = Penduduks::where('gol_darah', 'O-')->where('jenis_kelamin','LAKI-LAKI')->count();
        $Omen_pr = Penduduks::where('gol_darah', 'O-')->where('jenis_kelamin','PEREMPUAN')->count();
        $tidak_tahu_lk = Penduduks::where('gol_darah', 'TIDAK TAHU')->OrWhere('gol_darah', '-')->where('jenis_kelamin','LAKI-LAKI')->count();
        $tidak_tahu_pr = Penduduks::where('gol_darah', 'TIDAK TAHU')->OrWhere('gol_darah', '-')->where('jenis_kelamin','PEREMPUAN')->count();

        return view('frontend.datadesa.gdarah.index', compact('A','B','AB','O','Aplus','Amen','Bplus','Bmen','ABplus','ABmen','Oplus','Omen','TIDAK_TAHU','A_lk','A_pr','B_pr','B_lk','AB_lk','AB_pr','O_lk','O_pr','Aplus_pr','Aplus_lk','Amen_lk','Amen_pr','Bplus_lk','Bplus_pr','Bmen_pr','Bmen_lk','ABplus_lk','ABplus_pr','ABmen_pr','ABmen_lk','Oplus_lk','Oplus_pr','Omen_pr','Omen_lk','tidak_tahu_pr','tidak_tahu_lk'));
    }
    public function data_desa_umur()
    {
        return view('frontend.datadesa.k_umur.index');
    }
    public function data_desa_perkawinan()
    {
        $belum_kawin = Penduduks::where('status_perkawinan', 'BELUM KAWIN')->count();
        $kawin = Penduduks::where('status_perkawinan', 'KAWIN')->count();
        $cerai_hidup = Penduduks::where('status_perkawinan', 'CERAI HIDUP')->count();
        $cerai_mati = Penduduks::where('status_perkawinan', 'CERAI MATI')->count();

        $belum_kawin_lk = Penduduks::where('status_perkawinan', 'BELUM KAWIN')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $belum_kawin_pr = Penduduks::where('status_perkawinan', 'BELUM KAWIN')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $kawin_lk = Penduduks::where('status_perkawinan', 'KAWIN')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $kawin_pr = Penduduks::where('status_perkawinan', 'KAWIN')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $cerai_hidup_lk = Penduduks::where('status_perkawinan', 'CERAI HIDUP')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $cerai_hidup_pr = Penduduks::where('status_perkawinan', 'CERAI HIDUP')->where('jenis_kelamin', 'PEREMPUAN')->count();
        $cerai_mati_lk = Penduduks::where('status_perkawinan', 'CERAI MATI')->where('jenis_kelamin', 'LAKI-LAKI')->count();
        $cerai_mati_pr = Penduduks::where('status_perkawinan', 'CERAI MATI')->where('jenis_kelamin', 'PEREMPUAN')->count();

        return view(
            'frontend.datadesa.s_perkawinan.index',
            compact(
                'belum_kawin',
                'kawin',
                'cerai_hidup',
                'cerai_mati',
                'belum_kawin_lk',
                'belum_kawin_pr',
                'kawin_lk',
                'kawin_pr',
                'cerai_hidup_lk',
                'cerai_hidup_pr',
                'cerai_mati_lk',
                'cerai_mati_pr'
            )
        );
    }
}
