
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="mb-4">
                        <x-label for="name" :value="__('Product Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                    </div>

                    <div class="mb-4">
                        <x-label for="description" :value="__('Product Description')" />
                        <x-textarea id="description" class="block mt-1 w-full" name="description" required></x-textarea>
                    </div>

                    <div class="mb-4">
                        <x-label for="price" :value="__('Product Price')" />
                        <x-input id="price" class="block mt-1 w-full" type="number" name="price" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
