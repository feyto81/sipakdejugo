<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function getAdd()
    {
        $category = Category::all();
        return view('category.index',compact('category'));
    }
    public function saveCategory(Request $r)
    {
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($r, [
            'nama_kategori' => 'required|min:2|unique:categories',
            'slug' => 'required|min:2',
        ],$messages);
        $category = new Category;
        $category->fill($r->all());
        $result = $category->save();
        if ($result) {
            toastr()->success('Category Berhasil Di Tambahkan', 'Success');
            return redirect('category/all');
        } else {
            toastr()->error('Category Failed Added', 'Success');
            return back();
        }

    }
    public function getDelete(Request $request,$id)
    {
        
        $category = Category::find($id);
        $category->delete();
        toastr()->success('Category Berhasil Di Hapus', 'Success');
        return back();
    }
    public function edit_category($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
    public function update_category(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
            'slug' => 'required|min:2',
        ],$messages);
        $category = Category::find($id);
        $category->fill($request->all());
        $category->update();
        toastr()->success('Category Berhasil Di Update', 'Success');
        return redirect('/category/all');
    }
}
