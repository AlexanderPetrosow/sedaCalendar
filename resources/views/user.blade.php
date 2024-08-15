@extends('userlayouts.main')
@section('content')
{{-- {{dd(app()->getLocale());}} --}}
    <div class="flex flex-col w-full">
        <div class="flex justify-center text-[26px]">
                <h1>Gurbannazar Ezizow</h1>                    
       
        </div>
        <div class="flex justify-center gap-4 px-16">
            <div class="flex-1 flex justify-center items-center">
                <div class="w-[200px] h-auto">
                    <img class="bg-cover" src="{{asset('images/image2.jpg')}}" alt="">
                </div>
            </div>
            <div class="flex justify-center items-center relative">
                <div class="">
                    <p>
                        Gurbannazar Ezizow - talantly türkmen şahyry, Türkmenistanyň Magtymguly adyndaky Döwlet baýragynyň eýesi.
                        Gurbannazar Ezizow 1940-njy ýylyň 1-nji martynda Aşgabat şäheriniň Büzmeýin obasynda eneden bolýar. 1948-nji ýylda mekdebe barýar we 1959-njy ýylda Aşgabat şäherindäki 29-njy orta mekdebi tamamlaýar. Şol ýyl Türkmen döwlet uniwersitetiniň filologiýa fakultetine okuwa girýär. Uniwersiteti 1964-nji ýylda tamamlaýar we Çagalar edebiýatynyň birleşen neşirýatynyň redaksiýasyna işe iberilýär.
                    </p>
                    <span class="absolute bottom-0 right-0">
                        1940-1975
                    </span>
                </div>
            </div> 
        </div>
    </div>

    @include('userPages.poems')
    @include('userPages.songs')
    @include('userPages.galleries')
@endsection