<div>
    @if ($status->comments_count)
<div class="mt-5 bg-gray-50 px-2 py-1 border border-gray-200 rounded-lg">
    @foreach ($comments as $comment)
    <div class="flex mb-3 px-4 py-2  mr-8">
        <div class="flex-shrink-0 mr-3">
            <img class="w-14 h-14 rounded-full content-center content-cover" src="{{ $comment->user->gravatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold">{{ $comment->user->name }}</div>

        <div class="mb-3">{!! nl2br($comment->body) !!}</div>
        <div class="text-sm text-gray-600">{{ $comment->created_at->diffForHumans() }}</div>
            <div class="text-sm mt-2 text-gray-600 flex items-center">
             <div class="mr-3 flex items-center">
                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                {{ $comment->children_count }} {{ Str:: plural('Reply', $comment->children_count) }}
                <livewire:comment.like :key="$comment->id" :comment="$comment"/>
             </div>
             <button onclick="window.location.href='#show'" wire:click.prevent="show({{ $comment->id }})" class="focus:outline-none">Add reply</button>

            </div>

        </div>
    </div>

    @if ($comment->children_count)
                <div class="ml-14">
                    @foreach ($comment->children as $comment)
                        <div class="flex mb-3  px-4 py-2">
                            <div class="flex-shrink-0 mr-3">
                                <img class="w-14 h-14 rounded-full content-center content-cover" src="{{ $comment->user->gravatar() }}" alt="">
                            </div>
                            <div>
                                <div class="font-semibold">{{ $comment->user->name }}</div>

                            <div class="mb-3">{!! nl2br($comment->body) !!}</div>
                            <div class="text-sm text-gray-600">{{ $comment->created_at->diffForHumans() }}</div>
                                {{-- <div class="text-sm mt-2 text-gray-600">
                                    {{ $comment->children_count }} {{ Str::plural('Reply', $comment->children_count) }}
                                </div> --}}
                            </div>
                        </div>

                    @endforeach
                </div>
            @endif
    @endforeach
    <div id="show">
        <div class="flex mb-1 border border-gray-150 rounded-lg px-2 py-2 bg-white  -mt-1">
            <div class="w-full">
                <form wire:submit.prevent="reply">
                    <div class="mb-3 w-full">
                        <textarea wire:model="body" class="mt-2 bg-white form-textarea w-full resize-none border border-gray-100 px-2 py-1 rounded-lg focus:shadow-none p-0 focus:ring-0" placeholder="Reply comment..."></textarea>
                        @error('body')
                            <div class="text-sm text-red-500  mb-3">{{ $message }}</div>

                        @enderror
                    </div>
                    <div class="w-full mt-3">
                        <x-button.primary>Reply </x-button.primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endif

</div>