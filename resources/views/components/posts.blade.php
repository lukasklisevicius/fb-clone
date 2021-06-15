@props(['post' => $post])

<div class="mb-4 bg-gray-700 p-2 rounded-lg h-auto shadow-lg">
    <img class="border-solid border-2" src="{{asset('uploads/avatars/'.$post->user->avatar)}}" style="width: 32px; height:32px; float:left; border-radius:50%; margin:10px 10px;">
    <a href="{{route('users.posts',$post->user)}}" class="pl-1 text-white font-bold mr-2">{{$post->user->name}}</a><span class="text-gray-500 text-sm">{{$post->created_at->diffForHumans()}}</span>
    <br>
    <p class="break-all pr-5 pl-14 text-white mb-2">{{$post->body}}</p>
    <div class="flex items-center">
        <span class="pl-4 mr-2 text-gray-400"> {{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
        @auth

        @if (!$post->likedBy(auth()->user()))
        <form action="{{route('posts.likes',$post)}}" method="post" class="mr-1">
            @csrf
            <button type="submit" class="focus:outline-none text-blue-500"><i class="fas fa-thumbs-up"></i> Like</button>
        </form>
        @else
        <form action="{{route('posts.likes',$post)}}" method="post" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="focus:outline-none text-blue-500"><i class="fas fa-thumbs-down"></i> Unlike</button>
        </form>                       
        @endif
        @endauth                   


        
        <a class="mx-2 text-blue-500" href="{{route('posts.show',$post)}}"><i class="fas fa-comment"></i> <span> {{$post->comments->count()}} {{Str::plural('comment',$post->comments->count())}}</span></a>
 
        @auth
        @can('delete', $post)
        <form action="{{route('posts.destroy', $post)}}" method="post" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="focus:outline-none text-blue-500"><i class="fas fa-trash"></i> Delete</button>
        </form>
        <a class="mx-2 text-blue-500" href="{{route('posts.edit',$post)}}"><i class="fas fa-edit"></i> Edit</a>
        @endcan
        @endauth
    </div>
</div>
    