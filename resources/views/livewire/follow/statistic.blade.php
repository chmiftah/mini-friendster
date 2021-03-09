<div class=" w-full bg-white text-gray-800 md:inline-block block rounded-lg shadow ">
    <div class="flex justify-center">
        <div class="flex flex-1 ">
                <div class="flex-1 py-2 text-center border-r border-gray-100 px-5">
                    <div class="text-sm">
                        status
                    </div>
                    <div class="text-xl font-semibold text-gray-800">
                        200
                    </div>
                </div>
                <a href="{{ route('account.following', [$user->usernameOrHash,'following']) }}" class="flex-1 py-2 text-center  border-r border-gray-100 px-5">
                    <div class="text-sm">
                        following
                    </div>
                    <div class="text-xl font-semibold text-gray-800">
                        {{ $user->follows()->count() }}
                    </div>
                </a>
                <a href="{{ route('account.following', [$user->usernameOrHash,'follower']) }}" class="flex-1 py-2 text-center px-5">
                    <div class="text-sm">
                        followers
                    </div>
                    <div class="text-xl font-semibold text-gray-800">
                        {{ $user->followers()->count() }}
                    </div>
                </a>

        </div>

    </div>
</div>
