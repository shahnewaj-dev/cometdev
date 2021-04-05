<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryShow(){
        return view('admin.post.category.index');
    }
    public function categoryStore(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),


        ]);
        return redirect()->back()->with('success','data added successfully');
    }

    public function categoryAllShow(){
        $all = Category::all();
        $output = '';
        $i=1;
        foreach ($all as $data){
            if ($data->status==true) {
                $status = '<div class="status-toggle" id="active" status_active_id="'.$data->id.'">
                <input type="checkbox" id="status_'.$i.'"class="check" checked>
                <label for="status_'.$i.'" class="checktoggle">checkbox</label>
            </div>';

            }else{
                $status = '<div class="status-toggle" id="inactive" status_inactive_id="'.$data->id.'">
                <input type="checkbox" id="status_'.$i.'" class="check"  >
                <label for="status_'.$i.'" class="checktoggle">checkbox</label>
            </div>';
            }

            $output.='<tr>';
            $output.='<td>'.$i.'</td>';
            $output.='<td>'.$data->name.'</td>';
            $output.='<td>'.$data->slug.'</td>';
            $output.='<td>'.$status.'</td>';
            $output.='<td>'.$data->created_at->diffForHumans().'</td>';
            $output.='<td><a id="category_edit_btn" edit_id="'.$data->id.'" class="btn btn-sm btn-warning" href="#">Edit</a><a id="delete_btn" delete_id="'.$data->id.'" class="btn btn-sm btn-danger" href="#">delete</a></td>';
            $output.='</tr>';
            $i++;
        }
        return $output;

    }
    public function categoryActiveStatus($id){
       $status_update = Category::find($id);
       $status_update->status=false;
       $status_update->update();
    }

    public function categoryInactiveStatus($id){
        $status_update_inactive = Category::find($id);
        $status_update_inactive->status=true;
        $status_update_inactive->update();
    }
    public function categoryDelete($id){
        $delete_data = Category::find($id);
        $delete_data->delete();

    }
    public function categoryEdit($id){
        return Category::find($id);
    }
    public function categoryUpdate(Request $request){
        $id=$request->update_id;
        $update_data = Category::find($id);
        $update_data->name = $request->name;
        $update_data->update();

    }
}
