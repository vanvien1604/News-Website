<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $Post = Posts::orderBy('id','DESC')->get();
        return view('admin.Post.index', compact('Post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $Categories = Categories::orderBy('id','DESC')->get();
        return view('admin.Post.create', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            'noidung' => 'required',
            'img' => 'required',
            'categories_id' => 'required',
            'tac_gia' => 'required',
            'thinh_hanh' => 'required',
            'status' => 'required'
        ]);
        $Post = new Posts();
        $Post->name = $data['name']; 
        $Post->description = $data['description'];
        $Post->noidung = $data['noidung']; 
        $Post->categories_id = $data['categories_id'];
        $Post->tac_gia = $data['tac_gia']; 
        $Post->thinh_hanh = $data['thinh_hanh']; 
        $Post->status = $data['status']; 
        
        //thêm hình ảnh
        $get_image = $request->img;
        $path = 'backend/uploads/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $Post->img = $new_image;

        $Post->save();
        toastr()->success('Thêm mới thành công !');
        return redirect('/Post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $Post = Posts::find($id);
        $Categories = Categories::orderBy('id','DESC')->get();
        return view('admin.Post.edit',compact('Post','Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'noidung' => 'required',
            'img' => 'nullable|image',
            'categories_id' => 'required',
            'tac_gia' => 'required',
            'thinh_hanh' => 'required',
            'status' => 'required'
        ]);
        $Post = Posts::find($id);
        $Post->name = $data['name']; 
        $Post->description = $data['description'];
        $Post->noidung = $data['noidung']; 
        $Post->categories_id = $data['categories_id'];
        $Post->tac_gia = $data['tac_gia']; 
        $Post->status = $data['status']; 
        $Post->thinh_hanh = $data['thinh_hanh']; 
                //thêm hình ảnh
                $get_image = $request->img;
                if ($get_image) {
                    $old_image_path = 'backend/uploads/'.$Post->img;
                    if(!empty($Post->img) && file_exists($old_image_path)){
                        unlink($old_image_path);
                    };
                    $get_image = $request->img;
                    $path = 'backend/uploads/';
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move($path,$new_image);
                    $Post->img = $new_image;
                }

        $Post->save();
        toastr()->success('Cập nhật thành công !');
        return redirect('/Post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $Post = Posts::find($id);
        $Post->delete();
        toastr()->success('Xóa thành công !');
        return redirect('/Post');
    }
}
