<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index(){
        $tag = Tag::all();
        return view('admin.post.tag.index',[
            'data' => $tag
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->back()->with('success','tag added successful');
    }

    public function edit($id){
        $data = Tag::find($id);
      return view('admin.post.tag.edit',[
          'tag' => $data
      ]);

    }
    public function update(Request $request,$id){
        $update_data = Tag::find($id);
        $update_data->name = $request->name;
        $update_data->update();
        return redirect()->back()->with('success','tag updated successfully');
    }
    public function delete($id){
        $delete_data = Tag::find($id);
        $delete_data->delete();
        return redirect()->back();
    }
}
