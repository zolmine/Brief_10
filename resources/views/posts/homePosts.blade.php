@extends('pages.home')

@section('posts')


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto space-y-3 flex flex-col">
            <div class="w-full flex items-center space-x-1 justify-center">

                <button onclick="showModal()"
                        class="inline-flex sm:w-48  items-center text-blue-700 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base mt-4 md:mt-0">
                    Create New Post
                    <svg class="mx-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                </button>
                @if ($message = Session::get('success'))
                    <div class="text-white ">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>

            <div class="flex flex-wrap -m-4">
                @foreach($allPosts as $post)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1">Author
                                    : {{$post['fullName']}}</h2>
                                <h1 class="title-font text-lg max-h-10 font-medium text-white mb-3">{{$post['postTitle']}}</h1>
                                <p class="leading-relaxed text-white mb-3">{{$post['postDescription']}} </p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="/posts/{{$post['postId']}}"
                                       class="text-white inline-flex items-center hover:text-black md:mb-2 lg:mb-0">Learn
                                        More
                                        <svg class="w-4 h-4 ml-2 hover:text-black" viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <button
                                        class="text-white mr-2 inline-flex items-center lg:ml-auto md:ml-0 ml-auto hover:text-black leading-none text-sm  border-gray-200">
                                        <svg class="w-5 h-5 mr-1 hover:text-black" stroke="currentColor"
                                             stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>
                                        {{$post['commentNbr']}}
                                    </button>
                                    @if($post['userId'] == auth()->user()->userId || auth()->user()->position === 'admin')
                                        <button onclick="edit({{json_encode($post)}})"
                                                class="text-white inline-flex items-center leading-none text-sm hover:text-black">
                                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </button>
                                    @endif
                                    @if(auth()->user()->position === 'admin')

                                    <button onclick="del({{$post['postId']}})"
                                        class="text-white inline-flex items-center leading-none text-sm hover:text-black">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('posts.postCreation')
        @include('posts.postEdit')
    </section>

@endsection
