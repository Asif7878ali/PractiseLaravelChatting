<x-layout>
  <section class="min-h-screen flex box-border justify-center items-center">
      <div class="bg-gray-100 rounded-2xl flex max-w-3xl p-5 items-center">
          <div class="md:w-1/2 px-8">
              <h2 class="font-bold text-3xl text-[#25d366]">Create a an Account</h2>
              <p class="text-sm mt-4">If you already not a member, easily Sign in now.</p>

              <form action={{route('user.store')}} method="POST" class="flex flex-col gap-4">
                @csrf
                  <div class="relative mt-8">
                    <input class="p-2 rounded-xl border w-full" type="text" name="firstname" id="firstname" placeholder="Enter Firstname" required value="{{ old('firstname') }}">
                    @error('firstname')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                  @enderror
                  </div>
                  
                  <div class="relative">
                      <input class="p-2 rounded-xl border w-full" type="text" name="lastname" id="lastname"
                          placeholder="Enter LastName" required value="{{ old('lastname') }}">
                          @error('lastname')
                          <div class="text-sm text-red-500" role="alert">
                              {{ $message }}
                          </div>
                        @enderror
                  </div>
                  <div class="relative">
                    <input class="p-2 rounded-xl border w-full" type="email" name="email" id="email"
                        placeholder="Enter a E-mail" required value="{{ old('email') }}">
                        @error('email')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                      @enderror
                </div>
                <div class="relative">
                  <input class="p-2 rounded-xl border w-full" type="password" name="password" id="password"
                      placeholder="Password" required autocomplete="">
                      @error('password')
                      <div class="text-sm text-red-500" role="alert">
                          {{ $message }}
                      </div>
                    @enderror
              </div>

              <div class="relative">
                <input class="p-2 rounded-xl border w-full" type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirm Password" required autocomplete="">
                    @error('password_confirmation')
                    <div class="text-sm text-red-500" role="alert">
                        {{ $message }}
                    </div>
                  @enderror
            </div>
                  <button
                      class="bg-[#25d366] hover:bg-[#20b85c] text-white py-2 rounded-xl hover:scale-105 duration-300 font-medium"
                      type="submit">Sign in</button>
              </form>
              <div class="mt-6 items-center">
                  <hr class="border-gray-300">
                  <p class="text-center text-sm">OR</p>
                  <hr class="border-gray-300">
              </div>
           
              <div class="mt-4 text-sm flex justify-between items-center container-mr">
                  <p class="mr-3 md:mr-0 ">If you  have an account..</p>
                  <a href={{route('login.page')}}
                      class="hover:border register text-white bg-[#25d366] hover:bg-[#20b85c] hover:border-gray-400 rounded-xl py-2 px-5 hover:scale-110 ] font-semibold duration-300">Register</a>
              </div>
          </div>
          <div class="md:block hidden w-1/2">
              <img class="rounded-2xl max-h-[1600px]" src={{ asset('assets/MainImage.avif') }} alt="login form image">
          </div>
      </div>
  </section>
</x-layout>