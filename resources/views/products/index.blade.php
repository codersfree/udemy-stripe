<x-app-layout>

    <x-container class="py-12">
        

        <div class="grid grid-cols-3 gap-6">

            @foreach ($products as $product)
                <div class="bg-white rounded shadow-lg">
                    {{-- <img class="h-56 w-full object-cover" src="{{$product->image}}" alt=""> --}}
                    <div class="h-56 bg-cover bg-center p-4" style="background-image: url('{{$product->image}}')">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                            {{$product->price}} USD
                        </span>
                    </div>

                    <div class="px-6 py-4">
                        <h1 class="text-gray-900 font-semibold text-xl uppercase">
                            {{$product->title}}
                        </h1>
                        <p class="text-gray-500 mt-2">
                            {{Str::limit($product->description, 100)}}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

    </x-container>

</x-app-layout>