@extends('layouts.app')

@section('content')
<section class="bg-[#E6DDD4] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md dark:bg-gray-800">
      <div class="p-6 space-y-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Войдите в свой аккаунт</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
          @csrf
          <div>
            <label for="username" class="block text-sm font-medium text-gray-900 dark:text-white">Имя пользователя</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" class="bg-gray-50 border-gray-300 text-gray-900 rounded-lg focus:ring-sky-600 focus:border-sky-600 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white @error('username') border-red-500 @enderror" placeholder="Имя пользователя" required autofocus>
            @error('username')
              <span class="text-sm text-red-500">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Пароль</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border-gray-300 text-gray-900 rounded-lg focus:ring-sky-600 focus:border-sky-600 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white @error('password') border-red-500 @enderror" required>
            @error('password')
              <span class="text-sm text-red-500">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="flex items-center">
            <input id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} class="w-4 h-4 border-gray-300 rounded text-sky-600 focus:ring-sky-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="remember" class="ml-2 text-sm text-gray-500 dark:text-gray-300">Запомнить меня</label>
          </div>
          <button type="submit" class="w-full text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Войти</button>
        </form>
      </div>
    </div>
  </section>
  
@endsection
