@props(['comment' => $comment,])

<div class="">
    <a href="{{route('users.posts',$comment->user)}}" class="font-bold mr-2">{{$comment->user->name}}</a><span class="text-gray-600 text-sm">{{$comment->created_at->diffForHumans()}}</span>
    <br>
    <p class="mb-2">{{$comment->body}}</p>
</div>
    