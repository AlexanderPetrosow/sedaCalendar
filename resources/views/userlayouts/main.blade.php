<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite('resources/css/app.css')
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
        <style>
            .line-clamp {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;  
                overflow: hidden;
            }
            html {
                scroll-behavior: smooth;
            }
            .manual-height{
                height: calc(100vh - 86px);
                scroll-behavior: smooth;
                scrollbar-width: thin;
            }
        </style>
    </head>
    <body >
        <div class="">
            <nav class="bg-gray-200 border-gray-200 dark:bg-gray-900">
                <div class="container flex items-center justify-between p-4 mx-auto">
                    <div  id="mega-menu-full"  class="items-center justify-between hidden w-full md:flex md:w-auto">
                        <ul  class="flex flex-col p-4 mt-4 font-medium capitalize bg-gray-200 border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-200 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#poems" class="block px-3 py-2 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">{{__('nav.poems')}}</a>
                            </li>
                            <li>
                                <a href="#songs" class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{__('nav.songs')}}</a>
                            </li>
                            <li>
                                <a  href="#galleries" class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('nav.galleries')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-row capitalize">
                        <div id="mega-menu-full"  class="flex-row hidden md:flex">
                            <a href="{{route('login')}}">
                                <div class="p-2 text-[#11101d] cursor-pointer">@lang('nav.login')</div>
                            </a>
                        </div>
                        {{-- lang --}}
                        <div class="relative inline-block text-left">
                            <!-- Button to toggle dropdown -->
                            <button id="languageButton" onclick="toggleDropdown()" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-haspopup="true" aria-expanded="true">
                                выберите язык!
                            <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        
                            <!-- Dropdown menu -->
                            <div id="languageDropdown" class="absolute right-0 hidden w-full mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="languageButton">
                            <div class="py-1" role="none">
                                <!-- Language options -->
                                <a href="locale/tm" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Turkmen</a>
                                <a href="locale/ru" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Russian</a>
                            </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </nav>
            <div class="p-1 overflow-hidden overflow-y-auto manual-height">
                <div class="container mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function toggleDropdown() {
      const dropdown = document.getElementById('languageDropdown');
      dropdown.classList.toggle('hidden');
    }
  
    // Optional: Close the dropdown when clicking outside of it
    window.addEventListener('click', function(event) {
      const button = document.getElementById('languageButton');
      const dropdown = document.getElementById('languageDropdown');
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
      }
    });
  </script>