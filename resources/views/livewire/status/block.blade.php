<div>
    <div class="bg-white mt-3">
     <div class="flex w-full relative">
        <div class="flex items-center ">
            <div class="px-4 py-4">
                <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}">
                    <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}" alt="">
                </a>
            </div>
            <div class="px-4 py-4">
                <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}" class="font-semibold text-gray-600 hover:underline">{{ $status->user->name }}</a>
                <div class="text-sm text-gray-400 text-italic">{{ $status->published }}</div>
            </div>
        </div>
        <div class="flex justify-end" x-data={Open:false}>
            @can('update', $status)
            <button @click="Open = !Open" class=" rounded-lg focus:outline-none -mt-5 ">
                <span class="text-lg"> > </span>
            </button>
            <div :class="{'hidden' : !Open}" class="bg-gray-50 rounded border-gray-100  shadow mt-5  ">
                <a href="{{ route('status.edit', $status->hash) }}" class="block p-2 hover:bg-gray-100">Edit Status</a>
                <a href="{{ route('status.delete', $status->hash) }}" class="block p-2 hover:bg-gray-100">Remove the status</a>
            </div>
            @endcan
        </div>
     </div>
        {{-- <img class="border rounded-t-lg shadow-lg " src="https://images.unsplash.com/photo-1572817519612-d8fadd929b00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"> --}}
        <div class="bg-white  shadow p-5 text-base width-auto font-medium text-white flex-shrink">
            <a href="{{ route('status.show', $status->hash) }}" class="text-gray-500 block">{!! nl2br($status->body) !!}</a>
        </div>
        <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
          <a href="#show" class="w-1/3 hover:bg-gray-200  text-xl text-gray-700 font-semibold flex justify-center  items-center text-center">
            <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
            </svg>
            {{ $status->comments_count }} {{ Str::plural('comment', $status->comments_count) }}
        </a>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold flex justify-center  items-center">
            <livewire:status.like :key="$status->id" :status="$status" />
        </div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">Share</div>
        </div>
      </div>
    {{-- <div   class="flex mb-6 mt-5" wire:poll.1000ms>

        <div class="flex-shrink-0 mr-3">
            <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}">
            <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}" alt="">
            </a>
        </div>
        <div class="w-full relative">
            <div class="flex justify-between" x-data={Open:false}>
                <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}" class="font-semibold text-gray-600 hover:underline">{{ $status->user->name }}</a>
                @can('update', $status)
                <button @click="Open = !Open" class="hover:bg-gray-200 px-2 rounded-lg focus:outline-none">
                    <span class="text-lg"> > </span>
                </button>
                <div :class="{'hidden' : !Open}" class="bg-gray-50 rounded border-gray-100 absolute right-0 top-0 shadow mt-8 ">
                    <a href="{{ route('status.edit', $status->hash) }}" class="block p-2 hover:bg-gray-100">Edit Status</a>
                    <a href="{{ route('status.delete', $status->hash) }}" class="block p-2 hover:bg-gray-100">Remove the status</a>
                </div>
                @endcan


            </div>

            <a href="{{ route('status.show', $status->hash) }}" class="text-gray-500 block">{!! nl2br($status->body) !!}</a>
            <div class="text-sm text-gray-400">{{ $status->published }}</div>
            <div class="text-sm-text-gray-400 flex items-center mt-2">
                <div class="flex flex-items-center mr-3 text-sm text-gray-500">
                    <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <a href="#show">   {{ $status->comments_count }} {{ Str::plural('comment', $status->comments_count) }} </a>
                </div>
                <div class="flex flex-items-center mr-3 text-sm text-gray-500">
                    <livewire:status.like :key="$status->id" :status="$status" />
                </div>
            </div>
        </div>
    </div> --}}
</div>
