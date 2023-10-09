<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>چت روم</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="bg-zinc-900">
            <div class="relative isolate px-6 pt-14 lg:px-8" dir="rtl">
                        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                        </div>
                        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                <div class="relative rounded-full px-4 py-1 text-sm leading-6 text-gray-100 ring-1 ring-blue-900/50 hover:ring-blue-900/20" dir="ltr">
                                    وب سایت آموزشی  <a href="https://anophel.com" class="font-semibold text-indigo-600"><span class="absolute inset-0 flex items-center" aria-hidden="true">&larr;</span>آنوفل </a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-6xl">به چت روم آنوفل خوش آمدید</h1>
                                <p class="mt-6 text-lg leading-8 text-gray-100">چت روم در حال تست و بهبود کیفیت می باشد.</p>
                                <div class="mt-10 flex items-center justify-center gap-x-6">
                                    @auth
                                        <a href="{{ route('chat') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">چت روم</a>

                                    @else
                                        <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">برای شروع ورود</a>

                                    @endauth
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-x-0 top-[calc(100%-45rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-45rem)]" aria-hidden="true">
                            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                        </div>
                    </div>
        </div>
    </body>
</html>
