<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="text-black dark:text-slate-100 bg-slate-200 dark:bg-slate-900">
    <div class="pt-10 wrapper">
        {{-- @livewire('to-do-list') --}}
        {{-- @livewire('color-poll') --}}
        {{-- @livewire('real-time-chat') --}}
        @livewire('pagination-example')
        {{-- @livewire('shopping-cart') --}}

        <!-- ✅ Grid Section - Starts Here 👇 -->
        {{-- <section id="Projects"
            class="grid justify-center grid-cols-1 mx-auto mt-10 mb-5 w-fit lg:grid-cols-3 md:grid-cols-2 justify-items-center gap-y-20 gap-x-14">

            <!--   ✅ Product card 1 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 1 - Ends Here  -->

            <!--   ✅ Product card 2 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1651950519238-15835722f8bb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mjh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 2- Ends Here  -->

            <!--   ✅ Product card 3 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1651950537598-373e4358d320?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MjV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 3 - Ends Here  -->

            <!--   ✅ Product card 4 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1651950540805-b7c71869e689?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mjl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 4 - Ends Here  -->

            <!--   ✅ Product card 5 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1649261191624-ca9f79ca3fc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDd8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 5 - Ends Here  -->

            <!--   ✅ Product card 6 - Starts Here 👇 -->
            <div class="duration-500 bg-white shadow-md w-72 rounded-xl hover:scale-105 hover:shadow-xl">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1649261191606-cb2496e97eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        alt="Product" class="object-cover h-80 w-72 rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="mr-3 text-xs text-gray-400 uppercase">Brand</span>
                        <p class="block text-lg font-bold text-black capitalize truncate">Product Name</p>
                        <div class="flex items-center">
                            <p class="my-3 text-lg font-semibold text-black cursor-auto">$149</p>
                            <del>
                                <p class="ml-2 text-sm text-gray-600 cursor-auto">$199</p>
                            </del>
                            <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg></div>
                        </div>
                    </div>
                </a>
            </div>
            <!--   🛑 Product card 6 - Ends Here  -->

        </section> --}}

        <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>

        @livewireScripts
</body>

</html>
