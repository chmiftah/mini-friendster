@extends('layouts.app',['title'=>'your following/followers'])

@section('content')

  <div class="p-6 border-b border-gray-200 font-semibold text-lg">
    {{ ucfirst($follow) }}
  </div>
  <div class="p-6">
    <div class="flex flex-wrap">
      @foreach ($follows as $follow)
    <div class="w-full md:w-1/2 mb-4">
      <div class="flex items-center">
        <img class="w-16 h-16 object-center object-cover rounded-full flex-shrink-0  mr-3" src="{{ $follow->gravatar() }}" alt="">
        <div>
          <div>
            {{ $follow->name }}
          </div>
          <div class="text-sm text-gray-600">
            {{ $follow->created_at->format("d F, Y") }}
          </div>
        </div>
      </div>

    </div>
  @endforeach
    </div>
  </div>

@endsection
