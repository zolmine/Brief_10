@extends('pages.home')

@section('singlePost')
    <section>

        <div class="h-20"></div>
        <div class="flex gap-6 flex-col  mx-auto">
            <div class=" px-16 mx-5 xl:mx-44">
                <h1 class="text-start text-white text-5xl font-semibold mb-12 ">
                    {{$singlePost->postTitle}}
                </h1>
                <h2 class="text-white">Author : {{$user->fullName}}</h2>
                <p class="text-white text-sm">Posted at : {{($singlePost->postDate)}}</p>
            </div>
            <div class="px-16 flex flex-col ">
                <div class="px-16 mx-5 xl:mx-44">
                    <label class="text-white text-sm">Description</label>
                </div>
                <div class="">
                    <p class="text-2xl border border-white rounded-2xl p-4 text-white mx-5 xl:mx-44 mt-4  text-start ">
                        {{$singlePost->postDescription}}

                    </p>
                </div>

            </div>
            <div class="px-16 flex flex-col ">
                <div class="px-16 mx-5 xl:mx-44">
                    <label class="text-white text-sm">Content</label>
                </div>
                <div class="">
                    <p class="text-2xl border border-white rounded-2xl p-4 text-white mx-5 xl:mx-44 mt-4  text-start ">
                        {{$singlePost->postContent}}

                    </p>
                </div>

            </div>
            <div class=" h-4"></div>
            <div class="flex gap-6 justify-end px-16 ">
                <button class="text-white">
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>

            <div class=" px-32 py-10 flex flex-col gap-4 bg-transparent">
                <div class="w-1/2 flex justify-center">
                    <h1 class="font-semibold text-white">Leave a Comment ..</h1>
                </div>
                <div class="w-full h-auto flex">
                    <form action="/posts/comment/{{$singlePost->postId}}" class="w-1/2 my-2 mb-2" method="post">

                        <div class="flex justify-center">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input hidden value="1" name="userId">

                            <textarea
                                class="bg-transparent rounded border border-white text-white leading-normal resize-none w-1/2 h-52 py-2 px-3 font-medium placeholder-white focus:outline-none focus:bg-blue-500"
                                name="comment"
                                placeholder=""
                                required
                            ></textarea>

                        </div>
                        <div class="flex justify-center my-2">
                            <button type="submit"
                                    class="text-blue-700 w-1/6 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base mt-4 md:mt-0">
                                Comment
                            </button>
                        </div>

                    </form>
                    <div class=" w-1/2 max-h-30">
                        @if(isset($result) && sizeof($result) != 0)
                            @for($i = 0; $i < sizeof($result); $i++)
                                <div class="bg-transparent p-2">
                                    <div class="flex gap-4 py-4 text-white ">
                                        <svg class="text-white w-5 h-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h1 class="text-white ">Author : {{$commentUser[$i]->fullName}}</h1>
                                        <p>{{$result[$i]->commentDate}}</p>
                                    </div>

                                    <p class="text-white border border-white rounded-2xl p-4 max-w-xl ">
                                        {{$result[$i]->commentContent}}
                                    </p>
                                </div>
                            @endfor

                        @endif

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
