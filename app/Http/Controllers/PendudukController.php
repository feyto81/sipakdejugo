<?php

namespace App\Http\Controllers;

// use App\Exports\PendudukExport;
use App\Exports\PendudukExport;
use App\Imports\PendudukImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = \App\Penduduk::paginate(10);
        return view('penduduk.index', ['penduduk'=>$penduduk]);
    }


        // exsport
        public function exportData()
        {
            return Excel::download(new PendudukExport, 'penduduk.xlsx');
            // return view("Hello Word");
            // return Penduduk::all();
        }
    // import
    public function import_excel(Request $request)
    {
        // Validation
        $this->validate($request, ['file' => 'required|mimes:csv.xls,xlsx']);
        // menangkap
        $file = $request->file('file');
        // hasfile
        $nama_file=rand().$file->getClientOriginalName();
        // uploads ke public
        $file->move('file_penduduk',$nama_file);
        // import-data
        Excel::import(new PendudukImport, public_path('/file_penduduk/'.$nama_file));
        

        return redirect('penduduk');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_penduduk =new \App\Penduduk;
        $new_penduduk->nokk=$request->get('nokk');
        $new_penduduk->nik=$request->get('nik');
        $new_penduduk->name=$request->get('name');
        $new_penduduk->gender=$request->get('gender');
        $new_penduduk->tanggal_lahir=$request->get('tanggal_lahir');
        $new_penduduk->hub_keluarga=$request->get('hub_keluarga');
        $new_penduduk->alamat=$request->get('alamat');
        $new_penduduk->rt_rw=$request->get('rt_rw');
        $new_penduduk->desa=$request->get('desa');
        $new_penduduk->kecamatan=$request->get('kecamatan');
        $new_penduduk->tmp_lahir=$request->get('tmp_lahir');
        $new_penduduk->agama=$request->get('agama');
        $new_penduduk->pendidikan=$request->get('pendidikan');
        $new_penduduk->pekerjaan=$request->get('pekerjaan');
        $new_penduduk->status_perkawinan=$request->get('status_perkawinan');
        $new_penduduk->ayah=$request->get('ayah');
        $new_penduduk->ibu=$request->get('ibu');
        $new_penduduk->save();
        return redirect()->route('penduduk.index')->with('status','Penduduk successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk_edit=\App\Penduduk::findOrFail($id);
        return view('penduduk.edit',['penduduk'=>$penduduk_edit]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penduduk= \App\Penduduk::findOrFail($id);
        $penduduk->nokk=$request->get('nokk');
        $penduduk->nik=$request->get('nik');
        $penduduk->name=$request->get('name');
        $penduduk->gender=$request->get('gender');
        $penduduk->tanggal_lahir=$request->get('tanggal_lahir');
        $penduduk->hub_keluarga=$request->get('hub_keluarga');
        $penduduk->alamat=$request->get('alamat');
        $penduduk->rt_rw=$request->get('rt_rw');
        $penduduk->desa=$request->get('desa');
        $penduduk->kecamatan=$request->get('kecamatan');
        $penduduk->tmp_lahir=$request->get('tmp_lahir');
        $penduduk->agama=$request->get('agama');
        $penduduk->pendidikan=$request->get('pendidikan');
        $penduduk->pekerjaan=$request->get('pekerjaan');
        $penduduk->status_perkawinan=$request->get('status_perkawinan');
        $penduduk->ayah=$request->get('ayah');
        $penduduk->ibu=$request->get('ibu');

        $penduduk->save();
        return redirect()->route('penduduk.index',[$id])->with('status','Penduduk successfully Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk=\App\Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('status','Penduduk successfully delete');
    }


}
