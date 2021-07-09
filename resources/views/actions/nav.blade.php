<div class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            <span class="ml-3 text-white text-xl">UniForum</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('home') }}" class="mr-5 text-white hover:text-blue-900">Home</a>
            <a href="{{ route('posts') }}" class="mr-5 text-white hover:text-blue-900">Posts</a>
        </nav>
        <div class="px-12">

            @auth
                <a href="{{ route('logout') }}"
                    class="inline-flex items-center text-blue-700 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base mt-4 md:mt-0">
                    LogOut
                    <svg class="mx-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </a>
                <p class="inline-flex items-center text-white text-sm font-bold">{{auth()->user()->fullName}}</p>
            @endauth

            @guest
                <a href="{{route('login')}}"
                   class="inline-flex items-center text-blue-700 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base mt-4 md:mt-0">
                    SignIn
                    <svg class=" mx-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                </a>
                <a href="{{route('register')}}"
                   class="inline-flex items-center text-blue-700 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded  mt-4 md:mt-0">
                    SignUp
                    <svg class=" mx-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </a>
            @endguest

        </div>
    </div>
</div>

