<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 
                <x-products-table>
            <!-- Pricing Card -->
            @forelse ($products->slice(0,3) as $card)
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">{{ $card->title }}</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400 line-clamp-2">{{ $card->desc }}.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">Rp.{{ $card->price }}</span>
                </div>
                <img src="storage\{{ $card->image }}" alt="" class="w-full h-64 object-cover mb-6">
                <a href="{{ route('products.show', $card->id) }}" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
            </div>
            @empty
                <div>
                    None found
                </div>
            @endforelse
                </x-products-table>
            </div>
        </div>
    </div>
</x-app-layout>
