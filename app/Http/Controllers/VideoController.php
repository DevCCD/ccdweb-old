<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function store2(Request $request)
    {
        $request->validate([
            'video' => 'required|video'
        ]);
        
        $video = $request->file('video');
        $name = $video->getClientOriginalName();
        $ext = $video->extension();
        $size = filesize($video);
        $path = $video->store2('uploads');
        $user_id = Auth::id();

        //dd($path);
        Video::create([
            'name' => $name,
            'ext' => $ext,
            'size' => $size,
            'user_id' => $user_id,
            'url' => $path
        ]);
        
        return redirect()->route('video')->with('success', 'Los datos se han guardado correctamente.');
    }

    public function destroy2(Video $file)
    {
        $file->delete();
        Storage::delete($file->url);
        
        return redirect()->route('video')->with('success', 'El archivo se ha eliminado!');
    }

    public function download2(Request $request, Video $file){
        return Storage::download($file->url, $file->name);
    }
}
