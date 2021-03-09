@extends('layouts.base')

@section('body')
    <div class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/5">
           @include('layouts.partials.navigation')
        </div>
        <div class="flex-1 bg-gray-50">
            @yield('content')

        </div>
       <div class="w-full lg:w-1/5">
        <div class="w-full lg:w-1/5 lg:fixed border-l border-gray-200 lg:h-screen">
            <div class="p-4">
                @yield('rightside')
            </div>
            <div class="  border-gray-200 p-4 text-gray-600 text-sm -mt-4">
                <div class="mb-1">
                      <livewire:data.follow/>
                </div>
                &copy; {{ config('app.name') }} since 2019 -{{ date('Y') }}
            </div>
         </div>
       </div>
    </div>





@endsection
