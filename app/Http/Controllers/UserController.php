<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use Hash;
use App\User;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $users = \App\User::paginate(10);
        $filterKeyword=$request->get('keyword');
        $status = $request->get('status');
        if($filterKeyword){ 
            if($status){ 
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")->where('status', $status)->paginate(10);
            }else{
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")->paginate(10);
            }
        }
        $user = User::all();
        $level = Level::all();        
         
        // if($status){
        //     $users = \App\User::where('status', $status)->paginate(10); 
        // }else { 
        //     $users = \App\User::paginate(10); 
        // }
        return view('users.index',compact('users','user','level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_user=new \App\User;
        $new_user->name=$request->get('name');
        $new_user->username=$request->get('username');
        $new_user->roles=json_encode($request->get('roles'));
        $new_user->name=$request->get('name');
        $new_user->address=$request->get('address');
        $new_user->phone=$request->get('phone');
        $new_user->email=$request->get('email');
        $new_user->password=\Hash::make($request->get('password'));
        if($request->file('avatar')){
            $file=$request->file('avatar')->store('avatars','public');
            $new_user->avatar=$file;
        }
        $new_user->save();
        return redirect()->route('users.index')->with('status','User successfully created');
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
        $user = \App\User::findOrFail($id); 
        return view('users.edit',['user'=>$user]);
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
        $user = \App\User::findOrFail($id);
        $user->name = $request->get('name');
        $user->roles = json_encode($request->get('roles'));
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->status = $request->get('status');
        if($request->file('avatar')){
            if($user->avatar && file_exists(storage_path('app/public/' . $user->avatar))){
            \Storage::delete('public/'.$user->avatar);
            }
            $file = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $file;
        }
           
        $user->save();
        return redirect()->route('users.index',[$id])->with('status', 'User succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('status','User successfully delete');
    }
    public function add_user(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'unique' => 'attribut sama dengan database !!!',
            'numeric' => 'attribut harus diisi dengan angka !!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
            'same' => ':attribute harus sama dengan password !!',
        ];
        $this->validate($request, [
            'username' => 'required|min:2',
            'name' => 'required|min:2',
            'level_id' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'passwordconf' => 'required|same:password'
        ], $messages);
        if(empty($request->file('avatar'))){
        User::create([
            'username' => $request->username,
            'name' => $request->name,
           // 'gambar' => $image,
            'email' => $request->email,
            'level_id' => $request->level_id,
            'password' => Hash::make($request->password)
        ]);
         } else {
        User::create([
            'username' => $request->username,
            'name' => $request->name,
           // 'gambar' => $image,
            'email' => $request->email,
            'level_id' => $request->level_id,
            'password' => Hash::make($request->password),
            'avatar' => $request->file('avatar')->store('avatar')
        ]);
        }
        toastr()->success('User Desa Berhasil Di Tambah', 'Success');
        return redirect()->back();
        
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if(!$user){
            return redirect()->back();
        } else {
            Storage::delete($user->avatar);
            $user->delete();
            toastr()->success('User Berhasil Di Hapus', 'Success');
            return redirect()->back();

        }
    }
    public function getEdit($id)
    {
        $level = Level::select('id','name')->get();
        $user = User::find($id);
        return view('users.edit', compact('level','user'));
    }
    public function getUpdate(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'unique' => 'attribut sama dengan database !!!',
            'numeric' => 'attribut harus diisi dengan angka !!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
            'same' => ':attribute harus sama dengan password !!',
        ];
        $this->validate($request, [
            'username' => 'required|min:2',
            'name' => 'required|min:2',
            'level_id' => 'required',
            'email' => 'required',
            'password' => '',
            'passwordconf' => 'same:password'
            
        ], $messages);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->level_id = $request->get('level_id');
        if ($request->get('password') != '') {
            $user->password = Hash::make($request->get('password'));
        }

        $aks = $user->save();
         
        if ($aks) {
            toastr()->success('User Berhasil Di Update', 'Success');
            return redirect()->route('users.index');
        } else {
            return back();
        }
    }
}
