<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //Thêm
    public function index(){
        // $insert = new Post();
        // $insert -> name = 'sinh';
        // $insert -> age = 22;
        // $insert->save();
        // return view('success');
        $conn = DB::select('SELECT * FROM posts');
        return view('home',['connect'=>$conn]);
    }
    public function them(Request $request){
        $insert = new Post();
        $insert -> name = $request ->name;
        $insert -> age =$request ->age ;
        $insert->save();
        dd($request->all());
        return view('success');
    }
}
