<div>
    <div class="lg:mx-auto lg:w-full lg:max-w-md">


        <h2 class="mt-5 bg-white p-7 text-center rounded-lg border border-gray-200 text-gray-900 leading-9">
            <div class="text-gray-700">
                <div class="text-xl font-bold mb-7">
                    Are You sure ?
                </div>
                <div class="flex items-start border border-gray-300 rounded-lg px-4 py-3 mb-5 bg-gray-50">
                    <img class="mr-3 w-16 h-16 object-cover object-center rounded-full" src="{{ $status->user->gravatar() }}" alt="">
                    <div class="text-left">
                        <a href="{{ route('status.show', $status->hash) }}" class="text-gray-500 block">{!! nl2br($status->body) !!}</a>
                        <div class="text-sm text-gray-400">{{ $status->published }}</div>
                        <div class="text-sm-text-gray-400 flex items-center mt-2">
                            <div class="flex flex-items-center mr-3">
                                23 comments
                            </div>
                            <div class="flex flex-items-center">
                                120 likes
                            </div>


                        </div>
                    </div>
                </div>


                <button wire:click="destroy" class="bg-red-500 hover:bg-red-600 px-3 border border-red-700 rounded-lg text-center inline-block text-white focus:outline-none mr-4">Delete</button>
                <a class="bg-white hover:bg-gray-100 px-3 border border-gray-200 rounded-lg text-center inline-block" href="{{ route('status.show', $status->hash) }}">cancel</a>
            </div>

        </h2>

    </div>
</div>