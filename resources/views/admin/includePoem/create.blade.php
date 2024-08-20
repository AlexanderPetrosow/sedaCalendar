<div id="modal_poem" class="absolute hidden top-0 left-0 flex-col items-center justify-center w-full h-full bg-[#979595c5] text-white">
    <div class="flex items-center justify-center w-full h-full">
        <div style="scrollbar-width: thin;" class=" w-[650px]  overflow-hidden overflow-y-auto bg-[#859094a2] py-4 relative">
            <div class="absolute top-2 right-2">
                <i onclick="hideModal()" class='bx bx-x text-[40px] cursor-pointer text-gray-200'></i>
            </div>
            <div class="flex justify-center items-center text-[20px]">
                <span class="text-gray-800">
                    Создание стихотворения
                </span>
            </div>
            <form method="POST" action="{{route('poem.store')}}" class="flex flex-col w-full gap-2 px-12 py-2">
                @csrf
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <input type="text" id="name_tm" name="name_tm" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="Название тм" required />
                    </div>
                    <div>
                        <input type="text" id="name_ru" name="name_ru" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="Название ру" required />
                    </div>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <textarea class="text_tm" id="text_tm" name="text_tm" placeholder="стихотворения тм..."></textarea>
                    </div>
                    <div>
                        <textarea class="text_ru" id="text_ru" name="text_ru" placeholder="стихотворения ру..."></textarea>
                    </div>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <input type="text" id="author_name_tm" name="author_tm" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="имя автора тм" required />
                    </div>
                    <div>
                        <input type="text" id="author_name_ru" name="author_ru" class="block w-full max-w-xs px-3 py-[6px] text-md font-normal shadow-xs text-gray-900 bg-gray-200 border border-solid border-gray-200 rounded-md placeholder-gray-800 focus:outline-none leading-normal" placeholder="имя автора ру" required />
                    </div>
                </div>
                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="status" class="sr-only peer" checked>
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="text-sm font-medium ms-3">active</span>
                      </label>
                </div>
                <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2">создавать</button>
           </form>
           @if ($errors->any())
           @foreach ($errors->all() as $error)
               <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                   <span class="font-medium">{{$error}}</span>
               </div>
           @endforeach
       @endif
        </div>
    </div>
   
    
</div>

{{-- <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script> --}}
<script>
tinymce.init({
    selector:'textarea.text_tm',
    license_key: 'glpvuu4bgw2i0d17uizamjpfwjswu59kbeacaefftswsyuty',
    maxwidth: 600,
    height: 300
});
tinymce.init({
    selector:'textarea.text_ru',
    license_key: 'glpvuu4bgw2i0d17uizamjpfwjswu59kbeacaefftswsyuty',
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
        element.style.display = "block"; // Remove mystyle class from DIV
    }
</script>

