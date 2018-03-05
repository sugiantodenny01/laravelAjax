<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gambar;
use Intervention\Image\Facades\Image;

class GambarController extends Controller
{
    //
        public function index()
        {
            $gambar = Gambar::all();
            return view('gambar.index', compact('gambar'));
        }

        public function create()
        {
            return view('gambar.create');
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'judul' => 'required',
                'file_gambar' => 'required|image',
            ]);
            $gambar = $request->file('file_gambar');
            $namaFile = $gambar->getClientOriginalName();

            $request->file('file_gambar')->move('uploadgambar', $namaFile);
           // Image::make($gambar->getRealPath())->resize(200, 200)->save($request);


            $do = new Gambar($request->all());
            $do->file_gambar = $namaFile;
            $do->save();
            return redirect('/');
        }

}
