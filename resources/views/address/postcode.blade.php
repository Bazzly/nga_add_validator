<x-app-layout>
    <x-slot name="header">
        <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
            {{ __('Add new postcode') }}
        </h2>
        <div class="px-6">
                <a href="{{ URL::to('dashboard') }}"> 
                <button class="border border-gray-400 bg-purple-500 rounded-md px-4 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opatown-50">
                        <span class="">< </span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="white">
  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
</svg>
                    </button>
                </a>
                <a href="">
                    <button class="border border-gray-400 bg-purple-500 rounded-md px-4 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opatown-50">
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
         {{-- for start here --}}

<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Postcode update</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be soled and you own a share of it.</p>
      </div>
      <span class="font-light italic text-sm text-green-400">
      @if (\Session::has('success'))
      {{\Session::get('success')}}
      @endif
      </span>
    </div>


    {{-- code start --}}
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('add-postcode') }}" method="POST">
        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6 bg-purple-400">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="text-sm px-2 font-medium text-white uppercase  bg-gray-500">Add town and postcode</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="text-white text-sm"> 
Add town and postcode from this website here.<a target="_blank" href="https://postcode.com.ng/"> <i class="text-gray-800">postcode.com.ng</i></a> </span>

                </div>
              </div>
            </div>

                          <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Nigeria</option>
                </select>
              </div>
           <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                   <select onchange="window.location.href='/add-new-postcode/'+this.options[this.selectedIndex].value;" id="state" name="state" autocomplete="state-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="{{$state_id }}">{{$states[$state_id-1]->name }}</option>
                    @forelse ($states as $state)
                       <option value="{{$state->id }}">{{$state->name}}</option>
                  @empty
                       <option value="">No value</option>
                  @endforelse
                </select>
              </div>
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="lga" class="block text-sm font-medium text-gray-700">Lga</label>
                                   <select id="lga" name="lga" autocomplete="lga-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @forelse ($lgas as $lga)
                       <option value="{{ $lga->id }}">{{$lga->name}}</option>
                  @empty
                       <option value="">No value</option>
                  @endforelse
                </select>
              </div>
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="town" class="block text-sm font-medium text-gray-700">Town(<i>Area/District</i>)</label>
                <input required type="text" name="town" id="town" autocomplete="postcode-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              @error('town')
              <div class="text-red-700 font-light">{{ $message }}</div>
              @enderror
              </div>
              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="code" class="block text-sm font-medium text-gray-700">Postal code</label>
                <input required type="number" name="code" id="code" autocomplete="code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('code')
              <div class="font-light italic text-sm text-red-400">{{ $message }}</div>
              @enderror
              </div>

              
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
        </div>
      </form>

    {{-- code end --}}

  </div>

    </div>

    
  </div>


  
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

         {{-- form end here --}}
                </div>
            </div>
        </div>
        {{-- <script type="text/javascript">
$('#state_id').on('change',function(){
$(".some").hide();
var some = $(this).find('option:selected').val();
$("#some_" + some).show();}); 
</script> --}}
    </div>
</x-app-layout>
