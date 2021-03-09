<div class="w-full lg:w-1/5 bg-white lg:h-screen lg:fixed lg:border-r border-gray-200">
    @auth
    <div class="border-b border-gray-200 bg-gray-50 px-6">
        <div class="flex   ">
            <div class="flex-shrink-0 mr-3 mx-3 my-4">
                <img class=" w-14 h-14 object-center object-cover border border-gray-700 rounded-full" src="{{ auth()->user()->gravatar() }}" alt="">
            </div>
            <div class="mt-4">
                <h1>{{ auth()->user()->name }}</h1>
                <small class="text-sm text-cool-gray-600">
                    joined {{ auth()->user()->created_at->format("d F, Y") }}
                </small>
            </div>
        </div>
        <div class="leading-relaxed text-sm text-gray-600  mb-4 ml-3">
            {{ auth()->user()->description }}
        </div>
    </div>
    <div class="py-2 leading-loose">
        @auth
        <a href="/timeline" class="block py-1 px-8 hover:bg-gray-300">Timeline</a>
        @endauth
        <a href="{{ route('setting.user') }}"  class="block py-1 px-8 hover:bg-gray-300">setting</a>
        <a href="{{ route('account.show', auth()->user()->usernameOrHash) }}"  class="block py-1 px-8 hover:bg-gray-300">Profiles</a>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-1 px-8 hover:bg-gray-300">
        Log out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf

    </div>
    @else
    <div class="py-2 leading-loose">

        <a href="{{ route('login') }}"  class="block py-1 px-8 hover:bg-gray-300">Login</a>
        <a href="{{ route('register') }}"  class="block py-1 px-8 hover:bg-gray-300">Register</a>

        @csrf

    </div>
    @endauth
</div>
