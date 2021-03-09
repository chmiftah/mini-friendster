<div class="bg-white  p-2 border border-gray-200 mb-5 rounded-lg mt-5">

    <div class="flex mb-1 border border-gray-150 rounded-lg px-4 py-4 bg-gray-50">
        <div class="flex-shrink-0 mr-3">
            <img class="w-14 h-14 rounded-full content-center content-cover" src="{{ auth()->user()->gravatar() }}" alt="">
        </div>
        <div class="w-full">
            <div class="font-semibold">{{ auth()->user()->name }}</div>
            <form wire:submit.prevent="store">
                <div class="mb-3 w-full">
                    <textarea wire:model="body" class="mt-2 bg-gray-50 form-textarea w-full resize-none border-0 focus:shadow-none p-0 focus:ring-0" placeholder="write your comment..."></textarea>
                </div>
                <div class="flex justify-end">
                    <x-button.primary>comment </x-button.primary>
                </div>
            </form>
        </div>
    </div>

</div>



