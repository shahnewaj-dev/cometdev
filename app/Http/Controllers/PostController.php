<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function postShow(){
        $data = Post::where('trash',false)->get();
        $published = Post::where('trash',false)->get()->count();
        $trash = Post::where('trash',true)->get()->count();
        return view('admin.post.index',[
            'all_data' => $data,
            'published' => $published,
            'trash' => $trash,
        ]);
    }
    public function postTrash(){
        $data = Post::where('trash',true)->get();
        $published = Post::where('trash',false)->get()->count();
        $trash = Post::where('trash',true)->get()->count();
        return view('admin.post.trash',[
            'all_data' => $data,
             'published' => $published,
            'trash' => $trash,
        ]);
    }
    public function postCreate(){
        $tag = Tag::all();
        $cat = Category::all();
        return view('admin.post.tag.create',[
            'all_tag' => $tag,
            'all_cat' => $cat,
        ]);
    }
    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'text' => 'required',
        ]);
        $unique_img_name='';
        if ($request->hasFile('image')){
            $img = $request->file('image');
            $unique_img_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('admin/assets/img/sajib/'),$unique_img_name);
        }
        $gallery_img = [];
        if ($request->hasFile('gal_img')){
            foreach( $request-> file('gal_img') as $post_gal ){
                 $unique_gal_name = md5(time().rand()).'.'.$post_gal->getClientOriginalExtension();
                $post_gal->move(public_path('admin/assets/img/sajib/'),$unique_gal_name);
                array_push($gallery_img,$unique_gal_name);
            }
        }
//        $youtube = substr($request->video,12,7);
//        $vimeo = substr($request->video,8,5);
//        $video='';
//        if ($youtube){
//            $video = str_replace('watch?v=','embed/',$request->video);
//        }else if($vimeo) {
//            $video = str_replace('https://vimeo.com/','https://player.vimeo.com/video/',$request->video);
//        }

//            $str = substr($request->video);
        $str = substr($request -> video , 0 , 17);
        if($str == "https://vimeo.com"){

            $video = str_replace('https://vimeo.com/' , 'https://player.vimeo.com/video/',$request -> video);


        }else if($str == "https://www.youtu"){
            $video = str_replace('watch?v=' , 'embed/',$request -> video);
        }



         $post_feature =[
            'post_type' => $request->post_format,
            'featured_img' => $unique_img_name,
            'gall_image' => $gallery_img,
            'post_video' => $video,
            'post_audio' => $request->audio,
        ];

        Post::create([
           'name' => $request->title,
           'slug' => Str::slug($request->title),
           'featured' =>json_encode($post_feature),
           'content' => $request->text,
        ]);
        return redirect()->back()->with('success','post added successful');

    }
    public function postTrashUpdate($id){
            $trash_update = Post::find($id);
            if ($trash_update->trash==false){
                $trash_update->trash=true;
            }else{
                $trash_update->trash=false;
            }
            $trash_update->update();
            return redirect()->back();
    }
    public function postTrashDelete($id){
           $delete_data = Post::find($id);
           $delete_data->delete();
           return redirect()->back();
    }


}
