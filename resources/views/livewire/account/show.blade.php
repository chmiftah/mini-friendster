
    <div class="border-b border-gray-200">
        <div >
            <div class=" mx-4 my-4 p-6 flex flex-col md:flex-row items-center md:items-start text-center md:text-left bg-white border rounded-lg ">
                <div class="flex-shrink-0  mb-1 md:mb-0 mr-3">
                 <img class="w-16 h-16 object-cover object-center rounded-full" src="{{ $user->gravatar() }}">
                </div>
                <div>
                     <h1 class="font-semibold text-xl text-gray-900">{{ $user->name }}</h1>
                    <div>
                     <div class="text-gray-600 mt-2 mb-3">
                         <div class="leading-text-relaxed">
                            {{ $bio }}
                          @if (strlen($bio)>=120)
                          <button wire:click="readMore" class="{{ $readmore ? 'block' : 'hidden' }} focus:outline-none text-sm text-gray-600 hover:underline">
                            Read more
                        </button>
                        <button wire:click="less" class="{{  $readmore ? 'hidden' : 'block'  }} focus:outline-none text-sm text-gray-600 hover:underline">
                            Less
                        </button>
                          @endif
                         </div>

                     </div>
                     <div class="text-gray-600 text-sm leading-relaxed">
                         joined:{{ $user->created_at->format("d F, Y") }}
                     </div>
                    </div>
                    <div class="w-full md:w-1/2 justify-center">
                        <livewire:follow.button :user="$user"/>
                    </div>


               </div>
             </div>
        </div>
        <div class="flex-justify-between w-full px-4 -mt-5">
            <livewire:follow.statistic :user="$user"/>
        </div>
    </div>


    <div class="container mx-auto mt-4">
        <div class="flex ml-5">
        <div class="w-full">
            @foreach ($statuses as $status)
            <livewire:status.block :status="$status" :key="$status->id"/>
            @endforeach

            {{-- @if ($statuses->hasMorePages())
            <div class="flex justify-center">
                <x-button.primary wire:click.prevent="loadmore">
                    <span wire:loading>
                        Please Wait..
                    </span>
                    <span wire:loading.class="hidden">
                        Load More
                    </span>
                </x-button.primary>
            </div>
            @endif --}}
            {{ $statuses->links() }}



        </div>

        </div>

    </div>

