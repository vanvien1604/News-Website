<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $Categories = Categories::orderBy('id','DESC')->get();
        return view('admin.categories.index', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => 'required|max:255',
            'status' => 'required'
        ]);
        $Categories = new Categories();
        $Categories->name = $data['name']; 
        $Categories->status = $data['status']; 

        $Categories->save();
        toastr()->success('Thêm mới thành công !');
        return redirect('/Categories');
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
        $Categories = Categories::find($id);
        return view('admin.categories.edit',compact('Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'status' => 'required'
        ]);
        $Categories = Categories::find($id);
        $Categories->name = $data['name']; 
        $Categories->status = $data['status']; 

        $Categories->save();
        toastr()->success('Cập nhật thành công !');
        return redirect('/Categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $Categories = Categories::find($id);
        $Categories->delete();
        toastr()->success('Xóa thành công !');
        return redirect('/Categories');
    }
}
