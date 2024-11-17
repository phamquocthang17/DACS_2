<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('User.index',compact('post'));
        
      }


      public function home(){
        $post = Post::all();
        return view('User.home',compact('post'));
      }

      public function info(){
        return view('User.thongtin');
        
      }
      public function blog() {
        $posts = Post::with('user')->get();
        return view('User.blog', compact('posts'));
    }
    



      public function EA(){
        return view('User.Education_and_Awareness');
      }

      public function post_page($id) {
        $post = Post::with('user')->findOrFail($id); // Tìm bài viết theo ID
        return view('User.post_page', compact('post'));
    }
    

    public function show($id){
        $post = Post::with('user')->findOrFail($id); // Lấy bài viết và người dùng liên quan
       return view('User.post_page', compact('post'));

    }

      


}
