<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
		<div class="container bg-gray-700 mx-auto mb-10">
			<div class="bg-black p-3">
				<h1 class="text-3xl font-bold text-white">Edit Your Post </h1>
			</div>
			<div class="py-10 px-20">
				<form action="" method="POST" class="">
					@csrf
					<div class="flex flex-col my-2">
						<label for="title" class="text-2xl font-bold mb-3 text-white">Title:</label>
						<input type="text" class="p-3" name="title" value="{{$post->title}}">
					</div>
					<div class="flex flex-col my-2">
						<label for="blog" class="text-2xl text-white font-bold mb-3">Blog:</label>
						<textarea name="blog" id="blog" cols="20" rows="10" class="p-3">{{$post->blog}}</textarea>
					</div>
					<div>
						<button type="submit" class="bg-zinc-900 text-white p-3 font-bold rounded-lg">
							Update
						</button>
					</div>
				</form>
				

			</div>

		</div>
 
</x-app-layout>
