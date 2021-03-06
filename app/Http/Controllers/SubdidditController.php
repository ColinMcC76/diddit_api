<?php

namespace App\Http\Controllers;

use App\Subdiddit;
use App\User;

use Illuminate\Http\Request;

class SubdidditController extends Controller
{
    public function index() {
        //Should render a list of resources
        $user = User::latest()->get();
        $sub = Subdiddit::latest()->get();
        return view('users.index', ['user'=> $user,'sub'=>$sub]);
    }
    public function show($id) {
        //Should render a list of resources
        // dd($id);
        $sub = Subdiddit::find($id);
        $posts=$sub->posts;
        foreach($posts as $post){
            $user = User::find($post['user_id']);
            $post['User'] = $user;

        }
        // $posts=$sub->posts;
        // foreach ($posts as $post){
        //     $user = User::find($post['user_id']);
        // }

        return json_encode($sub);


        // return view('subdiddit.show', ['subdiddit'=> $sub]);
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