<div>
   @auth
         @if (auth()->check() && auth()->user()->isNot($user))
        @if (auth()->user()->following($user))
        <x-button.error wire:click="unfollow">unfollow</x-button.error>
        @else
        <x-button.primary wire:click="follow">Follow</x-button.primary>
        @endif
   @else
        <a href="/setting" class="text-gray-500 text-xs hover:underline">Edit Your Profiles</a>
   @endif
   @endauth




</div>
