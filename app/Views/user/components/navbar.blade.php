<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{URL()}}" class="flex-shrink-0 flex items-center">
                    <img src="{{URL()}}/files/logo_cats/png" alt="Logo" class="h-12 w-12">
                    <span class="ml-2  text-xl font-semibold">{{NAME()}}</span>
                </a>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Forge
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Vapor
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Ecosystem
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    News
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Partners
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Careers
                </a>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <a href="{{URL()}}/docs" class="ml-3 inline-flex items-center px-4 py-2 border border-black text-sm font-medium rounded-md text-black bg-transparent hover:bg-black hover:text-white  ">
                   Documention
                </a>
            </div>
            <div class="sm:hidden flex items-center">
                <button type="button" class="hamburger-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden fixed inset-0 bg-white z-50 transition-opacity duration-300 ease-in-out opacity-0 pointer-events-none" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1 p-4 transition-transform duration-300 ease-in-out transform -translate-x-full">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    
                    <a href="{{URL()}}" class="flex-shrink-0 flex items-center">
                        <img src="{{URL()}}/files/logo_cats/png" alt="Logo" class="h-12 w-12">
                        <span class="ml-2  text-xl font-semibold">{{NAME()}}</span>
                    </a>
                </div>
                <button type="button" class="close-menu-button text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center mb-4">
                <input type="text" placeholder="Search" class="w-full p-2 border border-gray-300 rounded-md">
                <button class="ml-2 p-2 text-gray-400">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
            <a href="#" class="block py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Forge</a>
            <a href="#" class="block py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Vapor</a>
            <a href="#" class="block py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">News</a>
            <a href="#" class="block py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Partners</a>
            <a href="#" class="block py-2 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Careers</a>
            <a href="{{URL()}}/docs" class="mt-4 block w-full text-center px-4 py-2 border border-black text-base font-medium rounded-md text-black bg-transparent hover:bg-black hover:text-white">
                Documention
            </a>
        </div>
    </div>
</nav>
