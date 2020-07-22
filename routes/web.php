<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'BeritaController@frontend');
Route::get('/Berita/{berita}', 'BeritaController@show')->name('berita.detail');

//roite of pengumuman
Route::get('/pengumuman/desa','PengumumanController@frontend');
Route::get('/Pengumuman/{pengumuman}', 'PengumumanController@show')->name('pengumuman.detail');

//route of berita
Route::get('/berita/coba', 'BeritaController@getIndexberita');

//route of kepala dinas
Route::get('/profile/kepala-dinas', 'HomeController@getIndex_dinas');

//route of data desa kk
Route::get('/data-desa/kk', 'D_DesaController@data_desa_kk');

//route of data wilayah administratif
Route::get('/data-wilayah/administratif', 'D_DesaController@data_desa_wilayah');
Route::get('struktur-desa','PengaturanController@struktur');

//route of data pekerjaan
Route::get('/data-pekerjaan/desa', 'D_DesaController@data_desa_pekerjaan');

//route of data gender
Route::get('/data-gender/desa', 'D_DesaController@data_desa_gender');

//route of data golongan darah
Route::get('/desa/golongan-darah', 'D_DesaController@data_desa_gdarah');

//route of data kelompok umur
Route::get('/desa/kelompok-umur', 'D_DesaController@data_desa_umur');

//route of data Status Perkawinan
Route::get('/desa/data-perkawinan', 'D_DesaController@data_desa_perkawinan');

//route of data profile sejarah
Route::get('/profile/sejarah', 'FprofilController@profil');

//route of data profile wilayah
Route::get('/desa/wilayah-desa', 'FprofilController@profil_wilayah');

//route of data profile wilayah
Route::get('desa/arti-lambang', 'FprofilController@profil_lambang');

//route of data pemerintah visi dan misi
Route::get('/pemerintah-desa/visi-dan-misi', 'PDesaController@p_desa_visi_misi');

//route of data pemerintah pemerintah desa
Route::get('/pemerintah-desa/pemerintah', 'PDesaController@p_desa_pemerintah');

//route of data bpd
Route::get('/pemerintah-desa/bpd', 'PDesaController@p_desa_bpd');

//route of data Lemnas
Route::get('/lemNas/LPM', 'LemMasController@lpm');

//route of data karang taruna
Route::get('lemNas/karang-taruna', 'TarunaController@getIndex');

//route of data karang pkk
Route::get('lemNas/pkk', 'TarunaController@getIndexPkk');

Route::get('surat-online', 'TarunaController@getIndexSurat');
Route::post('surat/kirim','SuratController@getPost');
Route::get('surat/success/{surat_id}','SuratController@getSuccess');
Route::get('/print-qr-code/{surat_id}', 'SuratController@barcodeqrcode');

Route::get('mastercontrol/admin', 'HomeController@login')->name('login');
Route::post('mastercontrol/postlogin', 'HomeController@postlogin');
Route::get('mastercontrol/logout', 'HomeController@logout');

Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource("penduduk", "PendudukController");

	// Route::get('penduduk/export_excel','PendudukController@export_excel');
	route::get('export', 'PendudukController@exportData');
	// import
	Route::post('import_excel', 'PenduduksController@import_excel');

	route::resource("users", "UserController");

	// Route::resource('settings','SettingController');
	route::get('settings/edit/{id}', 'SettingController@edit');
	// Route::post('settings/update','SettingController@update');
	Route::post('settings/update', 'SettingController@update');
	// route of categori
	Route::get('category/all', 'CategoryController@getAdd');
	Route::post('category/add', 'CategoryController@saveCategory');
	Route::get('category/getDataTable', 'CategoryController@get');
	Route::get('category/delete/{id}', 'CategoryController@getDelete');
	Route::get('category/edit/{id}', 'CategoryController@edit_category');
	Route::post('category/update/{id}', 'CategoryController@update_category');

	// route of berita
	Route::get('berita/all', 'BeritaController@getAdd');
	Route::get('berita/getadd', 'BeritaController@getambah');
	Route::post('berita/save', 'BeritaController@saveBerita');
	Route::get('berita/delete/{id}', 'BeritaController@getDelete');
	Route::get('berita/edit/{id}', 'BeritaController@edit_berita');
	Route::post('berita/update/{id}', 'BeritaController@update_berita');

	//route of sejarah desa
	Route::get('sejarah/data/{id}', 'SejarahController@edit_sejarah');
	Route::post('sejarah/update/{id}', 'SejarahController@update_sejarah');

	//route of visi dan misi
	Route::get('visi-misi/{id}', 'VMController@edit_vm');
	Route::post('vm/update/{id}', 'VMController@update_vm');

	//route of pemerintah desa
	Route::get('pemerintah-desa/{id}', 'PMController@edit_pm');
	Route::post('pm/update/{id}', 'PMController@update_pm');

	//route of lpm
	Route::get('lpm/{id}', 'LPMController@edit_lpm');
	Route::post('lpm/update/{id}', 'LPMController@update_lpm');

	//route of karang taruna
	Route::get('karangtaruna/{id}', 'KarangTarunaController@edit_kt');
	Route::post('karangtaruna/update/{id}', 'KarangTarunaController@update_kt');

	//route of PKK
	Route::get('pkk/{id}', 'PKKController@edit_pkk');
	Route::post('pkk/update/{id}', 'PKKController@update_pkk');

	//route of profil wilayah desa
	Route::get('profile-wilayah-desa/{id}', 'PWDController@edit_pwd');
	Route::post('profile-wilayah-desa/update/{id}', 'PWDController@update_pwd');

	//route of bpd
	Route::get('bpd/{id}', 'BPDController@edit_bpd');
	Route::post('bpd/update/{id}', 'BPDController@update_bpd');

	//route of arti lambang
	Route::get('arti-lambang/{id}', 'ArtiLambangController@edit_at');
	Route::post('arti-lambang/update/{id}', 'ArtiLambangController@update_at');

	Route::get('identitas-desa/konfigurasi', 'IdentitasDesaController@index');
	Route::get('identitas-desa/edit/{id}', 'IdentitasDesaController@edit');
	Route::post('identitas-desa/update/{id}', 'IdentitasDesaController@update');

	Route::get('/identitas-desa/lokasi-kantor-desa/{id}', 'IdentitasDesaController@map_kantor');
	Route::post('lokasi-kantor/update/{id}', 'IdentitasDesaController@update_lokasi');

	Route::get('peta-wilayah-desa/{id}', 'IdentitasDesaController@peta_wilayah');
	Route::post('peta_wilayah/update/{id}', 'IdentitasDesaController@update_peta_wilayah');

	Route::get('media-social/{id}', 'IdentitasDesaController@media_social');
	Route::post('media_social/update/{id}', 'IdentitasDesaController@update_medias');
	Route::get('pemerintahdesa/aparatur', 'AparatController@index');
	Route::get('tambah-aparat', 'AparatController@getAdd');
	Route::post('save_aparat', 'AparatController@saveAdd');
	Route::get('aparat/delete/{id}', 'AparatController@delete');
	Route::get('aparat/edit/{id}', 'AparatController@edit');
	Route::post('aparat/update/{id}', 'AparatController@update');

	// Route::get('keluarga/konfigurasi', 'KkController@index');
	Route::get('wilayah/konfigurasi', 'DusunController@index');
	Route::post('dusun/add', 'DusunController@saveAdd');
	Route::get('wilayah/delete/{id}','DusunController@getDelete');
	Route::get('wilayah/edit/{id}','DusunController@getEdit');
	Route::post('dusun/update/{id}','DusunController@getUpdate');
	Route::post('user/add','UserController@add_user');
	Route::get('user/delete/{id}','UserController@deleteUser');
	Route::get('user/edit/{id}','UserController@getEdit');
	Route::post('user/update/{id}','UserController@getUpdate');
	Route::get('pengumuman/index','PengumumanController@getIndex');
	Route::get('pengumuman/getadd','PengumumanController@getAdd');
	Route::post('pengumuman/save','PengumumanController@getSave');
	Route::get('pengumuman/delete/{id}','PengumumanController@getDelete');
	Route::get('pengumuman/edit/{id}','PengumumanController@getEdit');
	Route::post('pengumuman/update/{id}','PengumumanController@getUpdate');

	Route::get('cetak-surat','SuratController@getIndex');
	Route::get('surat/pengantar','SuratController@getPengantar');
	Route::post('pengantar/cetak','SuratController@getPrint');
	Route::get('pengaturan/aplikasi','PengaturanController@getIndexAplikasi');
	Route::get('pengaturan/aplikasi/edit/{id}','PengaturanController@getEdit');
	Route::post('pengaturan-aplikasi/update/{id}','PengaturanController@getUpdateAplikasi');
	Route::get('pengaturan/modul','PengaturanController@getIndexModul');
	Route::get('pengaturan/modul/edit/{id}','PengaturanController@getEditModul');
	Route::post('pengaturan/modul/update/{id}','PengaturanController@getUpdateModul');

	Route::get('struktur-desa/{id}','PengaturanController@getEditbagan');
	Route::post('bagan/update/{id}','PengaturanController@getUpdatebagan');

	Route::get('penduduks/konfigurasi','PenduduksController@getIndex');
	Route::get('penduduks/tambah','PenduduksController@getAdd');
	Route::post('penduduks/simpan','PenduduksController@Save');
	Route::get('penduduks/detail/{id}','PenduduksController@detail');
	Route::get('penduduks/edit/{id}','PenduduksController@getEdit');
	Route::get('penduduks/delete/{id}','PenduduksController@getDelete');
	Route::post('penduduks/update/{id}','PenduduksController@getUpdate');
	Route::get('penduduks/eksport','PenduduksController@eksportexcel');
	Route::post('penduduks/import_excel', 'PenduduksController@import_excel');


	Route::get('slider/konfigurasi','SliderController@getIndex');
	Route::post('slider/simpan','SliderController@getSave');
	Route::get('slider/delete/{id}','SliderController@getDelete');
	Route::get('slider/edit/{id}','SliderController@getEdit');
	Route::post('slider/update/{id}','SliderController@getUpdate');
});