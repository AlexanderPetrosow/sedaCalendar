@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-col gap-10 p-2 pr-4">
        <div class="flex flex-row p-2 bg-gray-400">
            <div class="w-[90px] max-h-[200px]">
                <img class="bg-cover" src="{{asset('images/image2.jpg')}}" alt="Gurbannazar Ezizow image">
            </div>
            <div class="flex-1 p-2 text-white max-w-[700px] text-[18px] indent-4 text-justify">
                <p>
                    @lang('nav.admin_home')
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center w-full">
            <div class="flex flex-wrap justify-around gap-2 ">
                <div class="flex flex-col w-[42%] bg-gray-400 rounded-md overflow-hidden gap-4 ">
                    <div class="flex flex-row gap-4 p-2 bg-gray-300 ">
                        <div>
                            <i class="bx bx-book-open text-[24px]"></i>
                        </div>                        
                        <div>@lang('nav.admin_poem')</div>
                    </div>
                    <div class="flex-1 px-2 text-justify text-white">
                        Bu bölümde Siz web sahypasynda gorkezilýän goşgulary goşup, goşulan goşgulary üýtgedip, bozup hem-de şol bir wagtda statusyny hem üýtgedip bilersiňiz
                    </div>
                    <div class="flex justify-between border-t-2">
                        <div class="flex justify-center flex-1 text-white">
                            {{$poemCount}} poems
                        </div>
                        <div class="flex items-center justify-center flex-1 text-white">
                            <a class="flex items-center justify-center text-nowrap " href="{{route('admin.poem')}}">
                                <i class='bx bx-show-alt text-[30px] mr-2'> </i> giňişleýin görmek
                            </a>
                        </div>
                    </div>
                </div>
                    
                <div class="flex flex-col w-[42%] bg-gray-400 rounded-md overflow-hidden gap-4 ">
                    <div class="flex flex-row gap-4 p-2 bg-gray-300 ">
                        <div>
                            <i class="bx bx-music text-[24px]"></i>
                        </div>                        
                        <div>@lang('nav.admin_audio_poem')</div>
                    </div>
                    <div class="flex-1 px-2 text-justify text-white">
                        Bu bölümde Siz web sahypasynda gorkezilýän okalan audio goşgulary goşup, goşulan audio goşgulary üýtgedip, bozup hem-de şol bir wagtda statusyny hem üýtgedip bilersiňiz
                    </div>
                    <div class="flex justify-between border-t-2">
                        <div class="flex justify-center flex-1 text-white">
                            {{$audioCount}} audio poem
                        </div>
                        <div class="flex items-center justify-center flex-1 text-white">
                            <a class="flex items-center justify-center text-nowrap" href="{{route('admin.audioPoem')}}">
                                <i class='bx bx-show-alt text-[30px] mr-2'> </i> giňişleýin görmek
                            </a>
                        </div>
                    </div>
                </div>
                    
                <div class="flex flex-col w-[42%] bg-gray-400 rounded-md overflow-hidden gap-4 ">
                    <div class="flex flex-row gap-4 p-2 bg-gray-300 ">
                        <div>
                            <i class="bx bx-photo-album text-[24px]"></i>
                        </div>                        
                        <div>@lang('nav.admin_gallery')</div>
                    </div>
                    <div class="flex-1 px-2 text-justify text-white">
                        Bu bölümde Siz web sahypasynda gorkezilýän suratlary goşup, bozup hem-de şol bir wagtda statusyny hem üýtgedip bilersiňiz
                    </div>
                    <div class="flex justify-between border-t-2">
                        <div class="flex justify-center flex-1 text-white">
                            {{$galleryCount}} galereýa
                        </div>
                        <div class="flex items-center justify-center flex-1 text-white">
                            <a class="flex items-center justify-center text-nowrap" href="{{route('admin.gallery')}}">
                                <i class='bx bx-show-alt text-[30px] mr-2'> </i> giňişleýin görmek
                            </a>
                        </div>
                    </div>
                </div>
                    
                <div class="flex flex-col w-[42%] bg-gray-400 rounded-md overflow-hidden gap-4 ">
                    <div class="flex flex-row gap-4 p-2 bg-gray-300 ">
                        <div>
                            <i class="bx bx-user-plus text-[24px]"></i>
                        </div>                        
                        <div>@lang('nav.admin_create')</div>
                    </div>
                    <div class="flex-1 px-2 text-justify text-white">
                        Bu bölümde Siz web sahypasyny dolandyrmak üçin admin doredip, üýtgedip hemde bozup bilersiňiz!
                    </div>
                    <div class="flex justify-between border-t-2">
                        <div class="flex justify-center flex-1 text-white">
                            {{$userCount - 1}} admin
                        </div>
                        <div class="flex items-center justify-center flex-1 text-white">
                            @if(auth()->user()->is_admin == 1)
                                <a class="flex items-center justify-center" href="{{route('admin.controll')}}">
                                    <i class='bx bx-show-alt text-[30px] mr-2'> </i> giňişleýin görmek
                                </a>
                            @else
                                <i class='bx bx-show-alt text-[30px] mr-2'> </i> giňişleýin görmek
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection