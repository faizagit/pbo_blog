<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.template.index');
    }

    public function dashboard(){
        return view('admin.dashboard.dashboard');
    }

    // public function post(){
    //     return view('admin.post.post');
    // }

    // public function create_post(){
    //     return view('admin.post.createpost');
    // }

}   

