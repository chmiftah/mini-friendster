<div class="border border-gray-100 rounded-lg overflow-hidden mb-4 ">
    <div class="bg-white w-full shadow rounded-lg p-5">
        <form wire:submit.prevent="store">
        <textarea wire:model="body"  class="bg-gray-200 w-full rounded-lg shadow border p-2" rows="5" placeholder="Speak your mind"></textarea>

        <div class="w-full flex flex-row flex-wrap mt-3">
          <div class="w-1/3">

          </div>
          <div class="w-2/3">
            <button type="submit" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg">Submit</button>
          </div>
        </div>
        </form>
      </div>
    {{-- <div class="px-4 py-4 bg-blue-200 text-blue-500 font-semibold">
        Your Status
    </div>
    <form wire:submit.prevent="store">
        <div class="p-4 bg-blue-50">

                <textarea name="" wire:model="body" class=" bg-blue-50 form-textarea w-full resize-none border-0 focus:shadow-none p-0 focus:ring-0 " placeholder=" What's in your mind.?"></textarea>
            @error('body')
            <div class="text-sm text-red-500 mt-2">{{ $message }}</div>
            @enderror
        </div>
                <div class="flex justify-end px-4 py-2 bg-blue-100">
                    <x-button.primary>Post</x-button.primary>
                </div>


    </form> --}}

</div>
