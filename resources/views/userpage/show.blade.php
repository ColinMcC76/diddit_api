@extends ('layouts.app')

@section ('content')
<div class='container-fluid'>
    <div class='row'>
        <div class="col-4 card">
            <img class="card-img-top" src="https://fakeimg.pl/350x200/?text=User" alt="user prorfile">
            <div class="card-body">
                <h4 class="card-title">U/{{$user->name}}</h4>
            </div>
        </div>
        <div class='col-8'>
            <!-- {{$user->posts}} -->
            @foreach ($user->posts as $post)
        
            <div class='d-flex pt-3'>
                <div class="col-md-4">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-7">
                    <div>
                        <ul class='d-flex justify-content-between list-unstyled flex-row'>
                            <li>
                                <a class="h3" href="/U/{{$post->user->id}}">U/{{$post->user->name}}</a>
                            </li>
                            <li>
                                <a class="h3" href="/D/{{$post->subdiddit->id}}">D/{{$post->subdiddit->name}}</a>
                            </li>
                        </ul>
                    
                    </div>
                    <a class="h3" href="/{{$post->id}}">{{$post->title}}</a>    
                    <p class="pt-1">{{$post->body}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection ('content')