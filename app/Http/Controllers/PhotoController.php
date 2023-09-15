<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store1(Request $request)
    {
        $request->validate([
            'foto' => 'required|image'
        ]);
        
        $foto = $request->file('foto');
        $name = $foto->getClientOriginalName();
        $ext = $foto->extension();
        $size = filesize($foto);
        $path = $foto->store1('uploads');
        $user_id = Auth::id();

        //dd($path);
        Foto::create([
            'name' => $name,
            'ext' => $ext,
            'size' => $size,
            'user_id' => $user_id,
            'url' => $path
        ]);
         
    }

    public function destroy1(foto $foto)
    {
        $foto->delete();
        Storage::delete($foto->url);
        
        return redirect()->route('fotos')->with('success', 'El archivo se ha eliminado!');
    }

    public function download1(Request $request, foto $foto){
        return Storage::download($foto->url, $foto->name);
    }
}
