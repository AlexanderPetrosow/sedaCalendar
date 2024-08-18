

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4">Id</th>
                <th scope="col" class="px-6 py-3">
                    {{__('nav.name_of_poems')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('nav.poems')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('nav.author')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('nav.status')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('nav.actions')}}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($poems as $poem)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th class="px-6 py-4">{{ $loop->iteration }}</th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $poem['name_'.app()->getLocale()] }}
                </th>
                <td class="px-6 py-4">
                    {!! $poem['text_'.app()->getLocale()] !!}
                </td>
                <td class="px-6 py-4">
                    {{ $poem['author_'.app()->getLocale()] }}
                </td>
                <td class="px-6 py-4">
                    @if($poem->status == true)
                        <a href="{{route('poem.active',['poem' => $poem->id])}}">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">active</button>
                        </a>
                    @else
                        <a href="{{route('poem.active',['poem' => $poem->id])}}">
                            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">activate</button>
                        </a>
                    @endif
                </td>
                <td class=" flex gap-4 px-6 py-4">
                    <a href="{{route('poem.edit',['poem' => $poem->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <button class="flex p-2.5 bg-blue-500 rounded-xl hover:rounded-3xl hover:bg-blue-600 transition-all duration-300 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                    </a>
                    @if(auth()->user()->is_admin == 1)
                        <form action="{{ route('poem.delete', ['poem' => $poem->id])}}" 
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                                <i class='h-6 w-6 text-[24px] bx bx-trash'></i>
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
