<div id="modal_poem_edit" class="absolute top-0 left-0 flex-col items-center  w-full h-full bg-[#979595c5] text-white py-8 px-8">
    <div class="absolute top-16 right-16">
        <i onclick="hideEditModal()" class='bx bx-x text-[40px] cursor-pointer'></i>
    </div>
    <div style="scrollbar-width: thin;" class="flex flex-col items-center justify-start overflow-hidden overflow-y-auto w-full h-full bg-[#859094a2] py-8">
        <div class="flex justify-center items-center text-[20px]">
            <span>
                Создание стихотворения
            </span>
        </div>
        <form method="POST" action="{{route('poem.update')}}" class="w-full py-2 px-12 flex flex-col gap-2">
            @csrf
            <input class="hidden" type="number" name="id" value="{{$poem->id}}">
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="name_tm" class="block mb-2 font-medium text-[18px]">Название стихотворения тм</label>
                    <input type="text" id="name_tm" name="name_tm" value="{{$poem->name_tm}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения тм" required />
                </div>
                <div>
                    <label for="name_ru" class="block mb-2 font-medium text-[18px]">Название стихотворения ру</label>
                    <input type="text" id="name_ru" name="name_ru" value="{{$poem->name_ru}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения ру" required />
                </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="text_tm" class="block mb-2 font-medium">стихотворения тм</label>
                    <textarea class="text_tm" id="text_tm" name="text_tm" placeholder="стихотворения тм..." >{{$poem->text_tm}}</textarea>
                </div>
                <div>
                    <label for="text_ru" class="block mb-2 font-medium">стихотворения ру</label>
                    <textarea class="text_ru" id="text_ru" name="text_ru" placeholder="стихотворения ру..." >{{$poem->text_ru}}</textarea>
                </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="author_name_tm" class="block mb-2 font-medium text-[18px]">имя автора тм</label>
                    <input type="text" id="author_name_tm" name="author_tm" value="{{$poem->author_tm}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="имя автора тм" required />
                </div>
                <div>
                    <label for="author_name_ru" class="block mb-2 font-medium text-[18px]">имя автора ру</label>
                    <input type="text" id="author_name_ru" name="author_ru" value="{{$poem->author_ru}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="имя автора ru" required />
                </div>
            </div>
            <div>
                <label class="inline-flex items-center cursor-pointer">
                    @if($poem->status)
                        <input type="checkbox" name="status" class="sr-only peer" checked>
                    @else
                        <input type="checkbox" name="status" class="sr-only peer">
                    @endif
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium">active</span>
                  </label>
            </div>
            <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2">создавать</button>
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


<style>
    #modal{
        display: block;
    }
</style>
<script>
    function hideEditModal() {
        window.show();//sidebar
        const element = document.getElementById("modal_poem_edit");  // Get the DIV element
        element.style.display = "none"; // Remove mystyle class from DIV
    }
</script>

