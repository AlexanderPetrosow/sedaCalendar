@extends('layouts.dashboard')

@section('content')
    <div class="relative flex flex-row items-start w-full h-full p-8">
        <div class="flex flex-col w-full h-full">
            <div class="flex justify-start w-full">
                <span class="text-[#1D1B31] text-[28px] font-bold">{{__('nav.galleries')}}</span>
            </div>
            <div class="h-full  bg-[#07074d3b]">
                <div class="container-images">
                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>                    

                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1 border border-gray-400 border-1">
                        <div class="image-item flex flex-col gap-1 max-h-[200px]">
                            <div class="">
                                <img class="bg-cover" src="" alt="gallery images">
                            </div>                            
                        </div>
                        <div class="flex flex-row items-center justify-between w-full p-2">
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-red-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Activate</span>
                                </label>
                            </div>
                            <div>
                                <i onclick="deleteConfirm('{{__('nav.delete_confirm')}}')" class='bx bx-trash text-[24px] text-red-600 cursor-pointer'></i>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="flex flex-col text-[16px] px-8">
            <div class="pt-4 mb-0">
                <label class="mb-5 flex justify-center items-center text-xl font-semibold text-[#07074D]">
                    Upload images
                </label>        
                <div class="mb-2">
                    <input type="file" name="file" id="file" class="sr-only" />
                    <label
                    for="file"
                    class="relative flex min-h-[160px] items-center justify-center rounded-md border border-dashed border-[#07074D] p-8 text-center"
                    >
                    <div>
                        <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                        Drop image here
                        </span>
                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                        Or
                        </span>
                        <span
                        class="inline-flex rounded border border-[#5556a59a] py-2 px-7 text-base font-medium text-[#07074D]"
                        >
                        Browse
                        </span>
                    </div>
                    </label>
                </div>
            </div>
            <button class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-sm px-5 py-2.5 me-2 mb-2">Uploads</button>
        </div>
    </div>
@endsection

<style>
.container-images {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 16px;
  padding: 10px;

}    
.image-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 20px;
  aspect-ratio: 1/1;
}
@media (max-width: 992px) {
    .container-images {  grid-template-columns: 1fr 1fr;}
} 
</style>

<script>
    console.log('test')
    function deleteConfirm(text) {
      confirm(text);
    }
</script>