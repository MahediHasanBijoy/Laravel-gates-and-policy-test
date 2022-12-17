<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    



<div class="text-center mt-5">
    @can('isAdmin')
        <h2>Admin section</h2>
    @endcan
    @can('isUser')
        <h2>User section</h2>
    @endcan
    @can('isEditor')
        <h2>Editor section</h2>
    @endcan
</div>
<div class="text-center">
    <a href="{{route('posts.index')}}" class="btn btn-primary">Show posts</a>
</div>
        

    
</x-app-layout>



