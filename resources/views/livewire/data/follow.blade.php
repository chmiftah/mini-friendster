@auth


<div class="px-6 mb-8">
        <input type="text" placeholder="search user.." class="form-input rounded-lg focus:outline-none mb-5" wire:model="searchTerm">
            @foreach ($result as $res)
            <div class="w-full  mb-4">
                <div class="flex items-center">
                  <img class="w-16 h-16 object-center object-cover rounded-full flex-shrink-0  mr-3" src="{{$res->gravatar()  }}" alt="">
                  <div>
                    <div class="text-sm text-gray-700 font-bold">
                        <a href="" class="font-semibold text-gray-600 hover:underline">{{ $res->name }}</a>
                    </div>
                    <div class="text-xs text-gray-600">
                      joined {{ $res->created_at->format("d F, Y") }}
                    </div>
                  </div>
                </div>

              </div>
            @endforeach

</div>
{{--
<div class="p-6 border-t border-gray-200 font-semibold text-lg ">
    Followers
</div>
<div class="p-6">
  <div class="flex flex-wrap">
    @foreach ($follows as $follow)
  <div class="w-full  mb-4">
    <div class="flex items-center">
      <img class="w-16 h-16 object-center object-cover rounded-full flex-shrink-0  mr-3" src="{{ $follow->gravatar() }}" alt="">
      <div>
        <div class="text-lg text-gray-700 font-bold">
            <a href="{{ route('account.show', ['identifier' => $follow->username]) }}" class="font-semibold text-gray-600 hover:underline">{{ $follow->name }}</a>
        </div>
        <div class="text-sm text-gray-600">
          Since {{ $follow->created_at->format("d F, Y") }}
        </div>
      </div>
    </div>

  </div>
@endforeach
  </div>
</div>

<div class="p-6  border-t border-gray-200 font-semibold text-lg -mt-5">
    Following
</div>
<div class="p-6">
  <div class="flex flex-wrap">
    @foreach ($followers as $follow)
  <div class="w-full  mb-4">
    <div class="flex items-center">
      <img class="w-16 h-16 object-center object-cover rounded-full flex-shrink-0  mr-3" src="{{ $follow->gravatar() }}" alt="">
      <div>
        <div class="text-lg text-gray-700 font-bold">
          {{ $follow->name }}
        </div>
        <div class="text-sm text-gray-600">
          Since {{ $follow->created_at->format("d F, Y") }}
        </div>
      </div>
    </div>

  </div>
@endforeach
  </div>
</div> --}}
@endauth
