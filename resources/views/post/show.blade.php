@extends ('layouts.app')

@section ('content')

<div class='d-flex pt-3'>
                <div class="col-md-4">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-7">
                    <div class='border p-2'>
                        <div>
                            <ul class='d-flex justify-content-between list-unstyled flex-row'>
                                <li>
                                    <a class="h3" href="U/{{$post->user->id}}">U/{{$post->user->name}}</a>
                                </li>
                                <li>
                                    <a class="h3" href="D/{{$post->subdiddit->id}}">D/{{$post->subdiddit->name}}</a>
                                </li>
                            </ul>
                        
                        </div>
                        <p class="h3">{{$post->title}}</p>    
                    </div>
                    <p class="pt-1">{{$post->body}}</p>
                    <!-- <a class="btn btn-primary" href="/{{$post->id}}">View Post</a> -->
                </div>
            </div>

@endsection ('content')
