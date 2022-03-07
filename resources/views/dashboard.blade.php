<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-2 border-gray-200">
                    @if (session()->has('status'))
					    <div class="mt-5 shadow-lg bg-green-500 text-white font-bold py-2 px-4 rounded">
						    {{session('status')}}
					    </div>
				    @endif
                    @if (session()->has('statusdel'))
					    <div class="mt-5 shadow-lg bg-red-500 text-white font-bold py-2 px-4 rounded">
						    {{session('statusdel')}}
					    </div>
				    @endif
                    @foreach ($posts as $post)
                    <div class="border-double border-4 border-orange-400 p-5 my-2">
                        <div class="flex justify-between items-center">
                            <div class="text-xl font-semibold">
                                ID: <span class="font-bold text-orange-400 text-md">{{$post->id}}</span>
                            </div>
                            <div>
                                <a href="{{url('/edit', $post->id)}}" class="bg-green-100 p-1.5 rounded-md hover:bg-green-500 hover:text-white duration-200">Edit</a>
                                <a href="{{url('/delete', $post->id)}}" class="bg-red-100 p-1.5 rounded-md hover:bg-red-500 hover:text-white duration-200">Delete</a>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-xl font-bold">
                                Name: 
                            </div>
                            <span class="text-xl">{{$post->user->name}}</span>
                        </div>
                        <div class="font-bold text-xl ">Title: <span class="font-normal text-center">{{$post->title}}</span></div>
                        <div class="flex flex-col font-bold text-xl">Blog: <span class="p-2 leading-tight font-normal">{{$post->blog}}</span></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                        <!-- <table class="w-full table-auto">
                            <thead class="bg-green-600 text-white">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Post Title</th>
                                    <th class="px-4 py-2">Blogs</th>
                                    <th class="px-4 py-2">Actions</th>
                            </thead>
                                <tbody class="text-center bg-white">
                                    @foreach ($posts as $post)
                                        <tr>
                                            <th class="border border-gray-400 px-2 py-2">{{$post->id}}</th>
                                            <td class="border border-gray-400 px-2 py-2">{{$post->title}}</td>
                                            <td class="border border-gray-400 px-2 py-2">{{$post->blog}}</td>
                                            <td class="border border-gray-400 px-2 py-2">
                                            <a href="{{url('/edit', $post->id)}}" class="bg-green-100 p-1.5 rounded-md hover:bg-green-400 hover:text-white duration-200">Edit</a>
                                            <a href="{{url('/delete', $post->id)}}" class="bg-red-100 p-1.5 rounded-md hover:bg-red-400 hover:text-white duration-200">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
			                </table> -->
                            