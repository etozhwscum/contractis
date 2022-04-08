<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Contractis</title>
    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @role('admin')
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Админ панель</a>
                @endrole
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Тендерная площадка</a>
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Контакты</a>
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Помощь</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Профиль</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>
                         @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </body>
</html>
