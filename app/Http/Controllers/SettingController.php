<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $setting_edit=\App\Setting::findOrFail($id);
        return view('settings.edit',['settings'=>$setting_edit]);
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
        $settings = \App\Setting::findOrFail($id);
        if($request->file('logo'))
        {
            if($settings->logo && file_exists(storage_path('app/public/'.$settings->logo)))
            {
                \Storage::delete('public/'.$settings->logo);
            }
            $file = $request->file('logo')->store('logo','public');
            $settings->logo = $file;
        }
        $settings->phone = $request->get('phone');
        $settings->email=$request->get('email');
        $settings->sms=$request->get('sms');
        $settings->wa=$request->get('wa');
        $settings->facebook=$request->get('facebook');
        $settings->ig=$request->get('ig');
        $settings->alamat=$request->get('alamat');

        if($request->file('foto_kades'))
        {
            if($settings->foto_kades && file_exists(storage_path('app/public/'.$settings->foto_kades)))
            {
                \Storage::delete('public/'.$settings->foto_kades);
            }
            $file =$request->file('foto_kades')->store('foto_kades','public');
            $settings->foto_kades = $file;
        }
        $settings->wilayah_desa=$request->get('wilayah_desa');
        $settings->lokasi_balaidesa=$request->get('lokasi_balaidesa');
        $settings->save();
        return redirect()->route('settings.edit')->with('status','User seccessfully updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
