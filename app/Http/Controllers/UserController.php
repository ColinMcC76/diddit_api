<?php
namespace App\Http\Controllers;

use App\Subdiddit;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function index() {
        // Should render a list of resources
        $user = User::latest()->get();
        return view('user.index', ['user'=> $user]);
        // return view('user.index');


    }
    public function show($id) {
        //Should render a list of resources
        // dd($id);
        $user = User::find($id);
        $posts= $user->posts;
        foreach($posts as $post){
            // $post['User'] = $user;
            $subdiddit = Subdiddit::find($post['subdiddit_id']);
            $post['Subdiddit'] = $subdiddit;
        }
        // $posts= User::find($post['user_id']);
        // return json_encode($post);
        return json_encode($user);


        return view('userpage.show', ['user'=> $user]);
    }
    public function create() {
        //Shows a view to create a resource.
        return view('user.create');

    }
    public function store() {
        //persists/saves the new resource
        
        $validatedAttributes = request()->validate([
            'title'=>'required',
            'email'=>'required',

        ]);

        User::create($validatedAttributes);

        return redirect('/patrons');

    }
}