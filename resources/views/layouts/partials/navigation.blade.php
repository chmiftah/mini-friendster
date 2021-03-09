<div class="w-full lg:w-1/5 lg:h-screen lg:fixed border-r border-gray-200">
   @auth
   <div class="p-5 bg-white sticky ">
      <img class= border border-indigo-100 shadow-lg rounded-full items-between" src="http://lilithaengineering.co.za/wp-content/uploads/2017/08/person-placeholder.jpg">
      <div class="pt-2 border-t mt-5 w-full text-center text-xl text-gray-600 block">
         {{ Auth::user()->name }}
         {{-- <small class="text-xm text-cool-gray-600 block">
            joined {{ auth()->user()->created_at->format("d F, Y") }}
        </small> --}}
         <div class="leading-relaxed text-sm text-gray-600  mb-4 ml-3">
            {{ auth()->user()->description }}
        </div>
      </div>

    </div>

                        {{-- <div class="border-b border-gray-200 bg-gray-50 px-5">
                                 <div class="flex px-4 py-3">
                                       <div class="flex-shrink-0 mr-2 mt-1 lg:mt-4">
                                          <img class="w-14 h-14 rounded-full object-center object-cover" src=" alt="">
                                       </div>
                                       <div class="mt-3">
                                          <span class="text-gray-600 hover:text-gray-800  pr-4 md:py-4">{{ Auth::user()->name }}</span>
                                          <small class="text-xm text-cool-gray-600">
                                             joined {{ auth()->user()->created_at->format("d F, Y") }}
                                         </small>
                                       </div>


                                 </div>
                                 <div class="leading-relaxed text-sm text-gray-600  mb-4 ml-3">
                                    {{ auth()->user()->description }}
                                </div>
                        </div> --}}

                              <div class="w-full h-screen antialiased flex flex-col hover:cursor-pointer">
                                 @auth
                                 <a href="/timeline" class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl  text-gray-600 font-semibold">Timeline</a>
                                 @endauth
                                    <a href="{{ route('setting.user') }}"  class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl  text-gray-600 font-semibold">setting</a>
                                    <a href="{{ route('account.show', auth()->user()->usernameOrHash) }}"  class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl  text-gray-600 font-semibold">Profiles</a>
                                    <a href=""  class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl  text-gray-600 font-semibold">looking</a>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:bg-gray-300 bg-gray-200 border-t-2 p-3 w-full text-xl  text-gray-600 font-semibold"
                                    >
                                       Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                    </form>


                        @else
                              <a href="{{ route('login') }}" class="block text-gray-600 hover:text-gray-800  px-4 md:py-4">Log in</a>

                              @if (Route::has('register'))
                                 <a href="{{ route('register') }}" class="block text-gray-600 hover:text-gray-800  px-4 md:py-4">Register</a>
                              @endif
                        @endauth
                              </div>

</div>





