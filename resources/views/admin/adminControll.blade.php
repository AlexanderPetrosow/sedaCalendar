@extends('layouts.dashboard')
@section('content')
    <div class="relative flex flex-col items-start w-full h-full gap-6 p-8 lg:flex-row">
        {{-- Admin table start --}}
        <div class="flex flex-col w-full gap-12">
            <div class="flex justify-start w-full">
                <span class="text-[#1D1B31] text-[24px] font-bold">{{__('nav.admin_controller')}}</span>
            </div>
            <div class="flex flex-col w-full">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden border">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Name</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Email</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($admins as $admin)
                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">{{$admin->name}}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{$admin->email}}</td>
                                <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                    <button type="button" class="inline-flex items-center text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                </td>
                            </tr>
                            @endforeach
            
                            <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">Jim Green</td>
                            <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">27</td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                <button type="button" class="inline-flex items-center text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                            </td>
                            </tr>
                            <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">Joe Black</td>
                            <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">31</td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                <button type="button" class="inline-flex items-center text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Admin tables end --}}
        {{-- register start --}}
        <div class="w-[350px]">
            <div class="flex flex-col justify-start font-[sans-serif] sm:h-screen mx-1 w-full">
                <div class="w-full max-w-lg p-4 mx-auto border border-gray-300 rounded-sm">
                    <div class="text-center">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/logo.png')}}" alt="логотип" class='inline-block w-40' />
                        </a>
                    </div>
                    <form action="{{route('admin.create')}}" method="post">
                        @csrf
                        <div class="space-y-2">
                            <div>
                                <label class="text-gray-800 text-sm mb-[2px] block">Имя</label>
                                <input name="name" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-sm outline-blue-500" placeholder="Введите имя" required />
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm mb-[2px] block">Имя пользователя</label>
                                <input name="username" type="text" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-sm outline-blue-500" placeholder="Введите имя пользователя" required/>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm mb-[2px] block">Email</label>
                                <input name="email" type="email" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-sm outline-blue-500" placeholder="Введите ваш email" required/>
                            </div>                            
                            <div>
                                <label class="text-gray-800 text-sm mb-[2px] block">Пароль</label>
                                <input name="password" type="password" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-sm outline-blue-500" placeholder="Введите пароль" required/>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm mb-[2px] block">Подтвердите пароль</label>
                                <input name="password_confirmation" type="password" class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-sm outline-blue-500" placeholder="Введите пароль еще раз" required/>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="w-full px-4 py-3 text-sm font-semibold tracking-wider text-white bg-blue-600 rounded-sm hover:bg-blue-700 focus:outline-none">
                                Создать
                            </button>
                        </div>
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
        
        {{-- register end --}}
    </div>
@endsection

<style>
.container-images {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 10px;
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