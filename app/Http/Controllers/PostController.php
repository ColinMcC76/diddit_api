<?php

namespace App\Http\Controllers;

use App\Subdiddit;
use App\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //Should render a list of resources
        $sub = Subdiddit::latest()->get();
        $post = Post::latest()->get();
        return view('post.index', ['post'=> $post,'sub'=>$sub]);
    }
    public function show($id) {
        //Should render a list of resources
        $post = Post::find($id);

        return view('post.show', ['post'=> $post]);
    }
    // public function create() {
    //     //Shows a view to create a resource.
    //     return view('book.create');

    // }
    // public function store() {
    //     //persists/saves the new resource
        
    //     $validatedAttributes = request()->validate([
    //         'title'=>'required',
    //         'author'=>'required',
    //         'excerpt'=>'required'
    //     ]);

    //     Book::create($validatedAttributes);

    //     return redirect('/books');

    // }
}
