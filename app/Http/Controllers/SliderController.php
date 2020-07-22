<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Storage;

class SliderController extends Controller
{
    
    public function getIndex()
    {
    	$slider = Slider::all();
    	return view('slider.all',compact('slider'));
    }
    public function getSave(Request $request)
    {
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'gambar' => 'required',

        ], $messages);
        if(empty($request->file('gambar'))){
        Slider::create([
            
        ]);
         } else {
        SLider::create([
            'gambar' => $request->file('gambar')->store('slider')
        ]);
        }
        toastr()->success('Slider Berhasil Di Tambah', 'Success');
        return redirect()->back();
    }
    public function getDelete($id)
    {
        $slider = Slider::find($id);
        if(!$slider){
            return redirect()->back();
        } else {
            Storage::delete($slider->gambar);
            $slider->delete();
            toastr()->success('Slider Berhasil Di Hapus', 'Success');
            return redirect()->back();

        }
    }
    public function getEdit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
    }
    public function getUpdate(Request $request, $id)
    {
    	
        if(empty($request->file('gambar'))) {
            $slider = Slider::find($id);
            $slider->update([
             
        ]);    
        } else {
            $slider = SLider::find($id);
            Storage::delete($slider->gambar);
            $slider->update([
            'gambar' => $request->file('gambar')->store('slider')
        ]);
        }
        toastr()->success('Slider Berhasil Di Ubah', 'Success');
        return redirect('slider/konfigurasi');
    }
}
