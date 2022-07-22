<x-app-layout>
    <x-slot name="header">
        <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
            {{ __('Dashboard') }}
        </h2>
        <div class="px-6">
                <a href="{{ URL::to('/add-new-postcode') }}"> 
                <button class="border border-gray-400 bg-purple-500 rounded-md px-4 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                        <span class="/">Postcode </span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </a>
                                <a href="{{ URL::to('/add-new-address') }}"> 
                <button class="border border-gray-400 bg-purple-500 rounded-md px-4 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                        <span class="/">Address</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </a>
                <a href="">
                                    <button class="border border-gray-400 bg-purple-500 rounded-md px-4 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                     <span>LIST</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
</svg>
                   
                    </button>
                     </a>
                
            
        </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 Ok so here we need a dashbord component 
                 <br> 1 total address added 
                 <br> 2 total confirmed 
                 <br> 3 pending comfirm
                 <br> 3 total NASVS Registered member
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
