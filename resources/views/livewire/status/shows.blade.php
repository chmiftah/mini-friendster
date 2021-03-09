
        <div class="p-4">
            <div class="border border-gray-300 rounded-lg p-5 mt-2 ">
                <livewire:status.block :status="$status" :key="$status->id" />
            </div>
            {{-- @if ($status->comments_count) --}}
               <livewire:comment.index :status="$status" :key="$status->id" />
            {{-- @endif --}}
            @auth
            @if (!$status->comments_count)
                  <livewire:comment.create :status="$status" :key="$status->id" />
            @endif
            @endauth

        </div>
