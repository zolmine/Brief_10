@extends('pages.home')
@section('register')

    <section class=" body-font">

        <div class="w-screen h-3/4  grid place-content-center my-60 ">


            <form method="post" class="w-full w-full space-y-8 flex flex-col justify-center" action="{{route('register')}}">
@csrf
                <div class="w-64 text-white space-y-3">

                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('fullName') text-red-700 @enderror">Full Name</label>
                        <input class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('fullName') border-red-500   placeholder-red-600 @enderror" placeholder="enter your FullName" value="{{ old('fullName') }}"  name="fullName" type="text">
                        @error('fullName')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('email') text-red-700 @enderror">Email</label>
                        <input class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('email') border-red-500   placeholder-red-600 @enderror" placeholder="enter your Email" value="{{ old('email') }}"  name="email" type="text">
                        @error('email')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('email_confirmation') text-red-700 @enderror">Confirm Your Email</label>
                        <input class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('email_confirmation') border-red-500   placeholder-red-600 @enderror" placeholder="Confirm your Email" value=""  name="email_confirmation" type="text">
                        @error('email_confirmation')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('password') text-red-700 @enderror">Password</label>
                        <input class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('password') border-red-500   placeholder-red-600 @enderror" placeholder="enter your Password" value="{{ old('password') }}"  name="password" type="password">
                        @error('password')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class=" flex flex-col gap-2">
                        <label for="" class="@error('password_confirmation') text-red-700 @enderror">Confirm Your Password</label>
                        <input class="border-2  border-white bg-transparent h-10   rounded-md focus:outline-none 2xl:focus:placeholder-transparent pl-4 @error('password_confirmation') border-red-500   placeholder-red-600 @enderror" placeholder="Confirm your Password"  name="password_confirmation" type="password">
                        @error('password_confirmation')
                        <div class="text-red-700">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit" class="px-2 bg-transparent text-white border-2 border-white h-8 w-36  font-bold tracking-wider hover:bg-white hover:text-black  rounded-md">Register</button>
                </div>
            </form>
        </div>
    </section>

@endsection
