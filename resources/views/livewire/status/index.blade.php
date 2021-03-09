<div>
    @foreach ($statuses as $status)
    <livewire:status.block :status="$status" :key="$status->id" />
    @endforeach
   {{-- {{ $statuses->links() }} --}}
   @if ($statuses->hasMorePages())
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
   @endif
</div>
