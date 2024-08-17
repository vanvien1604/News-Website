<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Posts;

class IndexController extends Controller
{
    public function index(Request $request){
        $tk = $request->input('search');
        $Search = Posts::with('category')->orderBy('id', 'DESC')->where('name', 'LIKE', '%'. $tk .'%')->where('status',1)->get();
        
        $Categories = Categories::orderBy('id', 'DESC')->where('status',1)->get();
        $Posts = Posts::with('category')->orderBy('id', 'DESC')->where('status',1)->get();
        $Postsfooter = Posts::with('category')->orderBy('id', 'DESC')->where('status',1)->get();
        $Categories_Home = Categories::with('post')->orderBy('id', 'DESC')->where('status',1)->get();
        $thinh_hanh = Posts::with('category')->orderBy('id', 'DESC')->where('thinh_hanh',1)->where('status',1)->take(4)->get();
        $luotxem = Posts::with('category')->orderBy('view_count', 'DESC')->where('status', 1)->take(5)->get();
        return view('pages.home', compact('Categories','Posts', 'Search', 'tk', 'thinh_hanh', 'luotxem', 'Categories_Home','Postsfooter'));
    }
    public function category(Request $request,$id){
        $Categories = Categories::orderBy('id', 'DESC')->where('status',1)->get();
        $Posts = Posts::with('category')->orderBy('id', 'DESC')->where('categories_id',$id)->where('status',1)->paginate(4);
        $Postsfooter = Posts::with('category')->orderBy('id', 'DESC')->where('status',1)->get();
        $PostNew = Posts::with('category')->orderBy('id', 'DESC')->where('categories_id',$id)->where('status',1)->get();
        $luotxem = Posts::with('category')->orderBy('view_count', 'DESC')->where('status', 1)->take(6)->get();
        return view('pages.listPost', compact('Categories','Posts','luotxem','Postsfooter','PostNew'));
    }
    public function post($id){
        $Categories = Categories::orderBy('id', 'DESC')->where('status',1)->get();
        $Posts = Posts::with(['category'])->whereHas('category', function($query) {
            $query->where('status', 1);
        })->where('id', $id)->where('status', 1)->first();
        $Postsfooter = Posts::with('category')->whereHas('category', function($query) {
            $query->where('status', 1);
        })->orderBy('id', 'DESC')->where('status',1)->get();
        $PostNew = Posts::with('category')->whereHas('category', function($query) {
            $query->where('status', 1);
        })->orderBy('id', 'DESC')->where('status',1)->get();
        $luotxem = Posts::with('category')->whereHas('category', function($query) {
            $query->where('status', 1);
        })->orderBy('view_count', 'DESC')->where('status', 1)->take(6)->get();
        return view('pages.post', compact('Posts','Categories','luotxem','Postsfooter','PostNew'));
    }
    public function about(){
        $Categories = Categories::orderBy('id', 'DESC')->where('status',1)->get();
        $Postsfooter = Posts::with('category')->orderBy('id', 'DESC')->where('status',1)->get();
        return view('pages.about',compact('Categories','Postsfooter'));
    }
    public function contact(){
        $Categories = Categories::orderBy('id', 'DESC')->where('status',1)->get();
        $Postsfooter = Posts::with('category')->orderBy('id', 'DESC')->where('status',1)->get();
        return view('pages.contact',compact('Categories','Postsfooter'));
    }
}
