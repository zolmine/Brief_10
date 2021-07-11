@extends('pages.home')

@section('homeCom')
<section
    class="section overflow-hidden text-gray-600 body-font mt-32 md:mt-1 lg:mt-1 xl:mt-1"
>
    <div
        class="container mx-auto flex px-5 pb-20 items-center justify-center flex-col "
    >
        <img
            class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center"
            alt="ehe"
            src="{{ asset('images/scketch.svg') }}"
        />

        <div class="text-white text-center lg:w-2/3 w-full">
            <h1
                class="title-font sm:text-4xl text-3xl mb-4 font-medium font-mont text-white"
            >
                In UniForum .
            </h1>
            <p class="mb-8 leading-relaxed">
                You can ask , Discuss and Share your Thoughts
            </p>
            <div class="flex justify-center">
                <button
                    class="inline-flex text-blue-700 bg-white rounded-2xl border-0 py-1 px-3 focus:outline-none hover:bg-blue-400 hover:text-gray-100 rounded text-base mt-4 md:mt-0"
                >
                    Post Now
                </button>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-4xl font-medium  text-white ">
                What is UniForum for?
            </h1>
        </div>
        <div class="flex ">
            <div class=" p-4 md:w-1/2 sm:w-full">
                <div class=" flex rounded-lg h-full bg-transparent p-8 flex-col text-white">
                    <div class="flex lg:flex-row flex-col items-center  mb-3">

                        <h2 class="text-lg title-font font-medium">
                            Lorem episom
                        </h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aperiam blanditiis distinctio iste iusto labore magni nam quae, saepe soluta veniam vero. Accusamus debitis ex magni tempore? Dicta, libero.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" p-10 md:w-1/2 sm:w-full">
                <img class="" src="{{ asset('images/sketch.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
