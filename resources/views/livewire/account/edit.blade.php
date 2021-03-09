
<div class="p-6">

    <div class=" rounded border border-gray-200  bg-gray-50">
        <h1 class="capitalize text-lg text-gray-700 px-5 py-2 bg-gray-100 mb-5">Update Your Profiles</h1>
        <form wire:submit.prevent="update()"  >
            <div class="px-5 py-2 ">
                <div class="mb-5">
                    <div class="flex items-center">
                        @if ($picture)
                        <img src="{{ $picture->temporaryUrl() }} " class="w-16 h-16 rounded-full mr-3 object-cover object-center" alt="">
                        @else
                            <img src="{{ auth()->user()->gravatar() }} " class="w-16 h-16 rounded-full mr-3 object-cover object-center" alt="">
                        @endif
                        <label for="picture" class="bg-gray-200 border rounded-lg border-gray-100 px-2 py-1 hover:shadow">
                            Upload Image
                            <input type="file"  wire:model="picture" id="picture" class="sr-only">
                        </label>

                    </div>
                    @error('picture')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="block font-medium mb-1">username</label>
                    <input type="text"   wire:model="username" id="username" class="w-full form-input">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="name" class="block font-medium mb-1">name</label>
                    <input type="text"  wire:model="name" name="name" id="name" class="w-full form-input">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="block font-medium mb-1">description</label>
                    <input type="text"  wire:model="description" name="description" id="description" class="w-full form-input">

                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-auto px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                           Update
                        </button>
                    </span>
                </div>
            </div>

        </form>
    </div>

</div>



