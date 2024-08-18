@extends('userlayouts.main')
@section('content')
    <div class="flex flex-col flex-1 w-full pb-16">
        <div class="flex justify-center md:justify-end text-[26px] p-0 md:pr-24">
                <p class="text-[30px] md:text-[32px]" >
                    @lang('nav.G_Ezizow')    
                </p>                    
        </div>
        <div class="relative flex flex-col justify-center px-2 pb-16 md:px-16 md:gap-12 md:flex-row">
            <div class="flex items-center justify-center flex-1">
                <div class="w-[275px] h-auto rounded-full md:rounded-lg overflow-hidden">
                    <img class="hidden bg-cover md:flex" src="{{asset('images/image1.jpg')}}" alt="">
                    <img class="flex bg-cover md:hidden" src="{{asset('images/image2.jpg')}}" alt="">
                </div>
            </div>
            <div class="flex items-start justify-start flex-1">
                <div class="pt-12">
                    <p class="text-justify indent-4 text-[18px] md:text-[20px]">
                        @lang('nav.about_G_Ezizow')
                    </p>
                </div>
            </div> 
            <span class="absolute bottom-0 right-8 md:right-16">
                1940-1975
            </span>
        </div>
    </div>
    <div class="flex flex-col gap-12 px-2">
        @include('userPages.poems')
        @include('userPages.audioPoem')
        @include('userPages.galleries')
        <div class="footer h-[100px] w-full flex justify-center items-center ">
            <h1 class="text-black text-[28px]">
                Arassa Nusga
            </h1>
        </div>
    </div>
@endsection