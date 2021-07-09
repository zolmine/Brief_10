@extends('pages.home')
@section('login')

    <section class=" body-font">

        <div class="w-screen  grid place-content-center mt-60 ">
            @if(session('status'))
                <div class="bg-red-500 p-4 rounded mb-6 text-white text-center">{{session('status')}}</div>
            @endif
            <form method="post" class="w-full w-full space-y-8 flex flex-col justify-center"
                  action="{{route('login')}}">
                @csrf
                <div class="w-64 text-white space-y-3">

                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('email') text-red-700 @enderror">Email</label>
                        <input
                            class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('email') border-red-500   placeholder-red-600 @enderror"
                            placeholder="Enter your Email" value="{{old('email')}}" name="email" type="text">
                        @error('email')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('password') text-red-700 @enderror">Password</label>
                        <input
                            class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('password') border-red-500   placeholder-red-600 @enderror"
                            placeholder="enter your Password" value="{{ old('password') }}" name="password"
                            type="password">
                        @error('password')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit"
                            class="px-2 bg-transparent text-white border-2 border-white h-8 w-36  font-bold tracking-wider hover:bg-white hover:text-black  rounded-md">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
