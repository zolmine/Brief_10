<div>
    <div id="postModal" class="hidden h-screen w-screen bg-blue-300 bg-opacity-30 fixed z-10 inset-0 overflow-y-auto flex mx-auto px-10 items-center justify-center mb-4">
        <form action="{{route('posts')}}" method="post"  class="bg-blue-500 w-full max-w-xl fixed z-4  rounded-lg px-4 pt-2">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="flex flex-col -mx-3 mb-6">
                <input type="text" hidden name="userId" value="">
                <h2 class="px-4 pt-3 pb-2 text-white text-lg">Add Post Title</h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <input
                        class="bg-transparent rounded border border-white leading-normal resize-none w-full text-white  py-2 px-3 font-medium placeholder-white focus:outline-none focus:bg-blue-500"
                        name="title"
                        placeholder=""
                        required
                    />
                </div>
                <h2 class="px-4 pt-3 pb-2 text-white text-lg">Add Post Description</h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <input
                        class="bg-transparent rounded border border-white leading-normal resize-none w-full text-white  py-2 px-3 font-medium placeholder-white focus:outline-none focus:bg-blue-500"
                        name="description"
                        placeholder=""
                        required
                    />
                </div>
                <h2 class="px-4 pt-3 pb-2 text-white text-lg">Add Post</h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
              <textarea
                  class="bg-transparent rounded border border-white text-white leading-normal resize-none w-full h-52 py-2 px-3 font-medium placeholder-white focus:outline-none focus:bg-blue-500"
                  name="content"
                  placeholder=""
                  required
              ></textarea>
                </div>

                <div class="flex justify-end gap-3 px-3 pt-4">
                    <div class="flex justify-end ">
                        <!-- submit post -->
                        <button
                            type="submit"
                            class="text-blue-700 font-bold bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base"
                        >
                            Post
                        </button>
                    </div>
                    <div class="flex justify-end ">
                        <button id="cancel"

                            class="text-blue-700 font-bold bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
