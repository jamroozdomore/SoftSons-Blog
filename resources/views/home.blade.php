<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JAM Blog</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="https://www.svgrepo.com/show/70522/blogger.svg" type="image/x-icon">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>       
          <div class="flex justify-end duration-1000 -mr-[100%]" id="sidenav">
                <aside class="h-screen w-full fixed bg-orange-400">
                    <div class="flex justify-end p-3">
                        <button class="hover:text-white font-extrabold duration-300 p-2 text-2xl" onclick="sidenav_close()"><i class="bi bi-x-lg font-bold"></i></button>
                    </div>
                        <div class="gap-5 flex flex-col text-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-100 text-2xl font-normal text-md">Dashboard</a>
                                <a href="{{ url('/post') }}" class=" text-gray-100 text-2xl font-normal">Post</a>
                                    @else
                                    <div>
                                    <a href="{{ route('login') }}" class="text-black font-normal text-2xl w-full mx-auto px-5 duration-300 hover:text-white">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-black font-normal text-2xl w-full mx-auto duration-300 hover:text-white">Register</a>
                                @endif
                                </div>
                            @endauth
                        @endif
                    </div>
                </aside>
            </div>
            <header class="p-5 bg-gray-900 text-white">
                <nav class="flex justify-between items-center w-full">
                    <div class="flex items-center gap-2">
                       <svg class="w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 474.649 474.649" style="enable-background:new 0 0 474.649 474.649;" xml:space="preserve">
                        <circle style="fill:#ED7826;" cx="236.967" cy="236.985" r="236.967"/>
                        <path style="fill:#DB6D27;" d="M405.239,70.083c92.542,92.546,92.549,242.588,0,335.141c-92.542,92.542-242.599,92.546-335.144,0  L405.239,70.083z"/>
                        <path style="fill:#CE6028;" d="M465.576,299.447L295.571,129.45l-34.634,34.638l-95.049-13.358l19.592,88.811l-68.306,68.306  l24.011,24.011l-5.923,5.923l133.93,133.934C363.971,458.828,440.895,389.938,465.576,299.447z"/>
                        <path style="fill:#FFFFFF;" d="M286.12,362.458c44.363,0,80.4-36.138,80.651-80.258l0.498-64.961l-0.745-3.536l-2.129-4.445  l-3.607-2.791c-4.681-3.667-28.404,0.247-34.791-5.549c-4.528-4.138-5.235-11.618-6.612-21.751  c-2.548-19.629-4.15-20.655-7.229-27.304c-11.169-23.633-41.474-41.392-62.293-43.843h-56.396c-44.37,0-80.643,36.194-80.643,80.396  v93.784c0,44.119,36.269,80.258,80.643,80.258H286.12z M194.494,173.696h44.707c8.539,0,15.454,6.93,15.454,15.353  c0,8.389-6.915,15.379-15.454,15.379h-44.707c-8.535,0-15.439-6.99-15.439-15.379C179.056,180.626,185.959,173.696,194.494,173.696z   M179.056,281.007c0-8.419,6.904-15.293,15.439-15.293h90.847c8.483,0,15.368,6.874,15.368,15.293  c0,8.314-6.889,15.296-15.368,15.296h-90.847C185.959,296.303,179.056,289.321,179.056,281.007z"/></svg>
                        <h1 class="text-xl font-bold">JAM<span class="text-orange-300"> Blog</span></h1>
                    </div>
                    <div class="md:flex hidden gap-5">
                        @if (Route::has('login'))
                            <div class="hidden sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class=" text-orange-300 font-bold text-md">Dashboard</a>
                                <a href="{{ url('/post') }}" class=" text-orange-300 font-bold text-md p-5">Post</a>
                            @else
                            <a href="{{ route('login') }}" class=" text-orange-300 font-bold text-md">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-orange-300 font-bold text-md">Register</a>
                            @endif
                        @endauth
                            </div>
                        @endif
                    </div>
                    <button class="md:hidden block" onclick="sidenav_open()"><i class="bi bi-list text-orange-400 font-bold text-2xl bg-white rounded-sm"></i></button>
                </nav>
            </header>


        <div class="py-12 bg-gray-500 h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-2 border-gray-200">
                    @foreach ($posts as $post)
                    <div class="border-double border-4 border-orange-400 p-5 my-2">
                        <div class="flex items-center">
                            <div class="text-xl font-bold">
                                Blogger Name:- 
                            </div>
                            <span class="text-xl">{{$post->user->name}}</span>
                        </div>
                        <div class="font-bold text-xl ">
                            Title:
                            <span class="font-normal text-center">{{$post->title}}</span>
                        </div>
                        <div class="flex flex-col font-bold text-xl">
                            Blog: 
                            <span class="p-2 leading-tight font-normal">{{$post->blog}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center my-10">
                    <h5 class="font-bold text-md ">Pagination:</h5>
                    <span class="my-4">{{$posts->links()}}</span>
                </div>
            </div>
            </div>
        </div>





            <script>
                function sidenav_open(){
                    document.getElementById("sidenav").style.marginRight="0%"
                }
                function sidenav_close(){
                    document.getElementById("sidenav").style.marginRight="-100%"
                }
            </script>
    </body>
</html>
            