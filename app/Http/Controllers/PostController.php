<?php

namespace App\Http\Controllers;

use App\Subdiddit;
use App\Post;
use App\User;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //Should render a list of resources
        // $subs = Subdiddit::latest()->get();
        $posts = Post::latest()->get();
        // $users = User::all();
        foreach($posts as $post) {
            $user = User::find($post['user_id']);
            $post['User'] = $user;
            $subdiddit = Subdiddit::find($post['subdiddit_id']);
            $post['Subdiddit'] = $subdiddit;

        }
        // $x = [$subs,$posts,$users];
        // return view('post.index', ['post'=> $post,'sub'=>$sub]);

        return json_encode($posts);
    }
    public function show($id) {
        //Should render a list of resources
        $post = Post::find($id);
        $user = User::find($post['user_id']);
            $post['User'] = $user;
            $subdiddit = Subdiddit::find($post['subdiddit_id']);
            $post['Subdiddit'] = $subdiddit;
        return json_encode($post);
        // return view('post.show', ['post'=> $post]);
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
