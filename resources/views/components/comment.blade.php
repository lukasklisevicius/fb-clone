@props(['comment' => $comment,])

<div class="">
    <img class="border-solid border-2" src="{{asset('uploads/avatars/'.$comment->user->avatar)}}" style="width: 32px; height:32px; float:left; border-radius:50%; margin:10px 10px;">
    <a href="{{route('users.posts',$comment->user)}}" class="text-gray-300 font-bold mr-2">{{$comment->user->name}}</a><span class="text-gray-500 text-sm">{{$comment->created_at->diffForHumans()}}</span>
    <br>
    <p class="mb-2 text-gray-300">{{$comment->body}}</p>
</div>
    