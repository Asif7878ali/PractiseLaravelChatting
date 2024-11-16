<x-layout>
  {{-- Toast --}}
  @if (session('warning'))
  <div class="fixed top-10 right-10 max-w-xs bg-yellow-200 border border-gray-200 rounded-xl shadow-lg" role="alert" tabindex="-1" aria-labelledby="hs-toast-error-example-label" id="alert">
    <div class="flex p-4">
        
        <div class="ml-3">
            <strong id="hs-toast-error-example-label" class="text-sm text-gray-700">
                {{ session()->get('warning') }}
            </strong>
        </div>
        <button  onclick="document.getElementById('alert').style.display='none'" >
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </button>
       
    </div>
</div>         
  @endif
 
    <div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
        <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
          <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">
            <h2 class="pl-3 mb-4 text-2xl font-semibold">Settings</h2>
            <span class="flex items-center px-3 py-2.5 font-bold bg-white text-black border rounded-full">
              Public Profile
            </span>
            <span class="flex items-center px-3 py-2.5 font-semibold text-indigo-900 hover:border hover:rounded-full">
              Account Settings
            </span>
            <button type="button" onclick="toggleModal('logout')" class="flex items-center px-3 py-2.5 font-semibold text-indigo-900 hover:border hover:rounded-full">
              Logout
          </button>
          
                <!-- Modal -->
                <x-logout/>
            <span class="flex items-center px-3 py-2.5 font-semibold text-red-600 hover:border hover:rounded-full">
              Delete Account
            </span>
          </div>
        </aside>
  
        {{-- {/* Main Content */} --}}
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
          <div class="p-2 md:p-4">
            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
              <h2 class="pl-6 text-2xl font-bold sm:text-xl">Profile</h2>
              <form>
                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                          <img id='preview_img' class="h-16 w-16 object-cover rounded-full" src={{asset('assets/Person.jpg')}} />
                        </div>
                        <label class="block">
                          <span class="sr-only">Choose profile photo</span>
                          <input type="file" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-green-50 file:text-green-700
                            hover:file:bg-green-200
                          "/>
                        </label>
                      </div>
                  <div class="items-center mt-8 sm:mt-14 text-[#202142]">
                    <div class="mb-2 sm:mb-6">
                      <label htmlFor="email" class="block mb-2 text-sm font-medium">E-mail</label>
                      <Input type="email" name="email" id="email" placeholder="E-mail"
                             value='' readOnly required
                             class="border border-black rounded-lg block w-full p-2.5"
                             title="You cannot change the E-mail Address during Profile Setup"/>
                    </div>
  
                    <div class="mb-2 sm:mb-6">
                      <label htmlFor="username" class="block mb-2 text-sm font-medium">Username</label>
                      <Input type="text" name="username" id="username"
                             placeholder="Username" value='' required
                             class="border border-black rounded-lg block w-full p-2.5"
                             />
                    </div>
                    
                    <div class="mb-2 sm:mb-6">
                        <label htmlFor="number" class="block mb-2 text-sm font-medium">Mobile-Number</label>
                        <Input type="text" name="number" id="number"
                               placeholder="Enter a Number" value='' required
                               class="border border-black rounded-lg block w-full p-2.5"
                               />
                      </div>
    
                    <div class="flex justify-end">
                      <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save Changes</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
</x-layout>