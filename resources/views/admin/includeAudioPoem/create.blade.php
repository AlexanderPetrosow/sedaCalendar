<div id="modal_poem" class="absolute hidden top-0 left-0 flex-col items-center  w-full h-full bg-[#979595c5] text-white py-8 px-8">
    <div class="overflow-hidden overflow-y-auto  bg-[#868e91c5] py-8 relative">
        <div class="absolute top-4 right-4">
            <i onclick="hideModal()" class='bx bx-x text-[40px] cursor-pointer text-gray-200'></i>
        </div>
        <div class="flex justify-center items-center text-[20px] mb-2">
            <span class="text-white">
                @lang('nav.audio_create')
            </span>
        </div>
        <form action="{{route('audioPoem.store')}}" method="POST" class="flex flex-col gap-4 px-8 py-2" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <input type="text" id="name_tm" name="name_tm" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="Название тм" required />
                </div>
                <div>
                    <input type="text" id="name_ru" name="name_ru" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="Название ру" required />
                </div>
            </div>

            <div >
                <label for="file"> format mp3 </label>
                <input id="file" type="file" name="audio" class="flex items-center p-1  w-full text-sm text-gray-900 border border-gray-200 rounded-sm cursor-pointer bg-gray-200 focus:outline-none">
            </div>

            <div class="mt-2">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="status" class="sr-only peer" checked>
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    <span class="text-sm font-medium ms-3">active</span>
                  </label>
            </div>
            <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2">@lang('nav.create')</button>
       </form>
    </div>
</div>

<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
tinymce.init({
    selector:'textarea.text_tm',
    maxwidth: 600,
    height: 300
});
tinymce.init({
    selector:'textarea.text_ru',
    maxwidth: 600,
    height: 300
});
</script> 
<script>
    function hideModal() {
        // window.show();//sidebar
        const element = document.getElementById("modal_poem");  // Get the DIV element
        element.style.display = "none"; // Remove mystyle class from DIV
    }
    function showModal() {
        // window.hide();//sidebarr
        const element = document.getElementById("modal_poem");  // Get the DIV element
        element.style.display = "flex"; // Remove mystyle class from DIV
    }
</script>

