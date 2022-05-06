<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <!-- profile photo -->
                    <div>
                        <button type="button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Dashboard</a>
                            <a href="#"
                                class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Configurações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Dashboard</a>
                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Configurações</a>
            </div>
        </div>
    </nav>

    <!-- adicionar twets -->
    <div class="w-full h-auto flex justify-center">
        <div class="bg-gray-100 w-2/4 h-auto flex flex-col justify-center items-center">
            <h1 class="p-1.5">Esta pensando no que?</h1>
            <input type="text" name="pensamento">
            <input type="submit" value="Enviar" class="bg-yellow-300 py-1 px-5 m-1.5 rounded-3xl">
        </div>

    </div>
    <!-- twets -->
    <div class="flex justify-center">
        <div class=" w-2/4 m-2.5">
            <!-- box twett -->
            <div class="border-2 border-gray-200 rounded-3xl w-full m-1.5 p-2.5">
                <div class="flex flex-row items-start">
                    <div class="bg-green-100 w-14 h-14"></div>
                    <div class="h-auto m-1.5 flex flex-row">
                        <p class="">Felipe</p>
                        <p class="mx-1.5">@felps</p>
                    </div>
                </div>
                <div class=" w-full">
                    <div>
                        <p class="p-2 pl-5">meu twitti vai ficar aqui</p>
                    </div>
                    <div class="bg-orange-200 w-full h-8 flex justify-around items-center">
                        <p>curti</p>
                        <p>comentar</p>
                        <p>rePostar</p>
                    </div>
                </div>
            </div>
            <!-- box twett -->
            <div class="border-2 border-gray-200 rounded-3xl w-full m-1.5 p-2.5">
                <div class="bg-red-100 flex flex-row items-start">
                    <div class="bg-green-100 w-14 h-14"></div>
                    <div class="bg-green-200 h-auto m-1.5 flex flex-row">
                        <p class="">Felipe</p>
                        <p class="mx-1.5">@felps</p>
                    </div>
                </div>
                <div class="bg-orange-100 w-full">
                    <div>
                        <p class="p-2 pl-5">meu twitti vai ficar aqui</p>
                    </div>
                    <div class="bg-orange-200 w-full h-8 flex justify-around items-center">
                        <p>curti</p>
                        <p>comentar</p>
                        <p>rePostar</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>