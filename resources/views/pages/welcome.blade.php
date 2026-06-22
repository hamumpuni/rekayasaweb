<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1914014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62625D] rounded-sm text-sm leading-normal"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1914014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62625D] rounded-sm text-sm leading-normal"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] shadow-[inset_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_1px_#ffffff2d] rounded-bl-lg rounded-br-lg lg:rounded-tr-lg lg:rounded-bl-none">
                <h1 class="mb-1 font-medium">Let's get started</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A19A]">With so many options available to you, <br /> we suggest you start with the following:</p>
                
                <ul class="flex flex-col mb-4 lg:mb-6">
                    <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                        <span class="relative py-1 bg-white dark:bg-[#161615]">
                            <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_rgba(0,0,0,0.03),0px_1px_2px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                            </span>
                        </span>
                        <span>
                            Read the
                            <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#ff2d20] dark:text-[#FF4433] ml-1">
                                <span>Documentation</span>
                                <svg
                                    width="10"
                                    height="11"
                                    viewBox="0 0 10 11"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-2.5 h-2.5"
                                >
                                    <path
                                        d="M2.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                        stroke="currentColor"
                                        stroke-linecap="square"
                                    />
                                </svg>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>