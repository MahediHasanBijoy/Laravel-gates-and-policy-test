<x-app-layout>
	<div class="p-5 w-75 m-auto">	
		<h2>{{auth()->user()->role}}</h2>
		<hr class="font-medium">
		<table class="table bordered">
			<thead class="bordered border-dark">
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Owner</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php($id = 1)
				@foreach($posts as $post)
				<tr>
					<td>{{$id++}}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->description}}</td>
					<td>{{$post->user->name}}</td>
					<td>
						@can('view',$post)
						<a href="{{route('post.show', $post)}}" class="btn btn-success">View</a>
						@endcan
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</x-app-layout>