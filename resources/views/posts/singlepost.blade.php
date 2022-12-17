<x-app-layout>

<div class=" p-3 rounded bg-white w-50 m-auto mt-3">
	<div>
		<h3>Title: {{$post->title}}</h3>
	</div>
	<div>
		<p><b>Description:</b> {{$post->description}}</p>
	</div>
	<div>
		<span>Written by:</span>
		<span>{{$post->user->name}}</span>
	</div>
	<div class="mt-3">
		<a href="{{route('post.destroy', $post)}}" class="btn btn-danger">Delete</a>
	</div>
</div>
	

</x-app-layout>