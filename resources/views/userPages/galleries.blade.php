
<div>
    <div class="flex items-center justify-center w-full mb-3">
        <p class="uppercase text-[24px]">@lang('nav.galleries')</p>
    </div>
    <div class="p-6 bg-gray-100">
        <div class="flex flex-row flex-wrap justify-center gap-4">
            @foreach($images as $image)
                <div class="w-[90%] sm:w-[45%] md:w-[48%] lg:w-[30%] aspect-square overflow-hidden bg-gray-800 p-1">
                    <img class="bg-cover" src="{{$image->getImage()}}" alt="gallery images">
                </div>
            @endforeach
        </div>
    </div>
</div>

