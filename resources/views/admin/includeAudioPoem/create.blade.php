<div id="modal_poem" class="absolute hidden top-0 left-0 flex-col items-center  w-full h-full bg-[#979595c5] text-white py-8 px-8">
    
    <div style="scrollbar-width: thin;" class="flex flex-col items-center justify-start overflow-hidden overflow-y-auto  bg-[#859094a2] py-8 relative">
        <div class="absolute top-4 right-4">
            <i onclick="hideModal()" class='bx bx-x text-[40px] cursor-pointer'></i>
        </div>
        <div class="flex justify-center items-center text-[20px]">
            <span>
                Создание аудио стихотворение
            </span>
        </div>
        <form method="POST" action="{{route('poem.store')}}" class="py-2 px-12 flex flex-col gap-2">
            @csrf
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label for="name_tm" class="block mb-2 font-medium text-[18px]">Название аудио стихотворение тм</label>
                    <input type="text" id="name_tm" name="name_tm" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения тм" required />
                </div>
                <div>
                    <label for="name_ru" class="block mb-2 font-medium text-[18px]">Название аудио стихотворение ру</label>
                    <input type="text" id="name_ru" name="name_ru" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Название стихотворения ру" required />
                </div>
            </div>

            <div class="mb-6 pt-4">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                  Upload File
                </label>
        
                <div class="mb-8">
                  <input type="file" name="file" id="file" class="sr-only" />
                  <label
                    for="file"
                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                  >
                    <div>
                      <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                        Drop files here
                      </span>
                      <span class="mb-2 block text-base font-medium text-[#6B7280]">
                        Or
                      </span>
                      <span
                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                      >
                        Browse
                      </span>
                    </div>
                  </label>
                </div>
        
                <div class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8">
                  <div class="flex items-center justify-between">
                    <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                      banner-design.png
                    </span>
                    <button class="text-[#07074D]">
                      <svg
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                          fill="currentColor"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
        
                <div class="rounded-md bg-[#F5F7FB] py-4 px-8">
                  <div class="flex items-center justify-between">
                    <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                      banner-design.png
                    </span>
                    <button class="text-[#07074D]">
                      <svg
                        width="10"
                        height="10"
                        viewBox="0 0 10 10"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                          fill="currentColor"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </div>
                  <div class="relative mt-5 h-[6px] w-full rounded-lg bg-[#E2E5EF]">
                    <div
                      class="absolute left-0 right-0 h-full w-[75%] rounded-lg bg-[#6A64F1]"
                    ></div>
                  </div>
                </div>
            </div>
            <div>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="status" class="sr-only peer" checked>
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
<script>
    function hideModal() {
        window.show();//sidebar
        const element = document.getElementById("modal_poem");  // Get the DIV element
        element.style.display = "none"; // Remove mystyle class from DIV
    }
    function showModal() {
        window.hide();//sidebarr
        const element = document.getElementById("modal_poem");  // Get the DIV element
        element.style.display = "flex"; // Remove mystyle class from DIV
    }
</script>

