<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index(){    
        
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        
        return view('user.post.posts',[
            "title" => "All Posts" . $title,
            "active" => 'home',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(5)->withQueryString()
        ]);
    }
    
    public function show(Post $post){
        // dd($slug);
        return view('user.post.post',[
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
