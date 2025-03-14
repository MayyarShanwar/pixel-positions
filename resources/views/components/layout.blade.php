<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-stone-900 text-white">
    <div class="px-10">
        {{-- Navigation --}}
        <nav class="flex justify-between items-center py-6 border-b border-white/10">

            {{-- Logo --}}
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            {{-- Links --}}
            @auth

                <div class="flex gap-6 font-bold">
                    <a href="">Jobs</a>
                    <a href="">Careers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>

                {{-- Post a job --}}
                <div>
                    <form action="/logout" method="post">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-blue-600 cursor-pointer text-white font-medium rounded-md px-4 py-2 flex items-center justify-center hover:bg-red-800 transition duration-300 ease-in-out"
                            type="submit">Log out</button>
                    </form>
                </div>

                @if (!Request::is('jobs/create'))
                    
                
                <div class="fixed bottom-6 right-4 flex items-center">
                    <a href="/jobs/create"
                        class="bg-blue-600 text-white font-medium rounded-md px-4 py-2 flex items-center justify-center hover:bg-blue-800 transition duration-300 ease-in-out shadow-lg">
                        <span class="text-xl mr-2">+</span>
                        Create a Job
                    </a>
                </div>
                @endif
            @endauth

            @guest
                <div class="flex gap-4">
                    <a href="/login">Log in</a>
                    <a href="/register">Sign up</a>
                </div>
            @endguest
        </nav>

        {{-- Page content --}}
        <main class="mt-10 max-w-[960px] mx-auto pb-10">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
