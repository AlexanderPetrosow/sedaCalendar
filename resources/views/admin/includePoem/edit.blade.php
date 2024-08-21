<div id="modal_poem_edit" class="absolute top-0 left-0 flex-col items-center justify-center w-full h-full bg-[#979595c5] text-white">
    <div class="flex items-center justify-center w-full h-full">
        <div style="scrollbar-width: thin;" class=" w-[750px]  overflow-hidden overflow-y-auto bg-[#859094a2] py-4 relative">
            <div class="absolute top-2 right-2">
                <a href="{{route('admin.poem')}}">
                    <i class='bx bx-x text-[40px] cursor-pointer text-gray-200'></i>
                </a>
            </div>
            <div class="flex justify-center items-center text-[20px]">
                <span class="text-white">
                   @lang('nav.poem_edit')
                </span>
            </div>
        <form method="POST" action="{{route('poem.update')}}" class="w-full py-2 px-12 flex flex-col gap-2" novalidate>
            @csrf
            <input class="hidden" type="number" name="id" value="{{$poem->id}}">
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <input type="text" id="name_tm" name="name_tm" value="{{$poem->name_tm}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения тм" required />
                </div>
                <div>
                    <input type="text" id="name_ru" name="name_ru" value="{{$poem->name_ru}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения ру" required />
                </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <textarea class="text_tm" id="text_tm" name="text_tm" placeholder="стихотворения тм..." >{{$poem->text_tm}}</textarea>
                </div>
                <div>
                    <textarea class="text_ru" id="text_ru" name="text_ru" placeholder="стихотворения ру..." >{{$poem->text_ru}}</textarea>
                </div>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <input type="text" id="author_name_tm" name="author_tm" value="{{$poem->author_tm}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="имя автора тм" required />
                </div>
                <div>
                    <input type="text" id="author_name_ru" name="author_ru" value="{{$poem->author_ru}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="имя автора ru" required />
                </div>
            </div>
            <div class="flex flex-row justify-between items-center h-[50px]">
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
                <div class="flex gap-2 items-center w-[100px]">
                    <span>@lang('nav.order')</span>
                    <select id="small" name="order" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                        @foreach($poems as $po)
                            <option @if($poem->order == $po->order) selected @endif>{{$po->order}}</option>
                        @endforeach
                    </select>                    
                </div>
                
            </div>
            <button type="submit" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2">создавать</button>
       </form>
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

