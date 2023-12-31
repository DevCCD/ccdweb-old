<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte3.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::pluck('name','id');
     
        return view('adminlte3.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

       $post = Post::create($request->all());

        if($request->file('file')){
         $url = Storage::put('posts',$request->file('file'));
         
         $post->image()->create([
             'url' => $url
         ]);
        
        }
        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('adminlte3.posts.edit',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('adminlte3.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)

    
    {   
        $tags = Tag::all();
        $categories = Category::pluck('name','id');
        return view('adminlte3.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request,Post $post)
    {
        $post->update($request->all());

        if($request->file('file')){
           $url = Storage::put('posts',$request->file('file'));
            if($post->image){
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url'=>$url
                ]);
            }
        }
        if($request->tags){
            $post->tags()->sync($request->tags);
        }
        return redirect()->route('adminlte3.posts.edit',$post)->with('info','El Post se Actualizó con Exitó');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('adminlte3.posts.index',$post)->with('info','El post se Eliminó con Exitó');
        
    }
}
