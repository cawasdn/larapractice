<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view("welcome");
    }


    //read from db
    public function read()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            return $post->title;
        }
    }

    //find specific data in table
    public function find()
    {
        $posts = Post::find(2);
        return $posts->title;
    }
    public function updatespecificid()
    {
        $post = Post::find(2); // id number
        $post->title = 'new save data';
        $post->post = 'new save post;';
        $post->save();
    }

    //Insert data in table
    public function save()
    {
        $post = new Post;
        $post->title = 'new save data';
        $post->post = 'new save post;';
        $post->save();
    }

    //saving multiple data in table needs to dictate in model
    public function mass_assignment()
    {
        Post::create(['title' => 'NewInsert', 'post' => 'NewPost']);
    }

    public function contact()
    {
        $people = ['Dan', 'Iel', 'Cawas'];
        return view("contact", compact('people'));
    }


    public function about($id, $name, $password)
    {
        // return view("pages.about")->with('id', $id);
        return view('pages.about', compact('id', 'name', 'password'));
    }
}
